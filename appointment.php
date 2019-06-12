<!DOCTYPE html>
<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are required";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Authenticate action";
		}
	}

	if(!isset($error_message)) {
		
		include 'config.php';
		$result = mysqli_query($dbConn,"select * from appointment where Mail = '".$_POST["userEmail"]."'")
or die("failed to query database ". mysqli_error());

$count = mysqli_num_rows($result);

	require_once("dbcontroller.php");
	$db_handle = new DBController();
	$query = "INSERT INTO appointment (First_name, Last_name, Enquiry, Mail, Gender) VALUES
		('" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . $_POST["enquiry"] . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "Request Submitted Successfully, You will be contacted via email!!!";			
			unset($_POST);
		}	
}
}
?>
<html lang="de-CH">
<head>
<link rel="stylesheet" href="./style.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<title>Medical Expert System</title>
</head>
<body>
<a name="top"></a>
<a href="#top"><img class="arrow_image" src="./images/arrow.svg"></a>
<div id="change_class" class="flex_container section menu_section">
	<div class="flex_item branding"><p></p></div>
	<div class="flex_item menu_item dropdown">	<p>Menu</p>	</div>
	<a name="top"></a>
	<div class="flex_item menu_item menu_item_outside"><a href="index.php"><p>Home</p></a></div>
</div>
<div class="section page header_section3">
<div class="gradient gradient_red_blue gradient_header_section"></div>
	<div class="section_container header_section_container flex_container flex_header_container">
		<div class="text header_text">
			<h1>Appointment</h1>
		</div>
	</div>
</div>			
<div class="section page second_section">
<a name="contact"></a>
	<div class="section_container third_section_container flex_container flex_center">
			<h1>Book Appointment</h1>
		</div>

<form name="frmRegistration" method="post" action="">
<table align="center" class = "demo">
<tr>
<td colspan="3">
</td>
<td colspan="2">
<table>
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td><br/><br/>Last Name</td>
<td><br/><br/><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>" id = "n"></td>
</tr>
<tr>
<td><br/><br/>Ailment</td>
<td>
<br/><br/>
<select>
<?php
include 'config.php';
$wr = "select * from ailments";
$qry = mysqli_query($dbConn,$wr); 
while($row = mysqli_fetch_array($qry)){ 
echo "<option value = '".$row['Ailment']."'>".$row['Ailment']."</option>";
}
?>
<option value = 'Others'>Others</option>
</select>
</td>
</tr>
<tr>
<td><br/><br/>Doctors</td>
<td>
<br/><br/>
<select>
<?php
include 'config.php';
$wr = "select * from doctors";
$qry = mysqli_query($dbConn,$wr); 
while($row = mysqli_fetch_array($qry)){ 
echo "<option value = '".$row['DOCTOR']."'>".$row['DOCTOR']."</option>";
}
?>
<option value = 'Others'>Others</option>
</select>
</td>
</tr>
<tr>
<td><br/><br/>Enquiry</td>
<td><br/><br/><input type="text" class="demoInputBox" name="enquiry" value="<?php if(isset($_POST['enquiry'])) echo $_POST['enquiry']; ?>"></td>
</tr>
<tr>
<td><br/><br/>Email</td>
<td><br/><br/><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td><br/><br/>Gender</td>
<td><br/><br/><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
<tr>
<td colspan=2><br/><br/>
<input type="checkbox" name="terms"> Confirm Action <input type="submit" name="register-user" value="Submit" class="btnRegister">
</td>
</tr>
</table>
</td>
</tr>
</table>
</form>
</div>			
		</div>
<div class="section footer_section">
	<p class="footer_text">Project By Akinde Emmanuel Akinola - HCSF/17/0022</p>
</div>
</body>
</style>
</html> 