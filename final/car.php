




<!DOCTYPE HTML>
<?php

if (isset($_GET['pickuppoint'])){
$pickuppoint=$_GET['pickuppoint'];
$dropoffpoint=$_GET['dropoffpoint'];
$pickupdate=$_GET['pickupdate'];
$dropoffdate=$_GET['dropoffdate'];
$pickuptime=$_GET['pickuptime'];
$dropofftime=$_GET['dropofftime'];
echo "return to home page";
echo "<a href='index.php'>Back To Homepage</a>";

}

else{
   echo"you have not selected your time yet";
   echo"<a href='carbook.html' taget='self'>select your pickup date and time</a>";
   }
?>



<html lang="en">
<meta charset="utf-8"/>
<head>
      <title>Select your car</title>
	  <link rel="stylesheet" type="text/css" href="car.css"/>
	  <script type="text/javascript" src="car.js"></script>
      

</head>

<body>
<script>
      var pickuptime = "<?php echo $pickuptime; ?>";
      var dropofftime = "<?php echo $dropofftime; ?>";
      var pickuppoint = "<?php echo $pickuppoint; ?>";
      var dropoffpoint = "<?php echo $dropoffpoint; ?>";
	  var pickupdate = "<?php echo $pickupdate; ?>";
	  var dropoffdate = "<?php echo $dropoffdate; ?>";


 </script>

<div class="theform">
<?php
    include_once("global.php");
	$sql=mysql_query("SELECT *FROM cars");
	while($rows=mysql_fetch_array($sql)){
	?>

<form  method="" action="#">
<table>

<tr>
<td><img src="<?php echo $rows['path']; ?>" alt="car"/></td>
<td class="desc"><?php echo $rows['cardesc'];echo"<br>"; 
echo "name: :".$rows['brand'];
echo "<br>";
echo"price: ".$rows['price'];?></td>

<td><input type="button" value="select" class="button" onclick="sendAjaxRequest('carid',<?php echo $rows['carid'];?>,'pickuptime',pickuptime,'dropofftime',dropofftime,'pickuppoint',pickuppoint,'dropoffpoint',dropoffpoint,'pickupdate',pickupdate,'dropoffdate',dropoffdate)"/></td>


</tr>
</table>

</form>

<?php }?>
</div>

	
</body>



</html>
