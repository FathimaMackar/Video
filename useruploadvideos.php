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
                                            <li><a href="userhome1.php"style="color:white">Home</a></li>
                                       
                                            <li><a href="#"style="color: white">Settings <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="userviewownprofile.php"style="color:#a781d6">Profile</a></li>
                                                     <li><a href="userviewvideostatus.php"style="color:#a781d6">Video Status</a></li>
                                                      <li><a href="useruploadvideos.php" style="color:#a781d6">Upload Videos</a></li>
                                                       <li><a href="userecentlyviewedvideos.php" style="color:#a781d6">History</a></li>
                                                      <li><a href="userpayment.php" style="color:#a781d6">Make Payment</a></li>
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
                    <h2 class="title">Upload Videos</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Video Title" name="video_title"required>
                        </div>
                        
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Video Description" name="video_desc"required>
                        </div>
                            <div class="input-group">
                                <input class="input--style-3" placeholder="Category">
                                 <select name="category">
            <?php
            $qry="select * from categories ";
            $res=select($qry);
            foreach ($res as $row ) {
                echo '<option value="'.$row['category_id'].'">'.$row['category_name'].'</option>';
            }
            ?>
</div>
    <div class="input-group">
    <input class="input--style-3"placeholder="Upload Video">
         <input type="file" name="video"> 
    </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="UPLOAD" value="UPLOAD" >Upload</button>
                        </div>
                        <br>
                    </form>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
<?php

            if (isset($_POST['UPLOAD'])) {
                $dir = "videos/";
                $file = basename($_FILES['video']['name']);
                $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $target = $dir.uniqid("video_").".".$file_type;

                if ($file_type == "mp4"OR $file_type=="MP4") {
                    if(move_uploaded_file($_FILES['video']['tmp_name'], $target))
                    {
                        alert ("video uploaded sucessfully");
                        extract($_POST);
                    $i=$_SESSION['logid'];
                          $qry="INSERT into videos(category_id,user_id,video_title,video_path,video_desc,v_date,status,no_of_shares,like_count,no_of_comments) values ($category,'$i','$video_title','$target','$video_desc',now(),'pending',0,0,0)";
                          $id=insert($qry);
                    }
        }
                
          
                else
                {
                     alert ("video uploading failed invalid file format, file format =".$file_type);
                }
    }
?>
</body>
</form>
</html>
