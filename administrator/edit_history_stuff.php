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
  <?php
  if(isset($_POST['button'])){

  	$subname=mysql_real_escape_string($_POST['subname']);

	$catname=mysql_real_escape_string($_POST['wname']);
	$content=mysql_real_escape_string($_POST['content']);
  		
		if(empty($subname)){$error[]="required";}
		if(empty($catname)){$error[]="required";}

	if(!empty($error)){
		   echo "<p class='info' id='error'><span class='info_inner'><b>Oops! ERROR:</b></span></p>";
		foreach($error as $oops){
			echo "<p class='msg error'>$oops</p>";
			}//foreach loop
		}//if !empty error

		//if $error variable is empty, continue with the script
		elseif(empty($error)){
//insert record in database
		$insert=$object->query("UPDATE `history` SET `description`='$catname',`subject`='$subname',`content`='$content'  WHERE `id`='{$_POST['id']}'");
	header("location:manage_history_stuff.php");	
	}

}
//fetch staff's record from db first
$staff=$object->query("SELECT * FROM `history` WHERE `id`='{$_GET['id']}'");
while($row=mysql_fetch_array($staff)){

?>            <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
      <center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <input type="hidden" value="<?php echo $_GET['id'];?>" name="id" />

  <div id="bar">
    <h3>EDIT HISTORY</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>&nbsp;</td></tr>
        	
            <tr>
            	<td height="36"><p>DESCRIPTION:</p></td>
              <td><input id="input" name="wname" value="<?php echo $row['description'];  ?>"/></td>
            </tr>
             <tr>
 <td>SUBJECT:</td>
 <td>
<input id="input" name="subname" value="<?php echo $row['subject'];  ?>"/>
             
 </td>
 </tr>
   <tr>
            	<td height="36"><p>Content:</p></td>
              <td><textarea name="content" value=""/><?php echo $row['content'];  ?></textarea></td>
            </tr>


            <tr>
            	<td><label></label></td>
               
                <td align="justify"><input name="button" type="submit"  id="button" value="SAVE EDIT"/></td>
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
}
ob_flush();
?>