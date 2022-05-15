<?php
ob_start();
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Simplified Education</title>
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
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>    <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
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
    <h2><a href="#">Simplified Education</a></h2>
    Please place your order below : <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
     <?php 
include('../connect.php');
if(isset($_POST['button'])){
	$phone=addslashes($_POST['phone']);
	$name=addslashes($_POST['name']);
	$address=addslashes($_POST['address']);

	$email=addslashes($_POST['email']);
		$sex=addslashes($_POST['sex']);
		$transaction_id=addslashes($_POST['transaction_id']);
	
$id=$_POST['id'];
	
	$select="INSERT INTO `project_orders` (`phone_number`, `name`, `address`, `email`, `sex`, `project_id`, `depositors_name`, `tellerno`, `downloads`,`entry_date`,`transaction_id`) VALUES ('$phone', '$name', '$address', '$email', '$sex', '$id', '', '', '',NOW(),'$transaction_id')";
;
	$query=mysql_query($select) or die("ERROR:".mysql_error());
header("location:invoice.php?id=$id&name=$name&phone=$phone&email=$email&sex=$sex&address=$address&transaction_id=$transaction_id");

}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">     
              <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div id="bar">
    <h3>Projecr  order Details</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td colspan="2"><center>Buyers Bio-data</center></td></tr>
        	<tr>
            	<td height="37" ><p>Phone Number</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="phone" autosuggest="off" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>Name</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="name" autosuggest="off"/></td>
            </tr>
         
            <tr>
            	<td height="37" ><p>Address</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="address" autosuggest="off"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>Email</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="email" autosuggest="off"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>sex</p></label></td>
                
              <td >Male<input class="data"  type="radio" name="sex" value="male" <?php if($_POST['sex']=="male"){ echo 'checked="checked"'; } ?>/>
Female<input class="data"  type="radio" value="female" name="sex" <?php if($_POST['sex']=="female"){ echo 'checked="checked"'; } ?>/></td>
            </tr>
      
                  <tr>
            	<td height="37" colspan="2" ><center><p>Project Details</p></center></label></td>
              </tr>
      
            
            
            <?php $auto3=mysql_query("SELECT * FROM `project` WHERE `id`='$id' LIMIT 1");
?>
              <?php 
 while($row=mysql_fetch_array($auto3)){
$bookid=$row['id'];
$price=$row['price'];
$book_title=$row['title'];
}
 ?>
 <tr>
	<td><p>Project Title</p></td>
         
          	<td><?php echo $book_title; ?></td>
            </tr>
             <tr>
	<td><p>Project Price</p></td>
         
          	<td><?php echo $price; ?></td>
            </tr>
            
            <tr>
                      <td  style="font-size:14px;">Transaction Id:</td>
      <td  style="color:#F00; font-size:14px;"><?php 
				function createPassword($length) {
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$i = 0;
	$Password= "";
	while ($i <= $length) {
		$Password.= $chars{mt_rand(0,strlen($chars))};
		$i++;
	}
	return $Password;
		}
	
	
	$trans=createPassword(8);
      echo $trans;?>
	  <input type="hidden" name="transaction_id" value="<?php echo $trans;?>"  />
      
      </td>
      </tr>
            <tr>
            
            
            <td colspan="2"><center><input name="button" type="submit"  id="button" value="Place Project Order"/></center></td>
               
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