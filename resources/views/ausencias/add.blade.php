@extends('layouts.header')
@section('title', 'Registrar Ausencia')




@section('content')

<div class="card">
  <div class="header bg-cyan"
<h2>Registrar Ausencia</h2>
</div>
<div class="body">
<form  method="post" action="{{ route('ausencias.store') }}">
  {{csrf_field()}}

  <label for="apellido_nombre">Seleccione empleado:</label>

  <input name="_method" type="hidden" value="POST">

  <div class="form-group">

  <select name="empleados_id" class="form-control dropdown selectpicker ">
        
    @foreach ($empleados as $empleado)

    <option value="{{$empleado->id}}">{{$empleado->apellido_nombre}}</option>
    @endforeach

  </select>
  </div>
  
  <div class="form-group">

  <label for="tipos_ausencias_id">Seleccione tipo de ausencia:</label>



  <select name="tipos_ausencias_id" class="form-control dropdown selectpicker ">
        
    @foreach ($tipos as $tipo_ausencia)

    <option value="{{$tipo_ausencia->id}}">{{$tipo_ausencia->nombre}}</option>
    @endforeach

  </select>
</div>

<div class="form-group">

  <label for="justficado">Justificado:</label>

  <select name="justificado" class="form-control dropdown selectpicker ">
        

    <option value=1>Si</option>
    <option value=0>No</option>

  </select>

</div>

                <label for="observaciones">Observaciones:</label>
                <input type="text" class="form-control" name="observaciones" >
                <label for="fecha_ausencia">Fecha de Ausencia:</label>

                <input type="date" name="fecha_ausencia">

          
                <button type="submit" class="btn btn-success" style="margin-left:38px">Registrar Ausencia</button>


</form>

<div class="col-sm-4">
  <div class="form-group">
      <div class="form-line">
          <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
      </div>
  </div>
</div>
</div>
</div>

@endsection
