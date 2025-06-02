<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Kategori;
use Illuminate\Http\Request;

class CampaignController extends Controller
{



    public function index() {

    }
    
    public function create()
    {
        $kategori = Kategori::all();
        return view('user.campaign.tambah-campaign', compact('kategori'));
    }
    public function store(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'judul' => 'required|string|max:60',
            'id_kategori' => 'required|exists:kategori,id',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required|string|min:300|max:5000',
            'nominal_target' => 'required|integer|min:1',
            'mulai' => 'required|date',
            'berakhir' => 'required|date|after_or_equal:mulai',
        ]);

        // Upload gambar
        $foto = $request->file('foto');
        $namaFile = time() . '_' . $foto->getClientOriginalName();
        $tujuanPath = public_path('campaign_images');

        // Buat folder jika belum ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0755, true);
        }

        // Pindahkan file
        $foto->move($tujuanPath, $namaFile);

        // Path relatif (misalnya untuk simpan di database)
        $path = 'campaign_images/' . $namaFile;


        // Simpan ke database
        Campaign::create([
            'judul' => $validated['judul'],
            'id_kategori' => $validated['id_kategori'],
            'foto' => $path,
            'deskripsi' => $validated['deskripsi'],
            'nominal_target' => $validated['nominal_target'],
            'mulai' => $validated['mulai'],
            'berakhir' => $validated['berakhir'],
            'id_user' => session('user_id'),
        ]);

        return redirect()->back()->with('success', 'Campaign berhasil dibuat!');
    }
}
