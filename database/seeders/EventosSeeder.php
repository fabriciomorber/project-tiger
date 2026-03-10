<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('eventos')->insert([
            [
                'id' => 1,
                'url' => 'evento-de-exemplo',
                'nome' => 'Evento de exemplo',
                'keywords' => 'Confira, evento, exemplo',
                'description' => 'Confira o evento de exemplo',
                'situacao' => true,
                'situacaoFeed' => true,
                'restricao' => 1,
                'restricaoEspecifica' => null,
                'dataEntrada' => '2011-08-10',
                'autor' => 1,
                'mostrarAutor' => false,
                'conteudo' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut erat eget nisl rhoncus consequat. Nam vel leo nisi, id commodo nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vitae lacinia orci. Fusce in ipsum ut nunc bibendum lobortis. Donec felis nunc, pharetra vitae consectetur vel, ultricies vitae urna. Pellentesque nec neque lectus, id tempor purus. Morbi orci elit, feugiat quis elementum id, varius at nisi. Quisque rutrum nibh vel mauris tristique porta.<br /><br />Nam turpis elit, pellentesque sit amet convallis id, ultricies ut nibh. Curabitur vehicula sagittis enim sit amet fermentum. In vel ipsum eu justo pretium fringilla rutrum ac leo. Aenean tempor, justo vel consectetur pellentesque, ipsum sapien semper enim, eget consectetur dolor est in sem. In eget leo risus, ac luctus ligula. Phasellus laoreet elit id mi porttitor ut laoreet ante sollicitudin. Integer neque arcu, pretium vitae iaculis ac, semper a mauris. Mauris at mauris vitae libero posuere luctus et sed risus.<br /><br />Sed eros ante, interdum porttitor porttitor vel, tempor eget urna. Etiam eget justo sit amet nisi tristique posuere. Proin suscipit interdum arcu, sed posuere est condimentum convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus purus pulvinar sem pellentesque vitae ullamcorper lectus lobortis. Curabitur tempor risus sit amet erat dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus bibendum euismod posuere. Fusce nunc sapien, pulvinar eu molestie ut, rutrum sed nunc. Phasellus rhoncus ante in dui ultricies tincidunt. Aliquam pharetra aliquet metus id egestas.<br /><br />Ut tincidunt consequat commodo. In vitae nunc quis nibh convallis porttitor eget sed tortor. Fusce cursus pharetra nulla, elementum lacinia nibh semper eget. Aenean interdum nibh non velit faucibus commodo. Donec nibh metus, convallis in cursus semper, porttitor nec magna. Morbi lacinia erat vitae est condimentum dignissim. Ut a quam est, vitae auctor felis. Nullam diam ante, ornare id congue sed, vulputate adipiscing purus. Morbi ipsum erat, laoreet sed elementum nec, tempor at eros. Vivamus nec sem eu tellus dapibus dignissim porttitor eget augue. Mauris congue ligula magna.</p>',
                'created_at' => '2011-08-28 17:08:44',
                'updated_at' => '2011-08-28 17:08:44'
            ]
        ]);
    }
}