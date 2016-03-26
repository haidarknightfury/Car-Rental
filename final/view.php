<?php
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Content-Type: text/xml");

//include_once("global.php");				  
//if (isset($_SESSION['id'])){					  
//	$id=$_SESSION['id'];                         
//  $query=mysql_query("SELECT *FROM rental WHERE memberid='$id' LIMIT 1") or die("could not select data");
// while($row=mysql_fetch_array($query)){
//		print "<?xml version='1.0' encoding='UTF-8'";
//       print "<message>$row['carid']</message>";}

//		}
		

$dbhandle = mysql_connect("localhost","root","")or die("Unable to connect to MySQL");
$selected = mysql_select_db("carrental",$dbhandle)or die("Could not select database");	
session_start();
if (isset($_SESSION['id'])){					  
$id=$_SESSION['id']; 


$query=mysql_query("SELECT *FROM rental WHERE memberid='$id' LIMIT 1") or die("could not select data");
while($row=mysql_fetch_array($query)){
   $msg = $row['rentalid'];
   $carid=$row['carid'];
   $dropdate = $row['dropdate'];
   $droptime = $row['droptime'];
   $pickdate = $row['pickdate'];
   $picktime = $row['picktime'];
   $dropplace = $row['dropplace'];
   $pickplace = $row['pickplace'];

}

}

else{
   $msg="you are not logged in";
   }


print "<?xml version='1.0' encoding='UTF-8'?>";
print"<booking>";
print "<message>$msg</message>";
print "<carid>$carid</carid>";
print"<dropdate>$dropdate</dropdate>";
print"<droptime>$droptime</droptime>";
print"<pickdate>$pickdate</pickdate>";
print"<picktime>$picktime</picktime>";
print"<dropplace>$dropplace</dropplace>";
print"<pickplace>$pickplace</pickplace>";
print"</booking>";

?>




		

	   
	
	
