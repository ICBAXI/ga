let formArchivo = document.querySelector('#formArchivo');
formArchivo.onsubmit = function (e) {
  e.preventDefault();
  let strNombre = document.querySelector('#txtName').value;
  let strFile = document.querySelector('#file').value;
  if (strNombre == '' || strFile == '') {
    swal('Atención', 'Todos los campos son obligatorios.', 'error');
    return false;
  }
  divLoading.style.display = 'flex';
  let request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject('Microsoft.XMLHTTP');
  let ajaxUrl = base_url + '/Archivos/setArchivo';
  let formData = new FormData(formArchivo);
  request.open('POST', ajaxUrl, true);
  request.send(formData);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      let objData = JSON.parse(request.responseText);
      if (objData.status) {
        if (rowTable == '') {
          tableCategorias.api().ajax.reload();
        } else {
          rowTable.cells[1].textContent = strNombre;
          rowTable.cells[2].textContent = strFile;
          rowTable = '';
        }

        $('#modalFormArchivos').modal('hide');
        formArchivo.reset();
        swal('Categoria', objData.msg, 'success');
        removePhoto();
      } else {
        swal('Error', objData.msg, 'error');
      }
    }
    divLoading.style.display = 'none';
    return false;
  };
};

function openModal() {
  rowTable = '';
  document.querySelector('#idArchivo').value = '';
  document
    .querySelector('.modal-header')
    .classList.replace('headerUpdate', 'headerRegister');
  document
    .querySelector('#btnActionForm')
    .classList.replace('btn-info', 'btn-primary');
  document.querySelector('#btnText').innerHTML = 'Guardar';
  document.querySelector('#titleModal').innerHTML = 'Nueva Categoría';
  $('#modalFormArchivos').modal('show');
}
