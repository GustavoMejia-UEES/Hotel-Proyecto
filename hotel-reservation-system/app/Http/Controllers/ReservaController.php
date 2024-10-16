<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Cliente;
use App\Models\Habitacion;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index() {
        $reservas = Reserva::with('cliente', 'habitacion')->get();
        return view('reservas.index', compact('reservas'));
    }

    public function create() {
        $habitaciones = Habitacion::where('estado', 'disponible')->get();
        $clientes = Cliente::all();
        return view('reservas.create', compact('habitaciones', 'clientes'));
    }

    public function store(Request $request) {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'habitacion_id' => 'required|exists:habitaciones,id',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'estado' => 'required',
            'total' => 'required|numeric',
        ]);

        $reserva = Reserva::create($request->all());

        // Cambiar estado de habitación a 'ocupada'
        $habitacion = Habitacion::find($request->habitacion_id);
        $habitacion->estado = 'ocupada';
        $habitacion->save();

        return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
