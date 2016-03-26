<?php
include_once("global.php");
$carid=$_GET['carid'];
$sql="SELECT *FROM cars WHERE carid='$carid' LIMIT 1";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
       $path=$row['path'];
	 }
	 
echo($path);

?>