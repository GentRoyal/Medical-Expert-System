<?php
session_start();
if(!$_SESSION['anything'])
{
    header('location:index.php');
}
?>
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
	<div class="flex_item menu_item menu_item_outside"><a href=""><p>Enquiry</p></a></div>
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
<?php
require_once('database.php');
include 'config.php';
$cid= (int)$_GET['cid'];
$sql = "SELECT *
		FROM ailments
		WHERE SN = $cid";
$result = dbQuery($sql);		
while($data = dbFetchAssoc($result)) {
extract($data);}
?>
<?php
if(!empty($_POST["update"])) {
	if($_POST['aill']==''||$_POST['cause']==''||$_POST['symptom']==''||$_POST['complication']=='')
	{
			echo "All Fields are required";
	}
	else
	{
		$qry = mysqli_query($dbConn, "update ailments set Intro = '".$_POST['aill']."', Cause = '".$_POST['cause']."', Symptom = '".$_POST['symptom']."', Complication = '".$_POST['complication']."' where SN = '$cid'")or die("failed to query database ". mysqli_error());
	}
}
?>
<?php
if(!empty($_POST["submit"])) {
	if($_POST['ailm']==''||$_POST['aill']==''||$_POST['cause']==''||$_POST['symptom']==''||$_POST['complication']=='')
	{
			echo "All Fields are required";
	}
	else
	{
	$qq = mysqli_query($dbConn,"select * from ailments where Ailment = '".$_POST['ailm']."'");
	$tu = mysqli_num_rows($qq);
	if($tu!==0)
	{
		echo "Record already exist" ;
		}
	else{
	$qq = mysqli_query($dbConn,"select * from ailments");
	$tu = mysqli_num_rows($qq)+1;
		$lin = $_POST["ailm"].".php";
			$qry = mysqli_query($dbConn,'insert into ailments (SN, Ailment, Intro, Symptom, Cause, Complication, Link) VALUES ("'.$tu.'","' . $_POST["ailm"] . '", "' . $_POST["aill"] . '", "' . $_POST["symptom"] . '", "' . $_POST["cause"] . '", "' . $_POST["complication"] . '","'.$lin.'")')or die("failed to query database ". mysql_error());
				$var = $_POST["ailm"];
			$fff = $_POST["ailm"];
			unset($_POST);
			$filenm = $lin;
			$fh = fopen($filenm,'w');
			?>
            <?php
			$strdata1 = "
			<?php
			include 'config.php';
			?>".'<!DOCTYPE html>
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
		';
			$strdata2 = '$sql = mysqli_query($dbConn,"select * from ailments where Ailment = '; 
			$strdata3= "'$fff'"; 
			$strdata4 = '"); while($query = mysqli_fetch_array($sql)) {$intro = $query[';
			$strdata5 = "";
			$strdata6 = "'Intro'];";
			$strdata7 = '$symp = $query[';
			$strdata8 = "'Symptom'];";
			$strdata9 = '$cause = $query[';
			$strdata10 = "'Cause'];";
			$strdata11 = '$complic = $query[';
			$strdata12 = "'Complication'];";
			$strdata13 = '$nmm = $query[';
			$strdata14 = "'Ailment'];
			}?>
";
			$strdata15 = '<div class="section page header_section5">
<div class="gradient gradient_red_blue gradient_header_section"></div>
	<div class="section_container header_section_container flex_container flex_header_container">
		<div class="text header_text">
			<h1><?php echo '; 
			$strdata16 = "'$fff'; ?></h1>
		</div>
	</div>
</div>			
<div class="; 
			$strdata17 = '"section page second_section">
<a name="contact"></a>
	<div class="section_container third_section_container flex_container flex_center">
			<h2><?php echo '; 
			$strdata18 = "'$fff'; ?></h2>
		</div>
		<div class="; 
		$strdata19 = '"section page second_section">
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
</div>';

$strdata = $strdata1.$strdata2.$strdata3.$strdata4.$strdata5.$strdata6.$strdata7.$strdata8.$strdata9.$strdata10.$strdata11.$strdata12.$strdata13.$strdata14.$strdata15.$strdata16.$strdata17.$strdata18.$strdata19.';?>';
			fwrite($fh,$strdata);
			fclose($fh);
}}}
?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>

    <td width="900">
	</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
<style type="text/css">
</style>
<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 
  <tbody><tr> 
    <td id="ds_calclass"> </td> 
  </tr> 
</tbody></table> 
  <br>
  <table border="0" align="center" width="98%">
    <tbody><tr>
      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Manage Ailment</strong></td>
    </tr>
  </tbody></table>
  <br>
  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 
    <tbody><tr>
      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">
        <table border="0" cellpadding="1" cellspacing="1" width="80%">
          <tbody><tr>
            <td width="55%"><div align="left" class="style3">SN : </div></td>
            <td width="45%"><div align="left" class="style3">
              <?php echo $cid; ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="left" class="style3">Ailment: </div></td>
            <td><div align="left" class="style3">
			<?php echo $data['Ailment']; ?>
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody>

        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </tbody></table> 

  <span class="Partext1"><br>
   </span><span class="Partext1"><br>

  <br>  

  </span>

  <form method="post" name="edit_delete"> 

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

    <tbody><tr>

      <td colspan="5" bgcolor="#FFFFFF" align="right"><div class="Partext1" align="center">
      <p><strong>ADD / UPDATE INFORMATION</strong>      </p>
      </div></td>

    </tr>

    <tr>

      <td colspan="5" bgcolor="#FFFFFF" align="right"></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#FFFFFF" align="right"><span class="Partext1">Ailment:</span>
	  <textarea name="ailm" cols="90" rows="1" id="comments"></textarea></td>
    </tr>

    <tr>
      <td colspan="5" bgcolor="#FFFFFF" align="right"><span class="Partext1">Brief Intro:</span>
	  <textarea name="aill" cols="90" rows="3" id="comments"></textarea></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#FFFFFF" align="right"><span class="Partext1">Cause:</span>
	  <textarea name="cause" cols="90" rows="3" id="comments"></textarea></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#FFFFFF" align="right"><span class="Partext1">Symptom:</span>
	  <textarea name="symptom" cols="90" rows="3" id="comments"></textarea></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#FFFFFF" align="right"><span class="Partext1">Complication:</span>
	  <textarea name="complication" cols="90" rows="3" id="comments"></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF" align="right">&nbsp;</td>
      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
       <input name="update" value="Update" type="submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="submit" value="Add" type="submit"> &nbsp;&nbsp;&nbsp;
          <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">
    </tr>
    <tr>
      <td colspan="3" bgcolor="#FFFFFF" align="right"><div align="center">
      </div></td>
      </tr>
  </tbody></table>
  <br>
  </form>    </td>
  </tr>
</tbody></table>
</div>
<div class="section footer_section">
	<p class="footer_text">Project By Akinde Emmanuel Akinola - HCSF/17/0022</p>
</div>
</body>
</html> 