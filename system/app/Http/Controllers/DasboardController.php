<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\Berita;
use App\Models\Dokumentasi;
use App\Models\Agenda;
use App\Models\KategoriDokumen;

class DasboardController extends Controller
{
    public function index()
    {
        return view('admin.dasboard', [
            'jumlah_dokumen' => Dokumen::count(),
            'jumlah_berita' => Berita::count(),
            'jumlah_dokumentasi' => Dokumentasi::count(),
            'jumlah_agenda' => Agenda::count(),
            'jumlah_kategori_dokumen' => KategoriDokumen::count(),
        ]);
    }
}
