$('#search').on('keyup', function() 
{	
	let url = 'http://crudusuarios.app';
	if (this.value != "") 
	{				 				
		$.ajax({
			url: url + '/pages/buscar/' + this.value,
			type: 'GET',
			dataType: 'json',
			success: function(data){
				
				let urlHref = 'http://crudusuarios.app';
				let tablaBusqueda;//tabla html
				let contador = 0;

	  			tablaBusqueda = '<table id="tablaUsuarios" class="table table-hover mt-3" style="text-align: center;"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Nombre</th><th scope="col">Email</th><th scope="col">Teléfono</th><th scope="col">Acciones</th></tr></thead><tbody>';

	  			//recorrer json de objetos
	  			for (let i in data.usuarios) {
	  				contador++;
	  				tablaBusqueda+= "<tr>"+"<td>"+contador+"</td>"+"<td>"+data.usuarios[i].nombre+"</td>"+"<td>"+data.usuarios[i].email
					+"</td>"+"<td>"+data.usuarios[i].telefono+"</td>"+"<td>"+'<div class="btn-group btn-group-toggle" data-toggle="buttons">'+
						'<a class="btn btn-primary" href="'+ urlHref +"/pages/edit/"+data.usuarios[i].id_usuario+'"'+">"+"Editar"+"</a>"+
						'<a  class="btn btn-danger" style="color:white;" href="'+ urlHref +"/pages/delete/"+data.usuarios[i].id_usuario+'"'+">"+"Borrar"+"</a>"+"</div>"+"</td>"+"</tr>";
	  			}
	  			
	  			tablaBusqueda += '</tbody></table>';

				$('#tablaUsuarios').css('display', 'none');
				$('#tablaResultadosBusqueda').css('display', 'block');	
				$('#tablaResultadosBusqueda').html(tablaBusqueda);	
			}
		});
	}
	else
	{
		$('#tablaResultadosBusqueda').css('display','none');
  		$('#tablaUsuarios').css('display', 'block');
	}
}); 
