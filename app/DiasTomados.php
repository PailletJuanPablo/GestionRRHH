<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiasTomados extends Model
{
    use SoftDeletes;
    protected $table = "dias_tomados";

    protected $fillable = [
        'empleado_id', 'cantidad_dias', 'fecha_inicio','fecha_finalizacion','observaciones',
    ];
    
    public function empleado(){
        return $this->belongsTo("App\Empleado");
    }
}
