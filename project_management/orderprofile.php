<?php
ob_start();
include("../connect.php");
include("../ballot_class.php");
$object=new library();
session_start();
$tid=$_SESSION['postersid'];

//redirect to setup if system not setup!!!!
$getit=mysql_query("SELECT `downloads` FROM `project_orders` WHERE  `id`='$tid'");

While($row=mysql_fetch_array($getit)){
	$change=$row['downloads'];
	$msg="sorry you are not allowed";
}
if($change=='1'){
		header("location:continue.php?msg=$msg");
}
else{
//

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>simplified education</title>
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
    <h2><a href="#">Simplified Education</a></h2>
    Your invoice has been rised <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
     <?php 
include('../connect.php');

$choose=mysql_query("Select * FROM `project_orders` WHERE `id`='$tid' LIMIT 1");
		while($row=mysql_fetch_array($choose)){
			$download=$row['downloads'];
			$tellerno=$row['tellerno'];
			$depositors_name=$row['depositors_name'];

?>   

  <div id="bar">
    <h3>Project order Details</h3></div>

       <center> <table border="0" width="398" height="255px">
        <td height="37" ><p>Transaction ID</p></label></td>
   <td><?php echo $row['transaction_id']; ?></td></tr>
        <tr><td colspan="2"><center>Buyers Bio-data</center></td></tr>
        	<tr>
            	<td height="37" ><p>Phone Number</p></label></td>
              <td ><?php echo $row['phone_number']; ?></td>
            </tr>
            <tr>
            	<td height="37" ><p>Name</p></label></td>
              <td ><?php echo $row['name'];?></td>
            </tr>
         
            <tr>
            	<td height="37" ><p>Address</p></label></td>
              <td ><?php echo $row['address']; ?></td>
            </tr>
            <tr>
            	<td height="37" ><p>Email</p></label></td>
              <td ><?php echo $row['email']; ?></td>
            </tr>
            <tr>
            	<td height="37" ><p>sex</p></label></td>
                
              <td ><?php echo $row['sex']; ?></td>
            </tr>
                        <tr>
            <td colspan="2">Teller Details</td>
            </tr>
             <tr>
	<td><p>Depositors name</p></td>
         
          	<td><?php echo $row['depositors_name']; ?></td>
            </tr>
             <tr>
	<td><p>Teller number</p></td>
         
          	<td><?php echo $row['tellerno']; ?></td>
            </tr>

      
                  <tr>
            	<td height="37" colspan="2" ><center><p>Project details</p></center></label></td>
              </tr>
      
            
            
            <?php $auto3=mysql_query("SELECT * FROM `project` WHERE `id`='{$row['project_id']}' LIMIT 1");
?>
              <?php 
 while($row=mysql_fetch_array($auto3)){
$bookid=$row['id'];
$price=$row['price'];
$title=$row['title'];
$project_link=$row['project_link'];
}
 ?>
 <tr>
	<td><p>Project Title</p></td>
         
          	<td><?php echo $title; ?></td>
            </tr>
             <tr>
	<td><p>Price</p></td>
         
          	<td><?php echo $price; ?></td>
            </tr>

<?php 

if($tellerno=="" & $depositors_name==""){
		 			 echo "sorry your payment might have been nullified or you have not yet made payment that is why you are not seeing the download link ";
}

if($download==0 & $tellerno!="" & $depositors_name!="" ){
		 $up=mysql_query("UPDATE `project_orders` SET `downloads` = '1' WHERE `id` ='$tid' LIMIT 1") or die(mysql_error());
		 
	"<br/>";

		
		 }
		 if($download=1 & $tellerno!="" & $depositors_name!=""){
			  echo "<a href='download.php?filename=$project_link'>Download </a>";
		 }
		 
		 ?>
            
            <?php 		} ?>
            
            
            
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
<?php
}
ob_flush();
?>