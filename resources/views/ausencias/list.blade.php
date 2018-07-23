
@extends('layouts.header')
@section('title', 'Listado de Ausencias por Empleados')

@section('content')
<div class="row"> 
    <a href="{{ route('ausencias.create') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">REGISTRAR AUSENCIAS</a>
    </div>

<br>

@if($errors->any())
<div class="alert alert-success">

<h4>{{$errors->first()}}</h4>
</div>
@endif
       <div class="card"> 
                 <div class="header bg-teal">
<h3 class="title"> Ausencias </h3>
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                            <th>Empleado </th>
                                            <th>Tipo de Ausencia </th>
                                            <th>Fecha</th>
                                            <th>Cantidad de Días Hábiles</th>
                                            <th>Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($empleadosAusencias as $ausencia)
        
                                        <tr>
                                            <td>{{$ausencia->empleado->apellido_nombre}}</td>
                                            <td>{{$ausencia->tipo->nombre}}</td>
                                            <td>{{$ausencia->fecha_ausencia}}</td>
                                            <td>{{$ausencia->dias_habiles_ausencia}}</td>
                                            <td>
                <form onsubmit="return confirm('Estás seguro de eliminar esta ausencia?');" 
                action="{{route('eliminarasistencia',$ausencia->id)}}" method="POST" >
                                                           @csrf
<input type="hidden" name="id" value="{{$ausencia->id}}">
                                                    <input type="submit"
                                                    class="btn btn-block btn-lg btn-danger waves-effect" value="Eliminar Ausencia" >
                                                 </form>

                                            </td>


                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    