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
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach($francos as $franco)

                <tr>
                    <td>{{$franco->empleado->apellido_nombre}}</td>
                    <td>{{$franco->fecha}}</td>
                    <td>


                        <form onsubmit="return confirm('Estás seguro de eliminar este Franco Compensatorio?');" action="{{route('eliminar_franco',$franco->id)}}"
                            method="POST">
                            @csrf

                            <input type="submit" class="btn btn-block btn-lg btn-danger waves-effect" value="Eliminar Franco">


                        </form>



                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
