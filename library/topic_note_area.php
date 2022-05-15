<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>welcome to Gmu e-Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style2.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
<script type="text/javascript" src="../tinybox.js"></script>

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
      <li><a href="library_menu.php">HOME</a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
            <li><a href="logout.php">LOGOUT</a></li>

    </ul>

  </div> 
  <div id="main">
    <div class="box2">
    <?php
	include('connect.php');
include("../ballot_class.php");
$object=new library();
	$path = "../logo//";
	
	$getaticle=mysql_query("SELECT * FROM `topics` WHERE `visibility`='1' LIMIT 1");
	 while($row=mysql_fetch_array($getaticle)){
$id=$row['id'];
$topicname=$row['topic_name'];
$content=$row['content'];
$sub=$row['subject_id'];
}	
	$getpic=mysql_query("SELECT `logo` FROM `topics` WHERE `id`='$id'");
	 while($row=mysql_fetch_array($getpic)){

$picture=$row['logo'];
if($picture!=""){
$pic=getimagesize("../logo/$picture");
?>
  <?php } 
	 }?>
<?php			$m=$object->getSubject($sub);

echo "<center><h1>".$m ."</h1></center>";
?> 
      <h2><?php echo $topicname; ?></h2>
  <div id="container">


    <div id="scrollbox" >
		<div id="content" >
        <p>
 <center><img src="<?php echo "../logo/$picture";?>"  <?php echo $object->imageResize ($pic[0], $pic[1], 600);?> alt="<?php echo $row['topic_name'];?>" /></center>
</a>
        <strong></strong><br/>

       <?php echo "$content"; ?></p>
		
      </div>
    </div>
    <center></div>
    <div class="box2">
    <?php
	$path = "../logo//";
	
	$getaticle=mysql_query("SELECT * FROM `topics` WHERE  `visibility`='1' LIMIT 1");
	 while($row=mysql_fetch_array($getaticle)){
$id=$row['id'];
$topicname=$row['topic_name'];
$content=$row['content'];
$sub=$row['subject_id']; 
$real_life_application=$row['real_life_application']; 

	 }?>

  <div id="container">
     <center> <h2>Possible Questions</h2></center>
    <div id="scrollbox2" >
		<div id="content" >
        <p>
 <center><img src="<?php echo "../logo/$picture";?>"  <?php echo $object->imageResize ($pic[0], $pic[1], 600);?> alt="<?php echo $row['topic_name'];?>" /></center>
</a>
        <strong></strong><br/>

       <?php echo "$content"; ?></p>
		
      </div>
    </div>
    <center></div>
</div>
</div>

   <br/><br/>
   
    <div class="box box-bordered last-box">
      <h2><?php echo 'Real Life Application of  '. $topicname; ?></h2>
      <div class="entry">
        <div class="news">
          <ul>
            <li>
              <h4><a href="#">September 13th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
            <li>
              <h4><a href="#">September 12th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
            <li class="last">
              <h4><a href="#">September 11th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>

        <div class="box box-bordered2 last-box">
      <h2> Objective(s)</h2>
      <div class="entry">
        <div class="news">
          <ul>
            <li>
              <h4><a href="#">September 13th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
            <li>
              <h4><a href="#">September 12th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
            <li class="last">
              <h4><a href="#">September 11th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="box box-bordered3 last-box">
      <h2> FORMULAS</h2>
      <div class="entry">
        <div class="news">
          <ul>
            <li>
              <h4><a href="#">September 13th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
            <li>
              <h4><a href="#">September 12th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
            <li class="last">
              <h4><a href="#">September 11th, 2010</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip <a href="#">&hellip;</a></p>
            </li>
          </ul>
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