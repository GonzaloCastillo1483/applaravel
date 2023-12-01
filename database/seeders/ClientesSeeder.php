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
            //['rut_cliente' => '213719246','nom_cliente' => 'MESSI','password' => Hash::make('12345'),'fono' => '999999','perfil_id' => 2,],
            ['rut_cliente' => '12172725-0','nom_cliente' => 'Maribel', 'password' => Hash::make('1234'), 'fono' => '11111', 'perfil_id'=>1],
            ['rut_cliente' => '21371924-6','nom_cliente' => 'Gonzalo', 'password' => Hash::make('1234'), 'fono' => '31856991', 'perfil_id'=>2],
            ['rut_cliente' => '21430932-7','nom_cliente' => 'Gabriel', 'password' => Hash::make('1234'), 'fono' => '22222222', 'perfil_id'=>2],
            ['rut_cliente' => '21083433-5','nom_cliente' => 'Rodrigo', 'password' => Hash::make('1234'), 'fono' => '11111111', 'perfil_id'=>2],
            ['rut_cliente' => '21342303-7','nom_cliente' => 'Joaquin', 'password' => Hash::make('1234'), 'fono' => '11111111', 'perfil_id'=>2],
            
        ]);
    }
}
