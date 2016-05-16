<?php
$dbUser = "root";
$dbPass = "";
$dbName = "budhidb";
$dbHost = "localhost";

mysql_connect($dbHost, $dbUser, $dbPass);
mysql_select_db($dbName);
?>