<?php

namespace Database\Seeders;

use App\Models\CategoryPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryPost = [
            [
                'title' => 'pendidikan',
                'slug' => 'pendidikan'
            ],
            [
                'title' => 'kebudayaan',
                'slug' => 'kebudayaan'
            ],
        ];
        CategoryPost::insert($categoryPost);
    }
}
