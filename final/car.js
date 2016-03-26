
var myAjax = null;
var myDiv = null;

function createAjaxRequest(){
    // The new XMLHttpRequest codes should work on all modern browsers.
    try { return new XMLHttpRequest(); } catch(e) {}
    // The ActiveXObjects are mostly used by older IE browser to implement AJAX functionality
    try { return new ActiveXObject("Msxml2.XMLHTTP.6.0"); } catch (e) {}
    try { return new ActiveXObject("Msxml2.XMLHTTP.3.0"); } catch (e) {}
    try { return new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {}
    try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {}
    alert("XMLHttpRequest not supported");
    return null;
}





function sendAjaxRequest(element, value,element2,value2,element3,value3,element4,value4,element5,value5,element6,value6,element7,value7){

    myAjax = createAjaxRequest();
    if(!myAjax){
        alert("Ajax request could not be created... Use latest Firefox Browser and reload application!");
        return false;
    }
	 	   
        myAjax.open("GET","process.php?"+element+"="+value+"&"+element2+"="+value2+"&"+element3+"="+value3+"&"+element4+"="+value4+"&"+element5+"="+value5+"&"+element6+"="+value6+"&"+element7+"="+value7,true);
        myAjax.onreadystatechange = processAjaxResponse(element, value,element2,value2,element3,value3,element4,value4,element5,value5,element6,value6,element7,value7);
        myAjax.send(null);
}


 function processAjaxResponse(element, value,element2,value2,element3,value3,element4,value4,element5,value5,element6,value6,element7,value7){
 
 return function(){
  
    if(myAjax.readyState == 4 && myAjax.status == 200){

        var serverResponseViaAjax = myAjax.responseText;
       // alert(serverResponseViaAjax);
		if (confirm(serverResponseViaAjax+"click on ok to confirm") == true) {
		     alert(value);
			 
			 xhr=createAjaxRequest();
			 xhr.open("GET","insert.php?"+element+"="+value+"&"+element2+"="+value2+"&"+element3+"="+value3+"&"+element4+"="+value4+"&"+element5+"="+value5+"&"+element6+"="+value6+"&"+element7+"="+value7,true);
			 xhr.onreadystatechange=response;
			 xhr.send(null);
			 
        } else {
        x = "You pressed Cancel!";
        }

    }
	
	}
}


var response=function(){

    if(xhr.readyState==4 && xhr.status==200){
	       var message=xhr.responseText;
		   alert(message);
		   }
}


















	
	
//,'pickuppoint',<?php echo $pickuppoint; ?>,'dropoffpoint',<?php echo $dropoffpoint; ?>,'pickupdate',<?php echo $pickupdate; ?>,'dropoffdate',<?php echo $dropoffdate; ?>,'pickuptime',<?php echo $pickuptime; ?>,'dropofftime',<?php echo $dropofftime; ?>)