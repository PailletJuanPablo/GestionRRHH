<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class ausenciasespecialescontroller extends Controller
{
    public function maternidad(){
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $empleados_maternidad = Empleado::where("maternidad",1)->get();
                return view("especiales.maternidad",["empleados"=>$empleados,"empleados_maternidad"=>$empleados_maternidad]);
    }

    public function agregarMaternidad(){
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        return view ("especiales.maternidad_add",["empleados"=>$empleados]);

    }


    public function guardarMaternidad(Request $request){
        $empleados = Empleado::orderBy('apellido_nombre')->get();

        $empleados_maternidad = Empleado::where("maternidad",1)->get();
      //  return view("especiales.lactancia",["empleados"=>$empleados,"empleados_lactancia"=>$empleados_lactancia]);


        $empleado_maternidad = Empleado::find($request->empleados_id);
        $empleado_maternidad->periodo_maternidad = $request->periodo_maternidad;
        $empleado_maternidad->maternidad = 1;
        $empleado_maternidad->save();

       return view("especiales.maternidad",["empleados"=>$empleados,"empleados_maternidad"=>$empleados_maternidad]);

    }



    public function lactancia(){
        $empleados = Empleado::orderBy('apellido_nombre')->get();
$empleados_lactancia = Empleado::where("lactancia",1)->get();
        return view("especiales.lactancia",["empleados"=>$empleados,"empleados_lactancia"=>$empleados_lactancia]);
    }

    public function agregarLactancia(){
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        return view ("especiales.lactancia_add",["empleados"=>$empleados]);

    }

    public function guardarLactancia(Request $request){
        $empleados = Empleado::orderBy('apellido_nombre')->get();

        $empleados_lactancia = Empleado::where("lactancia",1)->get();
      //  return view("especiales.lactancia",["empleados"=>$empleados,"empleados_lactancia"=>$empleados_lactancia]);


        $empleado_lactancia = Empleado::find($request->empleados_id);
        $empleado_lactancia->periodo_lactancia = $request->periodo_lactancia;
        $empleado_lactancia->lactancia = 1;
        $empleado_lactancia->save();

       return view("especiales.lactancia",["empleados"=>$empleados,"empleados_lactancia"=>$empleados_lactancia]);

    }
}
