<?php
/**************************
Purpose:	Class to keep methods/functions to be used by server
Author: 	Shehzad Jaunbuccus
Date:   	29/03/2012
Version:	1.2
 ***************************/
class ExperienceHandler
{ 

   public function viewBooking($param){
	       
	   	$sql = "SELECT *FROM rental WHERE memberid='$param'";
	   	
	   	$dbResult = mysql_query($sql, DBConnect::$conn) or die(mysql_error());
		$ns="http://www.shehzad.edu/webservice";
	   	$Booking = array();
	   	$result = array();
	   	 if(mysql_num_rows($dbResult) > 0){
	   		while ($row = mysql_fetch_assoc($dbResult)) {
	   			$Booking[] = array('dropdate'=>$row['dropdate'],'droptime'=>$row['droptime'],'dropplace'=>$row['dropplace'], 'pickdate' => $row['pickdate'],'picktime' => $row['picktime'],'pickplace' => $row['pickplace'], 'carid' => $row['carid']);
	   		}
	   		mysql_free_result($dbResult);
	   		$result=array('Booking'=>$Booking);
	   	}  
	   	return $result;
   }   
}
?>