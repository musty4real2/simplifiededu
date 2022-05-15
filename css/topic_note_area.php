<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>welcome to Gmu e-Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
<script type="text/javascript" src="tinybox.js"></script>

<!--[if lte IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->
<script type="text/javascript" src="js/jquery-1.3.2.js" ></script>
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
<style type="text/css" >
	#container{ width:550px; margin:0px auto; padding:40px 0; }
	#scrollbox2{ width:600px; height:200px;  overflow:auto; overflow-x:hidden; border:1px solid #f2f2f2; }
	#container > p{ background:#eee; color:#666; font-family:Arial, sans-serif; font-size:0.75em; padding:5px; margin:0; text-align:right;}
</style>

<style type="text/css" >
	#container3{ width:272px; margin:0px auto; padding:40px 0; }
	#scrollbox3{ width:272px; height:300px;  overflow:auto; overflow-x:hidden; border:1px solid #f2f2f2; }
	#container > p{ background:#eee; color:#666; font-family:Arial, sans-serif; font-size:0.75em; padding:12px; margin:0; text-align:right;}
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
      <li><a href="index.php">ABOUT GMU</a></li>
      <li><a href="partners.php">PARTNERS</a></li>
      <li><a href="howitworks.php">HOW IT WORKS</a></li>
       <li><a href="study_lab.php" class="active">STUDY LAB</a></li>
      <li><a href="library/library_menu1.php">ENTER LIBRARY</a></li>
      <li><a href="contact.php">CONTACT</a></li>
            <li><a href="bookshop.php">BOOK SHOP</a></li>


    </ul>

  </div> 
  <div id="main">
    <div class="box2">
    <?php
	include('connect.php');
include("ballot_class.php");
$object=new library();
	$path = "../logo//";
	
	$getaticle=mysql_query("SELECT * FROM `free_topics` WHERE `id`='{$_GET['id']}' AND `visibility`='1' LIMIT 1");
	 while($row=mysql_fetch_array($getaticle)){
$id=$row['id'];
$topicname=$row['topic_name'];
$content=$row['content'];
$sub=$row['subject_id'];
$intro=$row['introduction'];
$summary=$row['summary'];

}	
?>
<?php			$m=$object->getSubject($sub);

echo "<center><h1>".$m ."</h1></center>";
?> 
      <center><h2><?php echo "$topicname"; ?></h2></center>
  <div id="container">
        <div id="scrollbox" >

		<div id="content" >
</a>
          <p style="padding:12px 5px 12px 0; "><?php echo "$intro"; ?></p><br/>

       <p style="padding:12px 5px 12px 0; "><?php echo "$content"; ?></p><br/>
		
               <p style="padding:12px 5px 12px 0; "><?php echo "$summary"; ?></p>

      </div>
    </div>
   </div>
    <div class="box2">
    <?php
	$path = "logo/";
	
	$getaticle=mysql_query("SELECT * FROM `free_topics` WHERE `id`='{$_GET['id']}' AND `visibility`='1' LIMIT 1");
	 while($row=mysql_fetch_array($getaticle)){
$id=$row['id'];
$topicname=$row['topic_name'];
$content=$row['content'];
$sub=$row['subject_id']; 
$real_life_application=$row['real_life_application']; 
$objectives=$row['objectives'];
$possibleques=$row['possible_questions'];
	 }?>

   <?php 
   if($possibleques==""){
	   
   }
   elseif($possibleques>=0){
   
   ?>
     <center> <h2>Possible Questions</h2></center>
     <div id="container">
 <div id="scrollbox" >
		<div id="content" >
        <p><?php echo "$possibleques"; ?></p>
      </div>
    </div>
   </div>
</div>
</div>
<?php } ?>
   <br/><br/>
   <?php 
   if($real_life_application==""){
	   
   }
   elseif($real_life_application>=0){
   
   ?>
    <div class="box box-bordered last-box">
      <h2><?php echo 'Real Life Application of  '. $topicname; ?></h2>
      <div class="entry">
        <div class="news">
          <div id="container">

          <div id="scrollbox3" >
        <p>
         <?php echo $real_life_application; ?>
         </p>
         </div>
         </div>
               </div>
      </div>
    </div>
<?php } ?>

   <?php 
   if($objectives==""){
	   
   }
   elseif($objectives>=0){
   
   ?>
        <div class="box box-bordered2 last-box">
                       <h2 style="color:#FFF;"> <?php echo 'Objective(s) of  '. $topicname; ?></h2>
<div class="entry">     

        <div class="news">
      <div id="scrollbox3">
        <p><?php echo $objectives; ?></p>
       
             </div>
    </div>
     </div>
    </div>
    </div>
    <?php } ?>
    
    
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