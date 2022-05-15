<?php
ob_start();
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Forumn Sign up Stage1</title>
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
      <li><a href="index.php">HOME</a></li>
    

    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
    <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
     <?php 
include('../connect.php');
if(isset($_POST['button'])){
	$despositorsname=addslashes($_POST['despositorsname']);
	$tellernumber=addslashes($_POST['tellernumber']);

	
$id=$_POST['id'];
	
	$select="UPDATE `project_orders` SET `depositors_name` = '$despositorsname',`tellerno` = '$tellernumber' WHERE `id` =$id LIMIT 1";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
header("location:manage_project_order.php?id=$id");

}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">     
              <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div id="bar">
    <h3>Teller Details</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td colspan="2"><center>Update Teller Record</center></td></tr>
        	<tr>
            	<td height="37" ><p>Depositor(s) Name</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="despositorsname" autosuggest="off" value="<?php if(isset($_POST['despositorsname'])){echo $_POST['despositorsname'];}?>"/></td>
            </tr>
                    	<tr>
            	<td height="37" ><p>Teller Number</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="tellernumber" autosuggest="off" value="<?php if(isset($_POST['tellernumber'])){echo $_POST['tellernumber'];}?>"/></td>
            </tr>
            <tr>
               <td colspan="2"><center><input name="button" type="submit"  id="button" value="Update Book Record"/></center></td>
               
                </tr>
      </table>

	</form></center>
      
      
      
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
<?php
ob_flush();
?>