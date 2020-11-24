<?php

include'connection.php';

if(isset($_POST['LOGOUT']))
{
	return redirect('login.php');
}

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<form method="post">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Video4U</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/untitled.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    
    <header>

        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/untitled.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="adminhome.php">Home</a></li>
                                            <!-- <li><a href="contact.html">S</a></li> -->
                                           <li><a href="#">View Videos <i class="ti-angle-down"> </i></a>
                                            	<ul class="submenu">
                                            		<li> <a href="adminviewvideostatus.php">View Video Status </a></li>
                                            		<li> <a href="adminviewusersuploadedvideos.php">View User Videos </a> </li>
                                            		</ul>
                                            <li><a href="#">Settings <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="adminviewusers.php">View users</a></li>
                                                    <li><a href="adminuploadvideos.php">Upload Videos</a></li>
                                                     <li><a href="adminaddcategory.php">Add Category</a></li>
                                                </ul>
                                            </li>

                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="buy_tkt">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="index.php">Logout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <img src="img/shape/shape_1.svg" alt="">
                            </div>
                            <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                                <img src="img/shape/shape_2.svg" alt="">
                            </div>
                         
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">WELCOME</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"> ADMIN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

</ul></form>
</body>
</html>