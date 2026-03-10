<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('galerias')->insert([
            [
                'id' => 1,
                'url' => 'galeria-de-exemplo',
                'nome' => 'Galeria de exemplo',
                'keywords' => 'galeria,de, exemplo',
                'description' => 'Galeria de exemplo do CMS Manager',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'tipo' => 1,
                'tamanho' => 3,
                'autor' => 1,
                'mostrarAutor' => true,
                'conteudo' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tristique fringilla turpis...</p>',
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'url' => 'galeria-de-exemplo-de-cartao-postal',
                'nome' => 'Galeria de exemplo de cartão postal',
                'keywords' => 'Galeria, exemplo, cartão, postal, CMS, Manager, Tiger',
                'description' => 'Galeria de exemplo de cartão postal CMS Manager Tiger',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'tipo' => 2,
                'tamanho' => 3,
                'autor' => 1,
                'mostrarAutor' => true,
                'conteudo' => '',
                'created_at' => '2011-09-08 22:28:41',
                'updated_at' => '2011-09-08 22:28:41'
            ],
            [
                'id' => 3,
                'url' => 'galeria-galeb',
                'nome' => 'Galeria galeb',
                'keywords' => 'hshsh, shshshs,',
                'description' => 'fotos do galeb',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'tipo' => 1,
                'tamanho' => 1,
                'autor' => 1,
                'mostrarAutor' => false,
                'conteudo' => '<p>shshshshs sjhsjsj</p>',
                'created_at' => '2012-03-29 06:58:57',
                'updated_at' => '2012-03-29 06:58:57'
            ],
            [
                'id' => 4,
                'url' => 'teste',
                'nome' => 'Teste',
                'keywords' => 'teste',
                'description' => 'teste',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'tipo' => 1,
                'tamanho' => 3,
                'autor' => 1,
                'mostrarAutor' => false,
                'conteudo' => '<p>xjhkfsasdasdkasnjdasda</p><p>asdasdasd</p><p>asdasd</p>',
                'created_at' => '2012-04-26 07:27:03',
                'updated_at' => '2012-04-26 07:27:03'
            ]
        ]);
    }
}