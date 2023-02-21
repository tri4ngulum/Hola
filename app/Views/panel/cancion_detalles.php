<?php
require('../../helpers/menu_panel.php');
require('../../helpers/funciones_generales.php');
session_start();
if (!isset($_SESSION['id_usuario'])) {
  echo '<script>
                alert("No has iniciado sesión");
                window.location = "../../user/login.php";
                </script>';
}

$id_cancion = $_GET["id_cancion"];
if (empty($id_cancion)) {
  echo '<script>
                alert("Error, la cancion no se encontro");
                window.location = "./cancion.php";
                </script>';
} else {
  include '../backend/admin/conexion.php';
  //Se prepara la consulta para realizar la peticion
  $query_select = 'SELECT * FROM canciones WHERE id_cancion = ' . $id_cancion;
  //Petición del sql a la BD
  $query_res = mysqli_query($conexion, $query_select);
  $cancion = mysqli_fetch_array($query_res, MYSQLI_ASSOC);
  //Verificar si realmente el usuario existe
  if (sizeof($cancion) <= 0) {
    echo '<script>
                alert("Error, la cancion que deseas actualizar no esxiste");
                window.location = "./boleto.php";
                </script>';
  }
  mysqli_close($conexion);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet"
    href="<?php echo $root_specific_panel . 'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'; ?>">

  <link rel="stylesheet"
    href="<?php echo $root_specific_panel . 'plugins/icheck-bootstrap/icheck-bootstrap.min.css'; ?>">

  <link rel="stylesheet" href="<?php echo $root_specific_panel . 'plugins/jqvmap/jqvmap.min.css'; ?>">

  <link rel="stylesheet" href="<?php echo $root_specific_panel . 'css/adminlte.min.css'; ?>">

  <link rel="stylesheet"
    href="<?php echo $root_specific_panel . 'plugins/overlayScrollbars/css/OverlayScrollbars.min.css'; ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../img/loading.gif" alt="AdminLTELogo" height="" width="">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-navicon"></i></a>
        </li>
      </ul>


      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button" data-toggle="tooltip" data-placement="top"
            title="Fullscreen">
            <i class="fa fa-arrows-alt"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Mi perfil">
            <i class="fa fa-user"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../backend/admin/cerrar_sesion.php" role="button" data-toggle="tooltip"
            data-placement="top" title="Cerrar sesión">
            <i class="fa fa-lock    "></i>
          </a>
        </li>
      </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <a href="index3.html" class="brand-link">

        <span class="brand-text font-weight-light">Canciones</span>
      </a>


      <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <img src="<?php echo $_SESSION["imagen_perfil"]; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php echo $_SESSION["nombre_usuario"]; ?>
          </a>
        </div>
      </div>


      <nav class="mt-2">
        <?php echo crear_menu_panel('canciones'); ?>
      </nav>

  </div>

  </aside>


  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Canción detalles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./dashboard.php">Inicio</a></li>
              <li class="breadcrumb-item"><a href="./canciones.php">Canciones</a></li>
              <li class="breadcrumb-item active">Detalles cancion</li>
            </ol>
          </div>
        </div>
      </div>
    </div>



    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulario de la cancion detalles</h3>
              </div>

              <form id="form-usuario" action="../backend/crud/canciones/update_cancion.php" method="post"
                enctype="multipart/form-data">
                <div class="card-body">
                  <input type="hidden" value="<?php echo $cancion['id_cancion']; ?>" name="id_cancion">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la agrupación</label>
                        <input type="text" value="<?php echo $cancion['agrupacion']; ?>" name="agrupacion"
                          class="form-control" id="agrupacion" placeholder="Agrupacion">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Album de la agrupación</label>
                        <input type="text" value="<?php echo $cancion['album']; ?>" name="album" class="form-control"
                          id="album" placeholder="Album">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la canción</label>
                        <input type="text" value="<?php echo $cancion['nombre_cancion']; ?>" name="nombre_cancion"
                          class="form-control" id="nombre_cancion" placeholder="Nombre">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Precio</label>
                        <input type="text" value="<?php echo $cancion['precio_cancion']; ?>" name="precio_cancion"
                          class="form-control" id="precio_cancion" placeholder="$ 0000.00">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Genero</label>
                        <input type="text" value="<?php echo $cancion['genero']; ?>" name="genero" class="form-control"
                          id="genero" placeholder="Genero">
                      </div>
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="./canciones.php" class="btn btn-danger">Cancelar</a>
                  </div>
              </form>
            </div>

            </form>
          </div>

        </div>

        <div class="col-md-6">

        </div>

      </div>

  </div>
  </section>


  </div>

  <aside class="control-sidebar control-sidebar-dark">

  </aside>

  </div>

  <script src="<?php echo $root_specific_panel . 'plugins/jquery/jquery.min.js'; ?>"></script>

  <script src="<?php echo $root_specific_panel . 'plugins/jquery-ui/jquery-ui.min.js'; ?>"></script>

  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <script src="<?php echo $root_specific_panel . 'plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>

  <script
    src="<?php echo $root_specific_panel . 'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'; ?>">
    </script>

  <script src="<?php echo $root_specific_panel . 'plugins/summernote/summernote-bs4.min.js'; ?>"></script>

  <script src="<?php echo $root_specific_panel . 'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'; ?>">
  </script>

  <script src="<?php echo $root_specific_panel . 'js/adminlte.js'; ?>"></script>

  <script src="<?php echo $root_specific_panel . 'plugins/jquery-validation/jquery.validate.min.js'; ?>"></script>
  <script src="<?php echo $root_specific_panel . 'plugins/jquery-validation/additional-methods.min.js'; ?>"></script>
  <script src="../js/cancion_detalles.js"></script>
</body>

</html>