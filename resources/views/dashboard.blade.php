<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin - Cinema - Lorena</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('peliculas.index') }}">Películas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('salas.index') }}">Salas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('proyecciones.index') }}">Proyecciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="{{ route('logout') }}">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <h1 class="text-center">Panel de Administración</h1>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Películas</h5>
                        <p class="card-text">Administrar películas en cartelera.</p>
                        <a href="{{ route('peliculas.index') }}" class="btn btn-light">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Salas</h5>
                        <p class="card-text">Gestionar salas de cine.</p>
                        <a href="{{ route('salas.index') }}" class="btn btn-light">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Proyecciones</h5>
                        <p class="card-text">Organizar horarios de películas.</p>
                        <a href="{{ route('proyecciones.index') }}" class="btn btn-light">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Reservas</h5>
                        <p class="card-text">Administrar reservas de clientes.</p>
                        <a href="{{ route('reservas.index') }}" class="btn btn-light">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Cinema Online - Panel de Administración</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

