<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ausencia extends Model
{
    use SoftDeletes;

    protected $table = "ausencias";
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'empleados_id', 'tipos_ausencias_id', 'periodo_ausencia', 'descripcion','justificado','fecha_ausencia', 'observaciones'
    ];

    public function empleado()
    {
        return $this->belongsTo('App\Empleado','empleados_id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\TipoAusencia','tipos_ausencias_id');
    }

}
