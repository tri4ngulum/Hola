<?php
require('../../helpers/menu_panel.php');
require('../../helpers/funciones_generales.php');
session_start();

if (!isset($_SESSION['id_usuario'])) {
  echo '<script>
              alert("Error al mostrar la informació de este módulo, contacta al administrador");
              window.location = "../../user/login.php";
              </script>';
} else {
  include '../backend/admin/conexion.php';
  $query_text = 'SELECT id_cancion, agrupacion, album, nombre_cancion, precio_cancion, genero FROM canciones;';

  $query_res = mysqli_query($conexion, $query_text);
  $canciones = array();
  if (mysqli_num_rows($query_res) != 0) {
    while ($datos = mysqli_fetch_array($query_res, MYSQLI_ASSOC)) {
      $canciones[] = $datos;
    }
  }

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

  <link rel="stylesheet" href="<?php echo $root_specific_panel . 'plugins/icheck-bootstrap/icheck-bootstrap.min.css'; ?>">

  <link rel="stylesheet" href="<?php echo $root_specific_panel . 'plugins/jqvmap/jqvmap.min.css'; ?>">

  <link rel="stylesheet" href="<?php echo $root_specific_panel . 'css/adminlte.min.css'; ?>">

  <link rel="stylesheet"
    href="<?php echo $root_specific_panel . 'plugins/overlayScrollbars/css/OverlayScrollbars.min.css'; ?>">

  <link rel="stylesheet"
    href="<?php echo $root_specific_panel . 'plugins/datatables-bs4/css/dataTables.bootstrap4.min.css' ?>">
  <link rel="stylesheet"
    href="<?php echo $root_specific_panel . 'plugins/datatables-responsive/css/responsive.bootstrap4.min.css' ?>">
  <link rel="stylesheet"
    href="<?php echo $root_specific_panel . 'plugins/datatables-buttons/css/buttons.bootstrap4.min.css' ?>">
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

        <span class="brand-text font-weight-light">M U S I C A</span>
      </a>


      <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
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
              <h1 class="m-0 text-dark">Canciones</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="./dashboard.php">Inicio</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <a href="./cancion_nueva.php" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
              <div class="card">
                <div class="card-header">
                  <center>
                    <h3 class="card-title">Lista de canciones</h3>
                  </center>
                </div>
                <div class="card-body">
                  <table id="table-cancions" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Agrupación</th>
                        <th>Albúm</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Genero</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                                        $html = '';
                                        if (isset($canciones) && sizeof($canciones) > 0) {
                                          $num = 0;
                                          foreach ($canciones as $cancion) {
                                            $html .= '
                                                <tr>
                                                    <td>' . ++$num . '</td>
                                                    <td>' . $cancion["agrupacion"] . '</td>
                                                    <td>' . $cancion["album"] . '</td>
                                                    <td>' . $cancion["nombre_cancion"] . '</td>
                                                    <td>' . $cancion["precio_cancion"] . '</td> 
                                                    <td>' . $cancion["genero"] . '</td> 
                                                    <td>';
                                            $html .= '<a href="../backend/crud/canciones/delete_cancion.php?id_cancion=' . $cancion["id_cancion"] . '" class="btn btn-danger btn-sm">Eliminar</a>
                                                        <a href="./cancion_detalles.php?id_cancion=' . $cancion["id_cancion"] . '" class="btn btn-warning btn-sm">Detalles</a>
                                                    </td>
                                                </tr>
                                              ';
                                          }
                                        }
                                        echo $html;
                                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
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

  <script src="<?php echo $root_specific_panel . 'plugins/datatables/jquery.dataTables.min.js'; ?>"></script>
  <script src="<?php echo $root_specific_panel . 'plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'; ?>"></script>
  <script
    src="<?php echo $root_specific_panel . 'plugins/datatables-responsive/js/dataTables.responsive.min.js'; ?>"></script>
  <script
    src="<?php echo $root_specific_panel . 'plugins/datatables-responsive/js/responsive.bootstrap4.min.js'; ?>"></script>
</body>

</html>