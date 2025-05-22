<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    public function index()
    {
        return view('admin.dokumentasi.index', ['dokumentasi' => Dokumentasi::all()]);
    }

    public function create()
    {
        return view('admin.dokumentasi.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tgl_kegiatan' => 'required|date',
            'kategori' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status_dokumentasi' => 'required|string|in:Publik,Privat',
            'url' => 'nullable|url',
        ]);

        // Simpan file jika ada
        $filePath = null;
        if ($request->hasFile('foto')) {
            $filePath = $request->file('foto')->store('dokumentasi', 'public');
        }

        Dokumentasi::create([
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tgl_kegiatan' => $request->input('tgl_kegiatan'),
            'kategori' => $request->input('kategori'),
            'foto' => $filePath,
            'status_dokumentasi' => $request->input('status_dokumentasi'),
            'url' => $request->input('url'),
        ]);

        return redirect('admin/dokumentasi')->with('success', 'Dokumentasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        return view('admin.dokumentasi.edit', compact('dokumentasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tgl_kegiatan' => 'required|date',
            'kategori' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status_dokumentasi' => 'required|string|in:Publik,Privat',
            'url' => 'nullable|url',
        ]);

        $dokumentasi = Dokumentasi::findOrFail($id);
        $filePath = $dokumentasi->foto;

        if ($request->hasFile('foto')) {
            if ($dokumentasi->foto) {
                Storage::disk('public')->delete($dokumentasi->foto);
            }
            $filePath = $request->file('foto')->store('dokumentasi', 'public');
        }

        $dokumentasi->update([
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tgl_kegiatan' => $request->input('tgl_kegiatan'),
            'kategori' => $request->input('kategori'),
            'foto' => $filePath,
            'status_dokumentasi' => $request->input('status_dokumentasi'),
            'url' => $request->input('url'),
        ]);

        return redirect('admin/dokumentasi')->with('success', 'Dokumentasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);

        if ($dokumentasi->foto) {
            Storage::disk('public')->delete($dokumentasi->foto);
        }

        $dokumentasi->delete();

        return redirect('admin/dokumentasi')->with('success', 'Dokumentasi berhasil dihapus!');
    }

    public function show($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        return view('admin.dokumentasi.show', compact('dokumentasi'));
    }
}
