<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        return view('admin.berita.index', ['berita' => Berita::all()]);
    }

    public function create()
    {
        return view('admin.berita.create');
    }

public function store(Request $request)
{
    $request->validate([
        'judul_berita' => 'required|string|max:255',
        'isi_berita' => 'required',
        'tgl_berita' => 'required|date',
        'foto_berita' => 'nullable|file|mimes:jpg,jpeg,png',
        'pembuat_berita' => 'required|string|max:255',
    ]);

    $filePath = $request->file('foto_berita') ? $request->file('foto_berita')->store('berita', 'public') : null;

    Berita::create([
        'judul_berita' => $request->input('judul_berita'),
        'isi_berita' => $request->input('isi_berita'),
        'tgl_berita' => $request->input('tgl_berita'),
        'foto_berita' => $filePath, // FIXED
        'pembuat_berita' => $request->input('pembuat_berita'),
    ]);

    return redirect('admin/berita')->with('success', 'Data berhasil disimpan!');
}


    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

public function update(Request $request, $id)
{
    $request->validate([
        'judul_berita' => 'required|string|max:255',
        'isi_berita' => 'required',
        'tgl_berita' => 'required|date',
        'foto_berita' => 'nullable|file|mimes:jpg,jpeg,png',
        'pembuat_berita' => 'required|string|max:255',
    ]);

    $berita = Berita::findOrFail($id);

    if ($request->hasFile('foto_berita')) {
        if ($berita->foto_berita) {
            Storage::disk('public')->delete($berita->foto_berita);
        }

        $berita->foto_berita = $request->file('foto_berita')->store('berita', 'public');
    }

    $berita->update([
        'judul_berita' => $request->input('judul_berita'),
        'isi_berita' => $request->input('isi_berita'),
        'tgl_berita' => $request->input('tgl_berita'),
        'foto_berita' => $berita->foto_berita,
        'pembuat_berita' => $request->input('pembuat_berita'),
    ]);

    return redirect('admin/berita')->with('success', 'Data berhasil diupdate!');
}

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Hapus gambar terkait jika ada
        if ($berita->foto_berita) {
            Storage::disk('public')->delete($berita->foto_berita);
        }
        
        $berita->delete();

        return redirect('admin/berita')->with('success', 'Data berhasil dihapus!');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.show', compact('berita'));
    }
}
