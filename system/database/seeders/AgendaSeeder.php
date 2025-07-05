<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agenda')->insert([
            [
                'pembuat_agenda'    => 'Admin JDIH',
                'judul_agenda'      => 'Seminar Hukum Nasional',
                'deskripsi_agenda'  => 'Pembahasan isu-isu hukum terkini',
                'isi_agenda'        => 'Acara ini menghadirkan narasumber dari kalangan akademisi dan praktisi hukum.',
                'tempat_agenda'     => 'Gedung Serbaguna Katingan',
                'tgl_agenda'        => Carbon::parse('2025-06-20'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Bagian Hukum',
                'judul_agenda'      => 'Pelatihan Pengelolaan Website JDIH',
                'deskripsi_agenda'  => 'Pelatihan untuk admin dan pengelola JDIH',
                'isi_agenda'        => 'Materi mencakup pengelolaan konten, berita, dan dokumen hukum.',
                'tempat_agenda'     => 'Ruang Diklat Setda Katingan',
                'tgl_agenda'        => Carbon::parse('2025-07-05'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Sekretariat Daerah',
                'judul_agenda'      => 'Rapat Koordinasi Produk Hukum',
                'deskripsi_agenda'  => 'Koordinasi antar perangkat daerah',
                'isi_agenda'        => 'Membahas proses harmonisasi rancangan peraturan daerah.',
                'tempat_agenda'     => 'Aula Sekretariat Daerah',
                'tgl_agenda'        => Carbon::parse('2025-07-12'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Dinas Kominfo',
                'judul_agenda'      => 'Sosialisasi Keterbukaan Informasi Publik',
                'deskripsi_agenda'  => 'Edukasi tentang hak akses informasi publik',
                'isi_agenda'        => 'Meningkatkan pemahaman masyarakat terhadap UU KIP.',
                'tempat_agenda'     => 'Kantor Dinas Kominfo Katingan',
                'tgl_agenda'        => Carbon::parse('2025-07-20'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Tim JDIH',
                'judul_agenda'      => 'Workshop Digitalisasi Dokumen Hukum',
                'deskripsi_agenda'  => 'Digitalisasi arsip hukum daerah',
                'isi_agenda'        => 'Pelatihan penggunaan aplikasi JDIH berbasis Laravel dan database dokumen.',
                'tempat_agenda'     => 'Lab IT Kabupaten Katingan',
                'tgl_agenda'        => Carbon::parse('2025-07-25'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Bagian Hukum',
                'judul_agenda'      => 'Focus Group Discussion Revisi Perda',
                'deskripsi_agenda'  => 'Diskusi kelompok terbatas terkait perubahan peraturan daerah',
                'isi_agenda'        => 'Kegiatan ini dihadiri oleh perwakilan OPD dan ahli hukum untuk membahas draf revisi Perda.',
                'tempat_agenda'     => 'Hotel Katingan Indah, Palangka Raya',
                'tgl_agenda'        => Carbon::parse('2025-07-30'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Admin JDIH',
                'judul_agenda'      => 'Peningkatan Kapasitas JDIH',
                'deskripsi_agenda'  => 'Pelatihan lanjutan bagi pengelola JDIH daerah',
                'isi_agenda'        => 'Sesi meliputi penguatan dokumentasi hukum dan strategi pengelolaan konten digital.',
                'tempat_agenda'     => 'Aula BKPSDM Kabupaten Katingan',
                'tgl_agenda'        => Carbon::parse('2025-08-02'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Dinas Kominfo',
                'judul_agenda'      => 'Diskusi Terbuka UU ITE',
                'deskripsi_agenda'  => 'Pembahasan aspek hukum dan implementasi UU ITE',
                'isi_agenda'        => 'Dihadiri narasumber dari Kominfo dan akademisi hukum teknologi.',
                'tempat_agenda'     => 'Aula Dinas Kominfo',
                'tgl_agenda'        => Carbon::parse('2025-08-05'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Tim JDIH Katingan',
                'judul_agenda'      => 'Pengumpulan Data Produk Hukum',
                'deskripsi_agenda'  => 'Kegiatan inventarisasi dokumen hukum daerah',
                'isi_agenda'        => 'Tim turun langsung ke OPD untuk mengumpulkan dokumen hukum resmi.',
                'tempat_agenda'     => 'Seluruh Kantor OPD Katingan',
                'tgl_agenda'        => Carbon::parse('2025-08-10'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'pembuat_agenda'    => 'Bagian Organisasi',
                'judul_agenda'      => 'Sosialisasi Reformasi Birokrasi',
                'deskripsi_agenda'  => 'Pengenalan roadmap reformasi birokrasi kepada ASN',
                'isi_agenda'        => 'Agenda menjelaskan peran ASN dalam mendukung reformasi birokrasi.',
                'tempat_agenda'     => 'Pendopo Bupati Katingan',
                'tgl_agenda'        => Carbon::parse('2025-08-15'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}
