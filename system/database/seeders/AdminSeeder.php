<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        if (!Admin::where('email', 'admin1@gmail.com')->exists()) {
            Admin::create([
                'name' => 'admin',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
        }
    }
}
