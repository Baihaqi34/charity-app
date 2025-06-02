<?php

namespace App\Http\Controllers;

use App\Models\RekeningBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rekening = RekeningBank::where('id_user', Auth::id())->get();
        // dd($user);
        return view('user.edit-profile.index', compact('user', 'rekening'));
    }

    public function createRekening(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_bank'   => 'required|string|max:100',
            'no_rekening' => 'required|string|max:50',
            'atas_nama' => 'required|string|max:50',
        ]);

        RekeningBank::create([
            'id_user'     => Auth::id(),
            'nama_bank'   => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
            'atas_nama' => $request->atas_nama,
        ]);

        return redirect()->back()->with('success', 'Rekening berhasil ditambahkan.');
    }

    public function updateRekening(Request $request, $id)
    {
        // dd($request->all());

        $rekening = RekeningBank::where('id', $id)->where('id_user', Auth::id())->firstOrFail();

        $request->validate([
            'nama_bank'   => 'required|string|max:100',
            'no_rekening' => 'required|string|max:50',
            'atas_nama' => 'required|string|max:50',
        ]);


        $rekening->update([
            'nama_bank'   => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
            'atas_nama' => $request->atas_nama,

        ]);

        return redirect()->back()->with('success', 'Rekening berhasil diperbarui.');
    }
    public function deleteRekening($id)
    {
        $rekening = RekeningBank::where('id', $id)->where('id_user', Auth::id())->firstOrFail();
        // dd($rekening);
        $rekening->delete();

        return redirect()->back()->with('success', 'Rekening berhasil dihapus.');
    }




    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'email'     => 'required|email|max:255|unique:users,email,' . $user->id,
            'password'  => 'nullable|string|min:6',
            'no_telp'   => 'nullable|string|max:20',
            'bio'       => 'nullable|string',
            'alamat'    => 'nullable|string',
            'instagram' => 'nullable|string|max:100',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
        ]);

        // Update field dasar
        $user->name       = $validated['name'];
        $user->nama_lengkap       = $validated['nama_lengkap'];
        $user->email      = $validated['email'];
        $user->no_telp    = $validated['no_telp'] ?? null;
        $user->bio        = $validated['bio'] ?? null;
        $user->alamat     = $validated['alamat'] ?? null;
        $user->instagram  = $validated['instagram'] ?? null;

        // Jika ada password baru
        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($user->gambar && file_exists(public_path('uploads/profile/' . $user->gambar))) {
                unlink(public_path('uploads/profile/' . $user->gambar));
            }

            // Ambil file dan buat nama unik
            $file = $request->file('gambar');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            // Simpan di folder public//profile
            $file->move(public_path('uploads/profile'), $filename);

            // Simpan nama file ke database
            $user->gambar = $filename;
        }


        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }


    // public function updateRekening(Request $request)
    // {
    //     dd('masuk');
    // }
}
