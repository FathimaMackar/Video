
<!-- 
<!DOCTYPE html>
<html>
<head>
	<title> USER PROFILE</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<h1 align=center> USER PROFILE <hr style="height: 2px ;border:none; color:#333;background-color :#333;"/> </h1>

<br> <br> <br>
<table align="center" border="2">
	<tr>
		<th>Profile Photo </th>
		<td> </td> 
	</tr>
	<tr>
		<th> First Name </th>
		<td>  </td> 
	</tr>
	<tr>
		<th> Last Name </th>
		<td>  </td> 
	</tr>

	<tr>
		<th> Phone Number </th>
		<td> </td> 
	</tr>

	<tr>
		<th> Email </th>
		<td> </td> 
	</tr>
	
	<tr>
		<th> Gender </th>
		<td > </td> 
		
	</tr>

<tr>
		<th> Rank </th>
		<td > </td> 
		
	</tr>

</table>	
<br>
<table align="center">
	<tr>
		<td colspan="2" align="center"> <input type="submit" name="VIEW UPLOADED VIDEOS" value="VIEW UPLOADED VIDEOS" ></td>
		<td colspan="2" align="center"> <input type="submit" name="VIEW RECENT VIDEOS" value="VIEW RECENT VIDEOS"> </td>
	</tr>	
</table> -->
<!-- </body>
</form>
</html> --> 




 <?php

include'connection.php';
extract($_GET);

?>

<!DOCTYPE HTML>
<html lang  class="no-js" lang="zxx">
<head>
    <title>User Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <title>Video4U</title> -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/untitled.png"> -->
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
    


<body>
    
    <header>
        <!-- <div class="container">
                <div class="row">
            <a class="downlad-btn"href="usereditprofile.php" style="color: white" >Edit Profile</a>
                </div>
            
                   </div> -->
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="index.html">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li> <a href="userhome.php">Home</a></li>
                                            <!-- <li><a href="contact.html">S</a></li> -->
                                            <li> <a href="#">Settings <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="useruploadvideos.php">Upload Videos</a></li>
                                                    <li><a href="userecentlyviewedvideos.php">History</a></li>
                                                    <li><a href="usereditprofile.php">Edit Profile</a></li>
                                                    <li><a href="userviewvideostatus.php">Video Status</a></li>
                                                     <li><a href="userpayment.php">Make Payment</a></li>
                                                </ul>
                                            </li>
                                                <style type="text/css">  
                                                    input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
</style>

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
                            </div>
                          
                             
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Font -->
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
    
    <!-- Stylesheets -->
    
    <link href="common-css/bootstrap.css" rel="stylesheet">
    
    <link href="common-css/ionicons.css" rel="stylesheet">
    
    <link href="common-css/fluidbox.min.css" rel="stylesheet">
    
    <link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
    
    <link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">

</head>
<body>
        <?php
    
       $q="SELECT * from user where user_id='$ids'";
    $res=select($q);
    foreach($res as $row)
    {
        ?>
    <section class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-lg-2"></div>
                <div class="col-md-10 col-lg-8">
                    <div class="intro">
                        <div class="profile-img"><img style="width: 150px; height: 150px; border-radius: 150px;" src="<?php echo $row ['user_photo'];?>" alt=""></div>
                        <h2><b><?php echo $row['user_fname'];?>  <?php echo $row['user_lname'];?></b></h2>
             <!--            <h4 class="font-yellow"> <?php //echo $row['user_lname'];?></h4> -->
                        <ul class="information margin-tb-30">
                            <li><b>NUMBER : </b><?php echo $row['user_phone'];?></li>
                            <li><b>EMAIL : </b><?php echo $row['user_email'];?></li>
                            <li><b>GENDER : </b><?php echo $row['gender'];?> </li>
                             <li><b>RANK: </b> <?php echo $row['rank'];?> </li>
                        </ul>
                       <!--  <ul class="social-icons">
                            <li><a href="userhome.php"><i class="fa fa-share style="color:purple"></i></a></li>
                            <li><a href="userhome.php"><i class="fa fa-comment style="color:purple"></i></a></li>
                        </ul> -->
                    </div><!-- intro -->
                </div><!-- col-sm-8 -->
            </div>
        </div>

    <?php
}
?>
    </section>


    <footer>
        <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>


    </footer>
    
    
    <!-- SCIPTS -->
    
    <script src="common-js/jquery-3.2.1.min.js"></script>
    
    <script src="common-js/tether.min.js"></script>
    
    <script src="common-js/bootstrap.js"></script>
    
    <script src="common-js/isotope.pkgd.min.js"></script>
    
    <script src="common-js/jquery.waypoints.min.js"></script>
    
    <script src="common-js/progressbar.min.js"></script>
    
    <script src="common-js/jquery.fluidbox.min.js"></script>
    
    <script src="common-js/scripts.js"></script>
    
</body>
</html>
</form>