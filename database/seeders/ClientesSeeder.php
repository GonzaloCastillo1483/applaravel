<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;
use App\Models\Perfil;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Cliente')->insert([
            ['rut_cliente' => '213719246','nom_cliente' => 'MESSI','password' => Hash::make('12345'),'fono' => '999999','perfil_id' => 2,],
            ['rut_cliente' => '121727250','nom_cliente' => 'Maribel', 'password' => Hash::make('1234'), 'fono' => '11111', 'perfil_id'=>1]
            //hrno nose porque al intentar iniciar sesion no me toma los datos del seeder
        ]);
    }
}
