<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>QL TIN TUC</title>

    <!-- Favicon -->
    <link rel="icon" href="http://tintuc.com/frontend/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="http://tintuc.com/frontend/css/style.css">
	<link rel="stylesheet" href="http://tintuc.com/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://tintuc.com/frontend/css/classy-nav.css">
	<link rel="stylesheet" href="http://tintuc.com/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="http://tintuc.com/frontend/css/animate.css">
	<link rel="stylesheet" href="http://tintuc.com/frontend/css/magnific-popup.css">
	<link rel="stylesheet" href="http://tintuc.com/frontend/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="http://tintuc.com/frontend/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Brand</a>
                                        <div class="megamenu">
                                        <?php 
                                        foreach ($brand as $key => $row)
                                        { ?>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title"><a href="<?php echo base_url('index.php/danh-muc/'.$row->id) ?>"><?php echo $row->title ?></a></li>
                                            </ul>
                                            
                                        <?php }?>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Post</a>
                                        <div class="megamenu">
                                        <?php 
                                        foreach ($post as $key => $ps )
                                        { ?>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title"><a href="<?php echo  base_url('index.php/bai-viet/'.$ps->id) ?>"><?php echo $ps->title ?></a></li>
                                            </ul>
                                        <?php }?>   
                                        </div>
                                    </li>
                                </ul>
                                <!-- Header Add Area -->
                                <div class="header-add-area">
                                    <a href="#">
                                       <img src="http://tintuc.com/frontend/img/bg-img/add.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->