@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')

<div class="card"> 
        <div class="header bg-blue">
<h2>Agregar Nuevo Cargo</h2><br  /> </div>

<div class="body">
<form  method="post" action="{{ route('cargo.store') }}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="POST">

 
  
 
                <label for="nombre"> Nombre:</label>
                 
  <div class="form-group">
        <div class="form-line">
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre">
        </div>
       

                            

             
                <button type="submit" class="btn btn-primary m-t-15 waves-effect" >Crear Cargo</button>


</form>
</div>
</div>

@endsection