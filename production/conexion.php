<?php
error_reporting(0);
$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = "1234"; // Mysql password 
$db_name = "ljtool2"; // Database name
//$host="ljsolutionscom.ipagemysql.com"; // Host name 
//$username="lj"; // Mysql username 
//$password="Cy?4ever"; // Mysql password 
//$db_name="ljtool"; // Database name 
//$_SESSION['db'] = $db_name;
$conn = new mysqli($host, $username, $password, $db_name);
?>
