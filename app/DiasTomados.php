<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiasTomados extends Model
{
    use SoftDeletes;
    protected $table = "dias_tomados";

    protected $fillable = [
        'empleados_id', 'cantidad_dias', 'fecha_inicio','fecha_finalizacion','observaciones',
    ];
    
    public function empleado(){
        return $this->belongsTo("App\Empleado",'empleados_id');
    }

    public function diasHabiles()
    {
        $dias_totales = intval($this->cantidad_dias);
        $semanas = round($dias_totales / 7);
        $numero = $semanas * 2;
        $dias_habiles = $dias_totales-$numero;
        return $dias_habiles;
    }
}
