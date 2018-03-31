<?php

namespace App\Http\Controllers;

use App\TipoAusencia;
use Illuminate\Http\Request;
use App\Empleado;

class TipoAusenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        $tipos = TipoAusencia::all();
        return view('tiposausencia.list', ['tipos' => $tipos,'empleados'=>$empleados]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        $empleados = Empleado::all();

        return view('tiposausencia.add',['empleados'=>$empleados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = Empleado::all();

        if ($request->has(['remunerada'])) {
            $tipoAusencia = TipoAusencia::create($request->all());
            $tipos = TipoAusencia::all();
            return view('tiposausencia.list', ['tipos' => $tipos,'empleados'=>$empleados]);
        } else {
           $request['remunerada'] = 0;
            $tipoAusencia = TipoAusencia::create($request->all());
           $tipos = TipoAusencia::all();
           return view('tiposausencia.list', ['tipos' => $tipos,'empleados'=>$empleados]);
       
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoAusencia  $tipoAusencia
     * @return \Illuminate\Http\Response
     */
    public function show(TipoAusencia $tipoAusencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoAusencia  $tipoAusencia
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoAusencia $tipoAusencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoAusencia  $tipoAusencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAusencia $tipoAusencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoAusencia  $tipoAusencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoAusencia $tipoAusencia)
    {
        //
    }
}
