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
        ];
        DB::table('pokemon_type_registereds')->insert($registereds);
    }
}
