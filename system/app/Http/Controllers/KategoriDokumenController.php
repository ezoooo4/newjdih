<?php

namespace App\Http\Controllers;

use App\Models\KategoriDokumen;
use Illuminate\Http\Request;

class KategoriDokumenController extends Controller
{
    public function index(){
        return view('admin.kategori_dokumen.index', ['kategori_dokumen' => KategoriDokumen::all()]);
    }

    public function create(){
        return view('admin.kategori_dokumen.create');
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:500',
        ]);

        // Simpan data ke database
        KategoriDokumen::create([
            'nama_kategori' => $request->input('nama_kategori'),
            'deskripsi' => $request->input('deskripsi', ''),
        ]);

        // Redirect dengan pesan sukses
        return redirect('admin/kategori_dokumen')
                         ->with('success', 'Kategori Dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kategori = KategoriDokumen::findOrFail($id);
        return view('admin.kategori_dokumen.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:500',
        ]);

        // Update data di database
        $kategori = KategoriDokumen::findOrFail($id);
        $kategori->update([
            'nama_kategori' => $request->input('nama_kategori'),
            'deskripsi' => $request->input('deskripsi', ''),
        ]);

        // Redirect dengan pesan sukses
        return redirect('admin/kategori_dokumen')
                         ->with('success', 'Kategori Dokumen berhasil diperbarui!');
    }
    public function destroy($kategori)
    {
        $kategori = KategoriDokumen::findOrFail($kategori);
        $kategori->delete();

        return redirect('admin/kategori_dokumen')
                         ->with('success', 'Kategori Dokumen berhasil dihapus!');
    }
    public function show($id)
    {
    $kategori = KategoriDokumen::findOrFail($id);
    return view('admin.kategori_dokumen.show', compact('kategori'));
    }

       
 }
    

