<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\DiasTomados;
use Carbon\Carbon;
class VacacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        $vacaciones = DiasTomados::with('empleado')->get();
        return view('vacaciones.index',['empleados'=>$empleados,'vacaciones'=>$vacaciones]);
        //return response(['empleados'=>$empleados,'vacaciones'=>$vacaciones]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        return view("vacaciones.add",['empleados'=>$empleados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      

         //   $fecha_inicio = $request['fecha_inicio'];
          //  $fecha_finalizacion = $request['fecha_finalizacion'];

            //echo $date1->diffInYears($date2);   
          //  $cantidad_dias = ( Carbon::parse($fecha_finalizacion))->diffInDays(Carbon::parse($fecha_inicio));

/*
            $vacacion = DiasTomados::create([
                'empleados_id'=>$request['empleados_id'],
                'fecha_inicio'=>$fecha_inicio,
                'fecha_finalizacion'=>$fecha_finalizacion,
                'cantidad_dias'=>$cantidad_dias,
                'observaciones'=>$request['observaciones']
            ]);*/
            $vacacion = DiasTomados::create($request->all());
           // return $vacacion;

            $empleados = Empleado::all();
        return view("dashboard",['empleados'=>$empleados]);
        

       // calcularDias();
        
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
        $empleados = Empleado::all();
        $empleado = Empleado::find($id);

        return view('vacaciones/empleadoadd',["empleados"=>$empleados,"empleado"=>$empleado]);
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
        $fecha_inicio = $request['fecha_inicio'];
        $fecha_finalizacion = $request['fecha_finalizacion'];

        //echo $date1->diffInYears($date2);   
        $cantidad_dias = ( Carbon::parse($fecha_finalizacion))->diffInDays(Carbon::parse($fecha_inicio));
        $vacacion = DiasTomados::create([
            'empleados_id'=>$id,
            'fecha_inicio'=>$fecha_inicio,
            'fecha_finalizacion'=>$fecha_finalizacion,
            'cantidad_dias'=>$cantidad_dias,
            'observaciones'=>$request['observaciones']
        ]);
        $empleados = Empleado::all();
        return view("dashboard",['empleados'=>$empleados]);
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
