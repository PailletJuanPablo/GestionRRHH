
@extends('layouts.header')
@section('title', 'Listado de Horas Extras Registradas')

@section('content')
<div class="row"> 
    <a href="{{ route('addlactancia') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">Registrar Período de Lactancia de un Empleado</a>
    </div>
<br>
       <div class="card"> 
                 <div class="header bg-pink">
<h3 class="title"> Empleados con períodos de lactancia registrados </h3>
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                            <th>Empleado</th>
                                            <th>Fecha de Inicio del Período</th>
                                            <th>Días Restantes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($empleados_lactancia as $empleado_l)
        
                                        <tr>
                                            <td>{{$empleado_l->apellido_nombre}}</td>
                                            <td>{{$empleado_l->periodo_lactancia}}</td>
                                            <td>{{$empleado_l->diasLactancia()}}</td>


                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    