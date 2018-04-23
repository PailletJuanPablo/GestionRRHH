<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use App\Condicion;
use App\Ausencia;
use Carbon\Carbon;
use App\DiasTomados;
class EmpleadoController extends Controller
{


    public function __construct(){
        $this->middleware('auth');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('dashboard',['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condiciones = Condicion::all();
        $empleados = Empleado::all();
        $this->$empleados = $empleados;
        return view('empleados.add',['condiciones'=>$condiciones,'empleados'=>$empleados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = Empleado::create($request->all());
        $condiciones = Condicion::all();
        $empleados = Empleado::all();
        $this->$empleados = $empleados;
        return view('empleados.add',['condiciones'=>$condiciones,'empleados'=>$empleados]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleados = Empleado::all();
    $empleado = Empleado::find($id);
      $ausencias = Ausencia::with("tipo")->where('empleados_id',$id)->get();
      $ausencias = $ausencias->groupBy('tipo.nombre');
      $diasTomados = DiasTomados::where('empleados_id',$id)->get();
  // return $diasTomados;
   
      return view('ausencias.individual',['empleado'=>$empleado, 'ausencias'=>$ausencias,'empleados'=>$empleados,'diasTomados'=>$diasTomados]);
  // return response(['empleado'=>$empleado, 'ausencias'=>$ausencias]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
