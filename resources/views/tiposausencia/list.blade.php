
@extends('layouts.header')
@section('title', 'Listado de Tipos de Ausencias')

@section('content')
<div class="card"> 
<div class="content">
<a href="{{ URL::to('tipo/create') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">CREAR NUEVA AUSENCIA</a>
</div>
</div>


       <div class="card"> 
                 <div class="header">
Tipos de Licencias
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                            <th>Nombre</th>
                                            <th>Remunerada</th>
                                          
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($tipos as $tipo)
        
                                        <tr>
                                            <td>{{$tipo->nombre}}</td>
                                            @if ($tipo->remunerada === 1)

                                            <td>SI  </td>
                                            @else
                                            <td>NO  </td>
                                            @endif

                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    