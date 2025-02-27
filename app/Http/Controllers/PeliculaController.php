<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   /* public function index()
    {
        $peliculas = Pelicula::with('proyecciones')->get();
        return view('cartelera.index', compact('peliculas'));
    }*/

   /* public function index()
{
    $peliculas = Pelicula::all(); // Obtener todas las películas desde la base de datos
    return view('nombre-de-tu-vista', compact('peliculas')); // Pasar la variable a la vista
}*/

public function index()
{
    // Obtener todas las películas desde la base de datos
    $peliculas = Pelicula::all(); 
    
    // Pasar la variable $peliculas a la vista 'welcome'
    return view('welcome', compact('peliculas'));

    dd($peliculas);  // Esto imprimirá la variable $peliculas y detendrá la ejecución.

}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
