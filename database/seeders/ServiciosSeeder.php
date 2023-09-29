<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicio')->insert([
            ['codigo_servicio' => 1, 'precio' => 20000, 'desc_servicio'=>'Corte de pelo, baño incluido, corte de uñas']
        ]);

        
    }
}
