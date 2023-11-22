<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request) {
    
        $data = $request->input('login', null);
        $params = json_decode($data, true);
    
        if (!empty($params)) {
            $params = array_map('trim', $params);
    
            $validate = Validator::make($params, [
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if ($validate->fails()) {
                return response()->json($validate->errors()->first(), 400);
            }
            if (Auth::attempt(['email' => $params['email'], 'password' => $params['password']])) {
                    $user = Auth::user(); 

                    $userData = [
                        'id' => $user->id,
                        'email' => $user->email,
                        'name' => $user->name,
                        'surname' => $user->surname,
                        'role' => $user->role,
                        'image' => $user->image,
                        'description' => $user->description,
                        'created_at' => $user->created_at,
                    ];

                    $token = $request->user()->createToken('MyApp')->accessToken;
                    
                    return response()->json([
                        'status' => 'success',
                        'token' => $token,
                        'user' => $userData], 200);
            }else{

                return response()->json(['status' => 'error', 'message' => 'Usuario o Contraseña invalida'], 401);

             }
            
        } else {
            return response()->json(['status' => 'error', 'message' => 'Error de  Autentificacion'], 401);
        }
    }
    

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        $data = $request->input('json', null);
        $params = json_decode($data, true);
        if(!empty($params)){
            $params = array_map('trim', $params);
            
            $validate = Validator::make($params, [
                'name' => 'required|alpha',
                'surname' => 'required|alpha',
                'email' => 'required|email|unique:users',
                'password' => 'required',

            ]);
            if($validate->fails()){
                return response()->json(['status' => 'error', 'message' => $validate->errors()->first()] , 400);
            }else {
                $user = new User();
                $user->name = $params['name'];
                $user->surname = $params['surname'];
                $user->role = "ROLE_USER";
                $user->email = $params['email'];
                $user->password = password_hash($params['password'], PASSWORD_BCRYPT, ['cost' => 4]);
                $user->save();
        
                return response()->json(['status' => 'success', 'message' => 'Usuario Registrado'], 200);

            }

        } else
        {
            return response()->json(['status' => 'error', 'message' => 'Faltan Datos'], 401);
        }
   
    }

    public function show(Request $request){

        $user = $request->user();

        return response()->json([
                                'status' => 'success', 
                                'message' => 'OK',
                                'data' => $user ], 200);

    }

    public function update(Request $request)
    {
  
        $data = $request->input('update_user', null);
        $params = json_decode($data, true);

        if(!empty($params)){
            $user = $request->user();
            $params = array_map('trim', $params);
            $validate = Validator::make($params, [
                'name' => 'required|alpha',
                'surname' => 'required|alpha',
                'email' => 'required|email|unique:users,email,'.$user->id,

            ]);

            unset($params['id']);
            unset($params['role']);
            unset($params['password']);

            if($validate->fails()){
                return response()->json($validate->errors()->first(), 400);

            }else {
                
                $user_update = User::where('id', '=', $user->id)->first();
                $user_update->name = $params['name'];
                $user_update->surname = $params['surname'];
                $user_update->email = $params['email'];
                $user_update->description = $params['description'];
                $user_update->image = $params['image'];
                $user_update->save();
        
                return response()->json([
                    'status' => 'success', 
                    'message' => 'Datos Actualizados',
                    'data' => $user_update
                ], 200);

            }
    
        }
    }

    public function password_update(Request $request)
    {
  
        $data = $request->input('password', null);
        $params = json_decode($data, true);

        if(!empty($params)){
            $user = $request->user();
            $params = array_map('trim', $params);
            $validate = Validator::make($params, [
                'password_old' => [
                    'required',
                    function ($attribute, $value, $fail) use ($user) {
                        if (!Hash::check($value, $user->password)) {
                            $fail('La contraseña antigua no es correcta.');
                        }
                    },
                ],
                'password_new' => 'required',
                'password_confirm' => 'required|same:password_new',

            ]);

            if($validate->fails()){
                return response()->json($validate->errors()->first(), 422);

            }else {
                $password = User::where('id', '=', $user->id)->first();
                $password->password = password_hash($params['password_new'], PASSWORD_BCRYPT, ['cost' => 4]);
                $password->save();
        
                return response()->json([
                    'status' => 'success', 
                    'message' => 'Datos Actualizados',
                ], 200);

            }
    
        }
    }

}
