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
<div class="section page header_section5">
<div class="gradient gradient_red_blue gradient_header_section"></div>
	<div class="section_container header_section_container flex_container flex_header_container">
		<div class="text header_text">
			<h1>Diagnosis</h1>
		</div>
	</div>
</div>			
<div class="section page second_section">
<a name="contact"></a>
	<div class="section_container third_section_container flex_container flex_center">
			<h2>Typhoid Diagnosis</h2>
		</div><form name = "ffl" method = "post">
		<table width = "70%" border = "0" align = "center">
		<tr>
		<td colspan = "2">	<center>Answer the following questions to the best of your knowledge</center> </td></tr>
		<tr><td colspan = "2">	<center>Select only the ones that are applicable to you</center> </td></tr>
		</tr>
		<tr>
		<td>
<?php
include 'config.php';
$query = mysqli_query($dbConn,"select * from Questions;");
$array = array();
		while($row = mysqli_fetch_assoc($query))
		{
			$array[] = $row;
		}
		for($var = 9; $var<18;$var++)
		{
			echo $array[$var]['Question'].'<br>';
			?>
			</td><td><input type="checkbox" name="checkbox[]" value = "box"/></td><tr><td>
			<?php
		}?>
		
<tr>
		<td colspan = "2">	<center><input type="Submit" name="chkname" value = "Submit"></form></center> </td>
		</tr><tr><td colspan = "2"><center> <strong> <font face = "Bookman" color = "Red"> <br>RESULTS SUMMARY <br><br> <?php if(isset($_POST['chkname']))
		{
			$checked_arr = $_POST['checkbox'];
			$count = count($checked_arr);
			if($count<4)
			{
				echo "You do not have Malaria Fever"."<br><br>"."RECOMMENDATION"."<br><br>"."Ensure you rest properly"."<br><br>"."If symtomps persists after 3 days, consult your doctor";
			}
			else if($count<7)
			{
				echo "You are showing signs of early Typhoid Fever"."<br><br>"."RECOMMENDATION"."<br><br>"."Ensure you rest properly; Purchase Typhoid Antibiotic drugs"."<br><br>"."Request for usage from your physician/pharmacist"."<br><br>"."If symtomps persists after 3 days, consult your doctor";
			}
			else
			{
					echo "You are showing signs of Typhoid Fever"."<br><br>"."RECOMMENDATION"."<br><br>"."Visit the hospital immediately"."<br><br>";
			}
		} ?></center> </font></td></tr>
		<tr> <td colspan = "2"><a href="appointment.php"><center>Click here to book an appointment with the doctor</a></center></td></tr>
</table>
		</div></a>
		
	</div>
</div>
<div class="section footer_section">
	<p class="footer_text">Project By Akinde Emmanuel Akinola - HCSF/17/0022</p>
</div>