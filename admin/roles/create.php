<?php
  include ('../../app/config.php');
  include ('../../admin/layout/header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <h1>Creacion de Rol</h1>
        </div>

        <br>


        <div class="row">
          <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title">Complete los campos</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-dm-12">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
  include ('../../admin/layout/footer.php');
  include ('../../layout/mensajes.php');
?>