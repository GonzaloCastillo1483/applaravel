<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Mascota;

class MascotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mascota')->insert([
            ['nom_mascota'=>'shon','rut_cliente'=>'21371924-6', 'raza'=>'poodle','edad'=>'3','tamaño'=> 'chico'],
            ['nom_mascota'=>'lya','rut_cliente'=>'21371924-6', 'raza'=>'Pastor aleman','edad'=>'5','tamaño'=> 'grande'],
            ['nom_mascota'=>'toby','rut_cliente'=>'21371924-6', 'raza'=>'pug','edad'=>'5','tamaño'=> 'mediano'],
            ['nom_mascota'=>'albo','rut_cliente'=>'21430932-7', 'raza'=>'mestizo','edad'=>'4','tamaño'=> 'mediano'],
            ['nom_mascota'=>'frank','rut_cliente'=>'21430932-7', 'raza'=>'doberman','edad'=>'7','tamaño'=> 'grande'],
            ['nom_mascota'=>'luna','rut_cliente'=>'21430932-7', 'raza'=>'poodle','edad'=>'2','tamaño'=> 'chico'],
            ['nom_mascota'=>'pelusa','rut_cliente'=>'21083443-5', 'raza'=>'mestizo','edad'=>'4','tamaño'=> 'mediano'],
            ['nom_mascota'=>'cacique','rut_cliente'=>'21083443-5', 'raza'=>'galgo','edad'=>'7','tamaño'=> 'grande'],
            ['nom_mascota'=>'lucas','rut_cliente'=>'21083443-5', 'raza'=>'pitbull','edad'=>'7','tamaño'=> 'mediano'],

        ]);
    }
}
