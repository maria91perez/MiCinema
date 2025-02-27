@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservar Asientos para {{ $pelicula->titulo }}</h1>

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <input type="hidden" name="proyeccion_id" value="{{ $proyecciones[0]->id }}">

        <div class="form-group">
            <label>Selecciona tus asientos</label>
            <input type="text" name="asientos" class="form-control" placeholder="Ej: A1, A2, B3" required>
        </div>

        <button type="submit" class="btn btn-success">Confirmar Reserva</button>
    </form>
</div>
@endsection
