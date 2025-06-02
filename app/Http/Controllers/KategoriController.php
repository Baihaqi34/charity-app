<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'icon' => 'required|mimes:jpg,png',
        ]);

        $icon = $request->file('icon');
        $iconName = uniqid() . '.' . $icon->getClientOriginalExtension();
        $icon->move(public_path('kategori-icons'), $iconName);

        // dd($icon, $iconName);
        Kategori::create([
            'nama' => $request->nama,
            'icon' => 'kategori-icons/' . $iconName,
        ]);

        return back()->with('success', 'Kategori ditambahkan');
    }

    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama' => 'required',
            'icon' => 'nullable|image|mimes:jpg,png|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            // Hapus file lama
            if ($kategori->icon && file_exists(public_path($kategori->icon))) {
                unlink(public_path($kategori->icon));
            }

            $icon = $request->file('icon');
            $iconName = uniqid() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('kategori-icons'), $iconName);
            $kategori->icon = 'kategori-icons/' . $iconName;
        }

        $kategori->nama = $request->nama;
        $kategori->save();

        return back()->with('success', 'Kategori diperbarui');
    }

    public function destroy(Kategori $kategori)
    {
        if ($kategori->icon && file_exists(public_path($kategori->icon))) {
            unlink(public_path($kategori->icon));
        }

        $kategori->delete();
        return back()->with('success', 'Kategori dihapus');
    }
    }
