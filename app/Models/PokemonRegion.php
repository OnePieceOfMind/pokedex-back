<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonRegion extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name',
    ];

    protected $table = 'pokemon_regions'; 

    public function pokemon(){
        return $this->hasOne(Pokemon::class);
    }
}
