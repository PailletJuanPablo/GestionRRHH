
@extends('layouts.header')
@section('title', 'Listado de Horas Extras Registradas')

@section('content')
<div class="row"> 
    <a href="{{ route('horas.create') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">REGISTRAR HORAS EXTRAS</a>
    </div>
<br>
       <div class="card"> 
                 <div class="header bg-teal">
<h3 class="title"> Horas Extras </h3>
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                            <th>Empleado</th>
                                            <th>Fecha</th>
                                            <th>Cantidad de horas</th>

                                          
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($horas as $hora)
        
                                        <tr>
                                            <td>{{$hora->empleado->apellido_nombre}}</td>
                                            <td>{{$hora->fecha}}</td>
                                            <td>{{$hora->cantidad}}</td>


                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    