<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Franco;
use Illuminate\Http\Request;

class FrancoController extends Controller
{
    public function francos()
    {

        $empleados = Empleado::where("activo", 1)->get();
        $francos = Franco::with("empleado")->get();
        return view("franco.lista", ["francos" => $francos, "empleados" => $empleados]);
    }

    public function agregarfrancos()
    {

        $empleados = Empleado::where("activo", 1)->get();
        return view("franco.add", ["empleados" => $empleados]);

    }

    public function agregarfrancosid($id)
    {
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $empleado = Empleado::where("id", $id)->first();
        return view("franco.addfromempleado", ["empleado" => $empleado, "empleados" => $empleados]);

    }

    public function guardarfrancos(Request $request)
    {
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $franco = Franco::create($request->all());
        $francos = Franco::with("empleado")->get();
        return view("franco.lista", ["francos" => $francos, "empleados" => $empleados]);

    }

    public function eliminar($id)
    {
        $francoEliminar = Franco::find($id);
        $francoEliminar->delete();
        return redirect()->back()->withErrors(['Franco Compensatorio Eliminado Correctamente']);
    }
}
