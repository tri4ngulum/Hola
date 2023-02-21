<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <title>Albums</title>
    <link rel="shortcut icon" href="<?php echo base_url(RECURSOS. '/icon/icon4.png'); ?>">
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
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS. '/css/bootstrap.min.css'); ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS. '/css/style.css'); ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS. '/css/responsive.css'); ?>">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS. '/css/jquery.mCustomScrollbar.min.css'); ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout album-page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?php echo base_url(IMG. '/loading.gif'); ?>" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="../../index.php"><img src="<?php echo base_url(IMG. '/logo.jpg'); ?>" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="../../index.php">Home</a> </li>
                                        <li> <a href="./about.php">about</a> </li>
                                        <li class="active"> <a href="./album.php"> Albums</a> </li>
                                        <li> <a href="./contact.php">Contact</a> </li>
                                        <li> <a href="../../usuario/login.php">Login</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="<?php echo base_url(IMG. '/search_icon.png'); ?>"></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->

    <div class="Albumsbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Albumstitlepage">
                        <h2>Albums</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Albums -->
    <div class="Albums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="fancybox" rel="ligthbox">
                                <img src="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="fancybox" rel="ligthbox"><img src="../images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="fancybox" rel="ligthbox ">
                                <img src="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="fancybox" rel="ligthbox"><img src="../images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="fancybox" rel="ligthbox">
                                <img src="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="fancybox" rel="ligthbox"><img src="../images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="fancybox" rel="ligthbox ">
                                <img src="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="fancybox" rel="ligthbox"><img src="../images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="fancybox" rel="ligthbox">
                                <img src="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="fancybox" rel="ligthbox"><img src="../images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="fancybox" rel="ligthbox ">
                                <img src="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="fancybox" rel="ligthbox"><img src="../images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Albums -->

    <!--  footer -->
    <footr>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contact Us</h3>
                            <ul class="locarion_icon">
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/1.png'); ?>" alt="icon" />A. Universidad Politecnica, No.1, San Pedro Xalcaltzinco, 90180 Tlax. </li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/2.png'); ?>"> alt="icon" />Phone : ( +52 2461079853 )</li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/3.png'); ?> alt="icon" />Email : musicproyect@gmail.com</li>

                            </ul>

                            <ul class="contant_icon">
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/fb.png'); ?> alt="icon" /></li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/tw.png'); ?> alt="icon" /></li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/lin(2).png'); ?> alt="icon" /></li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/instagram.png'); ?> alt="icon" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Get In Touch</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>New Music </h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="<?php echo base_url(IMG. '/music1.jpg'); ?>" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="<?php echo base_url(IMG. '/music2.jpg'); ?>" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="<?php echo base_url(IMG. '/music3.jpg'); ?>" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="<?php echo base_url(IMG. '/music4.jpg'); ?>" /></figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© 2022 All Rights Reserved U.A.J.A.I. <a href="https://html.design/">Free html Templates</a></p>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?php echo base_url(RECURSOS. '/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS. '/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS. '/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS. '/js/jquery-3.0.0.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS. '/js/plugin.js'); ?>"></script>
    <!-- sidebar -->
    <script src="<?php echo base_url(RECURSOS. '/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS. '/js/custom.js'); ?>"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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