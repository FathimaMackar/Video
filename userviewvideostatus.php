<?php
include 'connection.php';
if(isset($_POST['DONE']))
{
    return redirect('userhome.php');
}
?>

<!DOCTYPE html>
<html>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!--   <title>Video4U</title> -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/untitle.png">
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
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="userhome1.php"style="color: white">Home</a></li>
                                         <li><a href="#"style="color: white">Settings <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="userviewownprofile.php"style="color:#a781d6">Profile</a></li>
                                                     <li><a href="useruploadvideos.php"style="color:#a781d6">Upload Video</a></li>
                                                      <li><a href="userecentlyviewedvideos.php"style="color:#a781d6">History</a></li>
                                                      <li><a href="userpayment.php"style="color:#a781d6">Make Payment</a></li>
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
<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>UPLOADED VIDEOS</title>

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

            <div class="card card-3">
                <div class="card-heading" >
    
                </div>
                
                <div class="card-body">
                    <h2 class="title" align="center">UPLOADED VIDEOS</h2>
                    <form method="POST">
                          

                        <table align="center" width="100%" class="table">
    <tr align="center"  > 
        <th style=" color: #a781d6"> Video Title </th>
        <th style=" color: #a781d6"> Video  </th>
        <th style=" color: #a781d6"> Video Description </th>
        <th style=" color: #a781d6"> Video Date </th>
        <th style=" color: #a781d6"> Category</th>
        <th style=" color: #a781d6"> Status </th>
        <th style=" color: #a781d6"> Number of Likes </th>
        <th style=" color: #a781d6"> Number of Comments</th>
	 <th style=" color: #a781d6"> Number of Shares </th>
    </tr>
    <?php
  $s="SELECT videos.*, categories.* from videos inner join categories on categories.category_id = videos.category_id where videos.user_id=".$_SESSION['logid'];
    $result=select($s);
    foreach($result as $row)
    {
        ?>
        <tr>
            <td style="color:white">
                <?php echo $row['video_title'];?>
            </td>
            <td>
         <a href="videoplay.php?id=<?php echo $row['video_id'];?>"><div class="column" >
        <video width="400" url="1" height="260" controls src="<?php echo $row['video_path'];?>">
       
        </video><br><br>
        </td>
                <td style="color:white"> <?php echo $row['video_desc'];?> </td> 
                    <td style="color:white"> <?php echo $row ['v_date'];?> </td> 
                        <td style="color:white"> <?php echo $row ['category_name'];?> </td> 
                            <td style="color:white"> <?php echo $row ['status'];?> </td> 
                               <td style="color:white"> <?php echo $row ['like_count'];?></td> 
                                    <td style="color:white"> <?php echo $row ['no_of_comments'];?></td>
                                        <td style="color:white"> <?php echo $row ['no_of_shares'];?></td>  
                            
    </tr>


    <?php
     }

    ?>
</table>
                       <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="DONE" >DONE</button>
                        </div>

                        <br>
  </div>
                    </form>
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
