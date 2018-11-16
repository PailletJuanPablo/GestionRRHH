<?php

namespace App\Http\Controllers;

use App\Ausencia;
use App\Empleado;
use App\TipoAusencia;
use Illuminate\Http\Request;

class AusenciaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::orderBy('apellido_nombre')->get();

    $empleadosAusencias = Ausencia::with("empleado")->with("tipo")->get();
       // return $empleadosAusencias;
        return view("ausencias.list", ["empleados" => $empleados, "empleadosAusencias" => $empleadosAusencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $tipos = TipoAusencia::all();

        return view('ausencias.add', ['empleados' => $empleados, 'tipos' => $tipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ausencia = Ausencia::create($request->all());
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $tipos = TipoAusencia::all();
        //  return $ausencia;

        // return $request;

//return $request->fecha_ausencia;
        if ($request->especial === "on") {
            $ausencia = Ausencia::create(
                ["empleados_id" => $request->empleados_id,
                    "tipos_ausencias_id" => $request->tipos_ausencias_id,
                    "justificado" => $request->justificado,
                    "observaciones" => $request->observaciones,
                    "ausencia_multiple" => 1,
                    "inicio_ausencia" => $request->fecha_inicio,
                    "finalizacion_ausencia" => $request->fecha_finalizacion,
                    "dias_habiles_ausencia" => $request->dias_habiles_ausencia]
            );

        } else {

            $ausencia = Ausencia::create(
                ["empleados_id" => $request->empleados_id,
                    "tipos_ausencias_id" => $request->tipos_ausencias_id,
                    "justificado" => $request->justificado,
                    "fecha_ausencia" => $request->fecha_ausencia,
                    "observaciones" => $request->observaciones,
                    "ausencia_multiple" => 0,
                    "dias_habiles_ausencia" => 1]
            );
        }

        return view('dashboard', ['empleados' => $empleados, 'tipos' => $tipos]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ausencia  $ausencia
     * @return \Illuminate\Http\Response
     */
    public function show(Ausencia $ausencia)
    {
        $ausencias = Ausencia::with("empleado", "tipo")->find($ausencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ausencia  $ausencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $empleado = Empleado::find($id);
        $tipos = TipoAusencia::all();

        return view('ausencias.addempleadoausencia', ['empleados' => $empleados, 'empleado' => $empleado, 'tipos' => $tipos]);

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
       // $ausencia = Ausencia::create($request->all());

        // $empleado->update($request->all());

        $empleados = Empleado::orderBy('apellido_nombre')->get();
        //return $ausencia;
     if ($request->especial === "on") {
            $ausencia = Ausencia::create(
                ["empleados_id" => $request->empleados_id,
                    "tipos_ausencias_id" => $request->tipos_ausencias_id,
                    "justificado" => $request->justificado,
                    "observaciones" => $request->observaciones,
                    "ausencia_multiple" => 1,
                    "inicio_ausencia" => $request->fecha_inicio,
                    "finalizacion_ausencia" => $request->fecha_finalizacion,
                    "dias_habiles_ausencia" => $request->dias_habiles_ausencia]
            );

        } else {

            $ausencia = Ausencia::create(
                ["empleados_id" => $request->empleados_id,
                    "tipos_ausencias_id" => $request->tipos_ausencias_id,
                    "justificado" => $request->justificado,
                    "fecha_ausencia" => $request->fecha_ausencia,
                    "observaciones" => $request->observaciones,
                    "ausencia_multiple" => 0,
                    "dias_habiles_ausencia" => 1]
            );
        }

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
