<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <link rel="stylesheet" type="text/css" href="view.css"/>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>View My Bookings</title>
<script type="text/javascript" language="javascript" src="viewbookings.js"></script>

<script>
  function edit(){
  
    if (confirm("Do you want to edit this booking") == true) {
		     alert("ok");
			 return true;
			 }
    else {
	 return false;
    alert ("hello");
     
	}
  
  }
  
  
  function deleting(){

    myAjax = new XMLHttpRequest();
    if(!myAjax){
        alert("Ajax request could not be created... Use latest Firefox Browser and reload application!");
        return false;
    }
	
	var value=document.getElementById("txtrentalid").value;
    myAjax.open("GET","delete.php?"+"txtrentalid"+"="+value,true);
    myAjax.onreadystatechange = processAjaxResponse;
    myAjax.send(null);
}

var processAjaxResponse = function(){

    if(myAjax.readyState == 4 && myAjax.status == 200){

        var serverResponseViaAjax = myAjax.responseText;
		alert(serverResponseViaAjax);
    }
}
  
  </script>
  
  
</head>
<body onload="sendRequest();">

<form action="edit.php" method="GET" id="theform">

<h1> <?php  include_once("global.php");
				      
				  
				   
				      if (isset($_SESSION['id'])){
					  
					     
					        $id=$_SESSION['id'];  
                            						
                           
					        $query=mysql_query("SELECT *FROM members WHERE id='$id'") or die("could not select data");
					        $row = mysql_fetch_assoc($query);
                            $name =$row['username'];
							
							echo $name." your bookings ";
							}
							?>
							</h1>
<div id="carimg">

</div>
							
<input type="hidden" id="txtrentalid" name="txtrentalid" />
<br>

<input type="text" id="txtcarid" name="txtcarid" />
<br>

<table>
<tr>
<td>
<label for="txtdropdate">Drop Date</label>
<input type="textbox" id="txtdropdate"  name="txtdropdate"/>
</td>

<td>
<label for="txtdroptime">Drop Time</label>
<input type="textbox" id="txtdroptime" name="txtdroptime"/>
</td>
</tr>

<tr>
<td>

<label for="txtpickdate" > Pick Up Date</label>
<input type="textbox" id="txtpickdate" name="txtpickdate"/>
</td>

<td>
<label for="txtpicktime">Pick Up Time</label>
<input type="textbox" id="txtpicktime" name="txtpicktime"/>
</td>

</tr>

<tr>
<td>
<label for="txtdropplace"> Drop Place</label>
<input type="textbox" id="txtdropplace" name="txtdropplace"/>
</td>

<td>

<label for="txtpickplace" > Pick Up Place</label>
<input type="textbox" id="txtpickplace" name="txtpickplace"/>
</td>
</tr>


<tr>
<td>

<input type="submit" value="Edit" onclick="return edit();" />
<input type="button" value ="Delete"  onclick="deleting();"/>


</td>


</form>
<br /><br />
<div id="responseOutput">&nbsp;</div>
</body>

</html>
