@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')

<div class="card"> 
        <div class="header bg-blue">
<h2>Agregar Nuevo Tipo de Licencia</h2><br  /> </div>

<div class="body">
<form  method="post" action="{{ route('tipo.store') }}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="POST">

 
  
 
                <label for="nombre"> Nombre:</label>
                 
  <div class="form-group">
        <div class="form-line">
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre">
        </div>
        <div class="form-group">

        <label for="remunerada">Remunerada</label>
        <div class="switch">
                <label><input type="checkbox" name="remunerada" value="1" checked><span class="lever switch-col-blue-grey"></span></label>
            </div>
                            </div>

                            

             
                <button type="submit" class="btn btn-primary m-t-15 waves-effect" >Crear Tipo de Ausencia</button>


</form>
</div>
</div>

@endsection