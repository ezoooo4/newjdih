<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\KategoriDokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    public function index()
    {
        return view('admin.dokumen.index', ['dokumen' => Dokumen::all()]);
    }

    public function create()
    {
        $data['list_kategori'] =KategoriDokumen::all();

        
        return view('admin.dokumen.create', $data);
    }

    public function store(Request $request)
{
    $request->validate([
        'no_dokumen' => 'required|string',
        'nama_dokumen' => 'required|string',
        'asal_dokumen' => 'required|string',
        'tgl_penetapan' => 'required|date',
        'tgl_terbit' => 'required|date',
        'file_dokumen' => 'nullable|file|mimes:pdf|max:10240',
        'link_dokumen' => 'nullable|url',
        'deskripsi' => 'nullable|string',
        'kategori_id' => 'required|exists:kategori_dokumen,id',
        'status_dokumen' => 'required|in:Masih Berlaku,Tidak Berlaku',
    ]);

    if (!$request->hasFile('file_dokumen') && !$request->input('link_dokumen')) {
        return back()->withErrors(['file_dokumen' => 'File dokumen atau link dokumen harus diisi.'])->withInput();
    }

    $filePath = null;

    if ($request->hasFile('file_dokumen')) {
        $file = $request->file('file_dokumen');
        $filePath = $file->store('dokumen', 'public');
    }

    Dokumen::create([
        'no_dokumen' => $request->input('no_dokumen'),
        'nama_dokumen' => $request->input('nama_dokumen'),
        'asal_dokumen' => $request->input('asal_dokumen'),
        'tgl_penetapan' => $request->input('tgl_penetapan'),
        'tgl_terbit' => $request->input('tgl_terbit'),
        'file_dokumen' => $request->file('file_dokumen'),
        'link_dokumen' => $request->input('link_dokumen'),
        'deskripsi' => $request->input('deskripsi'),
        'kategori_id' => $request->input('kategori_id'),
        'status_dokumen' => $request->input('status_dokumen'),
    ]);

    return redirect('admin/dokumen')->with('success', 'Dokumen berhasil ditambahkan!');
}


    public function edit($id)
    {
        $dokumen = Dokumen::findOrFail($id);
         $list_kategori = KategoriDokumen::all();
         return view('admin.dokumen.edit', compact('dokumen', 'list_kategori'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'no_dokumen' => 'required|string|max:50|unique:dokumen,no_dokumen,' . $id,
        'nama_dokumen' => 'required|string|max:255',
        'asal_dokumen' => 'required|string|max:255',
        'tgl_penetapan' => 'required|date',
        'tgl_terbit' => 'required|date',
        'file_dokumen' => 'nullable|file|mimes:pdf|max:10240',
        'link_dokumen' => 'nullable|url',
        'deskripsi' => 'nullable|string',
        'kategori_id' => 'required|exists:kategori_dokumen,id',
        'status_dokumen' => 'required|in:Masih Berlaku,Tidak Berlaku',
    ]);

    if (!$request->hasFile('file_dokumen') && !$request->input('link_dokumen')) {
        return back()->withErrors(['file_dokumen' => 'File dokumen atau link dokumen harus diisi.'])->withInput();
    }

    $dokumen = Dokumen::findOrFail($id);

    $filePath = $dokumen->file_dokumen;

    if ($request->hasFile('file_dokumen')) {
        if ($filePath) {
            Storage::disk('public')->delete($filePath);
        }
        $filePath = $request->file('file_dokumen')->store('dokumen', 'public');
    }

    $dokumen->update([
        'no_dokumen' => $request->input('no_dokumen'),
        'nama_dokumen' => $request->input('nama_dokumen'),
        'asal_dokumen' => $request->input('asal_dokumen'),
        'tgl_penetapan' => $request->input('tgl_penetapan'),
        'tgl_terbit' => $request->input('tgl_terbit'),
        'file_dokumen' => $request->file('file_dokumen'),
        'link_dokumen' => $request->input('link_dokumen'),
        'deskripsi' => $request->input('deskripsi'),
        'kategori_id' => $request->input('kategori_id'),
        'status_dokumen' => $request->input('status_dokumen'),
    ]);

    return redirect('admin/dokumen')->with('success', 'Dokumen berhasil diperbarui!');
}


    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        
        // Hapus file terkait jika ada
        if ($dokumen->file_dokumen) {
            Storage::disk('public')->delete($dokumen->file_dokumen);
        }
        
        $dokumen->delete();

        return redirect('admin/dokumen')->with('success', 'Dokumen berhasil dihapus!');
    }

    public function show($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('admin.dokumen.show', compact('dokumen'));
    }
}
