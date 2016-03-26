



	function validate(){
	   var user=document.getElementById("username").value;
	   var pass=document.getElementById("password").value;
	
	   var postdata="username="+user+"&password="+pass;
       
	
	  var xhr;
	  xhr=new XMLHttpRequest();

	  
	  xhr.onreadystatechange = function() {
            
                if (xhr.readyState == 4 && xhr.status== 200) {
                      alert(xhr.responseText);
					  response=xhr.responseText;
					  if(response=='correct'){
					      window.location="localhost/index.php";
					  }
                } 
             }
			 
			 
       xhr.open("POST", "login.php", true);
	   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	   xhr.setRequestHeader("Content-length", postdata.length);
       xhr.send(postdata);
	  
	  
	  
}
	





