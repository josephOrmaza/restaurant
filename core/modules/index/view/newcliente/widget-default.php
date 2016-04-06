<div class="row">
<div class="col-md-8 col-md-offset-2">
<h2>Nuevo Cliente</h2>
<form class="form-horizontal" method="post" action="index.php?view=addcliente" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Codigo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombres</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cedula</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula de Identidad">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Sexo</label>

<div class="col-lg-10">
     
    
<select name="sexo">
<option value="masculino">Masculino</option>
<option value="femenino">Femenino</option>

</select>
    
  </div>
</div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    <div class="col-lg-10">
      <input type="date" class="form-control" name="fecha_nac">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Celular</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="celular" id="celular" placeholder="Nro Celular">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo</label>
   
     
<div class="col-lg-10">
     
    
<select name="tipo_cliente">
<option value="interno">Interno</option>
<option value="emp_cade">Empleado CADE</option>
<option value="emp_itsae">Empleado ITSAE</option>
<option value="emp_alimentos">Empleado Alimentos CADE</option>

</select>

</div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
  </div>

  
  <div class="form-group" align="center">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="is_admin" value="1">
      <button type="submit" class="btn btn-primary">Agregar Cliente</button>
    </div>
  </div>
</form>
</div>
</div>