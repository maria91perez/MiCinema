<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'peliculas';

    protected $fillable = [
        'titulo',
        'duracion',
        'clasificacion',
        'sinopsis',
        'trailer_url',
    ];

    public function actores()
    {
        return $this->belongsToMany(Actor::class, 'pelicula_actor');
    }

    public function directores()
    {
        return $this->belongsToMany(Director::class, 'pelicula_director');
    }

    public function proyecciones()
    {
        return $this->hasMany(Proyeccion::class);
    }
}
