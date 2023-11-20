<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PokemonRegion;


class PokemonRegionController extends Controller
{
    public function index()
    {
        $pokemon = PokemonRegion::get();

        if ($pokemon->isEmpty()) {
            return response()->json(['message' => 'No se encontraron pokemones'], 404);
        }

        return $pokemon;

    }
}
