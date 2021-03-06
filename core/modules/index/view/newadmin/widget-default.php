<div class="row">
<div class="col-md-8 col-md-offset-2">
<h2>Nuevo Usuario</h2>
<form class="form-horizontal" method="post" action="index.php?view=adduser" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellidos">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de usuario</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Celular</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="celular" id="celular" placeholder="Nro de Celular">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    <div class="col-lg-10">
      <input type="date" class="form-control" name="fecha_nac">
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
      <button type="submit" class="btn btn-default">Nuevo Administrador</button>
    </div>
  </div>
</form>
</div>
</div>