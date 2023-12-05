<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Detalle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PerfilSeeder::class,
            ClientesSeeder::class,
            ServiciosSeeder::class,
            MascotasSeeder::class,
            ReservaSeeder::class,
            DetalleSeeder::class,
        ]);
    }
}
