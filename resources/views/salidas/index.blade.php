
@extends('layouts.header')
@section('title', 'Listado de Salidas Particularess Registradas')

@section('content')
<div class="row"> 
    
@if($errors->any())
<div class="alert alert-success">

<h4>{{$errors->first()}}</h4>
</div>
@endif

    <a href="{{ route('salidas.create') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">
        REGISTRAR SALIDA PARTICULAR</a>
    </div>
<br>
       <div class="card"> 
                 <div class="header bg-teal">
<h3 class="title"> Salidas Registradas </h3>
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                            <th>Empleado</th>
                                            <th>Fecha</th>
                                            <th>Cantidad de horas</th>
                                            <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($salidas as $hora)
        
                                        <tr>
                                            <td>{{$hora->empleado->apellido_nombre}}</td>
                                            <td>{{$hora->fecha}}</td>
                                            <td>{{$hora->cantidad_horas}}</td>
                                            <td>
    
                                                     
                                                     <form  
                                                     onsubmit="return confirm('Estás seguro de eliminar esta salida particular?');" 
                                                     action="{{route('salidas.destroy',$hora->id)}}" method="POST" >
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">

                                                    <input type="submit"
                                                        class="btn btn-block btn-lg btn-danger waves-effect" value="Eliminar" >
                                                        
    
                                                     </form>
    
    
    
                                                </td>

                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    