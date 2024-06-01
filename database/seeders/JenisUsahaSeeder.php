<?php

namespace Database\Seeders;

use App\Models\JenisUsaha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisUsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisusaha = [
            ['name' => 'jasa'],
            ['name' => 'kursus'],
        ];

        JenisUsaha::insert($jenisusaha);
    }
}
