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
$id_usuario = $_GET["id_usuario"];

if (empty($id_usuario)) {
  echo '<script>
                alert("Error, el usuario no se encontro");
                window.location = "./usuarios.php";
                </script>';
} else {

  include '../backend/admin/conexion.php';

  $query_select = 'SELECT * FROM usuarios WHERE id_usuario = ' . $id_usuario;

  $query_res = mysqli_query($conexion, $query_select);
  $usuario = mysqli_fetch_array($query_res, MYSQLI_ASSOC);

  if (sizeof($usuario) <= 0) {
    echo '<script>
                alert("Error, el usuario que deseas actualizar no esxiste");
                window.location = "./usuarios.php";
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
        <span class="brand-text font-weight-light">M U S I C A</span>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo $_SESSION["imagen_perfil"]; ?>" class="../img/icono-usuario.png" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php echo $_SESSION["nombre_usuario"]; ?>
            </a>
          </div>
        </div>
        <nav class="mt-2">
          <?php echo crear_menu_panel('usuarios'); ?>
        </nav>
      </div>
    </aside>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Usuario Detalles</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="./dashboard.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Usuario</a></li>
                <li class="breadcrumb-item active">Detalles usuario</li>
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
                  <h3 class="card-title">Formulario de usuario detalles</h3>
                </div>
                <form id="form-usuario" action="../backend/crud/usuarios/update_usuario.php" method="post"
                  enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <center>
                          <img
                            src="<?php echo ($usuario['imagen_usuario'] == NULL) ? '../img/icono-usuario.png' : '../img/' . $usuario['imagen_usuario']; ?>"
                            class="img-rounded" alt="" id="img-preview" width="10%">
                        </center>
                      </div>
                    </div>
                    <input type="hidden" value="<?php echo $usuario['imagen_usuario']; ?>" name="imagen usuario">
                    <input type="hidden" value="<?php echo $usuario['id_usuario']; ?>" name="id_usuario">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre(s)</label>
                          <input type="text" value="<?php echo $usuario['nombre_usuario']; ?>" name="nombre"
                            class="form-control" id="nombre" placeholder="Nombre(s)">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido Paterno</label>
                          <input type="text" value="<?php echo $usuario['ap_paterno_usuario']; ?>"
                            name="apellido_paterno" class="form-control" id="apellido_paterno"
                            placeholder="Apelldio Paterno">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido Materno</label>
                          <input type="text" value="<?php echo $usuario['ap_materno_usuario']; ?>"
                            name="apellido_materno" class="form-control" id="apellido_materno"
                            placeholder="Apelldio Paterno">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sexo</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="2" <?php echo
                              ($usuario['sexo_usuario']==2) ? 'checked' : ''; ?>>
                            <label class="form-check-label">Femenino</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="1" <?php echo
                              ($usuario['sexo_usuario']==1) ? 'checked' : ''; ?>>
                            <label class="form-check-label">Masculino</label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Rol</label>
                          <select class="form-control" name="rol">
                            <option value="">Seleccionar un rol</option>
                            <option value="795" <?php echo ($usuario['id_rol']==795) ? 'selected' : ''; ?>>Administrador
                            </option>
                            <option value="888" <?php echo ($usuario['id_rol']==888) ? 'selected' : ''; ?>>Operador
                            </option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Correo electrónico</label>
                          <input type="email" name="email" value="<?php echo $usuario["email_usuario"]; ?>"
                            class="form-control" id="email" placeholder="Correo electrónico">
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Contraseña</label>
                          <input type="password" name="password" class="form-control" id="password"
                            placeholder="***********">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Repetir Contraseña</label>
                          <input type="password" name="repassword" class="form-control" id="repassword"
                            placeholder="***********">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <a href="./usuarios.php" class="btn btn-danger">Cancelar</a>
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
  <!--  -->
  <script src="../js/usuario_detalles.js"></script>
</body>

</html>