
@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')
<div class="card"> 

<div class="header bg-cyan">
<h2>Registar vacaciones</h2>
</div>
<div class="body"> 
<form  method="post" action="{{ route('vacaciones.store') }}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="POST">

  <div class="form-group form-float">
<label for="empleado"> Seleccione empleado </label>
        <div class="form-group">

                <select name="empleados_id" class="form-control dropdown selectpicker ">
              
                  @foreach ($empleados as $empleado)
              
                  <option value="{{$empleado->id}}">{{$empleado->apellido_nombre}}</option>
                  @endforeach
              
                </select>
                </div>
  </div>


  <div class="form-group form-float">
        <div class="form-line">
          <label for="antiguedad">Fecha de Inicio:</label>
  
          <input type="text" class="fechaIngreso form-control" name="fecha_inicio" placeholder="Clic aquí para seleccionar fecha...">
        </div>
    </div>


    <div class="form-group form-float">
            <div class="form-line">
              <label for="antiguedad">Fecha de Finalizacion:</label>
      
              <input type="text" class="fechaIngreso form-control" name="fecha_finalizacion" placeholder="Clic aquí para seleccionar fecha...">
            </div>
        </div>


        <div class="form-group">
                <div class="form-line">
                    <label for="observaciones">Observaciones:</label>
              
                  <textarea  class="form-control" name="observaciones" placeholder="Ingrese observaciones aquí" > </textarea>
                </div>
              </div>


              <div class="form-group">
                  <div class="form-line">
                      <label for="cantidad_dias">Días hábiles tomados:</label>
                
                    <input type="number" class="form-control" name="cantidad_dias" placeholder="Ingrese días hábiles de vacaciones aquí" >
                  </div>
                </div>

  <div class="form-group">    
                <button type="submit" class="btn btn-block btn-lg btn-info waves-effect" >Registrar Vacaciones</button>
              </div>

</form>
</div>
</div>
@endsection