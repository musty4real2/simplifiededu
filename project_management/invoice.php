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
    <h2><a href="#">Welcome to Simplified Education e-Library </a></h2>
    Your invoice has been rised 
    <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
     <?php 
include('../connect.php');

?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">     
  <div id="bar">
    <h3>Project order Details</h3></div>

        <table border="0" width="398" height="255px">
        <td height="37" ><p>Transaction Id</p></label></td>
   <td><?php echo $_GET['transaction_id']; ?></td></tr>
        <tr><td colspan="2"><center>Buyers Bio-data</center></td></tr>
        	<tr>
            	<td height="37" ><p>Phone Number</p></label></td>
              <td ><?php echo $_GET['phone']; ?></td>
            </tr>
            <tr>
            	<td height="37" ><p>Name</p></label></td>
              <td ><?php echo $_GET['name'];?></td>
            </tr>
         
            <tr>
            	<td height="37" ><p>Address</p></label></td>
              <td ><?php echo $_GET['address']; ?></td>
            </tr>
            <tr>
            	<td height="37" ><p>Email</p></label></td>
              <td ><?php echo $_GET['email']; ?></td>
            </tr>
            <tr>
            	<td height="37" ><p>sex</p></label></td>
                
              <td ><?php echo $_GET['sex']; ?></td>
            </tr>
      
                  <tr>
            	<td height="37" colspan="2" ><center><p>Project details</p></center></label></td>
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
       <tr><td colspan="2"><center><SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="  Print  " '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT></center></td></tr>
        </table>
      
      
   
        </table>
        
        <br/><br/>
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