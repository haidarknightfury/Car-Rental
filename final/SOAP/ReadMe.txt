WSEx1 Notes:

1. *** IMPORTANT*** Unzip directly in web server root folder i.e, htdocs, www

2. Works on PHP5.3 and above.

3. Works in XAMPP (Not tested on EasyPHP!)

4. Make sure you have the relevant extensions enabled on your web server i.e. SOAP, etc

5. *** IMPORTANT*** Restore experience database (experience.sql)



*** Some people have reported that the web service does not work. ***

Possible Solutions:

a. Make sure that you have covered each step as described above (steps 1 and 5 are essential).
 
b. Sometimes WSDL are still cached on the server. Find any cached copies and delete them
	Steps to delete cached WSDL:
		i. Go on the PHP info page on your web server
		ii. Find the string "soap.wsdl_cache_dir".  This will show the path where the WSDL are cached.
		iii. Go to the location and delete the temp files (usually in the tmp folder of	your web server)
		iv. Restart your web server

c. Make sure you clear everything in your browser cache.


*** WSEx1 really Works ****

Screenshots of the running application are stored in the proof folder

Input.jpg - Shows the main screen with the 'web' text being sent to the WS.

Output.jpg - Shows the result sent by the WS after supplying it with the 'web' input.


Shehzad Jaunbuccus --------- UoM/2014