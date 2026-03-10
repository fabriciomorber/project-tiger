<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('estado')->insert([
            ['id'=>1,'nome'=>'Acre','sigla'=>'AC','created_at'=>null,'updated_at'=>null],
            ['id'=>2,'nome'=>'Alagoas','sigla'=>'AL','created_at'=>null,'updated_at'=>null],
            ['id'=>3,'nome'=>'Amapá','sigla'=>'AP','created_at'=>'2011-08-29 11:03:40','updated_at'=>'2011-08-29 11:03:40'],
            ['id'=>4,'nome'=>'Amazonas','sigla'=>'AM','created_at'=>null,'updated_at'=>null],
            ['id'=>5,'nome'=>'Bahia','sigla'=>'BA','created_at'=>null,'updated_at'=>null],
            ['id'=>6,'nome'=>'Ceará','sigla'=>'CE','created_at'=>'2011-08-29 11:03:47','updated_at'=>'2011-08-29 11:03:47'],
            ['id'=>7,'nome'=>'Distrito Federal','sigla'=>'DF','created_at'=>null,'updated_at'=>null],
            ['id'=>8,'nome'=>'Espirito Santo','sigla'=>'ES','created_at'=>null,'updated_at'=>null],
            ['id'=>9,'nome'=>'Goiás','sigla'=>'GO','created_at'=>'2011-08-29 11:04:28','updated_at'=>'2011-08-29 11:04:28'],
            ['id'=>10,'nome'=>'Maranhão','sigla'=>'MA','created_at'=>'2011-08-29 11:04:43','updated_at'=>'2011-08-29 11:04:43'],
            ['id'=>11,'nome'=>'Mato Grosso','sigla'=>'MT','created_at'=>null,'updated_at'=>null],
            ['id'=>12,'nome'=>'Mato Grosso do Sul','sigla'=>'MS','created_at'=>null,'updated_at'=>null],
            ['id'=>13,'nome'=>'Minhas Gerais','sigla'=>'MG','created_at'=>null,'updated_at'=>null],
            ['id'=>14,'nome'=>'Pará','sigla'=>'PA','created_at'=>'2011-08-29 11:04:50','updated_at'=>'2011-08-29 11:04:50'],
            ['id'=>15,'nome'=>'Paraíba','sigla'=>'PB','created_at'=>'2011-08-29 11:04:52','updated_at'=>'2011-08-29 11:04:52'],
            ['id'=>16,'nome'=>'Paraná','sigla'=>'PR','created_at'=>'2011-08-29 11:04:54','updated_at'=>'2011-08-29 11:04:54'],
            ['id'=>17,'nome'=>'Pernambuco','sigla'=>'PE','created_at'=>null,'updated_at'=>null],
            ['id'=>18,'nome'=>'Piauí','sigla'=>'PI','created_at'=>'2011-08-29 11:04:59','updated_at'=>'2011-08-29 11:04:59'],
            ['id'=>19,'nome'=>'Rio de Janeiro','sigla'=>'RJ','created_at'=>null,'updated_at'=>null],
            ['id'=>20,'nome'=>'Rio Grande do Norte','sigla'=>'RN','created_at'=>null,'updated_at'=>null],
            ['id'=>21,'nome'=>'Rio Grande do Sul','sigla'=>'RS','created_at'=>null,'updated_at'=>null],
            ['id'=>22,'nome'=>'Rondônia','sigla'=>'RO','created_at'=>'2011-08-29 11:05:44','updated_at'=>'2011-08-29 11:05:44'],
            ['id'=>23,'nome'=>'Rorâima','sigla'=>'RR','created_at'=>'2011-08-29 11:05:46','updated_at'=>'2011-08-29 11:05:46'],
            ['id'=>24,'nome'=>'Santa Catarina','sigla'=>'SC','created_at'=>null,'updated_at'=>null],
            ['id'=>25,'nome'=>'São Paulo','sigla'=>'SP','created_at'=>'2011-08-29 11:05:49','updated_at'=>'2011-08-29 11:05:49'],
            ['id'=>26,'nome'=>'Sergipe','sigla'=>'SE','created_at'=>null,'updated_at'=>null],
            ['id'=>27,'nome'=>'Tocantins','sigla'=>'TO','created_at'=>null,'updated_at'=>null],
        ]);
    }
}