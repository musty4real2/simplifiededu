<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("ballot_class.php");
include("../connect.php");
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
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
 <SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/script3.js"></SCRIPT>
 <style type="text/css">
 
 	#loading{
	visibility:hidden;
	padding-left:5px;
}

.list{
	list-style:none;
	margin:0;
	text-align:left;
	}

#ajax_response{
border:1px solid #999; font-family:Tahoma, Geneva, sans-serif;
text-align:left;

}
#ajax_response a{
	text-decoration:none;
	color:#333;
	text-align:left;
	}
	
	#ajax_response a:hover{
	text-decoration:underline;
	color:#F00;
	}
 </style>


</head>

<style type="text/css">
.warning{
	color:#F00;
	
	}

</style>
<p id="demo" align="right"></p>

<script type="text/javascript">
document.getElementById("demo").innerHTML=Date();
</script>

</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
        <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="../index.php">HOME</a></li>


    </ul>

  </div> 
  
  <div id="main">
  

    <br/><br/>
    <h2><a href="index.php">WELCOME TO GMU360 CONCEPT e-Library </a></h2>
    <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
      <center>
  <div id="bar">
    <h3>MANAGE TOPICS</h3></div>
    </td>
            
          
      </tr>
        </table><br/><br/>
        
        
            <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
  <?php

if(isset($_POST['button'])){
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	//include database connect script
	include_once("../connect.php");
	$title=addslashes($_POST['title']);
	$catname=addslashes($_POST['wname']);
		$subject=addslashes($_POST['subject']);

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

$exe="INSERT INTO `free_topics_upload` (`topic_title`, `upload`, `entry_date`,`tutor_id`,`cat_id`,`subject`) VALUES ('$title', '$actual_image_name', NOW(),'{$_SESSION['postersid']}','$catname','$subject')";
;

  
	$exe=mysql_query($exe);
	if(!$exe){
	echo "<p class='msg error'>APPLICATION ERROR: Sorry, could not  Enter record into the databse.".mysql_error()."</p>";
		}
	
	if($exe){
header("location:history.php");}

echo "<p style='margin-top:45px; text-align:center;'><a  href='history.php?id={$_SESSION['voterid']}'>CLICK HERE TO FINISH</a></p>";


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
        <tr><td><p>CATEGORY</p></td>
            <td> <?php
  $auto=mysql_query("SELECT *  FROM `categories` ORDER BY `category_name` ASC"); ?>
<select class="input" name='wname'>
  <option value=''>select</option>
  <option value=''>----------</option>
  <?php 
 while($row=mysql_fetch_array($auto)){
$id=$row['id'];
$catname=$row['category_name'];

echo "<option value='$id'>$catname</option>";
}
 ?>
 </select>
 </td></tr>
 <tr>
             	<td height="36"><p>ENTER SUBJECT NAME:</p></td>
<td><input type="text" name="subject" value="<?php if(isset($_POST['subject'])){echo $_POST['subject']; } ?>"/>
                <tr>
            	<td height="36"><p>TOPIC TITLE:</p></td>
              <td> <input type="text" name="title" id="area" size="60px" maxlength="60" autocomplete="off" onkeypress="autocomplete(this.value, event)" value="<?php if(isset($_POST['title'])){echo $_POST['title'];}?>"/><img src="loading.gif" alt="" width="19" height="27" id="loading" style="margin:0;"/>
 <div id="ajax_response" ></div></td>
            </tr>
            
                        
        <tr>
        	<td height="79">Select File to Upload</td>
       	  <td  align="left" valign="top" ><b> File:</b> <span style="color:#F00; font-weight:bold;"> (Max 200KB)</span><span style="color:#F00; font-weight:bold;">*</span><br/>
      <input type="file" class="multi" name="photoimg1" maxlength="1" accept="Zip|jpg|docx|doc|mp3|mp4|mpeg|pdf|doc" value="<?php if($_FILES['photoimg1']){echo $_FILES['photoimg1'];}?>"/></td>
        </tr>
            <tr>
            	<td><label></label></td>
               
                <td align="justify"><input name="button" type="submit"  id="button" value="Add Tutorial"/></td>
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