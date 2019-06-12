<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'expert';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
?>