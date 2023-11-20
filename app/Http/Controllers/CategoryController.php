<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }
    
    public function index()
    {
        $category = Category::all();

        if ($category->isEmpty()) {
            return response()->json(['message' => 'No se encontraron categorías'], 404);
        }

        return response()->json(['message' => 'OK',
                                 'data' => $category ], 200);

    }

    public function create(Request $request)
    {
        $data = $request->input('category', null);
        $params = json_decode($data, true);
        if(!empty($params)){
            $params = array_map('trim', $params);
            
            $validate = Validator::make($params, [
                'name' => 'required|alpha',
            ]);
            if($validate->fails()){
                return response()->json($validate->errors()->first(), 400);
            }else {
                $category = new Category();
                $category->name = $params['name'];
                $category->save();
                return response()->json(['message' => 'Categoria Agregada'], 200);

            }

        } else
        {
            return response()->json(['message' => 'Faltan Datos'], 401);
        }
   
    }

    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'No se encontraró la categoría'], 404);
        }

        return response()->json(['message' => 'OK',
                                 'data' => $category ], 200);

    }

    public function update(Request $request, $id)
    {
  
        $data = $request->input('update_cat', null);
        $params = json_decode($data, true);

        if(!empty($params)){
            $params = array_map('trim', $params);
            $validate = Validator::make($params, [
                'name' => 'required|alpha',
            ]);

            unset($params['id']);

            if($validate->fails()){
                return response()->json($validate->errors()->first(), 400);

            }else {
                
                $category_update = Category::where('id', '=', $id)->first();
                $category_update->name = $params['name'];
                $category_update->save();
        
                return response()->json(['message' => 'Datos Actualizados'], 200);

            }
    
        }else{

            return response()->json(['message' => 'Faltan Datos'], 401);

        }
    }

    public function delete($id)
    {
        $category = Category::where('id', $id)->delete();
        if(!$category){
            return response()->json(['message' => 'No existe categoria'], 404);
        }
        return response()->json(['message' => 'Categoria eliminada'], 200);

    }

}
