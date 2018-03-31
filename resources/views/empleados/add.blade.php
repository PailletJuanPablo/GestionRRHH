@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')
<div class="card"> 

<div class="header bg-cyan">
<h2>Agregar Nuevo Empleado</h2>
</div>
<div class="body"> 
<form  method="post" action="{{ route('empleados.store') }}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="POST">

  <div class="form-group form-float">
      <div class="form-line">
          <input type="text" class="form-control" name="apellido_nombre" >
          <label for="apellido_nombre" class="form-label">Apellido y Nombre</label>
      </div>
  </div>


  <div class="form-group form-float">
      <div class="form-line">
        
          <input type="number" class="form-control" name="antiguedad" >
          <label for="antiguedad" class="form-label">Antiguedad (Solo números)</label>
      </div>
  </div>


  <div class="form-group">
      <label for="condiciones_id">Condición:</label>
                <select name="condiciones_id" class="form-control show-tick ">
        
                  @foreach ($condiciones as $condicion)

                  <option value="{{$condicion->id}}">{{$condicion->nombre}}</option>
                  @endforeach

                </select>
  </div>

  <div class="form-group">    
                <button type="submit" class="btn btn-block btn-lg btn-info waves-effect" >Crear Empleado</button>
              </div>

</form>
</div>
</div>
@endsection