<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use SoftDeletes;

    protected $table = "empleados";
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'apellido_nombre', 'antiguedad', 'condiciones_id', 'cargo','fecha_ingreso',  'area',
        'horario','domicilio','tel','cuil','situacion_revista','fecha_ingreso'
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

    public function antiguedad()
    {
        $fecha_ingreso = $this->fecha_ingreso;
        $hoy = Carbon::now();
        return $hoy->diffInYears( Carbon::parse($fecha_ingreso));
    }

    public function diasTomados()
    {
        return $this->hasMany('App\DiasTomados');

    }


    public function diasDisponibles() {
    
          $años_antiguedad = $this->antiguedad();
        if ($años_antiguedad < 5 ) {
            return 15;
        };
        if (($años_antiguedad >= 5) && ($años_antiguedad <= 10)  ) {
            return 20;
        };
        if (($años_antiguedad >= 10) &&  ($años_antiguedad <= 15)  ) {
            return 25;
        };
        if (($años_antiguedad >= 15) &&  ($años_antiguedad <= 20)  ) {
            return 30;
        };
        if ($años_antiguedad >= 25  ) {
            return 35;
        };

    }

    

}
