<?php
if($_POST)
{
$sUser = $_POST["uname"];
$sPwd = $_POST["pwd"];

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'expert';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());

$query = mysqli_query($dbConn,"select * from admin where username = '$sUser' and passcode = '$sPwd'")
or die("failed to query database ". mysqli_error());

$row = mysqli_fetch_array($query);

if($row['username'] == $sUser and $row['passcode'] == $sPwd)
{
session_start();
$_SESSION['anything']='something';
header("location: admin.php");	
}
}
?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico|Rubik" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--START META DATA PAGE DESCRIPTION-->
<meta name="Author" content="Calmar Solutions Schweiz - Erin McGowan - www.calmarsolutions.ch">
<meta name="Copyright" content="Calmar Solutions">
<meta name="Credit" content="https://thenounproject.com/">
<meta name="description" content="Margs Surfcamp Margaret River">
<meta name="keywords" content="Surfing, Camping, Margaret River, Western Australia">
<!--END META DATA PAGE DESCRIPTION-->
<title>Medical Expert System</title>
</head>
<body>
<a name="top"></a>
<div id="change_class" class="flex_container section menu_section">
	<div class="flex_item branding"><p></p></div>
	<div class="flex_item menu_item dropdown">	<p>Menu</p>	</div>
	<a name="top"></a>
	<div class="flex_item menu_item menu_item_outside"><a href="index.php"><p>Home</p></a></div>
	<div class="flex_item menu_item menu_item_outside"><a href="login.php"><p>Login</p></a></div></a>
</div>
<div class="section page header_section">
<div class="gradient gradient_red_blue gradient_header_section"></div>
	<div class="section_container header_section_container flex_container flex_header_container">
		<div class="text header_text">
			<h1>Medical Expert System</h1>
		</div>
		<div class="text body_text flex_item flex_header_item">
			<h2 class="header_quote">By Akinde Emmanuel Akinola - HCSF/17/0022</h2>
		</div>
	</div>
</div>
<a name="contact"></a>
	
	<div class="section_container third_section_container flex_container flex_center">
		<div class="text header_text">
			<h1>Admin Login</h1>
		</div>
		<div class="feature offer flex_feature_item offer1">
			<h2>Login Here</h2>
			<form method = "POST">
			<p> Username: <input type = "text" name = "uname"><br><br>
			<p> Password: <br><input type = "password" name = "pwd"><br><br>
			<input type = "submit" value = "Login" name = "Login">
		</div>
		<div class="feature offer flex_feature_item offer2">
			<h2>Delack Hospitals</h2>
			<p>We will love to hear from you. Get in touch with us and let us know how we can help</p>
			<p>yusuflarnrey@gmail.com || 08154840630</p>
			<p><img src = "images/hosp.jpg" width = "200px" height = "200px">.</p>
		</div>
	</div>
</div>
<div class="section footer_section">
	<p class="footer_text">Project By Akinde Emmanuel Akinola - HCSF/17/0022</p>
</div>
</body>
</html> 