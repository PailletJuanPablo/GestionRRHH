<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franco extends Model
{
    protected $table = "francos_compensatorios";

   protected $fillable = [
        'empleados_id', 'fecha', 'cantidad'
    ];
    
    public function empleado() {
        return $this->belongsTo("App\Empleado",'empleados_id');
    }
}
