<?php
if($_POST)
{
$username = $_POST["searchitem"];
$username = stripslashes($username);

include 'config.php';

$result = mysqli_query($dbConn,"select * from ailments where ailment = '$username'") or die("failed to query database ". mysqli_error());

$count = mysqli_num_rows($result);
if($count==1)
{
header("location: ".$username.".php");	
}
else if($count!==1)
{
	$ail = strtolower($username);
		$query = mysqli_query($dbConn,"select * from ailments") or die("failed to query database ". mysqli_error());
		while($queresult = mysqli_fetch_array($query))
		{
			$firres = $queresult['Ailment'];
			$ailres = strtolower($firres);
			if (strpos($ail,$ailres)!==false)
			{
				header("location: ".$firres.".php");
			}
		}
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
	<div class="flex_item menu_item menu_item_outside"><a href="#top"><p>Home</p></a></div>
	<div class="flex_item menu_item menu_item_outside"><a href="#menu"><p>Menu</p></a></div>
	<div class="flex_item menu_item menu_item_outside"><a href="#contact"><p>Contact</p></a></div></a>
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
<div class="section page second_section">
<a name="menu"></a>
	<div class="section_container second_section_container flex_container flex_center">
		<div class="text header_text text_grad_purple_yellow">
			<h1>Main Menu</h1>
		</div>
		<a href="ailment.php">
			<div class="feature flex_feature_item feature1">
				<div class="feature_image"></div>
				<h2>Ailments</h2>
				<p>This module contains lists of some disease and disorders. Disease is an abnormal condition affecting the body or an organism while a disorder is a functional abnormality or disturbance.</p>
			</div>
		</a>
		<a href="appointment.php">
			<div class="feature flex_feature_item feature2">
				<div class="feature_image"></div>
				<h2>Appointments</h2>
				<p>Need to meet the doctor? This module is for you to make a formal arrangement to meet the doctor or visit the hospital at a scheduled time.</p>
			</div>
		</a>		
			<div class="feature flex_feature_item feature3">
				<div class="feature_image"></div>
				<h2>Search</h2>
				<p>Use this module to  to navigate directly to a certain ailment as long as the information is available on the hospital database. </p>
				<p>
					<form name="frmsearch" method="post" action="">
						<input type="text" name="searchitem" value="<?php if(isset($_POST['searchitem'])) echo $_POST['searchitem']; ?>"> E.g: Malaria<br>
						<div class="button_align">
							<input type="submit" name="search-ailment" value="Search" onclick="dothese()">
						</div>
					</form>
				</p>
			</div>
		
			<div class="feature flex_feature_item feature4">
				<div class="feature_image"></div>
				<h2>Diagnosis</h2>
				<p>Answer series of questions to diagonise whether you are down with <a href = "malariadiagnosis.php">Malaria</a> or <a href = "typhoiddiagnosis.php">Typhoid</a></p>
				
			</div>
		
	</div>
</div>

<div class="section page third_section">
<a name="contact"></a>
	<div class="gradient gradient_red_yellow gradient_third_section"></div>
	<div class="section_container third_section_container flex_container flex_center">
		<div class="text header_text">
			<h1>RoyalIT</h1>
		</div>
		<div class="feature offer flex_feature_item offer1">
			<h2>Who We Are</h2>
			<p>We design, develop and manage websites, softwares and contents for personnal and commercial purpose.</p><br>
			<p><img src = "images/tell.jpg" width = "200px" height = "200px">.</p>
		</div>
		<div class="feature offer flex_feature_item offer2">
			<h2>Our Contact</h2>
			<p>We will love to hear from you. Get in touch with us and let us know how we can help</p>
			<p>yusuflarnrey@gmail.com || 08154840630</p>
			<p><img src = "images/tell.jpg" width = "200px" height = "200px">.</p>
		</div>
	</div>
</div>
<div class="section footer_section">
	<p class="footer_text">Project By Akinde Emmanuel Akinola - HCSF/17/0022</p>
</div>
</body>
</html> 
