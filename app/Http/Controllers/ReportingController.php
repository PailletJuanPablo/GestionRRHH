<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HorasExport;

class ReportingController extends Controller
{

    public function getReporteHoras(){
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        return view("reporting.horarios",["empleados"=>$empleados]);
    }

    public function getReporteHorasPdf(){
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        $pdf = PDF::loadView('reporting.horarios_pdf', ["empleados"=>$empleados]);
        return $pdf->stream('Reporte Horas 2018.pdf');
    }

    public function getReporteHorasExcel()
    {
        return Excel::download(new HorasExport, 'Reporte Horas 2018.xlsx');
    }

}
