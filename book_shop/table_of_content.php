<?php 
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../ballot_class.php");
include("../connect.php");
session_start();
$object=new library();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>welcome to Gmu e-Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
<script type="text/javascript" src="../tinybox.js"></script>

<!--[if lte IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->
<script type="text/javascript" src="../js/jquery-1.3.2.js" ></script>
<script type="text/javascript">
$('document').ready(function(){
	updatestatus();
	scrollalert();
});
function updatestatus(){
	//Show number of loaded items
	var totalItems=$('#content p').length;
	$('#status').text('Loaded '+totalItems+' Items');
}
function scrollalert(){
	var scrolltop=$('#scrollbox').attr('scrollTop');
	var scrollheight=$('#scrollbox').attr('scrollHeight');
	var windowheight=$('#scrollbox').attr('clientHeight');
	var scrolloffset=20;
	if(scrolltop>=(scrollheight-(windowheight+scrolloffset)))
	{
		//fetch new items
		$('#status').text('Loading more items...');
		$.get('new-items.html', '', function(newitems){
			$('#content').append(newitems);
			updatestatus();
		});
	}
	setTimeout('scrollalert();', 1500);
}
</script>
<style type="text/css" >
	#container{ width:550px; margin:0px auto; padding:40px 0; }
	#scrollbox{ width:600px; height:400px;  overflow:auto; overflow-x:hidden; border:1px solid #f2f2f2; }
	#container > p{ background:#eee; color:#666; font-family:Arial, sans-serif; font-size:0.75em; padding:5px; margin:0; text-align:right;}
</style>
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
      <li><a href="../index.php" class="active">ABOUT GMU</a></li>
      <li><a href="../partners.php">PARTNERS</a></li>
      <li><a href="../howitworks.php">HOW IT WORKS</a></li>
       <li><a href="../study_lab.php">STUDY LAB</a></li>
      <li><a href="../library/library_menu1.php">ENTER LIBRARY</a></li>
      <li><a href="../contact.php">CONTACT</a></li>
            <li><a href="../bookshop.php">BOOK SHOP</a></li>


    </ul>

  </div> 
  
  <div id="main">
    <div class="box2">
    <?php
	$getaticle=mysql_query("SELECT * FROM `bookshop` WHERE `id`='{$_GET['id2']}' LIMIT 1");
	 while($row=mysql_fetch_array($getaticle)){
$id=$row['id'];
$table_of_content=$row['table_of_content'];

}	

?>
      <h2>TABLE OF CONTENT </h2>
      <br/>
      <a href="index.php">Go Menu</a><br/>
      <table>
         <tr><td><?php echo "<a href='book_review.php?id2=$id'><br/><center>Back</center>"; ?></td></tr>
         </table>
  <div id="container">
    <div id="scrollbox" >
		<div id="content" >
        <p>
    <br/> 
       <?php echo "$table_of_content"; ?></p>
       <p><?php if($table_of_content==""){ 
	   
	   
	   }else{?>
       <?php
	    echo "<a href='terms.php?id2=$id'><br/><center>BUY NOW</center>"; 
	   
	   
	   }
	   ?></p> <br/> 
		<br/>  <br/>  <br/> 
      </div>
    </div>
    <center></div>
</div>
   <br/><br/>
    
    <div class="box box-bordered last-box">
      <div class="entry">
        <div class="news">
          <img src="../css/images/ad.png" width="274" height="600"/>
        </div>
      </div>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
  <div class="footer">
    <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved</p>
    <p class="rf"><a href="http://gmu360.com" target="_blank"></a> <a href="http://www.gmu360.com/" target="_blank">Powered by GMU360 CONCEPT</a></p>
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</html>
<?php
ob_flush();
?>