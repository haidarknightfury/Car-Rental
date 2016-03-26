<?php
	/**************************
	Purpose:	The SOAP Server
	Author: 	Shehzad Jaunbuccus
	Date:   	10/03/2012
	Version:	1.0 - 10/03/2012
                1.1 - 11/03/2013
                1.2 - 04/03/2014
	 ***************************/
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	
	require_once('DbConnect.class.php');
	require_once('ExperienceHandler.class.php');
	
	//Create Database Connection
	DbConnect::initialise();
	
	//Disable caching and set up Soap Server.
    ini_set("soap.wsdl_cache_enabled","0");
    $server = new SoapServer('http://localhost/final/SOAP/WSCentric/UDDI/WSCentric.wsdl');
    
	//Register class (and functions) with server
    $server->setClass('ExperienceHandler');
    $server->setPersistence(SOAP_PERSISTENCE_REQUEST);

	$server->handle();

    DbConnect::close();
?>