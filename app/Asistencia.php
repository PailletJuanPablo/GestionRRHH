<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asistencia extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'empleados_id', 'fecha', 'horario_entrada', 'horario_salida','ausencia_multiple'
    ];

    public function asistencias()
    {
        return $this->hasMany('App\Asistencia');
    }


}
