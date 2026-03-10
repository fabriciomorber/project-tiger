<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfiguracoesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('configuracoes')->insert([
            [
                'id' => 1,
                'logoPadrao' => '/media/images/logo.jpg',
                'titulo' => 'Novo Site',
                'sufixo' => 'Arrumando codigo',
                'situacao' => true,
                'situacaoFeed' => true,
                'keywords' => 'teste, de, palavras',
                'description' => 'Teste de descrição',
                'emailSite' => 'fabmorber@gmail.com',
                'favico' => '/teste.ico',
                'descricao' => '<div>
                    <h1>O site se encontra em manutenção</h1>
                    <p>Em breve estaremos devolta!</p>
                    </div>',
                'erro404' => '<p>Ooops!! Essa página já não existe!</p>',
                'googleAnalytics' => '',
                'webmasterTools' => '',
                'created_at' => '2012-07-04 20:19:04',
                'updated_at' => '2012-07-04 20:19:04'
            ]
        ]);
    }
}