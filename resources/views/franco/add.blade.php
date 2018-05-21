@extends('layouts.header')
@section('title', 'Registrar Horas Extras')




@section('content')

<div class="card">
  <div class="header bg-cyan"
<h2>Registrar Franco Compensatorio</h2>
</div>
<div class="body">
<form  method="post" action="{{ route('addfranco') }}">
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
        <label for="periodo_lactancia">Fecha del Franco Compensatorio:</label>

        <input type="text" class="fechaIngreso form-control" name="fecha" placeholder="Clic aquí para seleccionar fecha...">
    </div>
</div>


<div class="form-group">
        <div class="form-line">
            <label for="observaciones">Observaciones:</label>
      
          <textarea  class="form-control" name="observaciones" placeholder="Ingrese observaciones aquí" > </textarea>
        </div>
    </div>


                <button type="submit" class="btn btn-success" style="margin-left:38px">Registrar Franco Compensatorio </button>


</form>



</div>
</div>

@endsection
