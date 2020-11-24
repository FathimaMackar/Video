<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>User Registration</title>

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

		
                    <h2 class="title">Join Us</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="First Name" name="firstname"required>
                        </div>
                        
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Lastname" name="lastname"required>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"required></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" minlength="10" maxlength="10" placeholder="Phone" name="number" required >
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="Password" placeholder="Password" name="password"required>
                        </div>
                        
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="submit" >Submit</button>
                        </div>
                        <br>
			 <a href="index.php"><i class="fa fa-home" style="color:purple"></i></a>
                       <a href="login.php">Already have an account?  Login</a> 
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

if(isset($_POST['submit']))
{
    extract($_POST);
    $sql = "SELECT user_email FROM user WHERE user_email='$email'";
$result = select($sql);
if($result!=null) {
    alert ("Email id already exist, try another email");
} else {
     $qry="INSERT into user(user_id,user_photo,user_fname,user_lname,gender,user_phone,user_type,user_email,u_pass,rank)values(null,'photos/photo_avatar.png','$firstname','$lastname','$gender','$number','user','$email','$password','BRONZE')";
     
    insert($qry);
    alert ("registration sucessful");
    return redirect('login.php');
}
}
?>