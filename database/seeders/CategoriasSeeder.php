<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'id' => 1,
                'url' => 'categoria-de-exemplo',
                'nome' => 'Categoria de Exemplo',
                'categoriaMae' => null,
                'keywords' => 'categoria,exemplo',
                'description' => 'Categoria de exemplo',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'autor' => 1,
                'mostrarAutor' => true,
                'conteudo' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'url' => 'categoria-aninhada-de-exemplo',
                'nome' => 'Categoria aninhada de exemplo',
                'categoriaMae' => 1,
                'keywords' => 'Categoria, exemplo, aninhada, CMS, MW, Manager, Panther, 211',
                'description' => 'Categoria de exemplo aninhada do CMS MW Manager Panther 211',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'autor' => 1,
                'mostrarAutor' => true,
                'conteudo' => '',
                'created_at' => '2011-05-22 12:20:47',
                'updated_at' => '2011-05-22 12:20:47'
            ]
        ]);
    }
}