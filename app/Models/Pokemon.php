<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons'; 

    protected $fillable = [
        'id',
        'code',
        'name',
        'image',
        'pokemon_region_id',
        'description',
    ];

    public function pokemonRegion(){
        return $this->belongsTo(PokemonRegion::class);
    }

    public function types(){
        return $this->belongsToMany(PokemonType::class, 'pokemon_type_registereds', 'pokemon_id', 'pokemon_type_id');
    }

}
