<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pelicula; // Asegúrate de importar el modelo correcto

class HomeController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all(); // Obtener todas las películas de la BD

        return view('welcome', compact('peliculas')); // Pasar $peliculas a la vista
    }
}

