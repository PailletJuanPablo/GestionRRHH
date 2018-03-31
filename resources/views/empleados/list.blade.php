
@extends('layouts.header')

@section('title', 'Listado de Empleados')

@section('content')

       
                        <table class="table responsive">
                                <thead>
                                    <tr>
                                            <th>ID</th>
                                            <th>Apellido y Nombre</th>
                                            <th>Antiguedad</th>
                                            <th>Condición</th>
                                            <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($empleados as $empleado)
        
                                        <tr>
                                            <td>{{$empleado->id}}</td>
                                            <td>{{$empleado->apellido_nombre}}  </td>
                                            <td>{{$empleado->antiguedad}}</td>
                                            <td>{{$empleado->condicion->nombre}}</td>
                                            <td><a href="{{ URL::to('empleados/' . $empleado->id) }}">Ver Ficha</td>
                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>


                @endsection



             
                    