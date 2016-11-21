<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

    
    $databaseHost = 'localhost';
    $databaseName = 'test';
    $databaseUsername = 'root';
    $databasePassword = 'vertrigo';

    
//    $databaseHost = 'mysql.hostinger.com.br';
//    $databaseName = 'u152154401_crud';
//    $databaseUsername = 'u152154401_root1';
//    $databasePassword = 'mayo8%123';



$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
