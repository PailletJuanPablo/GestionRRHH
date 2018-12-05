<?php

namespace App\Exports;

use App\Empleado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class HorasExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $empleados = Empleado::orderBy('apellido_nombre')->get();
        return view('reporting.horarios_excel', [
            'empleados' => $empleados,
        ]);
    }
}
