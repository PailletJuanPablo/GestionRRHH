
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
      
                    @if ($empleado->lactancia === 1)

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="info-box-2 bg-lime">
                            <div class="icon ">
                                <i class="material-icons">pregnant_woman</i>
                            </div>
                            <div class="content">
                                <div class="text">Tiene Liencia por Lactancia</div>
                                <div class="number "><h3 class="title">
                                   Días restantes: {{$empleado->diasLactancia()}} </h3></div>
                            </div>
                        </div>

                    </div>
                    @endif

                 



                    
                    @if ($empleado->maternidad === 1)

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="info-box-2 bg-pink">
                            <div class="icon ">
                                <i class="material-icons">child_friendly</i>
                            </div>
                            <div class="content">
                                <div class="text">Tiene Liencia por Maternidad</div>
                                <div class="number "><h3 class="title">
                                   Días restantes: {{$empleado->diasMaternidad()}} </h3></div>
                            </div>
                        </div>

                    </div>
                    @endif
    
    
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
                        <div class="text">Días de Vacaciones por Año</div>
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
                        <div class="text">Días restantes</div>
                        <div class="number"> {{$empleado->diasDisponibles() - $diasHabiles}} días</div>
                    </div>
                </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="cursor:pointer"> 

            <a target="_blank" href="{{ route('pdf.show',$empleado->id) }}" style="cursor:pointer">
                    <div class="info-box-2  bg-light-blue ">
                        <div class="icon ">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text"></div>
                            <div class="number" style="cursor:pointer">Generar Informe</div >
                        </div>
                    </div>
                </a>
            
                </div>

                <!-- 
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="cursor:pointer">
            
                        <a target="_blank" href="{{ route('pdf.show',$empleado->id) }}" style="cursor:pointer">
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
            
                            </div> -->
            </div>

               

           
            @if ($horasExtra->count() > 0)

            <div class="card">
                    <div class="header bg-cyan">
                            <h2 class="title">Horas Extras del Empleado</h2>
                       <h4> Horas Totales Tomadas: {{$horasExtra->sum("cantidad")}}</h4>
                       <h4> Días de Franco Compensatorio Disponibles: {{$horasExtra->sum("cantidad") / 6}}</h4>

                        </div>
                        <div class="body table-responsive">
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <th>Fecha de Hora Extra</th>
                                        <th>Cantidad</th>

                                    </thead>
                                    <tbody>
                                            @foreach($horasExtra as $hora)

                                        <tr>
                                            <td>
                                          
                                                {{$hora->fecha}}
                                             
                                            </td>
                                            <td>{{$hora->cantidad}}  </td>
                                           

                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
    </div>
   
    @endif


    @if ($francos->count() > 0)

    <div class="card">
            <div class="header bg-green">
                    <h2 class="title">Francos Compensatorios del empleado</h2>
               <h4> Total de Francos Compensatorios Tomados: {{$francos->count()}}</h4>

                </div>
                <div class="body table-responsive">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <th>Fecha de Franco</th>

                            </thead>
                            <tbody>
                                    @foreach($francos as $franco)

                                <tr>
                                    <td>
                                  
                                        {{$franco->fecha}}
                                     
                                    </td>
                                   

                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
</div>

@endif



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
