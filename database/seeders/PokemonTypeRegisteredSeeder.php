<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonTypeRegisteredSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $registereds = [
            // Pokémon #1
            ['id' => 1, 'pokemon_id' => 1, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'pokemon_id' => 1, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
             // Pokémon #2
            ['id' => 3, 'pokemon_id' => 2, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'pokemon_id' => 2, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
             // Pokémon #3
            ['id' => 5, 'pokemon_id' => 3, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'pokemon_id' => 3, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #4
            ['id' => 7, 'pokemon_id' => 4, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'pokemon_id' => 4, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #5
            ['id' => 9, 'pokemon_id' => 5, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'pokemon_id' => 5, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #6
            ['id' => 11, 'pokemon_id' => 6, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'pokemon_id' => 6, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #7
            ['id' => 13, 'pokemon_id' => 7, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'pokemon_id' => 7, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #8
            ['id' => 15, 'pokemon_id' => 8, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'pokemon_id' => 8, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #9
            ['id' => 17, 'pokemon_id' => 9, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'pokemon_id' => 9, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #10
            ['id' => 19, 'pokemon_id' => 10, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'pokemon_id' => 10, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #11
            ['id' => 21, 'pokemon_id' => 11, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'pokemon_id' => 11, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #12
            ['id' => 23, 'pokemon_id' => 12, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'pokemon_id' => 12, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #13
            ['id' => 25, 'pokemon_id' => 13, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'pokemon_id' => 13, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #14
            ['id' => 27, 'pokemon_id' => 14, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'pokemon_id' => 14, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #15
            ['id' => 29, 'pokemon_id' => 15, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'pokemon_id' => 15, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #16
            ['id' => 31, 'pokemon_id' => 16, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'pokemon_id' => 16, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #17
            ['id' => 33, 'pokemon_id' => 17, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'pokemon_id' => 17, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #18
            ['id' => 35, 'pokemon_id' => 18, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'pokemon_id' => 18, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #19
            ['id' => 37, 'pokemon_id' => 19, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'pokemon_id' => 19, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #20
            ['id' => 39, 'pokemon_id' => 20, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'pokemon_id' => 20, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #21
            ['id' => 41, 'pokemon_id' => 21, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'pokemon_id' => 21, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #22
            ['id' => 43, 'pokemon_id' => 22, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'pokemon_id' => 22, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #23
            ['id' => 45, 'pokemon_id' => 23, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'pokemon_id' => 23, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #24
            ['id' => 47, 'pokemon_id' => 24, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 48, 'pokemon_id' => 24, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #25
            ['id' => 49, 'pokemon_id' => 25, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'pokemon_id' => 25, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #26
            ['id' => 51, 'pokemon_id' => 26, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 52, 'pokemon_id' => 26, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #27
            ['id' => 53, 'pokemon_id' => 27, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 54, 'pokemon_id' => 27, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #28
            ['id' => 55, 'pokemon_id' => 28, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 56, 'pokemon_id' => 28, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #29
            ['id' => 57, 'pokemon_id' => 29, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 58, 'pokemon_id' => 29, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #30
            ['id' => 59, 'pokemon_id' => 30, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 60, 'pokemon_id' => 30, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #31
            ['id' => 61, 'pokemon_id' => 31, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 62, 'pokemon_id' => 31, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #32
            ['id' => 63, 'pokemon_id' => 32, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 64, 'pokemon_id' => 32, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #33
            ['id' => 65, 'pokemon_id' => 33, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 66, 'pokemon_id' => 33, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #34
            ['id' => 67, 'pokemon_id' => 34, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 68, 'pokemon_id' => 34, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #35
            ['id' => 69, 'pokemon_id' => 35, 'pokemon_type_id' => 17, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 70, 'pokemon_id' => 35, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #36
            ['id' => 71, 'pokemon_id' => 36, 'pokemon_type_id' => 17, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 72, 'pokemon_id' => 36, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #37
            ['id' => 73, 'pokemon_id' => 37, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 74, 'pokemon_id' => 37, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #38
            ['id' => 75, 'pokemon_id' => 38, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 76, 'pokemon_id' => 38, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #39
            ['id' => 77, 'pokemon_id' => 39, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 78, 'pokemon_id' => 39, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #40
            ['id' => 79, 'pokemon_id' => 40, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 80, 'pokemon_id' => 40, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #41
            ['id' => 81, 'pokemon_id' => 41, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 82, 'pokemon_id' => 41, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #42
            ['id' => 83, 'pokemon_id' => 42, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 84, 'pokemon_id' => 42, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #43
            ['id' => 85, 'pokemon_id' => 43, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 86, 'pokemon_id' => 43, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #44
            ['id' => 87, 'pokemon_id' => 44, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 88, 'pokemon_id' => 44, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #45
            ['id' => 89, 'pokemon_id' => 45, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 90, 'pokemon_id' => 45, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #46
            ['id' => 91, 'pokemon_id' => 46, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 92, 'pokemon_id' => 46, 'pokemon_type_id' => 2, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #47
            ['id' => 93, 'pokemon_id' => 47, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 94, 'pokemon_id' => 47, 'pokemon_type_id' => 2, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #48
            ['id' => 95, 'pokemon_id' => 48, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 96, 'pokemon_id' => 48, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #49
            ['id' => 97, 'pokemon_id' => 49, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 98, 'pokemon_id' => 49, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #50
            ['id' => 99, 'pokemon_id' => 50, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 100, 'pokemon_id' => 50, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #51
            ['id' => 101, 'pokemon_id' => 51, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 102, 'pokemon_id' => 51, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #52
            ['id' => 103, 'pokemon_id' => 52, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 104, 'pokemon_id' => 52, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #53
            ['id' => 105, 'pokemon_id' => 53, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 106, 'pokemon_id' => 53, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()], 
            // Pokémon #54
            ['id' => 107, 'pokemon_id' => 54, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 108, 'pokemon_id' => 54, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #55
            ['id' => 109, 'pokemon_id' => 55, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 110, 'pokemon_id' => 55, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #56
            ['id' => 111, 'pokemon_id' => 56, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 112, 'pokemon_id' => 56, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #57
            ['id' => 113, 'pokemon_id' => 57, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 114, 'pokemon_id' => 57, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #58
            ['id' => 115, 'pokemon_id' => 58, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 116, 'pokemon_id' => 58, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #59
            ['id' => 117, 'pokemon_id' => 59, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 118, 'pokemon_id' => 59, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #60
            ['id' => 119, 'pokemon_id' => 60, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 120, 'pokemon_id' => 60, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #61
            ['id' => 121, 'pokemon_id' => 61, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 122, 'pokemon_id' => 61, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #62
            ['id' => 123, 'pokemon_id' => 62, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 124, 'pokemon_id' => 62, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #63
            ['id' => 125, 'pokemon_id' => 63, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 126, 'pokemon_id' => 63, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #64
            ['id' => 127, 'pokemon_id' => 64, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 128, 'pokemon_id' => 64, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #65
            ['id' => 129, 'pokemon_id' => 65, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 130, 'pokemon_id' => 65, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #66
            ['id' => 131, 'pokemon_id' => 66, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 132, 'pokemon_id' => 66, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #67
            ['id' => 133, 'pokemon_id' => 67, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 134, 'pokemon_id' => 67, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #68
            ['id' => 135, 'pokemon_id' => 68, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 136, 'pokemon_id' => 68, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #69
            ['id' => 137, 'pokemon_id' => 69, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 138, 'pokemon_id' => 69, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #70
            ['id' => 139, 'pokemon_id' => 70, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 140, 'pokemon_id' => 70, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #71
            ['id' => 141, 'pokemon_id' => 71, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 142, 'pokemon_id' => 71, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #72
            ['id' => 143, 'pokemon_id' => 72, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 144, 'pokemon_id' => 72, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #73
            ['id' => 145, 'pokemon_id' => 73, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 146, 'pokemon_id' => 73, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #74
            ['id' => 147, 'pokemon_id' => 74, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 148, 'pokemon_id' => 74, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #75
            ['id' => 149, 'pokemon_id' => 75, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 150, 'pokemon_id' => 75, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #76
            ['id' => 151, 'pokemon_id' => 76, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 152, 'pokemon_id' => 76, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #77
            ['id' => 153, 'pokemon_id' => 77, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 154, 'pokemon_id' => 77, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #78
            ['id' => 155, 'pokemon_id' => 78, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 156, 'pokemon_id' => 78, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #79
            ['id' => 157, 'pokemon_id' => 79, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 158, 'pokemon_id' => 79, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #80
            ['id' => 159, 'pokemon_id' => 80, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 160, 'pokemon_id' => 80, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #81
            ['id' => 161, 'pokemon_id' => 81, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 162, 'pokemon_id' => 81, 'pokemon_type_id' => 14, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #82
            ['id' => 163, 'pokemon_id' => 82, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 164, 'pokemon_id' => 82, 'pokemon_type_id' => 14, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #83
            ['id' => 165, 'pokemon_id' => 83, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 166, 'pokemon_id' => 83, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #84
            ['id' => 167, 'pokemon_id' => 84, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 168, 'pokemon_id' => 84, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #85
            ['id' => 169, 'pokemon_id' => 85, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 170, 'pokemon_id' => 85, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #86
            ['id' => 171, 'pokemon_id' => 86, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 172, 'pokemon_id' => 86, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #87
            ['id' => 173, 'pokemon_id' => 87, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 174, 'pokemon_id' => 87, 'pokemon_type_id' => 11, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #88
            ['id' => 175, 'pokemon_id' => 88, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 176, 'pokemon_id' => 88, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #89
            ['id' => 177, 'pokemon_id' => 89, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 178, 'pokemon_id' => 89, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #90
            ['id' => 179, 'pokemon_id' => 90, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 180, 'pokemon_id' => 90, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #91
            ['id' => 181, 'pokemon_id' => 91, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 182, 'pokemon_id' => 91, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #92
            ['id' => 183, 'pokemon_id' => 92, 'pokemon_type_id' => 10, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 184, 'pokemon_id' => 92, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #93
            ['id' => 185, 'pokemon_id' => 93, 'pokemon_type_id' => 10, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 186, 'pokemon_id' => 93, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #94
            ['id' => 187, 'pokemon_id' => 94, 'pokemon_type_id' => 10, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 188, 'pokemon_id' => 94, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #95
            ['id' => 189, 'pokemon_id' => 95, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 190, 'pokemon_id' => 95, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #96
            ['id' => 191, 'pokemon_id' => 96, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 192, 'pokemon_id' => 96, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #97
            ['id' => 193, 'pokemon_id' => 97, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 194, 'pokemon_id' => 97, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #98
            ['id' => 195, 'pokemon_id' => 98, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 196, 'pokemon_id' => 98, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #99
            ['id' => 197, 'pokemon_id' => 99, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 198, 'pokemon_id' => 99, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #100
            ['id' => 199, 'pokemon_id' => 100, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 200, 'pokemon_id' => 100, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #101
            ['id' => 201, 'pokemon_id' => 101, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 202, 'pokemon_id' => 101, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #102
            ['id' => 203, 'pokemon_id' => 102, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 204, 'pokemon_id' => 102, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #103
            ['id' => 205, 'pokemon_id' => 103, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 206, 'pokemon_id' => 103, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #104
            ['id' => 207, 'pokemon_id' => 104, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 208, 'pokemon_id' => 104, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #105
            ['id' => 209, 'pokemon_id' => 105, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 210, 'pokemon_id' => 105, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #106
            ['id' => 211, 'pokemon_id' => 106, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 212, 'pokemon_id' => 106, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #107
            ['id' => 213, 'pokemon_id' => 107, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 214, 'pokemon_id' => 107, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #108
            ['id' => 215, 'pokemon_id' => 108, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 216, 'pokemon_id' => 108, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #109
            ['id' => 217, 'pokemon_id' => 109, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 218, 'pokemon_id' => 109, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #110
            ['id' => 219, 'pokemon_id' => 110, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 220, 'pokemon_id' => 110, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #111
            ['id' => 221, 'pokemon_id' => 111, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 222, 'pokemon_id' => 111, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #112
            ['id' => 223, 'pokemon_id' => 112, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 224, 'pokemon_id' => 112, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #113
            ['id' => 225, 'pokemon_id' => 113, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 226, 'pokemon_id' => 113, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #114
            ['id' => 227, 'pokemon_id' => 114, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 228, 'pokemon_id' => 114, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #115
            ['id' => 229, 'pokemon_id' => 115, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 230, 'pokemon_id' => 115, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #116
            ['id' => 231, 'pokemon_id' => 116, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 232, 'pokemon_id' => 116, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #117
            ['id' => 233, 'pokemon_id' => 117, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 234, 'pokemon_id' => 117, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #118
            ['id' => 235, 'pokemon_id' => 118, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 236, 'pokemon_id' => 118, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #119
            ['id' => 237, 'pokemon_id' => 119, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 238, 'pokemon_id' => 119, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #120
            ['id' => 239, 'pokemon_id' => 120, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 240, 'pokemon_id' => 120, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #121
            ['id' => 241, 'pokemon_id' => 121, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 242, 'pokemon_id' => 121, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #122
            ['id' => 243, 'pokemon_id' => 122, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 244, 'pokemon_id' => 122, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #123
            ['id' => 245, 'pokemon_id' => 123, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 246, 'pokemon_id' => 123, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #124
            ['id' => 247, 'pokemon_id' => 124, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 248, 'pokemon_id' => 124, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #125
            ['id' => 249, 'pokemon_id' => 125, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 250, 'pokemon_id' => 125, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #126
            ['id' => 251, 'pokemon_id' => 126, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 252, 'pokemon_id' => 126, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #127
            ['id' => 253, 'pokemon_id' => 127, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 254, 'pokemon_id' => 127, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #128
            ['id' => 255, 'pokemon_id' => 128, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 256, 'pokemon_id' => 128, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #129
            ['id' => 257, 'pokemon_id' => 129, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 258, 'pokemon_id' => 129, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #130
            ['id' => 259, 'pokemon_id' => 130, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 260, 'pokemon_id' => 130, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #131
            ['id' => 261, 'pokemon_id' => 131, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 262, 'pokemon_id' => 131, 'pokemon_type_id' => 11, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #132
            ['id' => 263, 'pokemon_id' => 132, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 264, 'pokemon_id' => 132, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #133
            ['id' => 265, 'pokemon_id' => 133, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 266, 'pokemon_id' => 133, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #134
            ['id' => 267, 'pokemon_id' => 134, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 268, 'pokemon_id' => 134, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #135
            ['id' => 269, 'pokemon_id' => 135, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 270, 'pokemon_id' => 135, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #136
            ['id' => 271, 'pokemon_id' => 136, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 272, 'pokemon_id' => 136, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #137
            ['id' => 273, 'pokemon_id' => 137, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 274, 'pokemon_id' => 137, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #138
            ['id' => 275, 'pokemon_id' => 138, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 276, 'pokemon_id' => 138, 'pokemon_type_id' => 4, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #139
            ['id' => 277, 'pokemon_id' => 139, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 278, 'pokemon_id' => 139, 'pokemon_type_id' => 4, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #140
            ['id' => 279, 'pokemon_id' => 140, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 280, 'pokemon_id' => 140, 'pokemon_type_id' => 4, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #141
            ['id' => 281, 'pokemon_id' => 141, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 282, 'pokemon_id' => 141, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #142
            ['id' => 283, 'pokemon_id' => 142, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 284, 'pokemon_id' => 142, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #143
            ['id' => 285, 'pokemon_id' => 143, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 286, 'pokemon_id' => 143, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #144
            ['id' => 287, 'pokemon_id' => 144, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 288, 'pokemon_id' => 144, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #145
            ['id' => 289, 'pokemon_id' => 145, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 290, 'pokemon_id' => 145, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #146
            ['id' => 291, 'pokemon_id' => 146, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 292, 'pokemon_id' => 146, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #147
            ['id' => 293, 'pokemon_id' => 147, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 294, 'pokemon_id' => 147, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #148
            ['id' => 295, 'pokemon_id' => 148, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 296, 'pokemon_id' => 148, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #149
            ['id' => 297, 'pokemon_id' => 149, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 298, 'pokemon_id' => 149, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #150
            ['id' => 299, 'pokemon_id' => 150, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 300, 'pokemon_id' => 150, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #151
            ['id' => 301, 'pokemon_id' => 151, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 302, 'pokemon_id' => 151, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #152
            ['id' => 303, 'pokemon_id' => 152, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 304, 'pokemon_id' => 152, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #153
            ['id' => 305, 'pokemon_id' => 153, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 306, 'pokemon_id' => 153, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #154
            ['id' => 307, 'pokemon_id' => 154, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 308, 'pokemon_id' => 154, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #155
            ['id' => 309, 'pokemon_id' => 155, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 310, 'pokemon_id' => 155, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #156
            ['id' => 311, 'pokemon_id' => 156, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 312, 'pokemon_id' => 156, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #157
            ['id' => 313, 'pokemon_id' => 157, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 314, 'pokemon_id' => 157, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #158
            ['id' => 315, 'pokemon_id' => 158, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 316, 'pokemon_id' => 158, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #159
            ['id' => 317, 'pokemon_id' => 159, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 318, 'pokemon_id' => 159, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #160
            ['id' => 319, 'pokemon_id' => 160, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 320, 'pokemon_id' => 160, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #161
            ['id' => 321, 'pokemon_id' => 161, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 322, 'pokemon_id' => 161, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #162
            ['id' => 323, 'pokemon_id' => 162, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 324, 'pokemon_id' => 162, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #163
            ['id' => 325, 'pokemon_id' => 163, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 326, 'pokemon_id' => 163, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #164
            ['id' => 327, 'pokemon_id' => 164, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 328, 'pokemon_id' => 164, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #165
            ['id' => 329, 'pokemon_id' => 165, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 330, 'pokemon_id' => 165, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #166
            ['id' => 331, 'pokemon_id' => 166, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 332, 'pokemon_id' => 166, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #167
            ['id' => 333, 'pokemon_id' => 167, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 334, 'pokemon_id' => 167, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #168
            ['id' => 335, 'pokemon_id' => 168, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 336, 'pokemon_id' => 168, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #169
            ['id' => 337, 'pokemon_id' => 169, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 338, 'pokemon_id' => 169, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #170
            ['id' => 339, 'pokemon_id' => 170, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 340, 'pokemon_id' => 170, 'pokemon_type_id' => 5, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #171
            ['id' => 341, 'pokemon_id' => 171, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 342, 'pokemon_id' => 171, 'pokemon_type_id' => 5, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #172
            ['id' => 343, 'pokemon_id' => 172, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 344, 'pokemon_id' => 172, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #173
            ['id' => 345, 'pokemon_id' => 173, 'pokemon_type_id' => 17, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 346, 'pokemon_id' => 173, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #174
            ['id' => 347, 'pokemon_id' => 174, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 348, 'pokemon_id' => 174, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #175
            ['id' => 349, 'pokemon_id' => 175, 'pokemon_type_id' => 17, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 350, 'pokemon_id' => 175, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #176
            ['id' => 351, 'pokemon_id' => 176, 'pokemon_type_id' => 17, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 352, 'pokemon_id' => 176, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #177
            ['id' => 353, 'pokemon_id' => 177, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 354, 'pokemon_id' => 177, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #178
            ['id' => 355, 'pokemon_id' => 178, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 356, 'pokemon_id' => 178, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #179
            ['id' => 357, 'pokemon_id' => 179, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 358, 'pokemon_id' => 179, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #180
            ['id' => 359, 'pokemon_id' => 180, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 360, 'pokemon_id' => 180, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #181
            ['id' => 361, 'pokemon_id' => 181, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 362, 'pokemon_id' => 181, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #182
            ['id' => 363, 'pokemon_id' => 182, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 364, 'pokemon_id' => 182, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #183
            ['id' => 365, 'pokemon_id' => 183, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 366, 'pokemon_id' => 183, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #184
            ['id' => 367, 'pokemon_id' => 184, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 368, 'pokemon_id' => 184, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #185
            ['id' => 369, 'pokemon_id' => 185, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 370, 'pokemon_id' => 185, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #186
            ['id' => 371, 'pokemon_id' => 186, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 372, 'pokemon_id' => 186, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #187
            ['id' => 373, 'pokemon_id' => 187, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 374, 'pokemon_id' => 187, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #188
            ['id' => 375, 'pokemon_id' => 188, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 376, 'pokemon_id' => 188, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #189
            ['id' => 377, 'pokemon_id' => 189, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 378, 'pokemon_id' => 189, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #190
            ['id' => 379, 'pokemon_id' => 190, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 380, 'pokemon_id' => 190, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #191
            ['id' => 381, 'pokemon_id' => 191, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 382, 'pokemon_id' => 191, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #192
            ['id' => 383, 'pokemon_id' => 192, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 384, 'pokemon_id' => 192, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #193
            ['id' => 385, 'pokemon_id' => 193, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 386, 'pokemon_id' => 193, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #194
            ['id' => 387, 'pokemon_id' => 194, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 388, 'pokemon_id' => 194, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #195
            ['id' => 389, 'pokemon_id' => 195, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 390, 'pokemon_id' => 195, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #196
            ['id' => 391, 'pokemon_id' => 196, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 392, 'pokemon_id' => 196, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #197
            ['id' => 393, 'pokemon_id' => 197, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 394, 'pokemon_id' => 197, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #198
            ['id' => 395, 'pokemon_id' => 198, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 396, 'pokemon_id' => 198, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #199
            ['id' => 397, 'pokemon_id' => 199, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 398, 'pokemon_id' => 199, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #200
            ['id' => 399, 'pokemon_id' => 200, 'pokemon_type_id' => 10, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 400, 'pokemon_id' => 200, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #201
            ['id' => 401, 'pokemon_id' => 201, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 402, 'pokemon_id' => 201, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #202
            ['id' => 403, 'pokemon_id' => 202, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 404, 'pokemon_id' => 202, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #203
            ['id' => 405, 'pokemon_id' => 203, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 406, 'pokemon_id' => 203, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #204
            ['id' => 407, 'pokemon_id' => 204, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 408, 'pokemon_id' => 204, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #205
            ['id' => 409, 'pokemon_id' => 205, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 410, 'pokemon_id' => 205, 'pokemon_type_id' => 14, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #206
            ['id' => 411, 'pokemon_id' => 206, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 412, 'pokemon_id' => 206, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #207
            ['id' => 413, 'pokemon_id' => 207, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 414, 'pokemon_id' => 207, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #208
            ['id' => 415, 'pokemon_id' => 208, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 416, 'pokemon_id' => 208, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #209
            ['id' => 417, 'pokemon_id' => 209, 'pokemon_type_id' => 17, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 418, 'pokemon_id' => 209, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #210
            ['id' => 419, 'pokemon_id' => 210, 'pokemon_type_id' => 17, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 420, 'pokemon_id' => 210, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #211
            ['id' => 421, 'pokemon_id' => 211, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 422, 'pokemon_id' => 211, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #212
            ['id' => 423, 'pokemon_id' => 212, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 424, 'pokemon_id' => 212, 'pokemon_type_id' => 14, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #213
            ['id' => 425, 'pokemon_id' => 213, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 426, 'pokemon_id' => 213, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #214
            ['id' => 427, 'pokemon_id' => 214, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 428, 'pokemon_id' => 214, 'pokemon_type_id' => 9, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #215
            ['id' => 429, 'pokemon_id' => 215, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 430, 'pokemon_id' => 215, 'pokemon_type_id' => 11, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #216
            ['id' => 431, 'pokemon_id' => 216, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 432, 'pokemon_id' => 216, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #217
            ['id' => 433, 'pokemon_id' => 217, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 434, 'pokemon_id' => 217, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #218
            ['id' => 435, 'pokemon_id' => 218, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 436, 'pokemon_id' => 218, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #219
            ['id' => 437, 'pokemon_id' => 219, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 438, 'pokemon_id' => 219, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #220
            ['id' => 439, 'pokemon_id' => 220, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 440, 'pokemon_id' => 220, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #221
            ['id' => 441, 'pokemon_id' => 221, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 442, 'pokemon_id' => 221, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #222
            ['id' => 443, 'pokemon_id' => 222, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 444, 'pokemon_id' => 222, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #223
            ['id' => 445, 'pokemon_id' => 223, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 446, 'pokemon_id' => 223, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #224
            ['id' => 447, 'pokemon_id' => 224, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 448, 'pokemon_id' => 224, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #225
            ['id' => 449, 'pokemon_id' => 225, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 450, 'pokemon_id' => 225, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #226
            ['id' => 451, 'pokemon_id' => 226, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 452, 'pokemon_id' => 226, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #227
            ['id' => 453, 'pokemon_id' => 227, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 454, 'pokemon_id' => 227, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #228
            ['id' => 455, 'pokemon_id' => 228, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 456, 'pokemon_id' => 228, 'pokemon_type_id' => 3, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #229
            ['id' => 457, 'pokemon_id' => 229, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 458, 'pokemon_id' => 229, 'pokemon_type_id' => 3, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #230
            ['id' => 459, 'pokemon_id' => 230, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 460, 'pokemon_id' => 230, 'pokemon_type_id' => 18, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #231
            ['id' => 461, 'pokemon_id' => 231, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 462, 'pokemon_id' => 231, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #232
            ['id' => 463, 'pokemon_id' => 232, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 464, 'pokemon_id' => 232, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #233
            ['id' => 465, 'pokemon_id' => 233, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 466, 'pokemon_id' => 233, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #234
            ['id' => 467, 'pokemon_id' => 234, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 468, 'pokemon_id' => 234, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #235
            ['id' => 469, 'pokemon_id' => 235, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 470, 'pokemon_id' => 235, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #236
            ['id' => 471, 'pokemon_id' => 236, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 472, 'pokemon_id' => 236, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #237
            ['id' => 473, 'pokemon_id' => 237, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 474, 'pokemon_id' => 237, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #238
            ['id' => 475, 'pokemon_id' => 238, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 476, 'pokemon_id' => 238, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #239
            ['id' => 477, 'pokemon_id' => 239, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 478, 'pokemon_id' => 239, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #240
            ['id' => 479, 'pokemon_id' => 240, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 480, 'pokemon_id' => 240, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #241
            ['id' => 481, 'pokemon_id' => 241, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 482, 'pokemon_id' => 241, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #242
            ['id' => 483, 'pokemon_id' => 242, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 484, 'pokemon_id' => 242, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #243
            ['id' => 485, 'pokemon_id' => 243, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 486, 'pokemon_id' => 243, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #244
            ['id' => 487, 'pokemon_id' => 244, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 488, 'pokemon_id' => 244, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #245
            ['id' => 489, 'pokemon_id' => 245, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 490, 'pokemon_id' => 245, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #246
            ['id' => 491, 'pokemon_id' => 246, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 492, 'pokemon_id' => 246, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #247
            ['id' => 493, 'pokemon_id' => 247, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 494, 'pokemon_id' => 247, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #248
            ['id' => 495, 'pokemon_id' => 248, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 496, 'pokemon_id' => 248, 'pokemon_type_id' => 13, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #249
            ['id' => 497, 'pokemon_id' => 249, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 498, 'pokemon_id' => 249, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #250
            ['id' => 499, 'pokemon_id' => 250, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 500, 'pokemon_id' => 250, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #251
            ['id' => 501, 'pokemon_id' => 251, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 502, 'pokemon_id' => 251, 'pokemon_type_id' => 2, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #252
            ['id' => 503, 'pokemon_id' => 252, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 504, 'pokemon_id' => 252, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #253
            ['id' => 505, 'pokemon_id' => 253, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 506, 'pokemon_id' => 253, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #254
            ['id' => 507, 'pokemon_id' => 254, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 508, 'pokemon_id' => 254, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #255
            ['id' => 509, 'pokemon_id' => 255, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 510, 'pokemon_id' => 255, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #256
            ['id' => 511, 'pokemon_id' => 256, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 512, 'pokemon_id' => 256, 'pokemon_type_id' => 9, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #257
            ['id' => 513, 'pokemon_id' => 257, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 514, 'pokemon_id' => 257, 'pokemon_type_id' => 9, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #258
            ['id' => 515, 'pokemon_id' => 258, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 516, 'pokemon_id' => 258, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #259
            ['id' => 517, 'pokemon_id' => 259, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 518, 'pokemon_id' => 259, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #260
            ['id' => 519, 'pokemon_id' => 260, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 520, 'pokemon_id' => 260, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #261
            ['id' => 521, 'pokemon_id' => 261, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 522, 'pokemon_id' => 261, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #262
            ['id' => 523, 'pokemon_id' => 262, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 524, 'pokemon_id' => 262, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #263
            ['id' => 525, 'pokemon_id' => 263, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 526, 'pokemon_id' => 263, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #264
            ['id' => 527, 'pokemon_id' => 264, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 528, 'pokemon_id' => 264, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #265
            ['id' => 529, 'pokemon_id' => 265, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 530, 'pokemon_id' => 265, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #266
            ['id' => 531, 'pokemon_id' => 266, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 532, 'pokemon_id' => 266, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #267
            ['id' => 533, 'pokemon_id' => 267, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 534, 'pokemon_id' => 267, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #268
            ['id' => 535, 'pokemon_id' => 268, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 536, 'pokemon_id' => 268, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #269
            ['id' => 537, 'pokemon_id' => 269, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 538, 'pokemon_id' => 269, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #270
            ['id' => 539, 'pokemon_id' => 270, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 540, 'pokemon_id' => 270, 'pokemon_type_id' => 2, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #271
            ['id' => 541, 'pokemon_id' => 271, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 542, 'pokemon_id' => 271, 'pokemon_type_id' => 2, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #272
            ['id' => 543, 'pokemon_id' => 272, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 544, 'pokemon_id' => 272, 'pokemon_type_id' => 2, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #273
            ['id' => 545, 'pokemon_id' => 273, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 546, 'pokemon_id' => 273, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #274
            ['id' => 547, 'pokemon_id' => 274, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 548, 'pokemon_id' => 274, 'pokemon_type_id' => 13, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #275
            ['id' => 549, 'pokemon_id' => 275, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 550, 'pokemon_id' => 275, 'pokemon_type_id' => 13, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #276
            ['id' => 551, 'pokemon_id' => 276, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 552, 'pokemon_id' => 276, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #277
            ['id' => 553, 'pokemon_id' => 277, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 554, 'pokemon_id' => 277, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #278
            ['id' => 555, 'pokemon_id' => 278, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 556, 'pokemon_id' => 278, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #279
            ['id' => 557, 'pokemon_id' => 279, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 558, 'pokemon_id' => 279, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #280
            ['id' => 559, 'pokemon_id' => 280, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 560, 'pokemon_id' => 280, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #281
            ['id' => 561, 'pokemon_id' => 281, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 562, 'pokemon_id' => 281, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #282
            ['id' => 563, 'pokemon_id' => 282, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 564, 'pokemon_id' => 282, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #283
            ['id' => 565, 'pokemon_id' => 283, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 566, 'pokemon_id' => 283, 'pokemon_type_id' => 4, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #284
            ['id' => 567, 'pokemon_id' => 284, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 568, 'pokemon_id' => 284, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #285
            ['id' => 569, 'pokemon_id' => 285, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 570, 'pokemon_id' => 285, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #286
            ['id' => 571, 'pokemon_id' => 286, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 572, 'pokemon_id' => 286, 'pokemon_type_id' => 9, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #287
            ['id' => 573, 'pokemon_id' => 287, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 574, 'pokemon_id' => 287, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #288
            ['id' => 575, 'pokemon_id' => 288, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 576, 'pokemon_id' => 288, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #289
            ['id' => 577, 'pokemon_id' => 289, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 578, 'pokemon_id' => 289, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #290
            ['id' => 579, 'pokemon_id' => 290, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 580, 'pokemon_id' => 290, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #291
            ['id' => 581, 'pokemon_id' => 291, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 582, 'pokemon_id' => 291, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #292
            ['id' => 583, 'pokemon_id' => 292, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 584, 'pokemon_id' => 292, 'pokemon_type_id' => 10, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #293
            ['id' => 585, 'pokemon_id' => 293, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 586, 'pokemon_id' => 293, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #294
            ['id' => 587, 'pokemon_id' => 294, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 588, 'pokemon_id' => 294, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #295
            ['id' => 589, 'pokemon_id' => 295, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 590, 'pokemon_id' => 295, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #296
            ['id' => 591, 'pokemon_id' => 296, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 592, 'pokemon_id' => 296, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #297
            ['id' => 593, 'pokemon_id' => 297, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 594, 'pokemon_id' => 297, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #298
            ['id' => 595, 'pokemon_id' => 298, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 596, 'pokemon_id' => 298, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #299
            ['id' => 597, 'pokemon_id' => 299, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 598, 'pokemon_id' => 299, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #300
            ['id' => 599, 'pokemon_id' => 300, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 600, 'pokemon_id' => 300, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #301
            ['id' => 601, 'pokemon_id' => 301, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 602, 'pokemon_id' => 301, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #302
            ['id' => 603, 'pokemon_id' => 302, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 604, 'pokemon_id' => 302, 'pokemon_type_id' => 10, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #303
            ['id' => 605, 'pokemon_id' => 303, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 606, 'pokemon_id' => 303, 'pokemon_type_id' => 17, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #304
            ['id' => 607, 'pokemon_id' => 304, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 608, 'pokemon_id' => 304, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #305
            ['id' => 609, 'pokemon_id' => 305, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 610, 'pokemon_id' => 305, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #306
            ['id' => 611, 'pokemon_id' => 306, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 612, 'pokemon_id' => 306, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #307
            ['id' => 613, 'pokemon_id' => 307, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 614, 'pokemon_id' => 307, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #308
            ['id' => 615, 'pokemon_id' => 308, 'pokemon_type_id' => 9, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 616, 'pokemon_id' => 308, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #309
            ['id' => 617, 'pokemon_id' => 309, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 618, 'pokemon_id' => 309, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #310
            ['id' => 619, 'pokemon_id' => 310, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 620, 'pokemon_id' => 310, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #311
            ['id' => 621, 'pokemon_id' => 311, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 622, 'pokemon_id' => 311, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #312
            ['id' => 623, 'pokemon_id' => 312, 'pokemon_type_id' => 5, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 624, 'pokemon_id' => 312, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #313
            ['id' => 625, 'pokemon_id' => 313, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 626, 'pokemon_id' => 313, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #314
            ['id' => 627, 'pokemon_id' => 314, 'pokemon_type_id' => 15, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 628, 'pokemon_id' => 314, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #315
            ['id' => 629, 'pokemon_id' => 315, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 630, 'pokemon_id' => 315, 'pokemon_type_id' => 12, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #316
            ['id' => 631, 'pokemon_id' => 316, 'pokemon_type_id' => 16, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 632, 'pokemon_id' => 316, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #317
            ['id' => 633, 'pokemon_id' => 317, 'pokemon_type_id' => 16, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 634, 'pokemon_id' => 317, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #318
            ['id' => 635, 'pokemon_id' => 318, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 636, 'pokemon_id' => 318, 'pokemon_type_id' => 13, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #319
            ['id' => 637, 'pokemon_id' => 319, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 638, 'pokemon_id' => 319, 'pokemon_type_id' => 13, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #320
            ['id' => 639, 'pokemon_id' => 320, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 640, 'pokemon_id' => 320, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #321
            ['id' => 641, 'pokemon_id' => 321, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 642, 'pokemon_id' => 321, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #322
            ['id' => 643, 'pokemon_id' => 322, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 644, 'pokemon_id' => 322, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #323
            ['id' => 645, 'pokemon_id' => 323, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 646, 'pokemon_id' => 323, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #324
            ['id' => 647, 'pokemon_id' => 324, 'pokemon_type_id' => 3, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 648, 'pokemon_id' => 324, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #325
            ['id' => 649, 'pokemon_id' => 325, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 650, 'pokemon_id' => 325, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #326
            ['id' => 651, 'pokemon_id' => 326, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 652, 'pokemon_id' => 326, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #327
            ['id' => 653, 'pokemon_id' => 327, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 654, 'pokemon_id' => 327, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #328
            ['id' => 655, 'pokemon_id' => 328, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 656, 'pokemon_id' => 328, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #329
            ['id' => 657, 'pokemon_id' => 329, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 658, 'pokemon_id' => 329, 'pokemon_type_id' => 18, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #330
            ['id' => 659, 'pokemon_id' => 330, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 660, 'pokemon_id' => 330, 'pokemon_type_id' => 18, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #331
            ['id' => 661, 'pokemon_id' => 331, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 662, 'pokemon_id' => 331, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #332
            ['id' => 663, 'pokemon_id' => 332, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 664, 'pokemon_id' => 332, 'pokemon_type_id' => 13, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #333
            ['id' => 665, 'pokemon_id' => 333, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 666, 'pokemon_id' => 333, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #334
            ['id' => 667, 'pokemon_id' => 334, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 668, 'pokemon_id' => 334, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #335
            ['id' => 669, 'pokemon_id' => 335, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 670, 'pokemon_id' => 335, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #336
            ['id' => 671, 'pokemon_id' => 336, 'pokemon_type_id' => 12, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 672, 'pokemon_id' => 336, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #337
            ['id' => 673, 'pokemon_id' => 337, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 674, 'pokemon_id' => 337, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #338
            ['id' => 675, 'pokemon_id' => 338, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 676, 'pokemon_id' => 338, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #339
            ['id' => 677, 'pokemon_id' => 339, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 678, 'pokemon_id' => 339, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #340
            ['id' => 679, 'pokemon_id' => 340, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 680, 'pokemon_id' => 340, 'pokemon_type_id' => 6, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #341
            ['id' => 681, 'pokemon_id' => 341, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 682, 'pokemon_id' => 341, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #342
            ['id' => 683, 'pokemon_id' => 342, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 684, 'pokemon_id' => 342, 'pokemon_type_id' => 13, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #343
            ['id' => 685, 'pokemon_id' => 343, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 686, 'pokemon_id' => 343, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #344
            ['id' => 687, 'pokemon_id' => 344, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 688, 'pokemon_id' => 344, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #345
            ['id' => 689, 'pokemon_id' => 345, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 690, 'pokemon_id' => 345, 'pokemon_type_id' => 2, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #346
            ['id' => 691, 'pokemon_id' => 346, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 692, 'pokemon_id' => 346, 'pokemon_type_id' => 2, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #347
            ['id' => 693, 'pokemon_id' => 347, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 694, 'pokemon_id' => 347, 'pokemon_type_id' => 15, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #348
            ['id' => 695, 'pokemon_id' => 348, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 696, 'pokemon_id' => 348, 'pokemon_type_id' => 15, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #349
            ['id' => 697, 'pokemon_id' => 349, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 698, 'pokemon_id' => 349, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #350
            ['id' => 699, 'pokemon_id' => 350, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 700, 'pokemon_id' => 350, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #351
            ['id' => 701, 'pokemon_id' => 351, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 702, 'pokemon_id' => 351, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #352
            ['id' => 703, 'pokemon_id' => 352, 'pokemon_type_id' => 1, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 704, 'pokemon_id' => 352, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #353
            ['id' => 705, 'pokemon_id' => 353, 'pokemon_type_id' => 10, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 706, 'pokemon_id' => 353, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #354
            ['id' => 707, 'pokemon_id' => 354, 'pokemon_type_id' => 10, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 708, 'pokemon_id' => 354, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #355
            ['id' => 709, 'pokemon_id' => 355, 'pokemon_type_id' => 10, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 710, 'pokemon_id' => 355, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #356
            ['id' => 711, 'pokemon_id' => 356, 'pokemon_type_id' => 10, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 712, 'pokemon_id' => 356, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #357
            ['id' => 713, 'pokemon_id' => 357, 'pokemon_type_id' => 2, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 714, 'pokemon_id' => 357, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #358
            ['id' => 715, 'pokemon_id' => 358, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 716, 'pokemon_id' => 358, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #359
            ['id' => 717, 'pokemon_id' => 359, 'pokemon_type_id' => 13, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 718, 'pokemon_id' => 359, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #360
            ['id' => 719, 'pokemon_id' => 360, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 720, 'pokemon_id' => 360, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #361
            ['id' => 721, 'pokemon_id' => 361, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 722, 'pokemon_id' => 361, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #362
            ['id' => 723, 'pokemon_id' => 362, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 724, 'pokemon_id' => 362, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #363
            ['id' => 725, 'pokemon_id' => 363, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 726, 'pokemon_id' => 363, 'pokemon_type_id' => 4, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #364
            ['id' => 727, 'pokemon_id' => 364, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 728, 'pokemon_id' => 364, 'pokemon_type_id' => 4, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #365
            ['id' => 729, 'pokemon_id' => 365, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 730, 'pokemon_id' => 365, 'pokemon_type_id' => 4, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #366
            ['id' => 731, 'pokemon_id' => 366, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 732, 'pokemon_id' => 366, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #367
            ['id' => 733, 'pokemon_id' => 367, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 734, 'pokemon_id' => 367, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #368
            ['id' => 735, 'pokemon_id' => 368, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 736, 'pokemon_id' => 368, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #369
            ['id' => 737, 'pokemon_id' => 369, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 738, 'pokemon_id' => 369, 'pokemon_type_id' => 7, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #370
            ['id' => 739, 'pokemon_id' => 370, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 740, 'pokemon_id' => 370, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #371
            ['id' => 741, 'pokemon_id' => 371, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 742, 'pokemon_id' => 371, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #372
            ['id' => 743, 'pokemon_id' => 372, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 744, 'pokemon_id' => 372, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #373
            ['id' => 745, 'pokemon_id' => 373, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 746, 'pokemon_id' => 373, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #374
            ['id' => 747, 'pokemon_id' => 374, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 748, 'pokemon_id' => 374, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #375
            ['id' => 749, 'pokemon_id' => 375, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 750, 'pokemon_id' => 375, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #376
            ['id' => 751, 'pokemon_id' => 376, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 752, 'pokemon_id' => 376, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #377
            ['id' => 753, 'pokemon_id' => 377, 'pokemon_type_id' => 7, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 754, 'pokemon_id' => 377, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #378
            ['id' => 755, 'pokemon_id' => 378, 'pokemon_type_id' => 11, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 756, 'pokemon_id' => 378, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #379
            ['id' => 757, 'pokemon_id' => 379, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 758, 'pokemon_id' => 379, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #380
            ['id' => 759, 'pokemon_id' => 380, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 760, 'pokemon_id' => 380, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #381
            ['id' => 761, 'pokemon_id' => 381, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 762, 'pokemon_id' => 381, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #382
            ['id' => 763, 'pokemon_id' => 382, 'pokemon_type_id' => 4, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 764, 'pokemon_id' => 382, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #383
            ['id' => 765, 'pokemon_id' => 383, 'pokemon_type_id' => 6, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 766, 'pokemon_id' => 383, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #384
            ['id' => 767, 'pokemon_id' => 384, 'pokemon_type_id' => 18, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 768, 'pokemon_id' => 384, 'pokemon_type_id' => 16, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #385
            ['id' => 769, 'pokemon_id' => 385, 'pokemon_type_id' => 14, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 770, 'pokemon_id' => 385, 'pokemon_type_id' => 8, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Pokémon #386
            ['id' => 771, 'pokemon_id' => 386, 'pokemon_type_id' => 8, 'type_slot' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 772, 'pokemon_id' => 386, 'pokemon_type_id' => null, 'type_slot' => 2, 'created_at' => now(), 'updated_at' => now()],

        ];
        DB::table('pokemon_type_registereds')->insert($registereds);
    }
}
