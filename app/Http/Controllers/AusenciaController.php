<?php

namespace App\Http\Controllers;

use App\Ausencia;
use App\Empleado;
use App\TipoAusencia;
use Illuminate\Http\Request;

class AusenciaController extends Controller
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
        
$ausencias = Ausencia::with("empleado","tipo")->get();
return $ausencias;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        $tipos = TipoAusencia::all();

        return view('ausencias.add', ['empleados' => $empleados,'tipos'=>$tipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ausencia = Ausencia::create($request->all());
        $empleados = Empleado::all();
        $tipos = TipoAusencia::all();
      //  return $ausencia;
      return view('dashboard', ['empleados' => $empleados,'tipos'=>$tipos]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ausencia  $ausencia
     * @return \Illuminate\Http\Response
     */
    public function show(Ausencia $ausencia)
    {
        $ausencias = Ausencia::with("empleado","tipo")->find($ausencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ausencia  $ausencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados = Empleado::all();
        $empleado = Empleado::find($id);
        $tipos = TipoAusencia::all();

        return view('ausencias.addempleadoausencia',['empleados'=>$empleados,'empleado'=>$empleado,'tipos'=>$tipos]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ausencia  $ausencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ausencia = Ausencia::create($request->all());

       // $empleado->update($request->all());

        $empleados = Empleado::all();
       //return $ausencia;
      return view('dashboard', ['empleados' => $empleados]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ausencia  $ausencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ausencia $ausencia)
    {
        //
    }
}
