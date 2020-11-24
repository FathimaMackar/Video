<?php

include'connection.php';
?>

<!DOCTYPE html>
<html lang  class="no-js" lang="zxx">
<head>
	<title>EDIT USER PROFILE</title>
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
<body >
    <header>
        <!-- <div class="container">
                <div class="row">
            <a class="downlad-btn"href="usereditprofile.php" style="color: white" >Edit Profile</a>
                </div>
            
                   </div> -->

        <div class="header-area ">
        	<br> <br>
            <div id="sticky-header" class="main-header-area">
                <!-- <div class="container"> -->
                    <!-- <div class="header_bottom_border"> -->
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                 <!--    <a href="index.html"> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li> <a href="userhome1.php"style="color: white">Home</a></li>
                                            <!-- <li><a href="contact.html">S</a></li> -->
                                            <li> <a href="#"style="color: white">Settings <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="useruploadvideos.php"style="color: black">Upload Videos</a></li>
                                                    <li><a href="userecentlyviewedvideos.php"style="color: black">History</a></li>
                                                    <li><a href="userviewownprofile.php"style="color: black">Profile</a></li>
                                                    <li><a href="userviewvideostatus.php"style="color: black">Video Status</a></li>
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
    
   
    
    <link href="01-cv-portfolio/css/styles.css" rel="stylesheet">


</head>
<body background="slider-1-1920x1080.jpg">
<form method="post" enctype="multipart/form-data">
		

         <table align="center">
<section class="intro-section">
    <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br>  <br> <br> <br> <br> <br> 
            
            <?php
       $id=$_SESSION['logid'];
       $q="SELECT * from user where user_id='$id'";
    $res=select($q);
    foreach($res as $row)
    {

        ?>
	<tr>
		<th style="color: #f56433">Profile Photo </th>
		<td> <input type="file" name="file_name" value="<?php echo $row['user_photo'];?>"> </td> 
		<td  align="center" >  <input type="submit"name="upload" value="upload"  style="background-color:white; font color:white; font-size: larger; font-style:oblique;  ; color: #f56433; "></td>
u
	</tr>

	<tr>
		<th style="color: #f56433"> First Name </th>
		<td> <input type="text" name="first_name" value="<?php echo $row['user_fname'];?>"> </td> 
	</tr>
	<tr>
		<th style="color: #f56433"> Last Name </th>
		<td> <input type="text" name="last_name" value="<?php echo $row['user_lname'];?>"> </td> 
	</tr>

	<tr>
		<th style="color: #f56433"> Phone Number </th>
		<td> <input type="text" name="number" minlength="10" maxlength="10" value="<?php echo $row['user_phone'];?>"> </td> 
	</tr>

	<tr>
		<th style="color: #f56433"> Email </th>
		<td> <input type="email" name="email"  value="<?php echo $row['user_email'];?> "> </td> 
	</tr>

	<tr>
		<!-- <?php
	    if($row['gender']=='male')
        {

	?>
		<th> Gender </th>
		<td > <input type="radio" name="gender" value="male" checked>Male <input type="radio"  name="gender"  value="female" >Female </td>

		<?php
	    }
	    ?>

		<?php
	    if($row['gender']=='female')
        {

	?>
		<th> Gender </th>
		<td > <input type="radio" name="gender" value="male">Male <input type="radio"  name="gender"  value="female" checked>Female </td>
		  <?php
        }
        ?> -->
	</tr>

<?php
        }
        ?>

</table>
<br>


<table align="center">
		<tr >	
        	<td colspan="2" align="center" style="color: #f56433"> <input type="submit" name="SAVE" value="SAVE" style="background-color:white ; font color:#f56433; font-size: larger; color: #f56433; "></td>
		</tr>
</table>
<?php
			if (isset($_POST['upload'])) {
				extract($_POST);
				$dir = "photos/";
				$file = basename($_FILES['file_name']['name']);
				$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
				$target = $dir.uniqid("photo_").".".$file_type;

				if ($file_type == "jpg"OR $file_type=="JPG" OR $file_type=="JPEG"OR $file_type=="jpeg"OR  $file_type=="PNG" OR  $file_type=="png") {
					if(move_uploaded_file($_FILES['file_name']['tmp_name'], $target))
					{
						$i=$_SESSION['logid'];
						echo $qry1="update user set user_photo='$target'where user_id=".$i;
						echo $id=update($qry1);
						return redirect('usereditprofile.php');
				}
			}
				else 
				{
				 	echo "invalid file format, file format =". $file_type;
				 }
				
}
			if (isset($_POST['SAVE'])) {
                extract($_POST);
			$i=$_SESSION['logid'];
	 				
			echo $qry="update user set user_fname='$first_name',user_lname='$last_name',user_phone='$number',user_email='$email' where user_id=".$i;
						echo $id=update($qry);
						return redirect('userviewownprofile.php');
}	
	
			?>

</body>
</form>
</html>