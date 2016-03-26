function slider(){

$('#1').show("fade",4000);
$('#1').delay(3000).hide("slide",{direction:"left"},1000);

var sc=$('.slider img').size();
var count=2;
setInterval(function(){
      $("#"+count).show("slide",{direction:"right"},1000);
	  $("#"+count).delay(3000).hide("slide",{direction:"left"},1000);
	  
	  if (count==sc){
	     count=1;
		 }
	   else {
	       count=count+1;
		 }
		
},5000)

		 

	  

}