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

    public function pokemon(){
        return $this->hasOne(PokemonRegion::class);
    }
}
