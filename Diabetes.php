
			<?php
			include 'config.php';
			?><!DOCTYPE html>
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
</div><?php
		$sql = mysqli_query($dbConn,"select * from ailments where Ailment = 'Diabetes'"); while($query = mysqli_fetch_array($sql)) {$intro = $query['Intro'];$symp = $query['Symptom'];$cause = $query['Cause'];$complic = $query['Complication'];$nmm = $query['Ailment'];
			}?>
<div class="section page header_section5">
<div class="gradient gradient_red_blue gradient_header_section"></div>
	<div class="section_container header_section_container flex_container flex_header_container">
		<div class="text header_text">
			<h1><?php echo 'Diabetes'; ?></h1>
		</div>
	</div>
</div>			
<div class="section page second_section">
<a name="contact"></a>
	<div class="section_container third_section_container flex_container flex_center">
			<h2><?php echo 'Diabetes'; ?></h2>
		</div>
		<div class="section page second_section">
<a name="contact"></a>
	<div class="section_container third_section_container flex_container flex_center">
		<div class="feature offer flex_feature_item offer1">
		<p><strong><center>Introduction<br><br></strong><?php echo $intro;?></p>
		</div>
		<div class="feature offer flex_feature_item offer1">
		<p><strong><center>Symptom<br><br></strong><?php echo $symp;?></p>
		</div>
		<div class="feature offer flex_feature_item offer1">
		<p><strong><center>Cause<br><br></strong><?php echo $cause;?></p>
		</div>
		<div class="feature offer flex_feature_item offer1">
		<p><strong><center>Complication<br><br></strong><?php echo $complic;?></p>
		</div>
	</div>
</div>
<div class="section footer_section">
	<p class="footer_text">Project By Akinde Emmanuel Akinola - HCSF/17/0022</p>
</div>;?>