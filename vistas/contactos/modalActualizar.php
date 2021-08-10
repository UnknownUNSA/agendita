
<!-- Modal -->
<div class="modal fade" id="modalActualizarContactos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar un contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	      <form id="frmActualizarContactos">
		<div id="categoriasIdU"></div>
		<label for="nombreContactosU">Nombre</label>
		<input type="text" id="nombreContactosU" name="nombreContactosU" class="form-control">

		<label for="aPaternoContactosU">Apellido paterno</label>
		<input type="text" id="aPaternoContactosU" name="aPaternoContactosU" class="form-control">

		<label for="aMaternoContactosU">Apellido materno</label>
		<input type="text" id="aMaternoContactosU" name="aMaternoContactosU" class="form-control">

		<label for="telefonoContactosU">Teléfono</label>
		<input type="text" id="telefonoContactosU" name="telefonoContactosU" class="form-control">

		<label for="emailContactosU">Email</label>
		<input type="text" id="emailContactosU" name="emailContactosU" class="form-control">
	      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warnig">Actualizar</button>
      </div>
    </div>
  </div>
</div>