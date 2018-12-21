@extends('layouts.header') 
@section('title', 'Vacaciones') 
@section('content') @if($errors->any())
<div class="alert alert-success">

    <h4>{{$errors->first()}}</h4>
</div>
@endif
<div class="card">

    <div class="header bg-blue">
        <h3 class="title"> Vacaciones de Empleados </h3>
    </div>
    <div class="body">
        <table class="table responsive">
            <thead>
                <tr>
                    <th>Empleado</th>
                    <th>Inicio</th>
                    <th>Finalización</th>
                    <th>Días Hábiles Tomados</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacaciones as $vacacion) @if(!empty($vacacion->empleado))
                <tr>
                    <td>{{$vacacion->empleado->apellido_nombre}}</td>
                    <td>{{$vacacion->fecha_inicio}} </td>
                    <td>{{$vacacion->fecha_finalizacion}} </td>
                    <td>{{$vacacion->cantidad_dias}} </td>

                    <td>

                        <a href="{{route('editar_vacacion',$vacacion->id)}}" class="btn btn-block btn-lg btn-info waves-effect">
                                                 Editar este Período</a>


                        <form onsubmit="return confirm('Estás seguro de eliminar este período?');" action="{{route('eliminar_vacaciones',$vacacion->id)}}"
                            method="POST">
                            @csrf
                            <input type="submit" class="btn btn-block btn-lg btn-danger waves-effect" value="Eliminar Período">


                        </form>



                    </td>
                </tr>
                @endif @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
