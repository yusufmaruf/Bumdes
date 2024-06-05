<?php

namespace Database\Seeders;

use App\Models\SiteIdentity;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(CategoryPostSeeder::class);
        $this->call(JenisUsahaSeeder::class);
        $this->call(SiteIdentitySeeder::class);
    }
}
