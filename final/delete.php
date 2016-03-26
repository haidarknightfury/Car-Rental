<?php

include_once("global.php");
$id=$_GET['txtrentalid'];


$sql = "DELETE FROM rental WHERE rentalid='$id'";
$result=mysql_query($sql);
if($result){
     $msg="your booking has been successfully deleted";
	 }
else{
     $msg="your booking has not been deleted";
}


echo $msg;
?>