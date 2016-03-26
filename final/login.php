<?php
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Content-type: text/plain");

include_once("global.php");


if(isset($_POST['username'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   if(!$username||!$password){
      echo "you must enter username and password both";
	  }
	else{
       $query=mysql_query("SELECT *FROM members WHERE username='$username' AND password='$password' LIMIT 1") or die("could not select data");
	   $count_query= mysql_num_rows($query);
	   if ($count_query==0){
	       echo "the information you submitted was not correct";
		   }
		else
		{
		  echo "you have been successfully logged in.you may now book your car";
		  	  while($row=mysql_fetch_array($query)){
		       $id=$row['id'];
			                  }
							  		  
			  $_SESSION['username']=$username;
		      $_SESSION['id']=$id;
			  
		      //header('Location: index.php');
			
		  }
		  

        }
		
		
		
   }
 else
   {
     echo("not set");
	 }
?>