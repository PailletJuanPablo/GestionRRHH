<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiasTomados extends Model
{
    use SoftDeletes;
    protected $table = "dias_tomados";

    protected $fillable = [
        'empleados_id', 'cantidad_dias',
         'inicio_ausencia','finalizacion_ausencia','observaciones','ausencia_multiple'
    ];
    
    public function empleado(){
        return $this->belongsTo("App\Empleado",'empleados_id');
    }

}
