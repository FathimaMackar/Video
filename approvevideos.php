<?php
include("connection.php");
$id=$_GET['id'];
echo $id;
if(isset($_GET['id']))
{
  $qry1="UPDATE videos SET status='active' WHERE video_id='$id'";
echo $q=update($qry1);
alert ("update sucessfull");

?>
<script>
//alert("updated..");
window.location="adminviewusersuploadedvideos.php";
</script>
<?php
}
?>
