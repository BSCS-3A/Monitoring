<?php
/*
* $sname stays the same
*$uname should be change to the uname of db in the server
*$password should also be change along with $db_name
*only change when using it
*/

// $sname= "localhost";
// $uname= "root";
// $password = "";

// $db_name = "db_monitoring";

// $conn = mysqli_connect($sname, $uname, $password, $db_name);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "buceils";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$conn) {
	echo "Connection failed!";
}
?>