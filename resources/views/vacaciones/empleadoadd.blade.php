
@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')
<div class="card"> 

<div class="header bg-orange">
<h2>Registrar Vacaciones del Empleado {{$empleado->apellido_nombre}}</h2>
</div>
<div class="body"> 
<form  method="post" action="{{ route('vacaciones.update',$empleado->id) }}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="PUT">

  <div class="form-group form-float" style="display: none">
<label for="empleado"> Seleccione empleado </label>
        <div class="form-group">

                <select name="empleados_id" class="form-control dropdown selectpicker ">
              
             
              
                  <option value="{{$empleado->id}}">{{$empleado->apellido_nombre}}</option>
                 
              
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
                <button type="submit" class="btn btn-block btn-lg btn-info waves-effect" >Registrar Vacaciones</button>
              </div>

</form>
</div>
</div>
@endsection