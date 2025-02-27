<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $proyecciones = Proyeccion::where('pelicula_id', $id)->get();

        return view('reservas.create', compact('pelicula', 'proyecciones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'proyeccion_id' => 'required',
            'asientos' => 'required'
        ]);

        Reserva::create([
            'usuario_id' => auth()->id(),
            'proyeccion_id' => $request->proyeccion_id,
            'asientos' => json_encode($request->asientos),
        ]);

        return redirect()->route('cartelera')->with('success', 'Reserva realizada con éxito.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
