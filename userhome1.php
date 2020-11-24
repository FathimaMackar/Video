<?php
include 'connection.php';
include 'userheader.php';
$login_id=$_SESSION['logid'];
// include 'uvvbasedonhistory.php';
?>
    <?php

    $s="SELECT * from videos";
    $result=select($s);
    if(isset($_POST['search1'])){
        extract($_POST);
         $q="select * from videos where video_title like '$search%' and video.status='active'";
        $result=select($q);

    }
    
   ?>

<!DOCTYPE html>
<html>
<head>
	<title>USER HOME</title>
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
    </style>
</head>
<body>
	<form method="post">
	
<section class="portfolio-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <!-- <h3><b>Profile</b></h3>
                        <h6 class="font-lite-black"><b>MY VIDEOS</b></h6> -->
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">
                    <div class="portfolioFilter clearfix margin-b-80">
                        <a href="#" data-filter="*" class="current"><b>ALL</b></a>
                        <a href="#" data-filter=".movies"><b>MOVIES</b></a>
                        <a href="#" data-filter=".academics"><b>ACADEMICS</b></a>
                        <a href="#" data-filter=".comedy"><b>COMEDY</b></a>
                    </div><!-- portfolioFilter -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->
        
        <div class="portfolioContainer">
     
        <table>
    <tr>
       <br> <h3 align="center">Recently Searched</h3><br>
            <div class="row">

         <?php 

              $s1="SELECT *,COUNT(`video_id`) AS vdo  FROM `history` INNER JOIN `user` USING(`user_id`) INNER JOIN `videos` USING(`video_id`) WHERE history.user_id='$login_id' GROUP BY `video_id` ORDER BY `h_date` DESC LIMIT 3";
             $result1=select($s1);

             if(sizeof($result1)>0){

         foreach($result1 as $row1)
    {
        ?>
       



 <div class="column">
              <br>
        <a href="videoplay11.php?id=<?php echo $row1['video_id'];?>"><div class="column" >
        <video width="320" url="1" height="240" controls controlsList="nodownload" src="<?php echo $row1['video_path'];?>">
        </video><br> <br>
        <h6 class="font-lite-black">
        <?php echo $row1['video_title'];?>
</h6> 
          </div></a>
      </div>


           <?php
}
?>
</div>

          <?php   } 
          else{ 


            echo "..........No Recently Searched Videos.....";

        }  ?>
    



<br><tr>
<h3 align="center">ALL MOVIES AND VIDEOS</h3><br>
      
    <div class="row">
         <?php foreach($result as $row)
    {
        ?>
       



 <div class="column">
              <br>
        <a href="videoplay11.php?id=<?php echo $row['video_id'];?>"><div class="column" >
        <video width="320" url="1" height="240"controls controlsList="nodownload" src="<?php echo $row['video_path'];?>">
        </video><br> <br>
        <h6 class="font-lite-black">
        <?php echo $row['video_title'];?>
</h6> 
          </div></a>
      </div>
            

           <?php
}
?>
</div>


    </section>
    
</body>
</html>