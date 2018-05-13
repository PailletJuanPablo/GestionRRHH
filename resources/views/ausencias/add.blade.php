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

<div class="form-group">
      <p>
          <label for="master-checkbox">
            Registrar un período de ausencia
          </label>
          <input id="master-checkbox" type="checkbox" name="especial" class="form-control" style="opacity: 1;
          left: 2%!important;
          width: 10%;
          height: 5%;
          display: block;">
        </p>

        <div class="depends-on-master-checkbox form-control" style="height: 250px">
        
            
          <p style="margin-top:5%">
            <label for="inicio_periodo_ausencia">
              Inicio del período de ausencia
            </label>
            <input type="text" class="datepicker form-control depends-on-master-checkbox" name="fecha_inicio" placeholder="Clic aquí para seleccionar fecha...">
          </p>

          <p style="">
              <label for="inicio_periodo_ausencia">
                Finalización del período de ausencia
              </label>
              <input type="text" class="datepicker form-control depends-on-master-checkbox" name="fecha_finalizacion" placeholder="Clic aquí para seleccionar fecha...">
            </p>

            <p class="depends-on-master-checkbox">
                <div class=" depends-on-master-checkbox">
                    <p class="depends-on-master-checkbox">Dias hábiles de ausencia</p>

                    <input type="text"  class="form-control depends-on-master-checkbox" name="dias_habiles_ausencia"  >
                </div>
                
              </p>
     
    </div>
  </div>






              




                <button type="submit" class="btn btn-success" style="margin-left:38px">Registrar Ausencia</button>


</form>



</div>
</div>

@endsection
