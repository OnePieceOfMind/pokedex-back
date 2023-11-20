<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PokemonType;

class PokemonTypeController extends Controller
{
    public function index(){

        $types = PokemonType::get();

        if ($types->isEmpty()) {
            return response()->json(['message' => 'No se encontraron pokemones'], 404);
        }

        return $types;
    }
}
