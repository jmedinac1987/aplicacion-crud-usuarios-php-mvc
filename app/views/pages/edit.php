<?php  require ROUTE_APP . '/views/inc/header.php' ?>
	
	<a href="<?php echo ROUTE_URL; ?>" class="btn btn-ligth"><i class="fa fa-backward">Volver</i></a>
	<h2>Editar usuario</h2>
	<div class="card card-body bg-ligth mt-3">		
		<form class="needs-validation" novalidate action="<?php echo ROUTE_URL; ?>/pages/edit/<?php echo $data['id_usuario'];?>" method="POST">
			<div class="form-group">
				<label for="nombre">Nombre: <sup>*</sup></label>
				<input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $data['nombre']; ?>" required>
				<div class="invalid-feedback">
					Por favor diligencie el campo nombre del usuario.
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email: <sup>*</sup></label>
				<input type="email" name="email" class="form-control form-control-lg" value="<?php echo $data['email']; ?>" required>
				<div class="invalid-feedback">
					Por favor diligencie el email del usuario.
				</div>
			</div>
			<div class="form-group">
				<label for="telefono">Telefono: <sup>*</sup></label>
				<input type="text" name="telefono" class="form-control form-control-lg" type="text" maxlength="10" pattern="[0-9]{10}" value="<?php echo $data['telefono']; ?>" required>
				<div class="invalid-feedback">
					El teléfono del usuario es requerido y este debe tener 10 caracteres numéricos
				</div>
			</div>
			<input type="submit" class="btn btn-success" value="Editar usuario">
		</form>
	</div>

<?php  require ROUTE_APP . '/views/inc/footer.php' ?>