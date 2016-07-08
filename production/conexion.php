<?php
error_reporting(0);
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="ljtool2"; // Database name
//$host="ljsolutionscom.ipagemysql.com"; // Host name 
//$username="lj"; // Mysql username 
//$password="Cy?4ever"; // Mysql password 
//$db_name="ljtool"; // Database name 
//$_SESSION['db'] = $db_name;
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>
