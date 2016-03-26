<?php
/**************************
Purpose:	The SOAP Client
Author: 	Shehzad Jaunbuccus
Date:   	08/03/2012
Version:	1.0 - 08/03/2012
            1.1 - 11/03/2013
            1.2 - 04/03/2014
 IMPORTANT: Make sure you are using PHP 5.3 or Above!
 ***************************/
 

if(isset($_POST['txtInput'])){
    try{
        $input = $_POST['txtInput'];
        
        $wsdl = 'http://localhost/final/SOAP/WSCentric/UDDI/WSCentric.wsdl';

        $options = array('cache_wsdl'=>WSDL_CACHE_NONE, 'features'=>SOAP_SINGLE_ELEMENT_ARRAYS);
        /* 'cache_wsdl'=>WSDL_CACHE_NONE resolves the issue of WS not working due to WSDL caching
         * 'features'=>SOAP_SINGLE_ELEMENT_ARRAYS forces SOAP to keep every response in an array even if the
         * response contains only 1 record
         */

        $client = new SoapClient($wsdl, $options);

        /* Client with debug option
         * $debugOption = array('trace'=>true, 'cache_wsdl'=>WSDL_CACHE_NONE, 'features'=>SOAP_SINGLE_ELEMENT_ARRAYS);
         * $client = new SoapClient($wsdl, $debugOption);
         */

        //Make request to server
        $response = $client->viewBooking($input);
 
        
        /* Use the following codes to check your SOAP request and response
         * NOTE: The codes below will work only if debug is enable on the client! 
         * echo "<strong>REQUEST:</strong><br/>" . htmlspecialchars($client->__getLastRequest()) . "<br/>";
         * echo "<strong>RESPONSE:</strong><br/>" . htmlspecialchars($client->__getLastResponse()) . "<br/>";
         */
        
            //Checks if there is any data in the response
        if (isset($response->Booking)){

	        //Reading returned Object and creating HTML
            $HTMLDocument = "<!DOCTYPE html><html>
            <head><title>View All Bookings</title>
            <link rel='stylesheet' type='text/css' href='WSCentric.css'/>
            </head>
            <body>
                <h3>All Your Bookings</h3>
                <table border='1'>
                    <thead>
                        <tr id='header'><th>Dropdate</th><th>Droptime</th><th>Dropplace</th><th>pickdate</th><th>picktime</th><th>pickplace</th><th>carid</th></tr>
                    </thead>
                    <tbody>";
                    foreach($response->Booking as $record){
                        $HTMLDocument .= "<tr><td>".$record->dropdate."</td>";
						$HTMLDocument .= "<td>".$record->droptime."</td>";
						$HTMLDocument .= "<td>".$record->dropplace."</td>";
                        $HTMLDocument .= "<td>".$record->pickdate."</td>";
						$HTMLDocument .= "<td>".$record->picktime."</td>";
						$HTMLDocument .= "<td>".$record->pickplace."</td>";
                        $HTMLDocument .= "<td>".$record->carid."</td></tr>";
                    }
            $HTMLDocument .= "</tbody>
                    </table>
                    
                </body>
            </html>";
	        echo $HTMLDocument;

    	}		
    	else{
			echo "<h1>you have not made any reservation yet!</h1>";
		}
    }
    catch (Exception $e) {
    	echo 'Exception: '.$e->getMessage();
    }
	catch (SOAPFault $exception) {
		echo 'SOAP Exception: '.$exception->getMessage();
	}
}
else{
    header("Location: http://localhost/WSCentric/Client/index.html");
}

?>