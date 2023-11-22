<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use App\Models\PokemonRegion;


class PokemonRegionController extends Controller
{
    public function __construct()
    {
        //$this.region = new PokemonRegion;
    }

    public function index()
    {
        $pokemon = PokemonRegion::get();

        if ($pokemon->isEmpty()) {
            return response()->json(['message' => 'No se encontraron pokemones'], 404);
        }

        return $pokemon;

    }

    public function find(Request $request)
{
    $query =  new PokemonRegion;
    $data = $request->input('regionSearch', null);
    $params = json_decode($data, true);

        $textSearch = $params['regionText'];
        // Aplicar el filtro de búsqueda si $textRegion no está vacío
        if ($textSearch !== null) {
            $region = $query->whereRaw('LOWER(name) ILIKE ?', ['%' . strtolower($textSearch) . '%'])->get();
           
            if ($region->isEmpty()) {
                return response()->json(['message' => 'No se encontró ningún Pokémon'], 204);
            }

            return response()->json([
                'message' => 'OK',
                'data' => $region
            ], 200);
        }
    }
}
