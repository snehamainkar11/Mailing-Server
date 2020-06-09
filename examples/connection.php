<?php

$con=mysql_connect("localhost","root","root") or die (mysql_error());
mysql_select_db("email",$con);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>