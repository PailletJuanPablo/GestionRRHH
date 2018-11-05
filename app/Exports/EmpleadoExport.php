<?php

namespace App\Exports;

use App\Empleado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EmpleadoExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('excel.empleados', [
            'empleados' => Empleado::get(),
        ]);
    }
}
