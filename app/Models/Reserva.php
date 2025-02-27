<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'usuario_id',
        'proyeccion_id',
        'asientos', // Guardado como JSON
    ];

    protected $casts = [
        'asientos' => 'array', // Convierte el JSON en un array de PHP automáticamente
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function proyeccion()
    {
        return $this->belongsTo(Proyeccion::class);
    }

    public function boletos()
    {
        return $this->hasMany(Boleto::class);
    }
}
