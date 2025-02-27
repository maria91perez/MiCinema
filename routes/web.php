<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarteleraController;
use App\Http\Controllers\HomeController;  // Asegúrate de importar el controlador si es necesario

use App\Http\Controllers\PeliculaController;

Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas.index');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cartelera', [CarteleraController::class, 'index'])->name('cartelera');

Route::get('/', [HomeController::class, 'index']);  // Cambia 'HomeController' por el controlador correspondiente
Route::get('/cartelera', [CarteleraController::class, 'index'])->name('cartelera');

Route::get('/', [HomeController::class, 'index'])->name('home');


require __DIR__.'/auth.php';
