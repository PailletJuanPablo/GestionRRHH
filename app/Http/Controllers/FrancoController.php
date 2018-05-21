<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Franco;
class FrancoController extends Controller
{
    public function francos(){

        $empleados = Empleado::where("activo",1)->get();
        $francos = Franco::with("empleado")->get();
      return view("franco.lista",["francos"=>$francos,"empleados"=>$empleados]);
    }

    public function agregarfrancos(){

        $empleados = Empleado::where("activo",1)->get();
        return view("franco.add",["empleados"=>$empleados]);

    }

    public function agregarfrancosid($id){
$empleados = Empleado::all();
        $empleado = Empleado::where("id",$id)->first();
        return view("franco.addfromempleado",["empleado"=>$empleado,"empleados"=>$empleados]);

    }

    public function guardarfrancos(Request $request){
        $empleados = Empleado::all();
        $franco = Franco::create($request->all());
        $francos = Franco::with("empleado")->get();
        return view("franco.lista",["francos"=>$francos,"empleados"=>$empleados]);

    }
}
