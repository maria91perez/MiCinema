<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Illuminate\Support\Str;
use Illuminate\Support\Str;


class CarteleraController extends Controller
{

    public function index()
    {
        $peliculas = [
            (object)['BAMBI' => 'Pelicula 1', 'Un joven ciervo llamado Bambi descubre los valores de la vida 
            en su camino hacia la edad adulta. Lo acompañarán sus nuevos amigos, Tambor, el conejo juguetón; 
            Flor, la tímida y adorable mofeta; y su sabio amigo el Búho.
' => 'La película cuenta cómo un pequeño cervatillo llamado Bambi acaba de llegar al mundo. De la mano de sus 
amigos, el conejo, el cuervo, el mapache y el resto de los animales que habitan en este espacio natural, Bambi 
vivirá todo tipo de aventuras con las que se preparará para asumir su papel como príncipe del bosque.8 ene 2025
...', 'imagen' => 'BAMBI.jpg'],
            (object)['titulo' => 'Pelicula 2', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta2.jpg'],
            (object)['titulo' => 'Pelicula 3', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta3.jpg'],
            (object)['titulo' => 'Pelicula 4', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta4.jpg'],
            (object)['titulo' => 'Pelicula 5', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta5.jpg'],
            (object)['titulo' => 'Pelicula 6', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta6.jpg'],
            (object)['titulo' => 'Pelicula 7', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta7.jpg'],
            (object)['titulo' => 'Pelicula 8', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta8.jpg'],
            (object)['titulo' => 'Pelicula 9', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta9.jpg'],
            (object)['titulo' => 'Pelicula 10', 'sinopsis' => 'Descripción...', 'imagen' => 'ruta10.jpg'],
        ];
    
        return view('cartelera', compact('peliculas'));
    }
    

    public function cartelera()
{
    $peliculas = Pelicula::all();  // Obtener todas las películas
    return view('welcome', compact('peliculas'));  // Pasar la variable a la vista
}

}