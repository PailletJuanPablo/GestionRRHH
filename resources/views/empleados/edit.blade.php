@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')
<div class="card"> 

<div class="header bg-cyan">
<h2>Editar datos del empleado {{$empleado->apellido_nombre}}</h2>
</div>
<div class="body"> 
<form  method="post" action="{{ route('empleados.update',$empleado->id) }}">
        {{csrf_field()}}

        <input name="_method" type="hidden" value="PUT">
      

  <div class="form-group">
        <label for="apellido_nombre" class="form-label">Apellido y Nombre</label>

      <div class="form-line">
          <input type="text" class="form-control" name="apellido_nombre" value="{{$empleado->apellido_nombre}}">
      </div>
  </div>

  <div class="form-group ">
        <label for="cuil" class="form-label">Cuil</label>

        <div class="form-line">
            <input type="text" class="form-control" name="cuil" value="{{$empleado->cuil}}" >
        </div>
    </div>

    <div class="form-group ">
            <label for="tel" class="form-label">Teléfono</label>

            <div class="form-line">
                <input type="text" class="form-control" name="tel" value="{{$empleado->tel}}">
            </div>
        </div>

        <div class="form-group ">
                <label for="domicilio" class="form-label">Domicilio</label>

                <div class="form-line">
                    <input type="text" class="form-control" name="domicilio"  value="{{$empleado->domicilio}}" >
                </div>
            </div>

            <div class="form-group ">
                    <label for="horario" class="form-label">Horario</label>

                    <div class="form-line">
                        <input type="text" class="form-control" name="horario" value="{{$empleado->horario}}">
                    </div>
                </div>


  <div class="form-group form-float">
      <div class="form-line">
        <label for="cargo">Cargo:</label>
        <select name="cargo" class="form-control dropdown selectpicker ">
              
                <option selected value="{{$empleado->cargo}}">{{$empleado->cargo}}</option>

                <option value="Director de Coordinación Operativa">Director de Coordinación Operativa</option>
                <option value="Oficial Superior">Oficial Superior</option>
                <option value="Ayudante">Ayudante</option>
                <option value="UNICEF">UNICEF</option>
                <option value="Administrativo Nivel 5">Administrativo Nivel 5</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Pase en Comisión">Pase en Comisión</option>
                <option value="Auxiliar Encargado">Auxiliar Encargado</option>
                <option value="Administrativo Nivel 7">Administrativo Nivel 7</option>
                <option value="Administrativo Nivel 3">Administrativo Nivel 3</option>
                <option value="Pasante">Pasante</option>
                <option value="Defensora de los Niños">Defensora de los Niños</option>
                <option value="Directora de Legales">Directora de Legales</option>
                <option value="Oficial">Oficial</option>
                <option value="Oficial Defensoría">Oficial Defensoría</option>
                <option value="Directora de Administración">Directora de Administración</option>
                <option value="Jefe de Departamento de Promoción">Jefe de Departamento de Promoción</option>
                <option value="Jefe de Deparmaneto de Control y Obs.">Jefe de Deparmaneto de Control y Obs.</option>
                <option value="Administrativo Nivel 1">Administrativo Nivel 1</option>
                <option  value="Jefe de Sección">Jefe de Sección</option>

              </select>
      </div>
  </div>



  <div class="form-group form-float">
        <div class="form-line">
          <label for="antiguedad">Fecha de Incorporación:</label>
  
          <input type="text" class="fechaIngreso form-control" name="fecha_ingreso" placeholder="Clic aquí para seleccionar fecha..." value="{{$empleado->fecha_ingreso}}">
        </div>
    </div>




    <div class="form-group form-float">
            <div class="form-line">
              <label for="situacion_revista">Situación de Revista:</label>
              <select name="situacion_revista" class="form-control dropdown selectpicker ">
                    
                  
                    <option selected value="{{$empleado->situacion_revista}}">{{$empleado->situacion_revista}}</option>

                      <option value="Permanente">Permanente</option>
                      <option value="Suplente">Suplente</option>
                      <option value="Pasantía">Pasantía</option>
                      <option value="Locación de Servicios">Locación de Servicios</option>
                      <option value="Pase en Comisión">Pase en Comisión</option>

                    </select>
            </div>
        </div>

        <div class="form-group form-float">
                <div class="form-line">
                  <label for="area">Área:</label>
                  <select name="area" class="form-control dropdown selectpicker ">
                        
                      
                        <option selected value="{{$empleado->area}}">{{$empleado->area}}</option>

                          <option value="Legales">Legales</option>
                          <option value="Promoción">Promoción</option>
                          <option value="UNICEF">UNICEF</option>
                          <option value="Redes">Redes</option>
                          <option value="Mantenimiento">Mantenimiento</option>
                          <option value="Chofer">Chofer</option>
                          <option value="SUAC">SUAC</option>
                          <option value="Cocina">Cocina</option>
                          <option value="Promoción">Promoción</option>
                          <option value="Promoción">Promoción</option>

                        </select>
                </div>
            </div>
    






  <div class="form-group">    
                <button type="submit" class="btn btn-block btn-lg btn-info waves-effect" >Crear Empleado</button>
              </div>

</form>
</div>
</div>
@endsection