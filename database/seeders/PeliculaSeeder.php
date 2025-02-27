<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeliculaSeeder extends Seeder
{
    public function run()
    {
        DB::table('peliculas')->insert([
            [
                'BAMBI' => 'Pelicula 1',
                'Un joven ciervo llamado Bambi descubre los valores de la vida 
            en su camino hacia la edad adulta. Lo acompañarán sus nuevos amigos, Tambor, el conejo juguetón; 
            Flor, la tímida y adorable mofeta; y su sabio amigo el Búho.' => 'La película cuenta cómo un pequeño cervatillo llamado Bambi acaba de llegar al mundo. De la mano de sus 
amigos, el conejo, el cuervo, el mapache y el resto de los animales que habitan en este espacio natural, Bambi 
vivirá todo tipo de aventuras con las que se preparará para asumir su papel como príncipe del bosque.8 ene 2025...',
                'imagen' => 'BAMBI.jpg'
            ],
            [
                'titulo' => 'Pelicula 2',
                'sinopsis' => 'Descripción de la película 2...',
                'imagen' => 'ruta_de_la_imagen_2.jpg'
            ],
            [
                'titulo' => 'Pelicula 3',
                'sinopsis' => 'Descripción de la película 3...',
                'imagen' => 'ruta_de_la_imagen_3.jpg'
            ],
            [
                'titulo' => 'Pelicula 4',
                'sinopsis' => 'Descripción de la película 4...',
                'imagen' => 'ruta_de_la_imagen_4.jpg'
            ],
            [
                'titulo' => 'Pelicula 5',
                'sinopsis' => 'Descripción de la película 5...',
                'imagen' => 'ruta_de_la_imagen_5.jpg'
            ],
            [
                'titulo' => 'Pelicula 6',
                'sinopsis' => 'Descripción de la película 6...',
                'imagen' => 'ruta_de_la_imagen_6.jpg'
            ],
            [
                'titulo' => 'Pelicula 7',
                'sinopsis' => 'Descripción de la película 7...',
                'imagen' => 'ruta_de_la_imagen_7.jpg'
            ],
            [
                'titulo' => 'Pelicula 8',
                'sinopsis' => 'Descripción de la película 8...',
                'imagen' => 'ruta_de_la_imagen_8.jpg'
            ],
            [
                'titulo' => 'Pelicula 9',
                'sinopsis' => 'Descripción de la película 9...',
                'imagen' => 'ruta_de_la_imagen_9.jpg'
            ],
            [
                'titulo' => 'Pelicula 10',
                'sinopsis' => 'Descripción de la película 10...',
                'imagen' => 'ruta_de_la_imagen_10.jpg'
            ],
            [
                'titulo' => 'Pelicula 11',
                'sinopsis' => 'Descripción de la película 10...',
                'imagen' => 'ruta_de_la_imagen_10.jpg'
            ],
            [
                'titulo' => 'Pelicula 12',
                'sinopsis' => 'Descripción de la película 10...',
                'imagen' => 'ruta_de_la_imagen_10.jpg'
            ],
        ]);
    }
}
