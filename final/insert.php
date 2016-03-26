<?php


include_once("global.php");

   if(!isset($_SESSION['id']))
   {
    echo "you are not logged in, log in to book a car";
    exit();
   }


else{


     $pickuptime=($_GET['pickuptime']);
	 $dropofftime=($_GET['dropofftime']);
     $pickuppoint =$_GET['pickuppoint'];
     $dropoffpoint =$_GET['dropoffpoint'];
	 $pickupdate =($_GET['pickupdate']);
	 $dropoffdate =($_GET['dropoffdate']);

header("Cache-Control: no-cache");
header("Content-type: text/plain");

$carid=$_GET['carid'];
//echo($carid);

//echo($dropoffdate);
$memberid=($_SESSION['id']);


$query=mysql_query("INSERT INTO rental (carid,memberid,dropdate,droptime,dropplace,pickdate,picktime,pickplace) VALUES('$carid','$memberid','$dropoffdate','$dropofftime','$dropoffpoint','$pickupdate','$pickuptime','$pickuppoint')");

echo("you have successfully book you car");
}

?>
 
 
