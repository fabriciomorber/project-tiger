<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('banners')->insert([
            [
                'id' => 1,
                'nome' => 'Imagem 1',
                'img' => '/media/images/galerias/slide-88.jpg',
                'link' => '',
                'situacao' => true,
                'autor' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'nome' => 'Imagem 2',
                'img' => '/media/images/dedao.jpg',
                'link' => null,
                'situacao' => true,
                'autor' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}