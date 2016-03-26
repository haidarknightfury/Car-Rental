
function showtwo(){
 $('#2').hide();
 $("#3").show("slide",{direction:"right"},1000);
}

function showprevtwo(){
   $('#3').hide();
   $("#2").show("slide",{direction:"left"},1000);
}

function showone(){
   $('#1').hide();
   $( "#progressbar li.active" ).next().css( "background", "#33618E");
   $("#2").show("slide",{direction:"right"},1000);
}

function showprevone(){
   $('#2').hide();
   $("#1").show("slide",{direction:"left"},1000);
}

function show(){

$("#1").show("fade",2000);
}



function checkblank(value){
if (value.length==0){
   return true;
   }
else{
    return false;
	}
}
				
function chkAgree(value){
    if (!value){
        return true;
    }
    return false;
}

function checkName(value){
    var regExp = /^[0-9]?[A-Za-z]{3,25}[0-9]+$/;
    if(!regExp.test(value)){
        return true;
    }
    return false;
}

function checklength(pass){
    var regExp = /^[A-Za-z0-9]{8,20}$/;
    if(!regExp.test(pass)){
        return true;
    }
   return false;

}

function checkpassword(pass,cpass){
   if (pass!=cpass){
        return true;
    }
   return false;

}



function checkexp(value){

var regExp=/^([0]?[1-9]|[1|2][0-9]|[3][0|1])[./-]([0]?[1-9]|[1][0-2])[./-]([0-9]{4}|[0-9]{2})$/;
  if(!regExp.test(value)){
        return true;
    }
   return false;

}










function validateone(){

document.getElementById("message").innerHTML="";
$('#message').hide();

if (checkblank(document.getElementById("username").value)){
document.getElementById("message").innerHTML="user name cannot be empty";
$('#message').show();
return false;
}

if (checkName(document.getElementById("username").value)){
document.getElementById("message").innerHTML="user name should contain at least 3 characters and must contain a digit";
$('#message').show();
return false;
}


if (checkblank(document.getElementById("pass").value)){
document.getElementById("message").innerHTML="password cannot be empty";
$('#message').show();
return false;}

if(checklength(document.getElementById("pass").value)){
document.getElementById("message").innerHTML="password not within the limits 8-20";
$('#message').show();
return false;}

if(checkpassword(document.getElementById("pass").value,document.getElementById("cpass").value)){
document.getElementById("message").innerHTML="password do not match";
$('#message').show();
return false;}



if (checkblank(document.getElementById("cpass").value)){
document.getElementById("message").innerHTML="please confirm the password";
$('#message').show();
return false;
}

showone();
}	

function validatetwo(){

document.getElementById("messageone").innerHTML="";
$('#messageone').hide();

if (checkblank(document.getElementById("fname").value)){
document.getElementById("messageone").innerHTML="first name cannot be empty";
$('#messageone').show();
return false;
}


if (checkblank(document.getElementById("lname").value)){
document.getElementById("messageone").innerHTML="last name cannot be empty";
$('#messageone').show();
return false;
}


if (checkblank(document.getElementById("dob").value)){
document.getElementById("messageone").innerHTML="you must enter date of birth";
$('#messageone').show();
return false;

}


if(checkexp(document.getElementById("dob").value)){
  document.getElementById("messageone").innerHTML="date not in appropriate format";
$('#messageone').show();
return false;

}



if (checkblank(document.getElementById("address").value)){
document.getElementById("messageone").innerHTML="you must enter address";
$('#messageone').show();
return false;

}

if (checkblank(document.getElementById("country").value)){
document.getElementById("messageone").innerHTML="you must enter your country of origin";
$('#messageone').show();
return false;

}

showtwo();
}
  	
	

function validatethree(){

document.getElementById("messagethree").innerHTML="";
$('#messagethree').hide();

if (checkblank(document.getElementById("phone").value)){
document.getElementById("messagethree").innerHTML="enter a phone number";
$('#messagethree').show();
return false;
}


if (checkblank(document.getElementById("email").value)){
document.getElementById("messagethree").innerHTML="please enter email";
$('#messagethree').show();
return false;
}


if (checkblank(document.getElementById("chkagree").checked)){
document.getElementById("messagethree").innerHTML="please agree to the conditions";
$('#messagethree').show();
return false;
}



}	
	

