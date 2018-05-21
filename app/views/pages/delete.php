<?php  require ROUTE_APP . '/views/inc/header.php' ?>
	
	<a href="<?php echo ROUTE_URL; ?>/pages" class="btn btn-ligth"><i class="fa fa-backward">Volver</i></a>
	<h2>Borrar usuario</h2>
	<div class="card card-body bg-ligth mt-3">								
		<form action="<?php echo ROUTE_URL; ?>/pages/delete/<?php echo $data['id_usuario'];?>" method="POST">
			<div class="form-group">
				<label for="nombre">Nombre: <sup>*</sup></label>
				<input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $data['nombre']; ?>" disabled>
			</div>
			<div class="form-group">
				<label for="email">Email: <sup>*</sup></label>
				<input type="email" name="email" class="form-control form-control-lg" value="<?php echo $data['email']; ?>" disabled>
			</div>
			<div class="form-group">
				<label for="telefono">Telefono: <sup>*</sup></label>
				<input type="text" name="telefono" class="form-control form-control-lg" value="<?php echo $data['telefono']; ?>" disabled>
			</div>
			<input type="submit" class="btn btn-success" value="Borrar usuario">
		</form>
	</div>

<?php  require ROUTE_APP . '/views/inc/footer.php' ?>