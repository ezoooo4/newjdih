<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class SiteController extends Controller
{
    public function beranda(){
        return view('site.beranda');
    }

    public function dokumen(){
        $data['dokumen'] = Dokumen::all();


        return view('site.dokumen', $data);
    }

    public function dokumenShow($id){
         $dokumen = Dokumen::findOrFail($id);
    return view('site.dokumen-show', compact('dokumen'));
    }

    public function berita(){
        $data['berita'] = Berita::all();

        Return view ('site.berita', $data);
    }

    public function agenda(){
        $data['agenda'] = Agenda::all();

        return view('site.agenda', $data);
    }

    public function dokumentasi(){
        $data['dokumentasi'] = Dokumentasi::all();

        return view('site.dokumentasi', $data);
    }
}
