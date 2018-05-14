
@extends('layouts.header')
@section('title', 'Vista de Empleado')

@section('content')
<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="info-box-2 bg-indigo">
                            <div class="icon ">
                                <i class="material-icons">person_pin</i>
                            </div>
                            <div class="content">
                                <div class="text"></div>
                                <div class="number "><h3 class="title">Empleado: {{$empleado->apellido_nombre}} </h3></div>
                            </div>
                        </div>

                    </div>
      
    
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box-3 bg-indigo">
                    <div class="icon">
                        <i class="material-icons">face</i>
                    </div>
                    <div class="content">
                        <div class="text">Antiguedad del empleado</div>
                        <div class="number">{{$empleado->antiguedad()}} años</div>
                    </div>
                </div>

    </div>

     
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box-3 bg-indigo">
                    <div class="icon">
                        <i class="material-icons">face</i>
                    </div>
                    <div class="content">
                        <div class="text">Días por Ley</div>
                        <div class="number">{{$empleado->diasDisponibles()}} días</div>
                    </div>
                </div>

    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box-3 bg-indigo">
                    <div class="icon">
                        <i class="material-icons">face</i>
                    </div>
                    <div class="content">
                        <div class="text">Días tomados</div>
                        <div class="number"> {{$diasHabiles}} días</div>
                    </div>
                </div>

    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box-3 bg-indigo">
                    <div class="icon">
                        <i class="material-icons">face</i>
                    </div>
                    <div class="content">
                        <div class="text">Días disponibles de vacaciones</div>
                        <div class="number"> {{$diasDisponibles}} días</div>
                    </div>
                </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

            <a target="_blank" href="{{ route('pdf.show',$empleado->id) }}">
                    <div class="info-box-2  bg-light-blue ">
                        <div class="icon ">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text"></div>
                            <div class="number">Generar Informe</div>
                        </div>
                    </div>
                </a>
            
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
                        <a target="_blank" href="{{ route('pdf.show',$empleado->id) }}">
                                <div class="info-box-2 bg-pink ">
                                    <div class="icon ">
                                        <i class="material-icons">email</i>
                                    </div>
                                    <div class="content">
                                        <div class="text"></div>
                                        <div class="number">Enviar por mail</div>
                                    </div>
                                </div>
                            </a>
            
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
                                <small>Cantidad de Inasistencias: {{$ausencias->sum("dias_habiles_ausencia")}}</small>

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
                                                <td>
                                                    @if ($ausencia->ausencia_multiple == 1)
                                                   Desde {{$ausencia->inicio_ausencia}}
hasta {{$ausencia->finalizacion_ausencia}}
                                                    @else
                                                    {{$ausencia->fecha_ausencia}}
                                                    @endif
                                                </td>
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
