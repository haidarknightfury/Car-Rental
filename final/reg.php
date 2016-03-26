<?php

    
   $message="";
   include_once("scripts/global.php");
   echo("hello");
  
   if (isset($_POST['username'])){
	 $username = $_POST['username'];
     $pass=$_POST['pass'];
	 $cpass=$_POST['cpass'];
	 $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $dob=$_POST['dob'];
	 $address=$_POST['address'];
	 $country=$_POST['country'];
	 $phone=$_POST['phone'];
	 $phone2=$_POST['phone2'];
	 $email=$_POST['email'];
    }
	
	
	
  ?>