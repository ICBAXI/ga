<!-- Modal -->
<div class="modal fade" id="modalFormArchivos" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nueva Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formArchivo" name="formArchivo" class="form-horizontal">
          <input type="hidden" id="idArchivo" name="idArchivo" value="">
          <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Nombre<span class="required">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your name" name="txtName" id="txtName">
              </div>

              <div class="form-group">
                <label class="control-label">Archivo<span class="required">*</span></label>
                <input type="file" name="file" id="file" class="form-control" required />
              </div>

              <div class="form-group">
                <input type="submit" class="btnRegister" name="submit" value="Submit">
              </div>
            </div>
          </div>

          <div class="tile-footer">
            <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-danger" type="button" data-dismiss="modal"><i
                class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>8