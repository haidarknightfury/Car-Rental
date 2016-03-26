<?php

$id=$_GET['txtrentalid'];
$droptime=$_GET['txtdroptime'];
$dropdate=$_GET['txtdropdate'];
$pickdate=$_GET['txtpickdate'];
$picktime=$_GET['txtpicktime'];
$pickplace=$_GET['txtpickplace'];
$dropplace=$_GET['txtpickplace'];
		

include_once("global.php");
$sql="UPDATE rental SET droptime='$droptime', dropdate='$dropdate', pickdate='$pickdate' ,picktime='$picktime' ,pickplace='$pickplace' ,dropplace='$dropplace'  WHERE rentalid='$id'";
$result=mysql_query($sql);


echo "You have successfully edited your record";
header('Refresh: 10; URL=http://localhost/final/viewbookings.php');

 
?>