<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class EscritorioController extends Controller
{
    public function index(){
        
        $fecha_anterior = "2014-01-12";
   $hoy = Carbon::now();
   //echo $date1->diffInYears($date2);   
   return $hoy->diffInYears( Carbon::parse($fecha_anterior));
    }
}
