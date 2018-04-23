<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Empleado;
use App\Ausencia;
use App\DiasTomados;

class PdfController extends Controller
{
    public function index($id){
        $empleados = Empleado::all();
    $empleado = Empleado::find($id);
      $ausencias = Ausencia::with("tipo")->where('empleados_id',$id)->get();
      $ausencias = $ausencias->groupBy('tipo.nombre');
      $diasTomados = DiasTomados::where('empleados_id',$id)->get();
  // return $diasTomados;
   
     // return response(['empleado'=>$empleado, 'ausencias'=>$ausencias,'empleados'=>$empleados,'diasTomados'=>$diasTomados]);
     $pdf = PDF::loadView('pdf.individual', ['empleado'=>$empleado, 'ausencias'=>$ausencias,'empleados'=>$empleados,'diasTomados'=>$diasTomados]);

      return $pdf->stream('invoice.pdf');
     
     //return view('pdf.individual', ['empleado'=>$empleado, 'ausencias'=>$ausencias,'empleados'=>$empleados,'diasTomados'=>$diasTomados]);

      
    }
}
