<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalidaParticular;
use App\Empleado;
class SalidasParticularesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::where("activo",1)->get();
        $salidas = SalidaParticular::with("empleado")->get();
        return view("salidas.index",["salidas"=>$salidas,"empleados"=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        return view("salidas.add",['empleados'=>$empleados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horanuevo = SalidaParticular::create($request->all());
        $empleados = Empleado::all();
        $horas = SalidaParticular::all();

        return redirect()->route("salidas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados = Empleado::all();
        $empleado = Empleado::where("id",$id)->first();
        return view("salidas.addfromempleado",["empleado"=>$empleado,"empleados"=>$empleados]);
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
        $empleados = Empleado::all();
        $salida = SalidaParticular::create($request->all());
        $salidas = SalidaParticular::with("empleado")->get();
        return view("salidas.index",["salidas"=>$salidas,"empleados"=>$empleados]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalidaParticular::destroy($id);
        return redirect()->route("salidas.index")->withErrors(['Eliminado Correctamente']);


    }
}
