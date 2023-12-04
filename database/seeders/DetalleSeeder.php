<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle')->insert([
            ['cod_serv'=>'1','id_detalle'=>'1', 'precio_final'=>'20000'],
            ['cod_serv'=>'3','id_detalle'=>'2', 'precio_final'=>'8000'],
            ['cod_serv'=>'1','id_detalle'=>'3', 'precio_final'=>'20000'],
            ['cod_serv'=>'5','id_detalle'=>'4', 'precio_final'=>'18000'],
            ['cod_serv'=>'4','id_detalle'=>'5', 'precio_final'=>'25000'],
            ['cod_serv'=>'3','id_detalle'=>'6', 'precio_final'=>'8000'],
            ['cod_serv'=>'2','id_detalle'=>'7', 'precio_final'=>'16000'],
            ['cod_serv'=>'5','id_detalle'=>'8', 'precio_final'=>'18000'],
            ['cod_serv'=>'1','id_detalle'=>'9', 'precio_final'=>'20000'],
            ['cod_serv'=>'4','id_detalle'=>'10', 'precio_final'=>'25000'],
        ]);
    }
}
