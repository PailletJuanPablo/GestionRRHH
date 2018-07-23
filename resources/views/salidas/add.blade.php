@extends('layouts.header')
@section('title', 'Registrar Salidas Particulares')




@section('content')

<div class="card">
  <div class="header bg-cyan"
<h2>Registrar Salidas Particulares</h2>
</div>
<div class="body">
<form  method="post" action="{{ route('salidas.store') }}">
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
        <label for="fecha">Fecha:</label>

        <input type="text" class="fechaIngreso form-control" name="fecha" placeholder="Clic aquí para seleccionar fecha...">
    </div>
</div>

<div class="form-group">
    <div class="form-line">
        <label for="cantidad">Cantidad de Horas:</label>

        <input type="number" class=" form-control" name="cantidad_horas" placeholder="Ingrese solo números">
    </div>
</div>




                <button type="submit" class="btn btn-success" style="margin-left:38px">Registrar Salida Particular</button>


</form>



</div>
</div>

@endsection
