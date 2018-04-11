
@extends('layouts.header')
@section('title', 'Vista de Empleado')

@section('content')

     
                <div class="card">
                        <div class="header bg-teal">
                <h3 class="title"> {{$empleado->apellido_nombre}}</h3><br>
            </div>
            <div class="body">
<p> Antiguedad del empleado: {{$empleado->antiguedad()}} años.</p>
<p> Días correspondientes de vacaciones por ley: {{$empleado->diasDisponibles()}} días. </p>
            </div>
        </div>
    



@foreach ($ausencias as $ausencia_titulo => $ausencias)

                <div class="card">
                        <div class="header bg-cyan">
                                <h2 class="title">{{$ausencia_titulo}}</h2>
                                @if ($ausencias[0]->tipo->remunerada === 1)

                                <h5>REMUNERADAS: SI  </h5>
                                @else
                                <h5>REMUNERADAS: NO  </h5>
                                @endif
                                <small>Cantidad de Inasistencias: {{$ausencias->count()}}</small>
                         
                            </div>
                            <div class="body table-responsive">
                                    <table class="table table-responsive table-striped">
                                        <thead>
                                            <th>Fecha de Inasistencia</th>
                                            <th>Observaciones</th>
                                            <th>Justificada</th>
                                            
                                        </thead>
                                        <tbody>
                                                @foreach($ausencias as $ausencia)
                
                                            <tr>
                                                <td>{{$ausencia->fecha_ausencia}}</td>
                                                <td>{{$ausencia->observaciones}}  </td>
                                                <td>@if ($ausencia->justificado == 1) 
                                                        SI
                                                        @else
                                                        NO
                                                        @endif</td>
                                             
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
        </div>

@endforeach


@endsection


