<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../ballot_class.php");
include("connect.php");
session_start();
$object=new library();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Administrative Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->
		<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
		<!-- MAKE SURE TO REFERENCE THIS FILE! -->
		<script type="text/javascript" src="scripts/ajaxupload.js"></script>
		<!-- END REQUIRED JS FILES -->
		<!-- THIS CSS MAKES THE IFRAME NOT JUMP -->
		<style type="text/css">
			iframe {
				display:none;
			}
		</style>
        <link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle.setup.js"></script>
</head>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
 <script src='../js2/jquery.form.js' type="text/javascript" language="javascript"></script>
	<script src='../js2/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
 <script src='../js2/jquery.MultiFile.js' type="text/javascript" language="javascript"></script>
 <script src='../js2/jquery.blockUI.js' type="text/javascript" language="javascript"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="ajax-loaders.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>

<style>

body
{
font-family:arial;
color:#FFF;
}
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}

</style>
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="#">SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
    <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="../index.php">HOME</a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>

    </ul>

  </div> 
  
  <div id="main">
  

    <br/><br/>
    <h2><a href="index.php">Simplified Education </a></h2>
    <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
      <center>
  <div id="bar">
    <h3>MANAGE BOOKSHOP</h3></div>
    <?php

if(isset($_GET['deleteid'])){
echo 'Do You Really Want To Turn On the visibility of if you do the category would be available ? <a href="manage_bookshop.php?yesdelete='.$_GET['deleteid'].'">Yes </a>| <a href="manage_bookshop.php">No</a>';
exit();

}

if(isset($_GET['yesdelete'])){
	$id_to_delete=$_GET['yesdelete'];
	$sql=mysql_query("UPDATE `bookshop` SET `visibility`='1' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_bookshop.php");
	exit();
}
	if(isset($_GET['deleteid2'])){
echo 'Do You Really Want To Turn Off the visibility of these  if you do the category would not be available ? <a href="manage_bookshop.php?yesdelete2='.$_GET['deleteid2'].'">Yes </a>| <a href="manage_bookshop.php">No</a>';
exit();

}

if(isset($_GET['yesdelete2'])){
	$id_to_delete=$_GET['yesdelete2'];
	$sql=mysql_query("UPDATE `bookshop` SET `visibility`='0' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_bookshop.php");
	exit();
}

	if(isset($_GET['deleteid3'])){
echo 'Do You Really Want To Delete these if you do it would not be available ? <a href="manage_bookshop.php?yesdelete3='.$_GET['deleteid3'].'">Yes </a>| <a href="manage_bookshop.php">No</a>';
exit();

}

if(isset($_GET['yesdelete3'])){
	$id_to_delete=$_GET['yesdelete3'];
	$sql=mysql_query("DELETE FROM `bookshop` WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_bookshop.php");
	exit();
}
	if(isset($_GET['deleteid4'])){
echo 'Do You Really Want To upload a logo ? <a href="manage_bookshop.php?yesdelete4='.$_GET['deleteid4'].'">Yes </a>| <a href="manage_bookshop.php">No</a>';
exit();

}if(isset($_GET['yesdelete4'])){
			$id=$_GET['yesdelete4'];

header("location:cover_logo_upload.php?id=$id");
exit();

}
	
	
?>
<?php

  $display = 10;
  // Determine how many pages there are...
  if (isset($_GET['p']) && is_numeric($_GET
  ['p'])) { // Already been determined.
  
  $pages = $_GET['p'];
  } else { // Need to determine.
  
  // Count the number of records:
  $q = "SELECT * FROM `bookshop`";
  $r = mysql_query ($q);
  $records=mysql_num_rows($r);
  if(!$r){echo  "SYSTEM ERROR: Server cannot execute query.".mysql_error();}
  if(empty($r)){echo "SYSTEM ERROR: Server cannot execute query.".mysql_error();}
  
  
  // Calculate the number of pages...
  if ($records > $display) { // More than
  $pages = ceil ($records/$display);
  } else {
  $pages = 1;
  }
  }
  if (isset($_GET['s']) && is_numeric
  ($_GET['s'])) {
  $start = $_GET['s'];
  } else {
  $start = 0;
  }
