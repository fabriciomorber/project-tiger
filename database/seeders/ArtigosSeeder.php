<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtigosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('artigos')->insert([
            [
                'id' => 1,
                'url' => 'artigo-de-exemplo',
                'nome' => 'Artigo de exemplo',
                'keywords' => 'artigo, exemplo',
                'description' => 'Artigo de Exemplo do CMS MW Manager',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'dataEntrada' => '2011-01-01',
                'dataSaida' => null,
                'img' => '/media/images/150645940.gif',
                'categorias' => 1,
                'autor' => 1,
                'mostrarAutor' => true,
                'conteudo' => '<p>Phasellus ornare convallis risus vel tristique...</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'url' => 'segundo-artigo-de-exemplo',
                'nome' => 'Segundo artigo de exemplo',
                'keywords' => 'segundo, artigo, exemplo, CMS, panther, 2011',
                'description' => 'Confira o segundo artigo de exemplo do CMS Panther 2011',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'dataEntrada' => '2011-06-20',
                'dataSaida' => null,
                'img' => '/media/images/oesilviooe.jpg',
                'categorias' => null,
                'autor' => 1,
                'mostrarAutor' => true,
                'conteudo' => '<p>Phasellus ornare convallis risus vel tristique...</p>',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}