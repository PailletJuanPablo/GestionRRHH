<?php

namespace App\Http\Controllers;

use App\Asistencia;
use Illuminate\Http\Request;
use App\Ausencia;

class AsistenciaController extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ausenciaEliminar = Ausencia::find($request->id);
        $ausenciaEliminar->delete();
        return redirect()->back()->withErrors(['Ausencia Eliminada Correctamente']);
    }
}
