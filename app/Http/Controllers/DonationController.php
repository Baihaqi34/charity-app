<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{

    public function donate(Request $request)
    {
        $snapToken = Snap::getSnapToken([
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => $request->amount,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name ?? 'Donatur Anonim',
                'email' => auth()->user()->email ?? 'anonim@example.com',
            ],
        ]);

        return view('user.donation.snap', compact('snapToken'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'amount' => 'required|numeric|min:10000',
            'paymentMethod' => 'required|string',
        ]);

        // Buat order_id unik
        $orderId = 'DON-' . uniqid();

        // Data transaksi untuk Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int)$request->amount,
            ],
            'credit_card' => [
                'secure' => true,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name ?? 'Anonim',
                'email' => auth()->user()->email ?? 'anonim@donasi.com',
            ],
        ];

        // Snap token
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return response()->json(['token' => $snapToken]);
    }

    public function callback(Request $request)
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        try {
            $data = $request->all();
            Log::info('MIDTRANS CALLBACK RAW:', $data);

            $orderId = $data['order_id'] ?? null;
            $transactionStatus = $data['transaction_status'] ?? null;

            if (!$orderId) {
                return response()->json(['message' => 'Order ID kosong'], 400);
            }

            $donation = Donation::where('order_id', $orderId)->first();
            if (!$donation) {
                Log::warning("Donasi tidak ditemukan untuk order_id: $orderId");
                return response()->json(['message' => 'Donasi tidak ditemukan'], 404);
            }

            // Ubah status sesuai transaksi
            switch ($transactionStatus) {
                case 'capture':
                case 'settlement':
                    $donation->status = 'paid';
                    break;
                case 'pending':
                    $donation->status = 'pending';
                    break;
                case 'deny':
                case 'expire':
                case 'cancel':
                    $donation->status = 'failed';
                    break;
                default:
                    Log::warning("Status tidak dikenali: $transactionStatus");
                    break;
            }

            $donation->save();

            return response()->json(['message' => 'Callback diproses']);
        } catch (\Exception $e) {
            Log::error('MIDTRANS CALLBACK ERROR: ' . $e->getMessage());
            return response()->json(['error' => 'Midtrans Callback Failed'], 500);
        }
    }
}
