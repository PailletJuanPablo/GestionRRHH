
@extends('layouts.header')
@section('title', 'Editar Vacaciones')

@section('content')
<div class="card"> 

<div class="header bg-cyan">
<h2>Editar vacaciones</h2>
</div>
<div class="body"> 
<form  method="post" action="{{ route('actualizar_vacaciones') }}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="POST">

  <div class="form-group form-float">
<label for="empleado"> Editando vacaciones del empleado {{$vacacion->empleado->apellido_nombre}} </label>
  
  </div>
  <input type="hidden" name="vacacion_id" value="{{$vacacion->id}}">


  <div class="form-group form-float">
        <div class="form-line">
          <label for="antiguedad">Fecha de Inicio:</label>
  
          <input type="text" class="fechaIngreso form-control" name="fecha_inicio" placeholder="Clic aquí para seleccionar fecha..." value="{{$vacacion->fecha_inicio}}">
        </div>
    </div>


    <div class="form-group form-float">
            <div class="form-line">
              <label for="antiguedad">Fecha de Finalizacion:</label>
      
              <input type="text" class="fechaIngreso form-control" 
              name="fecha_finalizacion" placeholder="Clic aquí para seleccionar fecha..."
              value="{{$vacacion->fecha_finalizacion}}">
            </div>
        </div>


        <div class="form-group">
                <div class="form-line">
                    <label for="observaciones">Observaciones:</label>
              
                  <textarea  
                  class="form-control" name="observaciones" placeholder="Ingrese observaciones aquí" > 
                  {{$vacacion->observaciones}}
                </textarea>
                </div>
              </div>


              <div class="form-group">
                  <div class="form-line">
                      <label for="cantidad_dias">Días hábiles tomados:</label>
                
                    <input type="number" class="form-control" name="cantidad_dias" value="{{$vacacion->cantidad_dias}}" placeholder="Ingrese días hábiles de vacaciones aquí" >
                  </div>
                </div>

  <div class="form-group">    
                <button type="submit" class="btn btn-block btn-lg btn-info waves-effect" >Actualizar Vacaciones</button>
              </div>

</form>
</div>
</div>
@endsection