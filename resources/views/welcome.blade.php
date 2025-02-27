<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Cinema </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('cartelera') }}">Cartelera</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="bg-primary text-white text-center py-5">
        <h1>Bienvenido a Cinema </h1>
        <p>Reserva tus boletos y disfruta de las mejores películas</p>
    </header>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Cartelera</h2>
        <div class="row">
        @foreach($peliculas as $pelicula)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ $pelicula->imagen }}" class="card-img-top" alt="{{ $pelicula->titulo }}">
            <div class="card-body">
                <h5 class="card-title">{{ $pelicula->titulo }}</h5>
                <p class="card-text">{{ Str::limit($pelicula->sinopsis, 100) }}</p>
                <a href="{{ route('reservas.create', $pelicula->id) }}" class="btn btn-primary">Reservar</a>
            </div>
        </div>
    </div>
@endforeach
        </div>
    </div>
    
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Cinema  - Todos los derechos reservados</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

