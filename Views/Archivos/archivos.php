<?php include 'dbcon.php'; ?>
<?php
headerAdmin($data);
getModal('modalArchivos', $data);
?>

<?php
// If submit button is clicked
if (isset($_POST['submit'])) {
  // get name from the form when submitted
  $name = $_POST['name'];

  if (isset($_FILES['file']['name'])) {
    // If the ‘pdf_file’ field has an attachment
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    // Move the uploaded pdf file into the pdf folder
    move_uploaded_file($file_tmp, "Views/Archivos/Archivos/" . $file_name);
    $ruta = base_url() . "/Views/Archivos/Archivos/" . $file_name;
    // Insert the submitted data from the form into the table
    $insertquery =
      "INSERT INTO pdf_data(username,filename) VALUES('$name','$ruta')";

    // Execute insert query
    $iquery = mysqli_query($con, $insertquery);

    if ($iquery) {
?>
<div class="alert alert-success alert-dismissible fade show text-center">
  <a class="close" data-dismiss="alert" aria-label="close">
    ×
  </a>
  <strong>Success!</strong> Data submitted successfully.
</div>
<?php
    } else {
?>
<div class="alert alert-danger alert-dismissible fade show text-center">
  <a class="close" data-dismiss="alert" aria-label="close">
    ×
  </a>
  <strong>Failed!</strong> Try Again!
</div>
<?php
    }
  } else {
?>
<div class="alert alert-danger alert-dismissible fade show text-center">
  <a class="close" data-dismiss="alert" aria-label="close">
    ×
  </a>
  <strong>Failed!</strong> File must be uploaded in PDF format!
</div>
<?php
  } // end if
} // end if
?>

<main class="app-content">
  <div class="app-title">
    <!--<div>
      <h1><i class="fas fa-user-tag"></i>
        <?= $data['page_title'] ?>
          <?php if ($_SESSION['permisosMod']['w']) { ?>
          <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i>
            Nuevo</button>
          <?php } ?>
      </h1>
    </div>-->
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/archivos">
          <?= $data['page_title'] ?>
        </a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <strong>Añadir Archivos</strong>
          <form method="post" enctype="multipart/form-data">


            <div class="form-input py-2">
              <div class="form-group">
                <label class="control-label">Nombre<span class="required">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
              </div>
              <div class="form-group">
                <label class="control-label">Archivo<span class="required">*</span></label>
                <input type="file" name="file" class="form-control" required />
              </div>
              <div class="form-group">
                <input type="submit" class="btnRegister" name="submit" value="Submit">
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <div class="card">
            <div class="card-header text-center">
              <h4>Records from Database</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table>
                  <thead>
                    <th>Nombre del Archivo</th>
                    <th>FileName</th>
                  </thead>
                  <tbody>
                    <?php
                    $selectQuery = "select * from pdf_data";
                    $squery = mysqli_query($con, $selectQuery);

                    while (($result = mysqli_fetch_assoc($squery))) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $result['username']; ?>
                      </td>
                      <td>
                        <?php echo $result['filename']; ?>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php footerAdmin($data); ?>