
@extends('layouts.header')

@section('title', 'Vacaciones')

@section('content')

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
                                            <th>Días Hábiles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($vacaciones as $vacacion)
        
                                        <tr>
                                            <td>{{$vacacion->empleado->apellido_nombre}}</td>
                                            <td>{{$vacacion->fecha_inicio}}  </td>
                                            <td>{{$vacacion->fecha_finalizacion}} </td>
                                            <td>{{$vacacion->diasHabiles()}}</td>
                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>

                @endsection



             
                    