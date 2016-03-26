<?php
/**************************
Purpose:	Class to provide connection to the database
Author: 	Shehzad Jaunbuccus
Date:   	12/03/2012
Version:	1.1 - 12/03/2012
            1.2 - 09/03/2013
 ***************************/
class DbConnect{

    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_DATABASE = 'carrental';

    public static $conn;

    public static function initialise()
    {
        $conn = mysql_connect(self::DB_HOST, self::DB_USER, self::DB_PASSWORD) or die(mysql_error());
        mysql_select_db(self::DB_DATABASE, $conn);
        self::$conn = $conn;
    }

    public static function close(){
        $conn = null;
    }
}
?>
