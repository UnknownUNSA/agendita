$(document).ready(function(){
	$('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
});

function eliminarContactos(){
	swal({
		title: "¿Estás seguro de eliminar este contacto?",
		text: "Una vez eliminado, no podra ser recuperado",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
		  swal("Se ha eliminado");
		} 
	});
}