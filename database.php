<?php

function dbQuery($sql)
{
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'expert';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	$result = mysqli_query($dbConn,$sql) or die(mysqli_error());
	
	return $result;
}

function dbAffectedRows()
{
	$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	global $dbConn;
	
	return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
	$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
	$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'expert';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	return mysqli_select_db($dbName);
}

function dbInsertId()
{
	$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());
	return mysqli_insert_id();
}
?>