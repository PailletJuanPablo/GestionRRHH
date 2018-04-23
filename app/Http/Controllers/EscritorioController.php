<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Empleado;
class EscritorioController extends Controller
{
    public function index(){
        
        $empleados = Empleado::all();
        return view("dashboard",['empleados'=>$empleados]);
    }
}
