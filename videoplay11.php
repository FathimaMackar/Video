<?php
include 'connection.php';
include 'userheader.php';

$ids=$_SESSION['logid'];

?>
    <?php
  

    if(isset($_GET['id'])){
        
      extract($_GET);

      $g="Select count(like_id) as lid from likes where  video_id='$id'";
      $val=select($g);
      if($val[0]['lid']>="15")
      {
          $d="update user set rank='SILVER' where user_id=(select user_id from videos where  video_id='$id')";
          update($d);
      }


     $s="SELECT * from videos where video_id='$id'";
     $result=select($s);
   
   $o= "SELECT * from history where video_id='$id' and user_id='$ids'";
    $b=select($o);
    if(sizeof($b)>0)
    {
   $y="update history set h_date=curdate() where video_id='$id' and user_id='$ids' ";
   update($y);
  }
  else{
    # code...
  
  
     $qry="INSERT INTO `history`(`video_id`,`user_id`,`h_date`) VALUES('$id','$ids',curdate())";
    insert($qry);
    }
    $qr="select * from likes where user_id='$ids' and video_id='$id'";
    $res=select($qr); 
    }
   
?>
<!DOCTYPE html>
<html>
<head>
<!-- 	<title>USER HOME</title> -->
<script>
function clickCounter() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)+1;
    } else {
      localStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
</script>
    <style type="text/css">
        .row{
            width: 100%
            padding-left:100px;
        }
        .column{
            width: 50%
            float:left;
             padding-left:100px;
        }
img {
  border-radius: 50%;
}
    </style>
</head>
<body>
	<form method="post">
	
<section class="portfolio-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                      <!--   <h3><b>Profile</b></h3> -->
                        <h6 class="font-lite-black" align="center"><b>VIDEOS</b></h6>
                    </div>
                </div><!-- col-sm-4 -->
            </div><!-- row --> 
        </div><!-- container -->
        
        <div class="portfolioContainer">
     <br>
        <table>
    <tr>
      
    <div class="row">
         <?php foreach($result as $row)
    {
        ?>
       
    <div class="column" >
     
             <?php echo $row['video_title'];?>
             <br><br>
             <?php 
               $qt="SELECT * FROM `user` WHERE `user_id`='$ids'";
                $rst=select($qt);
                foreach ($rst as $rot) {

                   if($rot['rank']=="GOLD"){ ?>



                       <video width="500" height="340" controls>
              <source src="<?php echo $row['video_path'];?>" type="video/mp4">
              <source src="<?php echo $row['video_path'];?>" type="video/ogg">
              Your browser does not support the video tag.
            </video>
                 
             <?php   }

             else{ ?>

               <video width="500" height="340" controls controlsList="nodownload">
              <source src="<?php echo $row['video_path'];?>" type="video/mp4">
              <source src="<?php echo $row['video_path'];?>" type="video/ogg">
              Your browser does not support the video tag.
            </video>

         <?php    }
              }

              ?>

      
            <br><br>
             <?php echo $row['video_desc'];?>
             <br><br>
            <?php if(sizeof($res)>0){ ?>
            <input type="submit" name="unlike" value="Unlike" align="right">
        <?php }
        else{ ?>
         <input type="submit" id="<?php=$id['id'];?>" name="like" value="Like">
      <?php  }
         ?>
             <input type="submit" name="share" value="Share"> 

<?php
   //  $bla=" SELECT user_id from videos WHERE video_id ='$id'";
   //  $rest=select($bla);
   // $m=$rest[0]['user_id'];
      // $pro="SELECT * FROM  user INNER JOIN videos USING (user_id) WHERE user.user_id ='$m' " and " GROUP by user_id";
    $pro="SELECT *,CONCAT(`user_fname`,' ',`user_lname`) AS user_name FROM `videos` INNER JOIN `user` USING(`user_id`) WHERE `video_id`='$id'";
    $p=select($pro);
    // $i=$p[0]['user_id'];
    
  foreach( ($p) as $row) { ?>


	
                 <td style="color: white" align="center"><a href="userviewothersprofile.php?ids=<?php echo $row['user_id'];?>">
                 
                  <img style="width: 150px; height: 150px;" src="<?php echo $row ['user_photo'];?>"> <br>
                   <?php echo $row['user_name']; ?> </a>
                  </td> 

                <?php  } ?>       

            <br> <br>
           <textarea rows="4" cols="50" name="comment" ></textarea>
            <br>
            <input type="submit" name="comments" value="Comment">
            <br><br><br> <br>
</div>
           <?php
}
?>

<div>

<table align="center" class="table" style="width: 1000px;">
    <tr>
	 <th><b> User Photo </b></th> 
         <th><b> User Name </b></th> 
        <th><b>Comments </b> </th>
        <th> <b> Date</b></th>
    </tr>

    <?php
        $qi="SELECT * FROM `comments` INNER JOIN `user` USING(`user_id`) WHERE `video_id`='$id'";
            $result12=select($qi);

            foreach($result12 as $row12){ ?>

            <tr>
			
		 <td> <img src="<?php echo $row12 ['user_photo'];?>" alt="Avatar" height="70" width="70"></td> 
                <td><?php echo $row12['user_fname']; ?> </td> 
                <td><?php echo $row12['comment_cont']; ?>  </td> 
                <td><?php echo $row12['comment_date']; ?>  </td> 
            </tr>

                <?php } ?>

</table>
  





</div>
 <br><br>
    </section>

<?php
include 'footer.php';


if(isset($_POST['like'])){
    extract($_POST);
    $q="INSERT INTO `likes`(`user_id`,`video_id`) value('$ids','$id')";
    insert($q);
     echo  $n = "UPDATE videos SET like_count = like_count +1 where video_id =".$id; 
      echo update($n);
      $url='videoplay11.php?id='.$id; 
   return redirect($url);
    
}
if(isset($_POST['unlike'])){
    extract($_POST);
    $q="delete from likes where user_id='$ids' and video_id='$id'";
    delete($q);
    echo $u = "UPDATE videos SET like_count = like_count -1 WHERE video_id =".$id;
         echo update($u);
      $url='videoplay11.php?id='.$id;
   return redirect($url);
    
}
if(isset($_POST['share'])){

    extract($_POST);
    $qr="INSERT INTO `sharedvideo`(`user_id`,`video_id`,`s_date`) VALUES('$ids','$id',curdate())";
    insert($qr);
      $url='videoplay11.php?id='.$id;
   return redirect($url);
    
}
if(isset($_POST['comments'])){
    extract($_POST);
     $id=$_GET['id'];
      $qre="INSERT INTO `comments`(`user_id`,`video_id`,`comment_cont`,`comment_date`) VALUES('$ids','$id','$comment',curdate())";
    insert($qre);
     echo $v = "UPDATE videos SET no_of_comments = no_of_comments +1 WHERE video_id =".$id;
         echo update($v);
 $url='videoplay11.php?id='.$id;
   return redirect($url);
}


 ?>