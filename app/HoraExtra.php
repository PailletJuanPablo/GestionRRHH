<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoraExtra extends Model
{
    protected $table = "hora_extras";

    protected $fillable = [
        'empleados_id', 'fecha', 'cantidad'
    ];
    
    public function empleado(){
        return $this->belongsTo("App\Empleado",'empleados_id');
    }


}
