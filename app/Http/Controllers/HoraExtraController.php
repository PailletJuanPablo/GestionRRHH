<?php

namespace App\Http\Controllers;

use App\HoraExtra;
use App\Empleado;
use Illuminate\Http\Request;

class HoraExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $horas = HoraExtra::all();
        $empleados = Empleado::orderBy('apellido_nombre')->get();

        return view("horasextras.list",['horas'=>$horas,'empleados'=>$empleados]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $empleados = Empleado::orderBy('apellido_nombre')->get();
        return view("horasextras.add",['empleados'=>$empleados]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $horanuevo = HoraExtra::create($request->all());
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $horas = HoraExtra::all();

        return view("horasextras.list",['horas'=>$horas,'empleados'=>$empleados]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HoraExtra  $horaExtra
     * @return \Illuminate\Http\Response
     */
    public function show(HoraExtra $horaExtra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HoraExtra  $horaExtra
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $empleado = Empleado::find($id);
        return view ("horasextras.edit",['empleados'=>$empleados,'empleado'=>$empleado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HoraExtra  $horaExtra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $horaExtra = HoraExtra::create($request->all());
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $horas = HoraExtra::all();

        return view("horasextras.list",['horas'=>$horas,'empleados'=>$empleados]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HoraExtra  $horaExtra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        HoraExtra::destroy($id);
        return redirect()->back()->withErrors(['Hora Extra Eliminada Correctamente']);
    }
}
