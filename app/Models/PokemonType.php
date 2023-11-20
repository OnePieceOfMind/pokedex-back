<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonType extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'color',
        'image',
    ];

    
    public function pokemons(){
        return $this->belongsToMany(Pokemon::class, 'pokemon_type_registered', 'pokemon_type_id', 'pokemon_id');
    }
}
