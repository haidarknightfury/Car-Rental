function createXHR()
{
	try { return new XMLHttpRequest(); } catch(e) {}
	try { return new ActiveXObject("Msxml2.XMLHTTP.6.0"); } catch (e) {}
	try { return new ActiveXObject("Msxml2.XMLHTTP.3.0"); } catch (e) {}
	try { return new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {}
	try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {}
	alert("XMLHttpRequest not supported");
	return null;
}

function sendRequest()
{
	var xhr = createXHR();
	if (xhr)
	{
		xhr.open("GET","view.php",true);
		xhr.onreadystatechange = function(){handleResponse(xhr);};
		xhr.send(null);
	}
}

function handleResponse(xhr)
{
	if (xhr.readyState == 4 && xhr.status == 200)
	{  
	    
		var parsedResponse = xhr.responseXML;
	    var xmlroot=parsedResponse.getElementsByTagName("booking")[0];
	    if (xmlroot.childNodes[0].hasChildNodes()){

		var msg = parsedResponse.getElementsByTagName("message")[0].firstChild.nodeValue;
		var carid = parsedResponse.getElementsByTagName("carid")[0].firstChild.nodeValue;
		var dropdate = parsedResponse.getElementsByTagName("dropdate")[0].firstChild.nodeValue;
		var droptime = parsedResponse.getElementsByTagName("droptime")[0].firstChild.nodeValue;
	    var pickdate = parsedResponse.getElementsByTagName("pickdate")[0].firstChild.nodeValue;
	    var picktime = parsedResponse.getElementsByTagName("picktime")[0].firstChild.nodeValue;
	    var dropplace = parsedResponse.getElementsByTagName("dropplace")[0].firstChild.nodeValue;
	    var pickplace = parsedResponse.getElementsByTagName("pickplace")[0].firstChild.nodeValue;
		var responseOutput = document.getElementById("responseOutput");
		
		document.getElementById("txtrentalid").value=msg;
		document.getElementById("txtcarid").value=carid;
		document.getElementById("txtdroptime").value=droptime;
		document.getElementById("txtdropdate").value=dropdate;
		document.getElementById("txtpickdate").value=pickdate;
		document.getElementById("txtpicktime").value=picktime;
		document.getElementById("txtpickplace").value=pickplace;
		document.getElementById("txtdropplace").value=dropplace;
		
		
		var getimg=createXHR();
		getimg.open("GET","getimg.php?carid="+carid,true);
		getimg.onreadystatechange=function(){
		     if(getimg.readyState==4 && getimg.status==200){
			      var path=getimg.responseText;
				  var img=document.createElement("IMG");
				   img.src=path;
				   img.setAttribute("float","left");
		           document.getElementById('carimg').appendChild(img);

			 }
		}
		 getimg.send(null);
		 
		
		
		// img.src="\""+path+"\"";
		
		 
		
		//var elem=document.createElement("img");
		//elem.setAttribute("src","path");
		//elem.setAttribute("alt","carimg");
		//elem.setAttribute("height","300");
		//elem.setAttribute("width","250");
		//document.getElementById("carimg").appendChild(elem);
		//elem.src=path;
		
		//var img= new Image();
		//img.src=path;
		//var div=document.getElementById("carimg");
		//div.appendChild(img);
		//img.onload=function(){
		 //  div.appendChild(img);
		   
		 //  }
		
		
		
	}
	
	}
}

