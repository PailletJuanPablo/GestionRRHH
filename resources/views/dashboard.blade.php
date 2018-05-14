@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">


            <div class="card">
<div class="header bg-blue">
   <h3 class="title"> Lista de empleados</h3>
</div>
<div class="body">
        <table class="table responsive">

                <thead>
                        <tr>
                                <th width="50%">Apellido y Nombre</th>
                                <th>Acciones</th>
                                <th>Ver Ficha</th>

                              
                        </tr>
                    </thead>
                    <tbody>

@foreach ($empleados as $empleado)
<tr>
   <td> {{$empleado->apellido_nombre}}</td>
   <td> <a href="{{ route('ausencias.edit',$empleado->id) }}" class="btn btn-primary btn-block"> Registrar Ausencia </a>
   <a href="{{ route('vacaciones.edit',$empleado->id) }}" class="btn bg-orange btn-block"> Registrar Vacaciones </a>
   <a href="{{ route('horas.edit',$empleado->id) }}" class="btn bg-teal btn-block"> Registrar Horas Extra </a>


</td>
<td>    <a href="{{ route('empleados.show',$empleado->id) }}" class="btn bg-red btn-block"> Ver Ficha </a>
    <a href="{{ route('empleados.edit',$empleado->id) }}" class="btn bg-blue btn-block"> Editar Ficha </a>
</td>
</tr>
@endforeach
                    </tbody>
        </table>

</div>

            </div>
           



        
                </div>
            </div>
        </div>
@endsection