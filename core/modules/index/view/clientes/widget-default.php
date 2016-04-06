<section class="content-header">
			<h1>Listado de Clientes</h1>		

</section>
<section class="content">
<div class="row">

	<div class="col-md-12">
	<!-- Single button -->
<div class="btn  btn-default dropdown-toggle">

 <a href="index.php?view=newcliente" class='glyphicon glyphicon-user'>Nuevo Cliente</a>
  </div>

<br>

		<?php
		$clientes = ClienteData::getAll();
		if(count($clientes)>0){
			// si hay clientes
			?>
<div class="box box-solid box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>

                                </div>
                                <div class="box-body table-responsive">

			<table class="table table-bordered table-hover datatable">
			<thead>
			<th>Nombres y Apellidos</th>
			<th>Codigo</th>
			<th>Sexo</th>
			<th>Direccion</th>
			<th>Fecha Nac.</th>
			<th>Cedula</th>
			<th>Tipo Cliente</th>
			<th>Celular</th>
			<th>Email</th>
			<th>Opciones</th>

			</thead>
			<?php
			foreach($clientes as $clientes){
				?>
				<tr>
				<td><?php echo $clientes->nombres." ".$clientes->apellidos; ?></td>
				<td><?php echo $clientes->codigo; ?></td>
				<td><?php echo $clientes->sexo; ?></td>
				<td><?php echo $clientes->direccion; ?></td>
				<td><?php echo $clientes->fecha_nac; ?></td>
				<td><?php echo $clientes->cedula; ?></td>
				<td><?php echo $clientes->tipo_cliente; ?></td>
				<td><?php echo $clientes->email; ?></td>
				<td><?php echo $clientes->celular; ?></td>

				
				<td style="width:90px;">
					<a href="index.php?view=edituser&id=<?php echo $clientes->id; ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
					<a href="index.php?view=deluser&id=<?php echo $clientes->id; ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>

				</td>
				</tr>
				<?php

			}
			print "</table></div></div>";


		}else{
			// no hay usuarios
		}


		?>


	</div>
</div>
</section>