function mostrarDatos(){
	$.ajax({
		url:"php/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}

function eliminarDatos(idNombre){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "Una vez que elimines este registro, no podra ser recuperado",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type: "POST",
				data: "id=" + idNombre,
				url:"php/eliminar.php",
				success:function(r){
					if(r==1){
						mostrarDatos();
						swal("Eliminado correctamente");
					}else{
						swal("No se elimino correctamente");
					}
				}
			});
			}
		});
	}


function agregaDatosNuevos(id){
	$.ajax({
		type: "POST",
		data: "id=" + id,
		url:"php/datosUpdate.php",
		success:function(r){
			datos=jQuery.parseJSON(r);

			$('#idu').val(datos['id']);
			$('#nombreu').val(datos['nombre']);
			$('#paternou').val(datos['paterno']);
			$('#maternou').val(datos['materno']);
			$('#telefonou').val(datos['telefono']);
		}
	});
}

