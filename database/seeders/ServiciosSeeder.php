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
            ['codigo_servicio' => 1, 'precio' => 20000, 'desc_servicio'=>'Corte de pelo, baño incluido, corte de uñas', 'activo'=>'si'],
            ['codigo_servicio' => 2, 'precio' => 16000, 'desc_servicio'=>'Solo baño', 'activo'=>'si'],
            ['codigo_servicio' => 3, 'precio' => 8000, 'desc_servicio'=>' corte de uñas', 'activo'=>'si'],
            ['codigo_servicio' => 4, 'precio' => 25000, 'desc_servicio'=>'Corte de pelo, baño incluido, corte de uñas, baño higenico incluido', 'activo'=>'si'],
            ['codigo_servicio' => 5, 'precio' => 18000, 'desc_servicio'=>'Corte de pelo', 'activo'=>'si'],
            
        ]);

        
    }
}
