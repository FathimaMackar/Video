<?php
include 'connection.php';
include 'userheader.php';
$login_id=$_SESSION['logid'];

?>
    <?php
    $s1="SELECT *,COUNT(`video_id`) AS vdo FROM `history` INNER JOIN `user` USING(`user_id`) INNER JOIN `videos` USING(`video_id`) WHERE history.user_id='$login_id' GROUP BY `video_id` ORDER BY `vdo` DESC ";
    $result1=select($s1);
   
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
      
    <div class="row">
         <?php foreach($result1 as $row1)
    {
        ?>
       



 <div class="column">
              <br>
        <a href="videoplay11.php?id=<?php echo $row1['video_id'];?>"><div class="column" >
        <video width="320" url="1" height="240" controls src="<?php echo $row1['video_path'];?>">
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
        <td> <ul class="social-icons">
                            <li><a href="userhome1.php"><i class="fa fa-share style="color:purple"></i></a></li>
                            <li><a href="userhome1.php"><i class="fa fa-comment style="color:purple"></i></a></li>
                            <li><a href="userhome1.php"><i class="fa fa-download style="color:purple"></i></a></li>
                        </ul></td>
    </tr>
    </table>

    </section>
    
</body>
</html>