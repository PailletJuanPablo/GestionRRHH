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
                              
                        </tr>
                    </thead>
                    <tbody>

@foreach ($empleados as $empleado)
<tr>
   <td> {{$empleado->apellido_nombre}}</td>
   <td> <a href="{{ route('ausencias.edit',$empleado->id) }}" class="btn btn-primary btn-sm"> Registrar Ausencia </a>
   <a href="{{ route('vacaciones.edit',$empleado->id) }}" class="btn bg-orange btn-sm"> Registrar Vacaciones </a>
   <a href="{{ route('empleados.show',$empleado->id) }}" class="btn bg-red btn-sm"> Ver Ficha </a>

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