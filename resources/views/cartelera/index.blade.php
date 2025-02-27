@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Cartelera de Películas</h1>
    <div class="row">
        @foreach($peliculas as $pelicula)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $pelicula->titulo }}</h5>
                    <p class="card-text">{{ $pelicula->sinopsis }}</p>
                    <p><strong>Duración:</strong> {{ $pelicula->duracion }} min</p>
                    <a href="{{ route('reservas.create', $pelicula->id) }}" class="btn btn-primary">Reservar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
