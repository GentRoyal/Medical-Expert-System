 <!DOCTYPE html>
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
	<div class="flex_item menu_item menu_item_outside"><a href="admin.php"><p>Ailments</p></a></div>
	<div class="flex_item menu_item menu_item_outside"><a href="enquiry.php"><p>Enquiry</p></a></div>
	<div class="flex_item menu_item menu_item_outside"><a href="logout.php" class="home"><p>Logout</p></a></div>
</div>
<div class="section page header_section2">
<div class="gradient gradient_red_blue gradient_header_section"></div>
	<div class="section_container header_section_container flex_container flex_header_container">
		<div class="text header_text">
			<h1>Admin Module</h1>
		</div>
	</div>
</div>
<table border="0" cellpadding="5" cellspacing="10" width="1000" bgcolor="#FFFFFF" align = "center">
<font color="#006600">

<tr>
<td>ID</td>
<td>
Firstname
</td>
<td>
Lastname
</td>
<td>
Enquiry
</td>
<td>
Mail
</td>
<td>
Gender
</td>
</tr>
<?php
session_start();
if(!$_SESSION['anything'])
{
    header('location:index.php');
}

include 'config.php';
$record = mysqli_query($dbConn,"select * from appointment");
$dat = mysqli_num_rows($record);
for($var = 1; $var<=$dat;$var++)
{
$reco = mysqli_query($dbConn,"select * from appointment where sn = '$var'");
$cid=$var;
while($da=mysqli_fetch_array($reco))
{?>
<p>
	<tr>
    <td><?php echo $da['SN'];
	?>   </td>
    <td><?php echo $da['First_name'];
	?>   </td><td>
    <p align="justify">
	<?php
	echo $da['Last_name'];?></td><td>
    <?php
	echo $da['Enquiry'];?></td><td>
    <?php
	echo $da['Mail'];?></td><td>
    <?php
		echo $da['Gender'];?></td></tr>
    <?php 
}
}
?></table>
<br/>
</div>
<div class="section footer_section">
	<p class="footer_text">Project By Akinde Emmanuel Akinola - HCSF/17/0022</p>
</div>
</body>
</html> 
