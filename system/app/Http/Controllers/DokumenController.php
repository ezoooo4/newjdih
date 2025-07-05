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
        $data['list_kategori'] = KategoriDokumen::all();
        return view('admin.dokumen.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_dokumen'     => 'required|string|max:100',
            'nama_dokumen'   => 'required|string|max:255',
            'asal_dokumen'   => 'required|string|max:255',
            'tgl_penetapan'  => 'required|date',
            'tempat_terbit'  => 'required|string|max:255', // hanya ini yang diubah
            'file_dokumen'   => 'nullable|file|mimes:pdf|max:10240',
            'link_dokumen'   => 'nullable|url|max:500',
            'deskripsi'      => 'nullable|string|max:500',
            'kategori_id'    => 'required|exists:kategori_dokumen,id',
            'status'         => 'required|in:masih berlaku,tidak berlaku',
            'tahun'          => 'nullable|digits:4|integer',
            'judul'          => 'required|string|max:255',
        ]);

        if (!$request->hasFile('file_dokumen') && !$request->input('link_dokumen')) {
            return back()->withErrors([
                'file_dokumen' => 'File dokumen atau link dokumen harus diisi.'
            ])->withInput();
        }

        $filePath = null;
        if ($request->hasFile('file_dokumen')) {
            $filePath = $request->file('file_dokumen')->store('dokumen', 'public');
        }

        Dokumen::create([
            'no_dokumen'    => $request->no_dokumen,
            'nama_dokumen'  => $request->nama_dokumen,
            'asal_dokumen'  => $request->asal_dokumen,
            'tgl_penetapan' => $request->tgl_penetapan,
            'tempat_terbit' => $request->tempat_terbit, 
            'file_dokumen'  => $filePath,
            'link_dokumen'  => $request->link_dokumen,
            'deskripsi'     => $request->deskripsi,
            'kategori_id'   => $request->kategori_id,
            'status'        => $request->status,
            'tahun'         => $request->tahun,
            'judul'         => $request->judul,
        ]);

        return redirect('admin/dokumen')->with('success', 'Dokumen berhasil disimpan!');
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
            'no_dokumen'     => 'required|string|max:100|',
            'nama_dokumen'   => 'required|string|max:255',
            'asal_dokumen'   => 'required|string|max:255',
            'tgl_penetapan'  => 'required|date',
            'tempat_terbit'  => 'required|string|max:255',
            'file_dokumen'   => 'nullable|file|mimes:pdf|max:10240',
            'link_dokumen'   => 'nullable|url|max:500',
            'deskripsi'      => 'nullable|string|max:500',
            'kategori_id'    => 'required|exists:kategori_dokumen,id',
            'status'         => 'required|in:masih berlaku,tidak berlaku',
            'tahun'          => 'nullable|digits:4|integer',
            'judul'          => 'required|string|max:255',
        ]);

        if (!$request->hasFile('file_dokumen') && !$request->input('link_dokumen')) {
            return back()->withErrors([
                'file_dokumen' => 'File dokumen atau link dokumen harus diisi.'
            ])->withInput();
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
            'no_dokumen'    => $request->no_dokumen,
            'nama_dokumen'  => $request->nama_dokumen,
            'asal_dokumen'  => $request->asal_dokumen,
            'tgl_penetapan' => $request->tgl_penetapan,
            'tempat_terbit' => $request->tempat_terbit, 
            'file_dokumen'  => $filePath,
            'link_dokumen'  => $request->link_dokumen,
            'deskripsi'     => $request->deskripsi,
            'kategori_id'   => $request->kategori_id,
            'status'        => $request->status,
            'tahun'         => $request->tahun,
            'judul'         => $request->judul,
        ]);

        return redirect('admin/dokumen')->with('success', 'Dokumen berhasil diupdate!');
    }

    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);

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
