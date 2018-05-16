@extends('layouts.header')
@section('title', 'Registrar Horas Extras')




@section('content')

<div class="card">
  <div class="header bg-cyan"
<h2>Registrar Período de Maternidad</h2>
</div>
<div class="body">
<form  method="post" action="{{ route('addmaternidad') }}">
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
    <div class="form-line">
        <label for="periodo_maternidad">Inicio del Período de Maternidad:</label>

        <input type="text" class="fechaIngreso form-control" name="periodo_maternidad" placeholder="Clic aquí para seleccionar fecha...">
    </div>
</div>





                <button type="submit" class="btn btn-success" style="margin-left:38px">Registrar Período de Maternidad </button>


</form>



</div>
</div>

@endsection
