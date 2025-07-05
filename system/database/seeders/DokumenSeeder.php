<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DokumenSeeder extends Seeder
{
    public function run()
    {
        // Ambil ID kategori pertama sebagai default
        $kategoriId = DB::table('kategori_dokumen')->first()?->id ?? 1;

        DB::table('dokumen')->insert([
            
        ]);
    }
}
