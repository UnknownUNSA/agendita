$(document).ready(function(){
	$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
	$('#btnGuardarCategoria').click(function(){
		agregarCategoria();
	})
});

function agregarCategoria(){
	$.ajax({
		type: "POST",
		data: $('frmAgregarCategoria').serialize(),
		url: "procesos/categorias/agregarCategoria.php",
		success:function(respuesta){
			respuesta = respuesta.trim();
			if(respuesta==1){
				swal(":D", "Se agregó con éxito!", "succes");	
			}else{
				swal(":(", "No se pudo agregar", "error");	
			}
		}
	})
}

function eliminarCategoria(){
	swal({
		title: "¿Estás seguro de eliminar esta categoría?",
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