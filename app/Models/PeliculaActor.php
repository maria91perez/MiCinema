<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeliculaActor extends Model
{
    use HasFactory;

    protected $table = 'pelicula_actor';

    protected $fillable = [
        'pelicula_id',
        'actor_id',
    ];
}
