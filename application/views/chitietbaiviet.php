<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
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
                                                <ul class="single-mega cn-col-4">
                                                    <li class="title">thời sự</li>
                    
                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li class="title">chính trị</li>

                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li class="title">xã hội</li>
                                                </ul>
                                            
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Post</a>
                                            <div class="megamenu">
                                                <ul class="single-mega cn-col-4">
                                                    <li class="title">abc</li>
                    
                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li class="title">xyz</li>

                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li class="title">adc</li>
                                                </ul>
                                            
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

        <section class="breaking-news-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Breaking News Widget -->
                        <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                            <div class="title">
                                <h6>Trending</h6>
                            </div>
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</a></li>
                                    <li><a href="#">Welcome to Colorlib Family.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="card-div"  >
                <?php foreach($post as $keys =>$rows) {?>
                <img src="<?php echo base_url('uploads/post/'.$rows->image)?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $rows->title?></h5>
                    <p class="card-text"><?php echo $rows->description?></p>
                    <a href="#" class="btn btn-primary">22-3-2023</a>
                </div>
                <?php }?>
        </div>
        <div class="big-add-area mb-100">
            <div class="container-fluid">
                <a href="#"><img src="http://tintuc.com/frontend/img/bg-img/add2.png" alt=""></a>
            </div>
        </div>

        <footer class="footer-area">
        <!-- Footer Logo -->
        <div class="footer-logo mb-100">
            <a href="index.html"><img src="http://tintuc.com/frontend/img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Footer Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Closed Captioning</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>

                        <p class="mb-15">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. </p>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="http://tintuc.com/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="http://tintuc.com/frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="http://tintuc.com/frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="http://tintuc.com/frontend/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="http://tintuc.com/frontend/js/active.js"></script>
    </body>
</html>