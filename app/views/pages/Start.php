<?php  require ROUTE_APP . '/views/inc/header.php' ?>
	
	<a class="btn btn-outline-success my-2 my-sm-0" href="pages/adds">
		Insertar
	</a>
	<div class="form-group mt-2">		
		<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" id="search">		
	</div>
	<div id="tablaUsuarios">
		<table class="table table-hover mt-3" style="text-align: center;">
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
					$contador = 0; 
					foreach ($data['usuarios'] as $usuario) : ?>
					<tr>
						<td scope="row"><?php $contador++; echo $contador; ?></td>
						<td><?php echo $usuario->nombre; ?></td>
						<td><?php echo $usuario->email; ?></td>
						<td><?php echo $usuario->telefono; ?></td>
						<td>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<a class="btn btn-primary" href="<?php echo ROUTE_URL; ?>/pages/edit/<?php echo $usuario->id_usuario;?>">
									Editar
								</a>
								<a  class="btn btn-danger" style="color:white;" href="<?php echo ROUTE_URL; ?>/pages/delete/<?php echo $usuario->id_usuario;?>">
									Borrar
								</a>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<!-- Busqueda -->
	<div id="tablaResultadosBusqueda" style="display: none;">
	  
	</div>

<?php  require ROUTE_APP . '/views/inc/footer.php' ?>