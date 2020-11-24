<?php
include 'connection.php';
include 'loginheader.php';

if(isset($_POST['login']))
{
  extract($_POST);
  $qr="SELECT * from user where user_email='$name' AND u_pass='$password'";
  $res=select($qr);
  if(sizeof($res)>0)
  {
    $id=$res[0]['user_id'];
    $_SESSION['logid']=$id;
    echo $id;
    
    if($res[0]['user_type']=='admin')
    {
      return redirect('adminhome.php');
    }
    else if($res[0]['user_type']=='user')
    {
      return redirect('userhome1.php');
    }
}
    else
    
    {
      alert ("Incorrect Username or Password");
    }
  
}
?>

<!DOCTYPE html>
<html>
<body>
<form method="post" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  height: 100%;
  body {font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("banner.png");

  min-height: 500px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: transparent;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: purple;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h2></h2>
  <form action="post" class="container">
   


    <label style="color:purple "for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="name" required>

    <label style="color:purple" for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
    <button style= "type="submit" class="btn" name="login">Login</button>

      <div class="text-center p-t-57 p-b-20">
          <span class="txt1"  style=" color:purple">
            New User ?
          </span>
        </div>
        
        <div class="text-center">
          <a href="useregistration.php" class="txt2 hov1">
            Sign Up
          </a>
        </div>

  </form>

</body>
</html>
