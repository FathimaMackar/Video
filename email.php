<?php 
    if(!isset($_POST['submit'])) 
        exit();

    $vars = array('email');
    $verified = TRUE;
    foreach($vars as $v) {
        if(!isset($_POST[$v]) || empty($_POST[$v])) {
            $verified = FALSE;
        }
    }   
    if(!$verified) {
        echo "<p style='color:white; margin-top:25px;'>*Email required*</p>";
        exit();
    }
    $email = $_POST['email'];
    if($_POST['submit']) echo "<p style='color:white; margin-top:25px;'>*Check your inbox*        </p>";

    // Create connection
    $con=mysqli_connect("mysql.host","user","password","dbname");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql="INSERT INTO emails (email)    VALUES  ('$_POST[email]')";
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }

    $query = mysql_query("SELECT * FROM emails WHERE email='$email'",($con));
    if(mysql_num_rows($query) != 1)
    {
        echo "email already exists";

    }


    mysqli_close($con);
?>
php mysql