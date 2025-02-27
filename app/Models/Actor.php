<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $table = 'actores';

    protected $fillable = [
        'nombre',
    ];

    public function peliculas()
    {
        return $this->belongsToMany(Pelicula::class, 'pelicula_actor');
    }
}
