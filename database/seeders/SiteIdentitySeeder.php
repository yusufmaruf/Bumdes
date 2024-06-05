<?php

namespace Database\Seeders;

use App\Models\SiteIdentity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'BUMDES',
                'address' => 'Jalan. Jendral Sudirman No. 1A Jakarta Pusat',
                'phone' => '021-12345678',
                'email' => 'qfW5z@example.com',
                'logo' => '',
                'visi' => '',
                'misi' => '',
                'gambarStruktur' => '',
                'regulasi' => '',
                'instagram' => '',
                'facebook' => '',
                'youtube' => '',
            ]
        ];
        SiteIdentity::insert($data);
    }
}
