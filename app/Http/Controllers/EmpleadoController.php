<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use App\Condicion;
use App\Ausencia;
use Carbon\Carbon;
use App\DiasTomados;
use App\HoraExtra;
use App\DiaDisponible;
use App\Franco;
use App\SalidaParticular;
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
        $empleados = Empleado::where("activo",1)->get();
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
      $horasExtra = HoraExtra::where("empleados_id",$id)->get();
      $francos = Franco::where("empleados_id",$id)->get();
  // return $diasTomados;

  
  $totalVacaciones = 0;

  foreach ($diasTomados as $dia){
      $totalVacaciones = $totalVacaciones + $dia->cantidad_dias; 
  }


  $semanas = round($totalVacaciones / 7);
       $numero = $semanas * 2;
       $dias_habiles = $totalVacaciones;
    


  $diasDisponibles =  $empleado->diasDisponibles() - $dias_habiles;
//return $diasDisponibles;

     return view('ausencias.individual',['empleado'=>$empleado,
      'ausencias'=>$ausencias,'empleados'=>$empleados,
      'diasTomados'=>$diasTomados,'diasDisponibles'=>$diasDisponibles,
      'diasHabiles'=>$dias_habiles,"horasExtra"=>$horasExtra, "francos"=>$francos]);
  //return response(['empleado'=>$empleado, 'ausencias'=>$ausencias,'empleados'=>$empleados,'diasTomados'=>$diasTomados]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados = Empleado::all();
$empleado = Empleado::find($id);
        return view('empleados.edit',['empleado'=>$empleado, "empleados"=>$empleados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $empleado = Empleado::find($id);
        $empleado->update($request->all());
        $empleados = Empleado::all();
        return view('dashboard',['empleados'=>$empleados]);
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
