<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    use HasFactory;

    protected $table = 'boletos';

    protected $fillable = [
        'reserva_id',
        'codigo_qr',
    ];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}
