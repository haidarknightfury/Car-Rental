
<!DOCTYPE HTML>
<html lang="en">
<meta charset="utf-8"/>
<head>
      <title>Homepage</title>
	  <link rel="stylesheet" type="text/css" href="mystyle.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	
	   <script type="text/javascript" src="javascript/slider.js"></script> 
</head>

<body class="body">
<body onload="slider()">

 <div class="slider">
    <img id="1" src="images/car4.png" border="0" alt="first image"/>
	<img id="2" src="images/car5.JPG" border="0" alt="second image"/>
	<img id="3" src="images/car7.JPG" border="0" alt="first image"/>
</div>

<!--#echo var="DATE_LOCAL"-->


   <header class="MainHeader">
		<div id="nav">
		    <ul>
			    <li><a class="active" href="index.html">Home</a></li>
                <li><a href="carbook.html"> Rent A Car Now</a>
				    <ul>
					  <li><a href="login.html">Log In</a></li>
					  <li> <a href="regform.html">Register</a></li>
					  <li><a href="carbook.html">Book Now</a></li>
					  <li><a href="car.php">Our Cars</a></li>
					</ul></li>
                <li><a href="">FAQ</a></li>
				<li><a href="SOAP/WScentric/Client">View All bookings</a></li>
				<li><a href="discover.html">Discover Mauritius</a></li>
				<li><a href="about.html">About Us</a></li>
			</ul></li>
		</div>
	</header>
  
  
     <div class="MainContent">
	       <div class="content">
		        <div class="topcontent">
					 <h1 align="center"> Happy Holidays car rental</h1>
					 
					 <p> 

                        Welcome to Happy Holidays website! The leader in car rental in Mauritius, Our Company is present in Mauritius since 2000.
						Our wide range of vehicles available for rental will enable you to drive around Mauritius in all freedom! We offer you value for money.
                     </p>
					      
					     <img src="images/car1.JPG" alt="carpic"/> 
						 
						 <div id="text">
						    <p> Book and tell us where you wish your hired car to be waiting for you at the airport, your hotel or bungalow in Mauritius.
							.Our aim is to supply an economical, safe, clean and reliable car rental in Mauritius to you our dear valued customer. 
							
							</p>
						
							
						 </div>
					
					
					 
				</div>
				
				<div class="bottomcontent">
                    <div class="view view-first">  
                      <img src="images/2.jpg" alt="image"/>  
                      <div class="mask">  
                           <h2>Discover More</h2>  
                           <p>Mauritius, is a 2040 square-kilometre island full of surprises, which are just waiting to be discovered. 
						  Each region of the island offers a unique perspective for all travelers.</p>  
                           <a href="#" class="info">Read More</a>  
                      </div>  
                    </div>  					  
				</div>
				
				 <div id="links">
	                 <p>happy holidays Car Rental works with multiple subcontractors in Mauritius that have proven themselves as
 trustworthy and reliable over the years. In case something does go wrong with your rental, though, we will help you
 from a neutral perspective. </p>
	              </div>
				

			</div>
				
				
				<aside class="top">
				   <h1>happy holidays</h1>
				   <?php  include_once("global.php");
				      
				  
				   
				      if (isset($_SESSION['id'])){
					  
					     
					        $id=$_SESSION['id'];  
                            						
                           
					        $query=mysql_query("SELECT *FROM members WHERE id='$id'") or die("could not select data");
					        $row = mysql_fetch_assoc($query);
                            $name =$row['username'];?>
				
				   
				            <div id="profile">
                               <b id="welcome">Welcome : <i><?php echo $name; ?></i></b><br>
                               <b id="logout"><a class="button" href="logout.php">Log Out</a></b>
							   <b id="view"><a class="button" href="viewbookings.php">modify bookings</a></b>
                           </div>
					
					<?php }


                     else{?>
					 
					     <p> you are not logged in yet</p>
						 <p> log in and you may choose to view our cars</p>
						 <a href="login.html" class="button">log in</a>
					<?php }?>
						 
					

					
				</aside>

				
		         <aside class="top">
				   <h1> Unique Advantages</h1>
				   
				   <ul>
				      <li><span><b>No Deposit</b></span> required</li>
					  <li><span><b>Assisstance 24/24 </b></span></li>
				      <li><span><b>Full risk insurance</b></span></li>
					  <li><span><b>Unlimited mileage</b></span></li>
					  <li><span><b>Driver Option</b></span></li>
					  <li><span><b>Airport Delivery and collection</b></span></li>
					  <li>Delivery and collection<span><b> everywhere across the island<b></li>
					  <li><span><b>Baby seat and boosters free</b></span></li>
					 </ul>
					  
					  
				</aside>
				
				
                 <aside class="middle">
				      <h1>Contact US</h1>
					  <p>Same deals, expert advice</p>
					  <p>call us on +2304175100</p>
					  <p>Our Office is located at Labourdonnais street, Curepipe</p>
					  
				  </aside>
				  
			    
     </div>
	 

	 
	 
<footer class="MainFooter">
		<p>Copyright &copy; 2015</p>
		<p>happy holidays homepage all rights reserved haidar dargaye</p>
</footer>

	 
</body>



</html>