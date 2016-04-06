<section class="content-header">
<h1>Nuevo Usuario</h1>
</section>
<section class="content">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="box box-solid box-primary">
                               
                                <div class="box-body table-responsive"><form class="form-horizontal" method="post" action="index.php?view=adduser" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombres</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Nombres" required/>
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
    <div class="col-lg-offset-2 col-lg-10" align="center">
    <input type="hidden" name="is_cajero" value="1">
      <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</section>