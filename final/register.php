<?php

    include_once("global.php");
    $message="";

 if (isset($_POST['username'])){
	 $username = $_POST['username'];
     $pass = $_POST['pass'];
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
	



  $user_query=mysql_query("SELECT username FROM members WHERE username='$username' LIMIT 1") or die("could not check username");
  $count_username=mysql_num_rows($user_query);
  
  
  
  if($count_username>0){
     $message="your username is already in use";
	 echo($message);
	 exit();
	 }

	
 $email_query=mysql_query("SELECT email FROM members WHERE email='$email' LIMIT 1") or die("could not check email");
  $count_email=mysql_num_rows($email_query);
  

  
  if($count_email>0){
     $message="your email is already in use";
	  echo($message);
	  exit();
}	 

  $query=mysql_query("INSERT INTO members (username,password,firstname,lastname,dob,address,country,phonenumber,addphonenumber,email) VALUES('$username','$pass','$fname','$lname','$dob','$address','$country','$phone','$phone2','$email')");
  $member_id=mysql_insert_id();
  $message="you have been registered";
  echo($message);
	   
	   ?>
	  
<html>
<head>
  <link rel="stylesheet" type="text/css" href="formstyle.css"/>

</head>

<body>
<div>
   <label><?php echo $message;
   ?></label>
</div>
   
<?php 
    
    if ($message="you have been registered"){
	     echo"<a href='index.php'>back to menu</a>";
		 echo"you will be redirected to the homepage in 15 secs";
		 header('Refresh: 10; URL=localhost/index.php');
		 }
		 
		 
    else{
	      echo"<a href='regform.html'>Re enter data</a>";
		  }
		  
		  
?>



</body>

</html>

	   
	   