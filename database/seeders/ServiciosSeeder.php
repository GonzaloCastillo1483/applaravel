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
            [ 'precio' => 20000, 'desc_servicio'=>'Corte de pelo, baño incluido, corte de uñas', 'activo'=>'si'],
            [ 'precio' => 16000, 'desc_servicio'=>'Solo baño', 'activo'=>'si'],
            [ 'precio' => 8000, 'desc_servicio'=>' corte de uñas', 'activo'=>'si'],
            [ 'precio' => 25000, 'desc_servicio'=>'Corte de pelo, baño incluido, corte de uñas, baño higenico incluido', 'activo'=>'si'],
            [ 'precio' => 18000, 'desc_servicio'=>'Corte de pelo', 'activo'=>'si'],
            
        ]);

        
    }
}
