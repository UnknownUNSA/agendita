<!-- Modal -->
<div class="modal fade" id="modalAgregarContactos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar un contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	      <form id="frmAgregarContactos">
		<div id="categoriasId"></div>
		<label for="nombreContactos">Nombre</label>
		<input type="text" id="nombreContactos" name="nombreContactos" class="form-control">

		<label for="aPaternoContactos">Apellido paterno</label>
		<input type="text" id="aPaternoContactos" name="aPaternoContactos" class="form-control">

		<label for="aMaternoContactos">Apellido materno</label>
		<input type="text" id="aMaternoContactos" name="aMaternoContactos" class="form-control">

		<label for="telefonoContactos">Teléfono</label>
		<input type="text" id="telefonoContactos" name="telefonoContactos" class="form-control">

		<label for="emailContactos">Email</label>
		<input type="text" id="emailContactos" name="emailContactos" class="form-control">

		
	      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" >Guardar</button>
      </div>
    </div>
  </div>
</div>