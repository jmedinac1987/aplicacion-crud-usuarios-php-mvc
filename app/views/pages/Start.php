<?php require ROUTE_APP . '/views/inc/header.php' ?>

<a class="btn btn-outline-success my-2 my-sm-0" href="pages/adds">
	Insertar
</a>
<div class="input-group mb-3 mt-2">
	<input class="form-control" type="search" placeholder="Buscar por nombre o email..." aria-label="Search" id="search">
	<button id="searchBoton" onclick="searchs()" type="submit" class="input-group-text"><i class="fa fa-search"></i></button>
</div>

<div id="tablaUsuarios" class="table-responsive">
	<table class="table table-sm table-hover table-bordered text-center">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Email</th>
				<th scope="col">Teléfono</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>

		<tbody>
			<?php
			if ($data['usuarios'] != null) {
				$contador = 0;
				foreach ($data['usuarios'] as $usuario) : ?>
					<tr>
						<td scope="row"><?php $contador++;
										echo $contador; ?></td>
						<td><?php echo $usuario->nombre; ?></td>
						<td><?php echo $usuario->email; ?></td>
						<td><?php echo $usuario->telefono; ?></td>
						<td>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<a class="btn btn-primary" href="<?php echo ROUTE_URL; ?>/pages/edit/<?php echo $usuario->id_usuario; ?>">
									Editar
								</a>
								<a class="btn btn-danger" style="color:white;" href="<?php echo ROUTE_URL; ?>/pages/delete/<?php echo $usuario->id_usuario; ?>">
									Borrar
								</a>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php } else { ?>
				<tr>
					<td colspan='5'>No hay datos registrados</td>
				</tr>
			<?php	}; ?>
		</tbody>
	</table>
</div>

<!-- Spinner -->
<div id="spinner" style="display: none;" class="spinner">
	<div class="rect1"></div>
	<div class="rect2"></div>
	<div class="rect3"></div>
	<div class="rect4"></div>
</div>

<!-- Busqueda -->
<div id="tablaResultadosBusqueda" style="display: none;" class="table-responsive">

</div>

<?php require ROUTE_APP . '/views/inc/footer.php' ?>