<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Validator;

class PokemonController extends Controller
{

    public function index()
    {
        $pokemon = Pokemon::with(['pokemonRegion', 'types'])->select('*')->get();

        if ($pokemon->isEmpty()) {
            return response()->json(['message' => 'No se encontraron pokemones'], 404);
        }

        return $pokemon;

    }

    public function show($id)
    {
        $pokemon = Pokemon::with(['pokemonRegion', 'types'])->find($id);
        if (!$pokemon) {
            return response()->json(['message' => 'No se encontraró el pokemon'], 404);
        }

        return response()->json(['message' => 'OK',
                                 'data' => $pokemon ], 200);

    }

    public function find(Request $request)
    {
        $query = Pokemon::with(['pokemonRegion', 'types']);
        $data = $request->input('filters', null);
        $params = json_decode($data, true);
        if(!empty($params)){
            $searchText = $params['searchText'];
            $regions = $params['regions'];
            $types = $params['types'];
        // Si $name no es nulo, aplicar el filtro de búsqueda
            if ($searchText !== null) {
                $query->whereRaw('LOWER(name) ILIKE ?', ['%' . strtolower($searchText) . '%']);
            }

            if (!empty($regions)) {
                $query->whereIn('pokemon_region_id', $regions);
            }

            if (!empty($types)) {
                 $query = $query->whereHas('types', function($q) use($types){
                        $q->whereIn('pokemon_type_id',$types);
                    });
            }

            $pokemon = $query->get();

            if ($pokemon->isEmpty()) {
                return response()->json(['message' => 'No se encontró ningún Pokémon'], 204);
            }

            return response()->json([
                'message' => 'OK',
                'data' => $pokemon
            ], 200);

        }else{
            return response()->json([
                'message' => 'OK',
                'data' => $query
            ], 200);
        }
    }
    


    public function create(Request $request)
    {
        $data = $request->input('pokemon', null);
        $params = json_decode($data, true);
        if(!empty($params)){
            //$params = array_map('trim', $params);
            
            $validate = Validator::make($params, [
                'name' => 'required|alpha',
            ]);
            if($validate->fails()){
                return response()->json($validate->errors()->first(), 400);
            }else {
                $pokemon = new Pokemon();
                $pokemon->code = $params['code'];
                $pokemon->name = $params['name'];
                $pokemon->image = $params['image'];
                $pokemon->pokemon_region_id = $params['pokemon_region'];
                $pokemon->description = $params['description'];
                $pokemon->save();

                $types = $params['pokemon_types'];

                $typeSlot = [];

                foreach($types as $index => $type){
                    $typeSlot[$type] = ['pokemon_id' => $pokemon->id, 'type_slot' => $index +1];
                }

                if(!in_array(2, $types)){
                    $typeSlot[2] = ['pokemon_id' => $pokemon->id, 'type_slot' => 2, 'pokemon_type_id' => null];
                }

                $pokemon->types()->sync($typeSlot);

                $pokemon->save();
                return response()->json(['message' => 'Pokemon Registrado'], 200);

            }

        } else
        {
            return response()->json(['message' => 'Faltan Datos'], 401);
        }
   
    }

    public function update(Request $request, $id)
    {
  
        $data = $request->input('pokemon', null);
        $params = json_decode($data, true);

        if(!empty($params)){
            //$params = array_map('trim', $params);
            $validate = Validator::make($params, [
                'name' => 'required|alpha',
            ]);

            unset($params['id']);

            if($validate->fails()){
                return response()->json($validate->errors()->first(), 400);

            }else {
                $pokemon = Pokemon::where('id', '=', $id)->first();
                $pokemon->code = $params['code'];
                $pokemon->name = $params['name'];
                $pokemon->image = $params['image'];
                $pokemon->pokemon_region_id = $params['pokemon_region'];
                $types = $params['pokemon_types'];

                $typeSlot = [];

                foreach($types as $index => $type){
                    $typeSlot[$type] = ['type_slot' => $index +1];
                }

                if(!in_array(2, $types)){
                    $typeSlot[2] = ['type_slot' => 2, 'pokemon_type_id' => null];
                }

                $pokemon->types()->sync($typeSlot);
                $pokemon->description = $params['description'];

                $pokemon->save();
        
                return response()->json(['message' => 'Datos del Pokemon Actualizados'], 200);

            }
    
        }else{

            return response()->json(['message' => 'Faltan Datos'], 401);

        }
    }
}