?>
        <?php
		$get="SELECT * FROM `bookshop` ORDER BY `id` DESC LIMIT $start, $display ";
		$get=$object->query($get);
		if(mysql_num_rows($get)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../logo/info.JPG' width='56' height='50' />No Posts</p>";}
		?>
        
<legend><b>View All Bookshop</b><?php
if(mysql_num_rows($get)>0){
?>
</legend><table width="95%" border="1" cellspacing="1">
	<tr class="thead">
        <td>S/N</td>
        <td>BOOK TITLE</td>
 
      <td>Price</td>
      <td>Download Link</td>
    <td>Visibility</td>
    <td>Cover Page</td>
    <td>Entry Date</td>
    <td></td>
    <td></td>
    </tr>
  <?php
$s=1;
  	while($l=mysql_fetch_array($get)){
		$id=$l['id'];
	echo "<tr class= \"trodd\">";
	?>
    <td><?php echo $s++; ?></td>
    <td><?php echo $l['book_title']; ?>
        <td><?php echo $l['price'];?></td>
              <td><?php echo $l['book_link'];?></td>
        <td><?php echo $l['visibility'];?></td>
        <td><?php echo $l['book_cover'];?></td>
          <td><?php echo $l['entry_date'];?></td>
   <?php echo "<td><a href='manage_bookshop.php?deleteid=$id'>Turn On Visibility</a></td>"; ?> 
   <?php echo "<td><a href='manage_bookshop.php?deleteid2=$id'>Turn Off Visibility</a></td>"; ?> 
         <?php echo "<td><a href='edit_bookshop.php?id=$id'>Edit</a></td>"; ?> 

    <?php echo "<td><a href='manage_bookshop.php?deleteid3=$id'>Delete</a></td>"; ?> 
        <?php echo "<td><a href='manage_bookshop.php?deleteid4=$id'>Upload Cover</a></td>"; ?> 

 </tr>
 <?php 
}
}
?>		 

</table>
      </td>
            
          
      </tr>
        </table><br/><?php 
  //paginate result set
if ($pages > 1) {
echo '<center>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="manage_bookshop.php?s=' .
($start - $display) . '&p=' . $pages .
'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="manage_bookshop.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="manage_bookshop.php?s=' .
($start + $display) . '&p=' . $pages .
'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
}
 ?><br/>
        
        
            <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
  <?php

if(isset($_POST['button'])){
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	//include database connect script
	include_once("connect.php");
	$bookreview=addslashes($_POST['bookreview']);
	$tableofcontent=addslashes($_POST['tableofcontent']);
	$price=addslashes($_POST['price']);
	$booktitle=addslashes($_POST['booktitle']);

$path = "../download/";



	$valid_formats = array("jpg", "png", "gif", "bmp", "mp3", "mp4", "mpeg", "doc", "docx", "zip","pdf");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name1 = $_FILES['photoimg1']['name'];
			$size1 = $_FILES['photoimg1']['size'];
			
	
	
	
			if(strlen($name1))
				{
					list($txt, $ext) = explode(".", $name1);
					if(in_array($ext,$valid_formats))
					{
					if($size1<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg1']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{

			
			

/*********************** *****************************************************************************************************************
************************************************************************************************************************************************************/

$exe="INSERT INTO `bookshop` (`book_review`, `table_of_content`, `price`,`book_cover`,`book_link`, `visibility`,`entry_date`,`book_title`) VALUES ('$bookreview', '$tableofcontent', '$price','','$actual_image_name','0',NOW(),'$booktitle')";

  
	$exe=mysql_query($exe);
	if(!$exe){
	echo "<p class='msg error'>APPLICATION ERROR: Sorry, could not  Enter record into the databse.".mysql_error()."</p>";
		}
	
	if($exe){
header("location:manage_bookshop.php");}

echo "<p style='margin-top:45px; text-align:center;'><a  href='manage_bookshop.php?id={$_SESSION['voterid']}'>CLICK HERE TO FINISH</a></p>";


/*********************** *****************************************************************************************************************
************************************************************************************************************************************************************/

								}
							else
								echo("Failed to Upload file");
						}
						else
						echo("file size too large:  maximum size 1 MB");					
						}
						else
						echo("Please Upload a valid extension");	
				}
				
			else
				echo("Please select file to upload!");
			exit;
		}

}

?>
      <center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
  <div id="bar">
    <h3>ADD TO BOOKSHOP</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>&nbsp;</td></tr>
        	<tr>
            	<td height="37" ><p>BOOK REVIEW:</p></label></td>
              <td ><textarea name="bookreview"></textarea></td>
            </tr>
            <tr>
            	<td height="36"><p>TABLE OF CONTENT:</p></td>
              <td><textarea name="tableofcontent" /></textarea></td>
            </tr>
                <tr>
            	<td height="36"><p>BOOK TITLE:</p></td>
              <td><input id="input" type="text"  name="booktitle" /></td>
            </tr>
            <tr>
            	<td height="37" ><p>PRICE:</p></label></td>
              <td ><input type="text" name="price"/></td>
            </tr>
            
        <tr>
        	<td height="79">Select BOOK to Upload</td>
       	  <td  align="left" valign="top" ><b> File:</b> <span style="color:#F00; font-weight:bold;"> (Max 200KB)</span><span style="color:#F00; font-weight:bold;">*</span><br/>
      <input type="file" class="multi" name="photoimg1" maxlength="1" accept="Zip|jpg|docx|doc|mp3|mp4|mpeg|pdf|doc" value="<?php if($_FILES['photoimg1']){echo $_FILES['photoimg1'];}?>"/></td>
        </tr>
            <tr>
            	<td><label></label></td>
               
                <td align="justify"><input name="button" type="submit"  id="button" value="Add To Bookshop"/></td>
            </tr>
        </table>

	</form>
    </center>
      
      
      </td>
            
          
      </tr>
        </table>
    <div class="cl">
    
  </div>
    
  </div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
</html>
<?php
ob_flush();
?>