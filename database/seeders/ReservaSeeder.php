<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reserva')->insert([
            ['id'=>'1','fecha'=>'2023-12-05', 'hora'=>'3PM','cod_masc'=>'1','estado'=> 'muy sucio','estado_r'=>'hecho'],
            ['id'=>'2','fecha'=>'2023-12-05', 'hora'=>'10AM','cod_masc'=>'2','estado'=> 'amotado','estado_r'=>'pendiente'],
            ['id'=>'3','fecha'=>'2023-12-08', 'hora'=>'5PM','cod_masc'=>'5','estado'=> 'pulgoso','estado_r'=>'pendiente'],
            ['id'=>'4','fecha'=>'2023-12-12', 'hora'=>'11AM','cod_masc'=>'4','estado'=> 'amotado','estado_r'=>'pendiente'],
            ['id'=>'5','fecha'=>'2023-12-13', 'hora'=>'2PM','cod_masc'=>'3','estado'=> 'amotado','estado_r'=>'pendiente'],
            ['id'=>'6','fecha'=>'2023-12-14', 'hora'=>'4PM','cod_masc'=>'1','estado'=> 'pulgoso','estado_r'=>'pendiente'],
            ['id'=>'7','fecha'=>'2023-12-14', 'hora'=>'1PM','cod_masc'=>'7','estado'=> 'amotado','estado_r'=>'pendiente'],
            ['id'=>'8','fecha'=>'2023-12-14', 'hora'=>'5PM','cod_masc'=>'9','estado'=> 'con nudos','estado_r'=>'pendiente'],
            ['id'=>'9','fecha'=>'2023-12-15', 'hora'=>'7PM','cod_masc'=>'3','estado'=> 'buen estado','estado_r'=>'pendiente'],
            ['id'=>'10','fecha'=>'2023-12-21', 'hora'=>'4PM','cod_masc'=>'1','estado'=> 'buen estado','estado_r'=>'pendiente'],
        ]);
    }
}
