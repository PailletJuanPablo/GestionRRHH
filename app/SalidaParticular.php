<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalidaParticular extends Model
{
    //use SoftDeletes;
    protected $table = "salidas_particulares";

    protected $fillable = [
        'empleados_id', 'fecha', 'cantidad_horas'
    ];
    
    public function empleado() {
        return $this->belongsTo("App\Empleado",'empleados_id');
    }
}
