<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DownloadsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('downloads')->insert([
            [
                'id' => 1,
                'url' => 'asd',
                'nome' => 'Download de exemplo',
                'keywords' => 'download, de, exemplo, CMS, Manager, 2026, Tiger',
                'description' => 'Faça o download de exemplo do CMS Manager 2026 Tiger',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => 1,
                'arquivo' => '/media/files/downloads/ui-icons_bbbbbb_256x240.png',
                'autor' => 1,
                'mostrarAutor' => true,
                'conteudo' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>',
                'created_at' => '2011-12-13 10:24:06',
                'updated_at' => '2011-12-13 10:24:06'
            ]
        ]);
    }
}