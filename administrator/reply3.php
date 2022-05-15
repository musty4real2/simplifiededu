<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../ballot_class.php");
include("connect.php");
session_start();
$object=new library();

$set=$object->fetchRecord($_GET['id'], "faq");
while($st=mysql_fetch_array($set)){
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
	#container{ width:500px; margin:0px auto; padding:40px 0; }
	#scrollbox{ width:450px; height:200px;  overflow:auto; overflow-x:hidden; border:1px solid #f2f2f2; }
	#container > p{ background:#eee; color:#666; font-family:Arial, sans-serif; font-size:0.75em; padding:5px; margin:0; text-align:right;}
</style>

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
      <li><a href="menu.php">HOME</a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>

    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
    <h2><a href="faq.php">e-Learning FAQ</a></h2>
<strong><b>Name: </b></strong><?php echo "    ". $st['name'];?><br/><br/>
<strong><b>Subject:</b></strong><?php echo "    ". $st['subject'];?><br/><br/>
<strong><b>Email:</b></strong> <?php echo "    ". $st['email'];?><br/><br/>
<strong><b>Section question/ Suggestion is posted from:</b></strong><?php echo "    ". $st['section'];?><br/><br/>
<strong><b>Date of Submition:</b></strong><?php echo "    ". $st['entry_date'];?><br/><br/>
<div id="container">


    <div id="scrollbox" >
		<div id="content" >
      <strong><b>Message:</b></strong>   <p>
<?php echo "    ". $st['message'];?><br/><br/>

</p>
<?php


$set1=mysql_query("SELECT * FROM `faq_replie` WHERE `faq_id`='{$_GET['id']}'");
while($st2=mysql_fetch_array($set1)){
	
	 echo "<strong><b>Replyer:</b></strong> ". $st2['replyer'].'<br/>';
 echo "<strong><b>Reply Date:</b></strong> ". $st2['entry_date'].'<br/>';
echo "<strong><b>Message:</b></strong> ". $st2['message'].'<br/><br/>';

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>
	
      </div>
    </div>
    <center></div>
    						<?php
if(isset($_POST['a'])){
$message=addslashes($_POST['message']);
if($message==""){$error[]="Please specify message";}


	if(!empty($error)){
		echo "<p class='msg warning'><b>Oops! ERROR:</b></p>";
		foreach($error as $oops){
			echo "<p class='msg error'>$oops</p>";
			}//foreach loop
		}//if !empty error

		//if $error variable is empty, continue with the script
		elseif(empty($error)){
			
	$sql=mysql_query("INSERT INTO `faq_replie` (`faq_id`, `replyer`, `message`,`entry_date`) VALUES ('{$_GET['id']}', 'Admin', '$message',NOW())");
	
				$update="Update `faq` Set `reply`='1' WHERE `id`='{$_GET['id']}'";
				header("location:managehowfaq.php?msg=your reply has been posted");
}

}
?>
   <center> <form  method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <label>Message</label>
    <textarea name="message" placeholder="Administrators Please note This box is Required"></textarea>
    <input type="submit" name="a" value="Reply The Above Suggestion or question"/>
    </form>  </center>
        <br/>

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