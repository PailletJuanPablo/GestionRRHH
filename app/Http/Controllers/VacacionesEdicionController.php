<?php

namespace App\Http\Controllers;
use App\DiasTomados;
use App\Empleado;
use Illuminate\Http\Request;

class VacacionesEdicionController extends Controller
{
    public function editar($id){
        $empleados = Empleado::all();
        $vacacion = DiasTomados::with("empleado")->find($id);
        return view("vacaciones.editar",["vacacion"=>$vacacion,"empleados"=>$empleados]);

    }

    public function actualizar (Request $request){


        $vacacion_actualizar = DiasTomados::find($request->vacacion_id);
        $vacacion_actualizar->update($request->all());
        $vacacion_actualizar->save();
        return redirect()->route('vacaciones.index')->withErrors(['Actualizado Correctamente']);

    }

    public function eliminar($id){
        $vacacion_eliminar = DiasTomados::find($id);
        $vacacion_eliminar->delete();
        return redirect()->route('vacaciones.index')->withErrors(['Eliminado Correctamente']);

    }
}

