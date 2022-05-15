<?php 
include("connect.php");

$dynamicLIst="";
$sql=mysql_query("SELECT * FROM `categories` WHERE `visibility`='1' ORDER BY `category_name` ASC");
$Count= mysql_num_rows($sql);
if($Count>0){
	while($row=mysql_fetch_array($sql)){
		$id=$row['id'];
		$name=$row['category_name'];
		$dynamicLIst.=' <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
          <td width="76%" valign="top"><p>' .$name. ' <br />
              <a href="subject1.php?id='.$id.'">.'.View.' ' .$name. '</a></p></td>
			  </tr></table>
      ';
	}
	}else{
	$dynamicLIst="We have no Categories";
}
mysql_close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library</title>
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
            <li><a href="logout.php">LOGOUT</a></li>

    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
    <h2><a href="library_menu.php">WELCOME TO THE E-LIBRARY MENU </a></h2>
    <h3>Please Choose a Category Below</h3>
    <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
    <?php echo $dynamicLIst; ?>
    </tr>
    </table>
    <br/><br/>
    <div class="cl">
  </div>
    
  </div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
</html>