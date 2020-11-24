<?php

include'connection.php';
?>
<!DOCTYPE html>
<html>
<form method="post">
<head>
	<title> VIDEO UPLOAD</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
                                            <li><a href="adminhome.php"style="color: red">Home</a></li>
                                           <li><a href="#"style="color: red">View Videos <i class="ti-angle-down"></i></a>
                                            	<ul class="submenu">
                                            		<li><a href="adminviewusersuploadedvideos.php"style="color: red">View User Videos</a></li>
                                            		<li><a href="adminviewvideostatus.php"style="color: red">View Video Status</a></li>
                                            		</ul>
                                            <li><a href="#"style="color: red">Settings <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="adminviewusers.php"style="color: red">View Users</a></li>
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
<body>
<form method="post" enctype="multipart/form-data">

<br> <br> <br> <br> <br> <br>
<table align="center" border="2">
	<tr>
		<th> Video Title </th>
		<td> <input type="text" name="video_title"> </td> 
	</tr>
	<tr>
		<th> Video Description </th>
		<td> <input type="text" name="video_desc"> </td> 
	</tr>

	<tr>
		<th> Category</th>
		<td>  <select name="category">
			<?php
			$qry="select * from categories ";
			$res=select($qry);
			foreach ($res as $row ) {
				echo '<option value="'.$row['category_id'].'">'.$row['category_name'].'</option>';
			}
		?>
		</select>	
		</td> 
	</tr>

	<tr>
		<th> Upload Video </th>
		<td> <input type="file" name="video"> </td>
	</tr>

	<tr>
		<td colspan="2" align="center"> <input type="submit" name="UPLOAD" value="UPLOAD"> </td> 
	</tr>
</table>
<?php

			if (isset($_POST['UPLOAD'])) {
				$dir = "videos/";
				$file = basename($_FILES['video']['name']);
				$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
				$target = $dir.uniqid("video_").".".$file_type;

				if ($file_type == "mp4"OR $file_type=="MP4") {
					if(move_uploaded_file($_FILES['video']['tmp_name'], $target))
					{
						alert ("video uploaded successfully");
					extract($_POST);
					$i=$_SESSION['logid'];
	 				 $qry="INSERT into videos(category_id,user_id,video_title,video_path,video_desc,v_date,status,no_of_shares,like_count,no_of_comments) values ($category,'$i','$video_title','$target','$video_desc',now(),'active',null,null,null)";
						echo $id=insert($qry);
					}
				
				}
				else
				{
					("video uploading failed invalid file format, file format =".$file_type);
				}
            }
?>

</body>
</form>
</html>
