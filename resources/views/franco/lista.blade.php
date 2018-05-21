
@extends('layouts.header')
@section('title', 'Listado de Horas Extras Registradas')

@section('content')
<div class="row"> 
    <a href="{{ route('addfranco') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">Registrar Franco Compensatorio de un Empleado</a>
    </div>
<br>
       <div class="card"> 
                 <div class="header bg-pink">
<h3 class="title"> Empleados con Francos Compensatorios Cargados </h3>
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                            <th>Empleado</th>
                                            <th>Fecha del Franco Compensatorio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($francos as $franco)
        
                                        <tr>
                                            <td>{{$franco->empleado->apellido_nombre}}</td>
                                            <td>{{$franco->fecha}}</td>


                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    