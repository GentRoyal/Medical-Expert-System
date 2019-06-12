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
	<div class="flex_item menu_item menu_item_outside"><a href="index.php"><p>Home</p></a></div>
</div>
<div class="section page header_section2">
<div class="gradient gradient_red_blue gradient_header_section"></div>
	<div class="section_container header_section_container flex_container flex_header_container">
		<div class="text header_text">
			<h1>Ailment Module</h1>
		</div>
	</div>
</div>
<?php
		include 'config.php';
		$record = mysqli_query($dbConn,"select * from ailments");
		$array = array();
		while($row = mysqli_fetch_assoc($record))
		{
			$array[] = $row;
		}
?>
			
<div class="section page second_section">
<a name="contact"></a>
	<div class="section_container third_section_container flex_container flex_center">
		<div class="text header_text">
			<h1>List of Ailments</h1>
		</div>
		<?php
		for($var = 0; $var<count($array);$var++)
		{
			$cid = $array[$var]['Ailment'];
			?>
			<a href="ailments.php?cid=<?php echo $cid;?>"><div class="feature offer flex_feature_item offer1">
			<h2><?php echo $array[$var]['Ailment'];?></h2>
			<p><?php echo $array[$var]['Intro'];?>.</p><br>
		</div></a>
		<?php
		}
		?>
	</div>
</div>
<div class="section footer_section">
	<p class="footer_text">Project By Akinde Emmanuel Akinola - HCSF/17/0022</p>
</div>
</body>
</html> 
