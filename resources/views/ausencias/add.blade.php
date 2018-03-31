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

  <label for="justficado">Justificada:</label>

  <select name="justificado" class="form-control dropdown selectpicker " default="0">


    <option value=1>Si</option>
    <option selected="selected" value=0>No</option>

  </select>


</div>


<div class="form-group">
    <div class="form-line">
        <label for="fecha_ausencia">Fecha de Ausencia:</label>

        <input type="text" class="datepicker form-control" name="fecha_ausencia" placeholder="Clic aquí para seleccionar fecha...">
    </div>
</div>

<div class="form-group">
  <div class="form-line">
      <label for="observaciones">Observaciones:</label>

    <textarea  class="form-control" name="observaciones" placeholder="Ingrese observaciones aquí" > </textarea>
  </div>
</div>








              




                <button type="submit" class="btn btn-success" style="margin-left:38px">Registrar Ausencia</button>


</form>



</div>
</div>

@endsection
