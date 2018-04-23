
@extends('layouts.header')
@section('title', 'Listado de Ausencias por Empleados')

@section('content')
<div class="row"> 
    <a href="{{ route('ausencias.create') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">REGISTRAR AUSENCIAS</a>
    </div>
<br>
       <div class="card"> 
                 <div class="header bg-teal">
<h3 class="title"> Ausencias </h3>
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                            <th>Empleado</th>
                                            <th>Total de Ausencias</th>
                                            <th>Registrar Ausencia</th>

                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($empleadosAusencias as $empleado)
        
                                        <tr>
                                            <td>{{$empleado->apellido_nombre}}</td>
                                            <td>{{ count($empleado->ausencias) }}
                                            </td>
                                            <td> <a href="{{ route('ausencias.edit',$empleado->id) }}" class="btn btn-primary btn-sm"> Registrar Ausencia </a> </td>


                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    