<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('site.berandajdih');
    }

    public function dokumen()
    {
        $data['dokumen'] = Dokumen::all();


        return view('site.dokumen', $data);
    }

    public function dokumenShow($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('site.dokumen-show', compact('dokumen'));
    }

    public function berita()
    {
        $data['berita'] = Berita::all();

        return view('site.berita', $data);
    }

    public function beritaShow($id)
    {
        $berita = Berita::findOrFail($id);
        return view('site.berita-show', compact('berita'));
    }

    public function agenda()
    {
        $data['agenda'] = Agenda::all();

        return view('site.agenda', $data);
    }

    public function dokumentasi()
    {
        $data['dokumentasi'] = Dokumentasi::all();

        return view('site.dokumentasi', $data);
    }
    public function contact()
    {

        return view('site.contact');
    }
    public function sejarah()
    {

        return view('site.sejarah');
    }

    public function maknalogo()
    {

        return view('site.maknalogo');
    }
    public function kontak()
    {
        return view('site.contact');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'email'    => 'required|email',
            'no_hp'    => 'required|string|max:20',
            'instansi' => 'nullable|string|max:255',
            'pesan'    => 'required|string',
        ]);

        // Kirim email
        Mail::raw(
            "Pesan dari: {$request->nama}\n\n" .
                "Email: {$request->email}\n" .
                "No HP: {$request->no_hp}\n" .
                "Instansi: {$request->instansi}\n\n" .
                "Pesan:\n{$request->pesan}",
            function ($message) use ($request) {
                $message->to('setda@gmail.com')
                    ->subject('Pesan dari Form Kontak JDIH Ketapang');
            }
        );

        return back()->with('success', 'Pesan Anda berhasil dikirim.');
    }
}
