<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('design')->insert([
            [
                'id' => 1,
                'colorText' => '#a0496c',
                'colorTitle' => '#a0496c',
                'colorSubtitle' => '#ff00ff',
                'colorLink' => '#7c0032',
                'colorLinkhover' => '#867f79',
                'colorMenu' => '#f50808',
                'colorMenuhover' => '#cc9d9d',
                'boldMenu' => false,
                'boldMenuhover' => false,
                'boldTitle' => false,
                'boldSubtitle' => false,
                'boldText' => false,
                'tamanhoText' => 14,
                'tamanhoTitle' => 33,
                'tamanhoSubtitle' => 20,
                'tamanhoMenu' => 22,
                'tipoText' => 4,
                'tipoTitle' => 4,
                'tipoSubtitle' => 4,
                'tipoMenu' => 6,
                'tamanhoSlide' => 1000,
                'tamanhoGaleria' => 120,
                'tamanhoArtigos' => 200,
                'tipoMenuOrientacao' => 2,
                'tipoHome' => null,
                'tipoInterna' => null,
                'tipoDesign' => null,
                'template' => null,
                'topoNewsletter' => '/media/images/topoNewsletter.jpg',
                'rodapeNewsletter' => '/media/images/rodapeNewsletter.jpg',
                'background' => '#c9c9c9',
                'topoFacebook' => '/media/images/9931320969655%20(1).jpg',
                'rodapeFacebook' => '/media/images/9931320969655%20(1).jpg',
                'created_at' => '2012-03-05 03:40:58',
                'updated_at' => '2012-03-05 03:40:58',
            ]
        ]);
    }
}