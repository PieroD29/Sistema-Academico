<?php
  include ('../../app/config.php');
  include ('../../admin/layout/header.php');

  include ('../../app/controllers/roles/listado_roles.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <h1>Listado de Categorias</h1>
        </div>

        <br>


        <div class="row">
          <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title">Roles Registrados</h3>

                <div class="card-tools">
                    <a href="create.php" class="btn btn-success"><i class="bi bi-person-plus-fill"></i> Crear Nuevo Rol</a>
                </div>
                <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nro</th>
                                <th scope="col">Nombre del rol</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i_rol = 0;
                            foreach($roles as $rol){
                                $id_rol = $rol['id'];
                                $nombre_rol = $rol['nombre_rol'];
                                $i_rol++;
                        ?>
                            <tr>
                                <td><?=$i_rol?></td>
                                <td><?=$nombre_rol?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-info"><i class="bi bi-info-square-fill"></i></button>
                                        <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                    </div>
                                </td>    
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>

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