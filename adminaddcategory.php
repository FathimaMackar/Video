<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
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
                                            <li><a href="adminhome.php"style="color:white">Home</a></li>
                                           <li><a href="#"style="color: white">View Videos <i class="ti-angle-down"></i></a>
                                              <ul class="submenu">
                                                <li><a href="adminviewusersuploadedvideos.php"style="color: #a781d6">View User Videos</a></li>
                                                <li><a href="adminviewvideostatus.php"style="color:#a781d6">View Video Status</a></li>
                                                </ul>
                                            <li><a href="#"style="color: white">Settings <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="adminviewusers.php"style="color: #a781d6">View Users</a></li>
                                                     <li><a href="adminuploadvideos.php"style="color: #a781d6">Upload Videos</a></li>
                                                </ul>
                                            </li>

                                               <!--  <style type="text/css">   -->
                                                  <!--   input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
 -->
<!-- input[type=text]:focus {
  width: 100%;
} -->
</style>
<li> <form  method="post" enctype="multipart/form-data"class="container">
 
</li>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <br> <br>
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
  </form>
</body>
    <!-- <title> VIDEO UPLOAD</title> -->
</head>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add Category</title>

    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">

        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading">
    
                </div>
                
                <div class="card-body">
                    <h2 class="title">Add Category</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Category Name" name="categoryname"required>
                        </div>
                        
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Category Description" name="categorydesc"required>
                        </div>
                        
                        
                        
                       
                       
                        
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="add" >Add</button>
                        </div>
                        <br>
            
  </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<?php

if(isset($_POST['add']))
{
    extract($_POST);
    $sql = "SELECT category_name FROM categories WHERE category_name='$categoryname'";
$result = select($sql);
if($result!=null) {
    alert ("Category already exist, try another Category");
} else {
     $qry="INSERT into categories(category_name,category_desc)values('$categoryname','$categorydesc')";
     
    insert($qry);
    alert ("Operation sucessful");
    return redirect('adminhome.php');
}
}
?>