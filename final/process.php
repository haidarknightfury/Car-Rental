
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

$query=mysql_query("SELECT *FROM rental WHERE carid='$carid' ORDER BY rentalid DESC LIMIT 1") or die("could not select data");
 while($row=mysql_fetch_array($query)){
    $olddropoff= $row['dropdate'];
	$oldpicup= $row['pickdate'];
	}


//$date1=date_create($pickupdate);
//echo date_format($date1,"d/m/Y");

//$date2=date_create($dropoffdate);
//echo date_format($date2,"d/m/Y");


//$diff=date_diff($date1,$date2);
//echo $diff->format("%R%a days");




$date1 = $dropoffdate." ".$dropofftime;
$date2 = $pickupdate." ".$pickuptime;

$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);
echo "Difference between two dates is " . $hour = abs($timestamp2 - $timestamp1)/(60*60) . " hour(s)";

$query=mysql_query("SELECT *FROM cars WHERE carid='$carid' LIMIT 1") or die("could not select data");
 while($row=mysql_fetch_array($query)){
    $rate=$row['price'];
	}

echo "the rate is".$rate;

$total=$rate*$hour;
echo " and the total price is".$total;


//$query=mysql_query("INSERT INTO rental (carid,memberid,dropdate,droptime,dropplace,pickdate,picktime,pickplace) VALUES('$carid','$memberid','$dropoffdate','$dropofftime','$dropoffpoint','$pickupdate','$pickuptime','$pickuppoint')");

//echo("you have successfully book you car");
 
 


}



?>