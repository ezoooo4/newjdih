<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DokumentasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokumentasi')->insert([
            [
                'nama_kegiatan'        => 'Sosialisasi Produk Hukum',
                'tgl_kegiatan'         => Carbon::parse('2025-06-10'),
                'foto'                 => 'sosialisasi1.jpg',
                'status_dokumentasi'   => 'Publik',
                'url'                  => 'https://jdih.katingan.go.id/dokumentasi/sosialisasi1',
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Rapat Koordinasi JDIH',
                'tgl_kegiatan'         => Carbon::parse('2025-06-12'),
                'foto'                 => 'rakor-jdih.jpg',
                'status_dokumentasi'   => 'Privat',
                'url'                  => null,
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Pelatihan Digitalisasi Dokumen',
                'tgl_kegiatan'         => Carbon::parse('2025-06-14'),
                'foto'                 => 'pelatihan.jpg',
                'status_dokumentasi'   => 'Publik',
                'url'                  => 'https://jdih.katingan.go.id/dokumentasi/pelatihan',
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Bimbingan Teknis Admin JDIH',
                'tgl_kegiatan'         => Carbon::parse('2025-06-15'),
                'foto'                 => null,
                'status_dokumentasi'   => 'Privat',
                'url'                  => null,
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Workshop Keterbukaan Informasi',
                'tgl_kegiatan'         => Carbon::parse('2025-06-17'),
                'foto'                 => 'workshop-kip.jpg',
                'status_dokumentasi'   => 'Publik',
                'url'                  => 'https://jdih.katingan.go.id/dokumentasi/workshop-kip',
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Evaluasi Program Dokumentasi Hukum',
                'tgl_kegiatan'         => Carbon::parse('2025-06-18'),
                'foto'                 => 'evaluasi-program.jpg',
                'status_dokumentasi'   => 'Privat',
                'url'                  => null,
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Pameran Layanan Hukum Terpadu',
                'tgl_kegiatan'         => Carbon::parse('2025-06-19'),
                'foto'                 => 'pameran-layanan.jpg',
                'status_dokumentasi'   => 'Publik',
                'url'                  => 'https://jdih.katingan.go.id/dokumentasi/pameran-layanan',
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Peluncuran Website JDIH Versi Baru',
                'tgl_kegiatan'         => Carbon::parse('2025-06-20'),
                'foto'                 => 'launching-website.jpg',
                'status_dokumentasi'   => 'Publik',
                'url'                  => 'https://jdih.katingan.go.id/dokumentasi/launching-website',
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Monitoring dan Evaluasi Lapangan',
                'tgl_kegiatan'         => Carbon::parse('2025-06-21'),
                'foto'                 => 'monev-lapangan.jpg',
                'status_dokumentasi'   => 'Privat',
                'url'                  => null,
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
            [
                'nama_kegiatan'        => 'Penyusunan Laporan Tahunan JDIH',
                'tgl_kegiatan'         => Carbon::parse('2025-06-22'),
                'foto'                 => 'laporan-tahunan.jpg',
                'status_dokumentasi'   => 'Publik',
                'url'                  => 'https://jdih.katingan.go.id/dokumentasi/laporan-tahunan',
                'created_at'           => now(),
                'updated_at'           => now(),
            ],
        ]);
    }
}
