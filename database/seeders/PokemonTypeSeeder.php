<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['id' => 1, 'name' => 'Normal', 'color' => 'Lavender', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/c/c3/latest/20230128125621/Tipo_normal_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Planta', 'color' => 'Lime', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/e/ed/latest/20230128125654/Tipo_planta_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Fuego', 'color' => 'Crimson', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/5/55/latest/20230128125153/Tipo_fuego_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Agua', 'color' => 'RoyalBlue', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/d/d6/latest/20230128124702/Tipo_agua_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Eléctrico', 'color' => 'Yellow', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/8/84/latest/20230128125008/Tipo_el%C3%A9ctrico_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Tierra', 'color' => 'BurlyWood', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/c/c8/latest/20230128132625/Tipo_tierra_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'Roca', 'color' => 'Peru', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/1/14/latest/20230128125805/Tipo_roca_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'Psíquico', 'color' => 'Violet', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/2/22/latest/20230128125735/Tipo_ps%C3%ADquico_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => 'Lucha', 'color' => 'Firebrick', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/f/f2/latest/20230128125518/Tipo_lucha_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => 'Fantasma', 'color' => 'Purple', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/3/3d/latest/20230128125103/Tipo_fantasma_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => 'Hielo', 'color' => 'AquaMarine', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/a/a6/latest/20230128125423/Tipo_hielo_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => 'Veneno', 'color' => 'Mediumpurple', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/f/fa/latest/20230128132735/Tipo_veneno_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => 'Siniestro', 'color' => 'SlateGray', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/e/e0/latest/20230128132504/Tipo_siniestro_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'name' => 'Acero', 'color' => 'LightGrey', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/6/6c/latest/20230128124521/Tipo_acero_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => 'Bicho', 'color' => 'YellowGreen', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/1/1a/latest/20230128124809/Tipo_bicho_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'name' => 'Volador', 'color' => 'rgb(152,168,240)', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/6/6b/latest/20230128132815/Tipo_volador_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'name' => 'Hada', 'color' => 'rgb(255, 136, 238)', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/b/b7/latest/20230128125233/Tipo_hada_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'name' => 'Dragón', 'color' => 'MediumSlateBlue', 'image' => 'https://images.wikidexcdn.net/mwuploads/wikidex/1/15/latest/20230128124905/Tipo_drag%C3%B3n_icono_EP.svg', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Inserta los datos en la tabla
        DB::table('pokemon_types')->insert($types);
    }
}
