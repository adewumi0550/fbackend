<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?= $title; ?>  :: Gidan Haya </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>/assets/css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>/assets/css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="<?php echo base_url(); ?>/assets/css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/logo.jpg" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CRoboto:300,400,500,700&amp;display=swap">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url(); ?>/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header top-header-bg none-992" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:+2347036951585"><i class="fa fa-phone"></i>Need Support? +2347036951585</a>
                    <a href="mailto:info@gidanhaya.com"><i class="fa fa-envelope"></i>info@gidanhaya.com</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right">
                    


                    <?php if ($this->session->userdata('user_logged_in') ){ ?>

                      <li>
                        <a href="<?php echo base_url(); ?>dashboard" class="sign-in"><i class="fa fa-user"></i> My Account</a>
                    </li>

                        <?php }else{?>
                    <li>
                        <a href="<?php echo base_url(); ?>login" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>signup" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>

                <?php }?>

                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="" href="index.html">
                <img src="<?php echo base_url(); ?>assets/product.jpg" style="height: 100px;width: 100px;" alt="logo" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="<?php echo base_url(); ?>" >
                           <i class="fa fa-home"></i> Home
                        </a>
                       
                    </li>
                  
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>about">About Us</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>faq">FAQs</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Properties
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>sale">For Sale</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>rent">For Rent</a></li>
                            <li><a class="dropdown-item" href="#">Post Request</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Agents
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>estate-agent">Estate Agents</a></li>
                        </ul>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" >
                            Blog
                        </a>
                       
                    </li>

                     <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact Us</a>
                       
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link link-btn">Post Property</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Banner start -->
