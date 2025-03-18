@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Confirmación de Reserva para cada asistente</h1>
    <p>Gracias por tu reserva. Aquí le entrego su boleto gracias:</p>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $reserva->Nombre de la pelicula->titulo }}</h5>
            <p><strong>Asientos:</strong> {{ implode(', ', json_decode($reserva->asientos)) }}</p>
            <p><strong>Proyección:</strong> {{ $reserva->proyeccion->hora_inicio }}</p>
            <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(200)->generate(route('reservas.show', $reserva->id))) }}" alt="Código QR">
        </div>
    </div>
</div>
@endsection
