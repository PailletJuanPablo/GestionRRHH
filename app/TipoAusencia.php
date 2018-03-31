<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoAusencia extends Model
{
    use SoftDeletes;

    protected $table = "tipos_ausencias";

    protected $dates = ['deleted_at'];


    protected $fillable = [
        'nombre', 'descripción','remunerada'
    ];

    public function ausencias()
    {
        return $this->hasMany('App\Ausencia');
    }
}
