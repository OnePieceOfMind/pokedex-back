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

    public function find(Request $request)
    {
        $query = PokemonType::get();
        $data = $request->input('typeSearch', null);
        $params = json_decode($data, true);
        if(!empty($params)){
            $typeSearch = $params['typeSearch'];
        // Si $name no es nulo, aplicar el filtro de búsqueda
            if ($typeSearch !== null) {
                $query->whereRaw('LOWER(name) ILIKE ?', ['%' . strtolower($typeSearch) . '%']);
            }

            $type = $query->get();

            if ($type->isEmpty()) {
                return response()->json(['message' => 'No se encontró el tipo de pokemon'], 204);
            }

            return response()->json([
                'message' => 'OK',
                'data' => $type
            ], 200);

        }else{
            return response()->json([
                'message' => 'OK',
                'data' => $query
            ], 200);
        }
    }
}
