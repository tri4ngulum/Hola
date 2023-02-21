<?php
#require '../panel/backend/admin/conexion.php';
#session_start();

#$message = '';
#if (!empty($_POST['email']) && !empty($_POST['password'])) {
 # $usuario = $_POST['email'];
  #$password = $_POST['password'];
  #$query_text = 'SELECT * FROM usuarios INNER JOIN roles ON usuarios.id_rol = roles.id_rol  WHERE email_usuario="' . $usuario . '" AND password_usuario = SHA2("' . $password . '",0);';
  // echo $query_text;
  #$query_res = mysqli_query($conexion, $query_text);

  #if (mysqli_num_rows($query_res) == 0) {
   # session_destroy();
    #echo '<script>
     #       // toastr["error"]("Usuario y/o contraseña incorresto! intente de nuevo")
    #</script>';
    #$message = "Usuario y/o contraseña incorresto! intente de nuevo";
  #} else {
   # $datos = mysqli_fetch_array($query_res, MYSQLI_ASSOC);
    #print("<pre>" . print_r($datos, true) . "</pre>");

    //Se crea el archivo de sesiones
 # }#$_SESSION['id_usuario'] = $datos['id_usuario'];
    #$_SESSION['nombre_usuario'] = $datos['nombre_usuario'];
    #$_SESSION['nombre_completo'] = $datos['nombre_usuario'] . ' ' . $datos['ap_paterno_usuario'] . ' ' . $datos['ap_materno_usuario'];
    #$_SESSION['imagen_perfil'] = ($datos['imagen_usuario'] == NULL) ? '../img/icono-usuario.png' : '../img/' . $datos['imagen_usuario'];
    #$_SESSION['id_rol'] = $datos['id_rol'];
    #$_SESSION['rol'] = $datos['rol'];

    // print("<pre>" . print_r($_SESSION, true) . "</pre>");

    //Se libera el objeto de datos asociativo
    #mysqli_free_result($query_res);

    //Se cierra la conexion
    #mysqli_close($conexion);

    #if ($_SESSION['id_rol']) {
     # echo '<script>window.location="../panel/pages/dashboard.php"</script>';
    #} else {
     # echo '<script>window.location=".../panel/pages/dashboard.php"</script>';
    #}
  #}
#}
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo base_url(RECURSOS . '/resources/icon/icon4.png');?>">
</head>


<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Rock</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS . '/css/bootstrap.min.css');?>">

    <!-- link de login -->
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS . '/css/login.css');?>">

    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS . '/css/style.css');?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="resources/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS . '/css/jquery.mCustomScrollbar.min.css');?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


  <!-- Toastr -->
<link href="<?= base_url(RECURSOS_PLUGINS. '/plugins/toastr/toastr.min.css'); ?>" rel="stylesheet"> 

    </head>


<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li> <a href="../index.php">Home</a> </li>
                                    <li> <a href="../portal/pages/about.php">about</a> </li>
                                    <li> <a href="../portal/pages/album.php">Albums</a> </li>
                                    <li> <a href="../portal/pages/contact.php">Contact</a> </li>
                                    <li class="active"> <a href="./login.php">Login</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <form class="search">
                        <input class="form-control" type="text" placeholder="Search">
                        <button><img src="../portal/images/search_icon.png"></button>
                    </form>
                </div>
            </div>
        </div>
</header>
<!-- end header inner -->

<div class="Albumsbg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="Albumstitlepage">
                    <h2>Login</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<body>
    <div class="login">
        <div class="login-screen">
            <form method="POST">
                <div class="login-form" id="login-form">
                    <div class="control-group">
                        <input type="text" name="email" class="login-field" value="" placeholder="Username" id="email">
                        <label class="login-field-icon fui-user" for="email"></label>
                    </div>

                    <div class="control-group">
                        <input type="password" name="password" class="login-field" value="" placeholder="Password" id="password_usuario">
                        <label class="login-field-icon fui-lock" for="password"></label>
                    </div>
                    
                     <!-- Metodo POST -->
                    <?= form_open('validar_credenciales',
                    ['id'=> 'validar_credenciales'])?>

                    <div class="validar_credenciales">
                        <?php
                        $data = [
                            'name'   => 'email',
                            'id'     => 'password_usuario',
                            'required' => true
                        ];
                        echo form_button($data);
                        ?>   
                                <?= form_submit('ingresar ', 'Iniciar sesion',
                                ['class'=> 'btn btn-primary btn-block']);?>  
                    </div>
                </div>            
            </form>
        </div>
    </div>
    </div>
</body>
<?php if (!empty($message)) : ?>
                <p> <?= $message ?> </p>
            <?php endif; ?>





<!-- end footer -->


<!-- Javascript files-->
<script src="<?php echo base_url(RECURSOS . '/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url(RECURSOS . '/js/popper.min.js');?>"></script>
<script src="<?php echo base_url(RECURSOS . '/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?php echo base_url(RECURSOS . '/js/jquery-3.0.0.min.js');?>"></script>
<script src="<?php echo base_url(RECURSOS . '/js/plugin.js');?>"></script>
<!-- sidebar -->
<script src="<?php echo base_url(RECURSOS . '/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
<script src="<?php echo base_url(RECURSOS . '/js/custom.js');?>"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


  <!-- Toastr -->
<script src="<?= base_url(RECURSOS_PLUGINS. '/plugins/toastr/toastr.min.js'); ?>"></script>

<script src="<?= base_url(RECURSOS_ESPECIFICO. '/login.js'); ?>")></script>


<script>
  //Toastr show
<?= mostrar_mensaje(); ?>
</script>


<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
</body>

</html>