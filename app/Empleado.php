<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use SoftDeletes;

    protected $table = "empleados";
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'apellido_nombre', 'antiguedad', 'condiciones_id', 'cargo'
    ];

    public function condicion()
    {
        return $this->belongsTo('App\Condicion','condiciones_id');
    }

    public function ausencias()
    {
        return $this->hasMany('App\Ausencia','empleados_id');
    }

    public function asistencias()
    {
        return $this->hasMany('App\Asistencia');
    }

}
