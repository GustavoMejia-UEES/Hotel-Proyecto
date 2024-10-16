<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function index() {
        $habitaciones = Habitacion::all();
        return view('habitaciones.index', compact('habitaciones'));
    }

    public function create() {
        return view('habitaciones.create');
    }

    public function store(Request $request) {
        $request->validate([
            'numero' => 'required|max:10',
            'tipo' => 'required|max:50',
            'capacidad' => 'required|integer',
            'precio_noche' => 'required|numeric',
            'estado' => 'required',
            'descripcion' => 'nullable',
        ]);

        Habitacion::create($request->all());
        return redirect()->route('habitaciones.index')->with('success', 'Habitación creada exitosamente.');
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
