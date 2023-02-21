<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <title>Home</title>
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
    <!-- Responsive-%:%
    <link rel="stylesheet" href="./<?php echo base_url(RECURSOS. '/css/responsive.css'); ?>">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo base_url(IMG. '/fevicon.png'); ?>" type="image/gif" />
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

<body class="main-layout">
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
                                    <a href="index.php"><img src="<?php echo base_url(IMG. '/logo.jpg'); ?>" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="/about">about</a> </li>
                                        <li> <a href="/album"> Albums</a> </li>
                                        <li> <a href="/login">Login</a> </li>
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
    <section class="banner_section">
        <div class="banner-main">
            <img src="<?php echo base_url(IMG. '/banner2.jpg'); ?>" />
            <div class="container">

                <div class="text-bg relative">
                    <h1>Mp3<br><span class="Perfect">The Perfect Music</span><br>Welcome To The Music</h1>
                    <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis lacinia nec et est
                        <br> aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                    <a href="#">Download Now</a>
                </div>

            </div>
        </div>

    </section>

    <!-- music-box  -->
    <div class="music-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="<?php echo base_url(RECURSOS. '/icon/icon1.png'); ?>" alt="icon"/></i>
                        <h3>Custom Player</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="<?php echo base_url(RECURSOS. '/icon/icon2.png'); ?>" alt="icon"/></i>
                        <h3>Easy customize</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="<?php echo base_url(RECURSOS. '//icon/icon3.png'); ?>" alt="icon"/></i>
                        <h3>Music Playlist</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="<?php echo base_url(RECURSOS. '//icon/icon4.png'); ?>" alt="icon"/></i>
                        <h3>Custom Gallery</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="img-box">
                    <figure><img src="<?php echo base_url(IMG. '/musicbg.jpg'); ?>" alt="img" /></figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="text-box">
                    <div class="box">
                        <i><img src="<?php echo base_url(IMG. '/5.png'); ?>"/></i>
                        <h3>MEET OUR Music STARS</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable
                            <br> content of a page when looking at its layout. The point of using Lorem </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Download -->
    <div id="screenshot" class="Lastestnews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Latest News</h2>
                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="<?php echo base_url(IMG. '/1.jpg'); ?>" alt="img" /></figure>
                        <h3>Live With Music</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="<?php echo base_url(IMG. '/2.jpg'); ?>" alt="img" /></figure>
                        <h3>Best Music</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="<?php echo base_url(IMG. '/3.jpg'); ?>" alt="img" /></figure>
                        <h3>Live With Music</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Download -->

    <!-- Albums -->
    <div id="screenshot" class="Albums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Albums-box </h2>
                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="album ?>" class="fancybox" rel="ligthbox">
                                <img src="<?php echo base_url(IMG. '/album1.jpg'); ?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="album" class="fancybox" rel="ligthbox"><img src="/portal/<?php echo base_url(IMG. '/search.png'); ?>"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="/album" class="fancybox" rel="ligthbox ">
                                <img src="<?php echo base_url(IMG. '/album2.jpg'); ?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="/album" class="fancybox" rel="ligthbox"><img src="<?php echo base_url(IMG. '/search.png'); ?>"></a>
                        </span>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Albums -->

    <!-- Newsletter -->
    <div class="Newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Newsletter</h2>
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 padding-right">
                            <input class="email" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 padding-left">
                            <button class="submit-btn">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- end Newsletter -->

    <!--  footer -->
    <footr id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contact Us</h3>
                            <ul class="locarion_icon">
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/1.png'); ?>" alt="icon" />A. Universidad Politecnica, No.1, San Pedro Xalcaltzinco, 90180 Tlax.</li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/2.png'); ?>" alt="icon" />Phone : ( +52 2461079853 )</li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/3.png'); ?>" alt="icon" />Email : musicproyect@gmail.com</li>

                            </ul>

                            <ul class="contant_icon">
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/fb.png'); ?>" alt="icon" /></li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/tw.png'); ?>" alt="icon" /></li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/lin(2).png'); ?>" alt="icon" /></li>
                                <li><img src="<?php echo base_url(RECURSOS. '/icon/instagram.png'); ?>" alt="icon" /></li>
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
    <script src="<?php echo base_url(RECURSOS. '/js/jquery-3.0.0.min.js');?>"></script>
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
