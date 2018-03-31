<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condicion extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "condiciones";
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 
    ];
    public function ausencias()
    {
        return $this->hasMany('App\Ausencia');
    }


}
