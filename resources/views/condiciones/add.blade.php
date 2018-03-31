<h2>Agregar Nueva Condición</h2><br  />
                 
<form  method="post" action="{{ route('condiciones.store') }}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="POST">

 
                <label for="mes">Nombre:</label>
                <input type="text" class="form-control" name="nombre" >
        
                <label for="año">Descripción:</label>
                <input type="text" class="form-control" name="descripcion" >
          
   
                <button type="submit" class="btn btn-success" style="margin-left:38px">Crear y Agregar Gastos</button>


</form>