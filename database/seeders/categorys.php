<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorys extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                ['ten' => 'lmht', 'trang_thai' => 1, 'slug' => 'lmht'],
                ['ten' => 'liên quân mobile', 'trang_thai' => 1, 'slug' => 'lien-quan-mobile'],
                ['ten' => 'lmht tốc chiến', 'trang_thai' => 1, 'slug' => 'lmht-toc-chien'],
                ['ten' => 'game online', 'trang_thai' => 1, 'slug' => 'game-online'],
                ['ten' => 'manga/film', 'trang_thai' => 1, 'slug' => 'manga-film'],
            ]
        );
    }
}
