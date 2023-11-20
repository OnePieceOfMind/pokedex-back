<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['id' => 1, 'name' => 'Kanto', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Jotho', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Hoenn', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Inserta los datos en la tabla
        DB::table('pokemon_regions')->insert($regions);
    }
}
