<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeliculaDirector extends Model
{
    use HasFactory;

    protected $table = 'pelicula_director';

    protected $fillable = [
        'pelicula_id',
        'director_id',
    ];
}
