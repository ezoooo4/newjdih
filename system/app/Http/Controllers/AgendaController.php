<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        return view('admin.agenda.index', ['agenda' => Agenda::all()]);
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'pembuat_agenda' => 'required|string|max:255',
            'judul_agenda' => 'required|string|max:255',
            'deskripsi_agenda' => 'required|string',
            'isi_agenda' => 'required|string',
            'tempat_agenda' => 'required|string|max:255',
            'tgl_agenda' => 'required|date',
            'status_agenda' => 'required|string|in:Aktif,Nonaktif',
        ]);

        // Simpan data ke database
        Agenda::create([
            'pembuat_agenda' => $request->input('pembuat_agenda'),
            'judul_agenda' => $request->input('judul_agenda'),
            'deskripsi_agenda' => $request->input('deskripsi_agenda'),
            'isi_agenda' => $request->input('isi_agenda'),
            'tempat_agenda' => $request->input('tempat_agenda'),
            'tgl_agenda' => $request->input('tgl_agenda'),
            'status_agenda' => $request->input('status_agenda'),
        ]);

        return redirect('admin/agenda')->with('success', 'Agenda berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'pembuat_agenda' => 'required|string|max:255',
            'judul_agenda' => 'required|string|max:255',
            'deskripsi_agenda' => 'required|string',
            'isi_agenda' => 'required|string',
            'tempat_agenda' => 'required|string|max:255',
            'tgl_agenda' => 'required|date',
            'status_agenda' => 'required|string|in:Aktif,Nonaktif',
        ]);

        $agenda = Agenda::findOrFail($id);

        // Update data
        $agenda->update([
            'pembuat_agenda' => $request->input('pembuat_agenda'),
            'judul_agenda' => $request->input('judul_agenda'),
            'deskripsi_agenda' => $request->input('deskripsi_agenda'),
            'isi_agenda' => $request->input('isi_agenda'),
            'tempat_agenda' => $request->input('tempat_agenda'),
            'tgl_agenda' => $request->input('tgl_agenda'),
            'status_agenda' => $request->input('status_agenda'),
        ]);

        return redirect('admin/agenda')->with('success', 'Agenda berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return redirect('admin/agenda')->with('success', 'Agenda berhasil dihapus!');
    }

    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('admin.agenda.show', compact('agenda'));
    }
}
