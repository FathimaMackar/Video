<?php

include'connection.php';
include 'userheader1.php';
$ids=$_SESSION['logid'];
if(isset($_POST['DONE']))
{
	return redirect('userhome.php');
}
?>


<form method="post" enctype="multipart/form-data">


<br> <br> <br>
<table align="center" class="table" style="width: 1000px;">
	<tr>
		<th style="color:orange"> Video Title </th>
		<th style="color:orange"> Video  </th>
		<th style="color:orange"> Video Description </th>
		<th style="color:orange"> Category</th>
		<th style="color:orange"> Date</th>
	</tr>

	<?php

	  // echo $q="SELECT videos.video_title ,videos.video_path ,videos.video_desc,categories.category_name,history.h_date  FROM history INNER JOIN videos ON history.video_id=videos.video_id INNER JOIN categories ON videos.category_id=categories.category_id  WHERE history.user_id='$ids'","GROUP by history_id ","ORDER by h_date";

		  $q="SELECT * FROM `history` INNER JOIN `videos` USING(`video_id`) INNER JOIN `categories` USING(`category_id`)  WHERE `history`.`user_id`='$ids'";
			$res=select($q);

			foreach($res as $row)
				{
					?>

			<tr>
				<td><?php echo $row['video_title']; ?> </td> 
				<td> <video width="400px" height="240" controls>
			<source src="<?php echo $row['video_path'];?>"type="video/mp4"> </video> </td>
				<td><?php echo $row['video_desc']; ?>  </td> 
				<td><?php echo $row['category_name']; ?>  </td> 
				<td><?php echo $row['h_date']; ?>  </td> 
			</tr>

				<?php } ?>

</table>
<br>
<table align=center>
		<tr>
		<td colspan="2" align="center"> <input type="submit" name="DONE" value="DONE" style="background-color: white; font color: orange; color: orange"> </td> 

	</tr>
</table>	
<?php 
include "footer.php";
 ?>