<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        DB::table('berita')->insert([
            [
                'judul_berita'     => 'Peluncuran Website JDIH Kabupaten Katingan',
                'isi_berita'       => 'Website JDIH resmi diluncurkan sebagai pusat dokumentasi hukum yang mudah diakses oleh masyarakat.',
                'tgl_berita'       => '2024-06-01',
                'foto_berita'      => 'berita/peluncuran-jdih.jpg',
                'pembuat_berita'   => 'Admin JDIH',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'judul_berita'     => 'Sosialisasi Peraturan Daerah Baru Tahun 2024',
                'isi_berita'       => 'Pemerintah daerah melakukan sosialisasi perda baru kepada masyarakat dan aparat desa.',
                'tgl_berita'       => '2024-05-15',
                'foto_berita'      => 'berita/sosialisasi-perda.jpg',
                'pembuat_berita'   => 'Bagian Hukum',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'judul_berita'     => 'Bupati Katingan Tandatangani Perbup Lingkungan',
                'isi_berita'       => 'Bupati menandatangani Peraturan Bupati tentang Pengelolaan Sampah Rumah Tangga.',
                'tgl_berita'       => '2024-04-20',
                'foto_berita'      => 'berita/perbup-lingkungan.jpg',
                'pembuat_berita'   => 'Dinas LH',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'judul_berita'     => 'Rapat Koordinasi Pengelolaan JDIH se-Kalimantan Tengah',
                'isi_berita'       => 'Rakor bertujuan menyamakan persepsi dan evaluasi program JDIH antar kabupaten.',
                'tgl_berita'       => '2024-03-10',
                'foto_berita'      => 'berita/rakor-jdih.jpg',
                'pembuat_berita'   => 'Sekretariat Daerah',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'judul_berita'     => 'Kunjungan Kerja Kemenkumham ke JDIH Katingan',
                'isi_berita'       => 'Kemenkumham melakukan monitoring dan memberikan apresiasi atas pengelolaan JDIH.',
                'tgl_berita'       => '2024-02-22',
                'foto_berita'      => 'berita/kemenkumham-jdih.jpg',
                'pembuat_berita'   => 'Humas Pemkab',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
        ]);
    }
}
