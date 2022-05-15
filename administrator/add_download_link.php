<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../ballot_class.php");
include("connect.php");
session_start();
$object=new library();
$_SESSION['voterid']=$_GET['id'];
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

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html("<img src='ajax-loaders.gif' width='31' height='31' alt=''/>Uploading...");
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>
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
    <h2>&nbsp;</h2>
    Please upload a Cover page for the just selected book: <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
      <center>
  <div id="bar">
    <h3>UPLOAD BOOK FOR DOWNLOAD </h3></div>
    
<form  name="groupform" method="post" action="bookupload.php" enctype="multipart/form-data">
  <table width="567" border="0" class="tittab"  >
    	<tr>
       	  <td width="264">&nbsp;</td>
        </tr>        

        <tr>
        	<td height="79">Select File to Upload</td>
       	  <td  align="left" valign="top" ><b> File:</b> <span style="color:#F00; font-weight:bold;"> (Max 200KB)</span><span style="color:#F00; font-weight:bold;">*</span><br/>
      <input type="file" class="multi" name="photoimg1" maxlength="1" accept="Zip|jpg|docx|doc|mp3|mp4|mpeg|pdf|doc" value="<?php if($_FILES['photoimg1']){echo $_FILES['photoimg1'];}?>"/></td>
        </tr>
</table>

      <label>
        <input type="submit" name="enter" id="submit" class="submit" value="Enter " />
      </label>
</form>



<div id="upload_area">
					
					</div>

    </center>
      
      
      
      </td>
            
          
      </tr>
        </table><br/><br/>
    <div class="cl">
  </div>
    
  </div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
</html>