<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PokemonRegionController;
use App\Http\Controllers\PokemonTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::prefix('category')->group( function () {

    Route::get('/', [CategoryController::class, 'index']);
    Route::post('/', [CategoryController::class, 'create']);
    Route::get('/{id}/show', [CategoryController::class, 'show']);
    Route::get('/{id}', [CategoryController::class, 'delete']);
    Route::patch('/{id}', [CategoryController::class, 'update']);

});


Route::prefix('region')->group( function () {

    Route::get('/', [PokemonRegionController::class, 'index']);

});

Route::prefix('types')->group( function () {

    Route::get('/', [PokemonTypeController::class, 'index']);

});


Route::prefix('pokemon')->group( function () {

    Route::get('/', [PokemonController::class, 'index']);
    Route::post('/', [PokemonController::class, 'create']);
    Route::get('/{id}/show', [PokemonController::class, 'show']);
    Route::patch('/{id}', [PokemonController::class, 'update']);
    Route::post('/filter/{name?}', [PokemonController::class, 'find']);

});


Route::prefix('auth')->group( function () {
    Route::middleware(['auth:api'])->group(function () {
        Route::get('/user', [UserController::class, 'show']);
        Route::patch('/user/update', [UserController::class, 'update']);
    });
});
