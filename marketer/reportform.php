<?php
ob_start();
include("connect.php");
include("ballot_class.php");
$object=new library();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>welcome to Gmu e-Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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

      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div> 
  <div id="tagline">
<div class="one">
</div>
<div class="two">&nbsp;</div>  
  </div>
  
  <div id="main">
    <div class="box2">
    <?php
if(isset($_POST['button'])){
	$schname=addslashes($_POST['schname']);
	$eststudent=addslashes($_POST['eststudent']);
	$schresponse=addslashes($_POST['schresponse']);
	$day=$_POST['day'];
$year=$_POST['year'];
$month=$_POST['month'];
$challenge=addslashes($_POST['challenge']);
$note=addslashes($_POST['note']);
$doa="$year-$month-$day";
	if(empty($schname)){$error[]="name of school visited is required";}
	if(empty($eststudent)){$error[]="estimated number of student in the school visited is required";}
	if(empty($schresponse)){$error[]="the response of school is required";}
		if(empty($day)){$error[]="Day of check back is required";}
		if(empty($month)){$error[]="Month of check back is required ";}
		if(empty($year)){$error[]="Year of check back is required";}
	
		if(!empty($error)){
		echo "<p class='msg warning'><b>Oops! ERROR:</b></p>";
		foreach($error as $oops){
			echo "<p class='msg error'>$oops</p>";
			}//foreach loop
			
		}//if !empty error

		//if $error variable is empty, continue with the script
		elseif(empty($error)){

	$select=mysql_query("INSERT INTO `marketers_report` (`sch_visited`, `estimated_number_of_student`, `school_response`, `check_back_date`, `challenge_encountered`, `note_suggestion`, `entry_date`, `marketer_id`) VALUES ('$schname', '$eststudent', '$schresponse', '$doa', '$challenge', '$note', NOW(), '{$_SESSION['postersid']}')");
	
	//$query=mysql_query($select) or die("ERROR:".mysql_error());
header("location:reportform.php?entered=1");
		}
}
?>
<?php
$e=$_GET['entered'];
if($e==1){
	echo "<h1>THE JUST SUBMITTED REPORT HAVE BEEN SUBMITTED TO THE ADMINISTRATORS</h1>";
}else{
	"<h1>THE JUST SUBMITTED REPORT HAVE NOT BEEN SUBMITTED TO THE ADMINISTRATORS PLEASE CHECK WHERE YOU HAVE ERRORS</h1>";
}

?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table border="0" width="80%" height="193">
        	<tr>
            	<td width="38%" height="37" >
              
                Name of School Visited</td>
                <td width="62%"><input type="text" name="schname" value="<?php if($_POST['schname']){echo $_POST['schname']; } ?>"/></td>
                
   <td width="0%"></td></tr>
   	<tr>
          
                <td>
                Estimated Number of Students</td>
                <td><input type="text" name="eststudent" value="<?php if($_POST['eststudent']){echo $_POST['eststudent']; } ?>"/></td>
                
   </td></tr>
      	<tr>
          
                <td>
                Response Given By school</td>
                <td><textarea name="schresponse"></textarea></td>
                
   </td></tr>
   
      	<tr>
          
                <td>
                Check Back Date</td>
                <td>      <select name="day" id="select" class="smallInput">
          <option value="" selected="selected">Day</option>
          <option  value="">-------</option>
          
          <?php
	  $days=range(1, 31);
	  foreach($days as $d){
		  echo "<option value='$d'>$d</option>";
		  
		  }
	  ?>
          <?php if($_POST['day']){echo "<option value='{$_POST['day']}' selected='selected'>{$_POST['day']}</option>";}
	  ?>
          </select>
    
        <select name="month" id="select2" class="smallInput">
          <option value="" selected="selected">Month</option>
          <option  value="">-------</option>
          <?php
	  $mon=array("1"=>"January", "2"=>"Febraury", "3"=>"March", "4"=>"April", "5"=>"May", "6"=>"June", "7"=>"July", "8"=>"August", "9"=>"September", "10"=>"October", "11"=>"November", "12"=>"December");
	  foreach($mon as $key=>$value){
		  echo "<option value='$key'>$value</option>";
		  
		  }
	  ?>     
          <?php if($_POST['month']){echo "<option value='{$_POST['month']}' selected='selected'>{$_POST['month']}</option>";}
	  ?>
          
          </select>
         
        <select name="year" id="select3" class="smallInput">
          <option value="" selected="selected">Year</option>
          <option  value="">-------</option>
          <?php
	  $days=range(1970, 2014);
	  foreach($days as $d){
		  echo "<option value='$d'>$d</option>";
		  
		  }
	  ?>
          <?php if($_POST['year']){echo "<option value='{$_POST['year']}' selected='selected'>{$_POST['year']}</option>";}
	  ?>
          
          </select>
      </td>
                
   </td></tr>
   	<tr>
          
                <td>
               Enter Any Challenge Encountered If Any</td>
                <td><textarea name="challenge" ></textarea></td>
                
   </td></tr>
   	<tr>
          
                <td>
                Enter Any Note/ Suggestion If Any</td>
                <td><textarea name="note" ></textarea></td>
                
   </td></tr>
   <tr ><td>&nbsp;</td><td height="40" align="right"><input name="button" type="submit"  id="button" value="Submit Report"/></td>
            </tr>
      </table>  
    </form>
<?php

  $display = 10;
  // Determine how many pages there are...
  if (isset($_GET['p']) && is_numeric($_GET
  ['p'])) { // Already been determined.
  
  $pages = $_GET['p'];
  } else { // Need to determine.
  
  // Count the number of records:
  $q = "SELECT * FROM `post`";
  $r = mysql_query ($q);
  $records=mysql_num_rows($r);
  if(!$r){echo  "SYSTEM ERROR: Server cannot execute query.".mysql_error();}
  if(empty($r)){echo "SYSTEM ERROR: Server cannot execute query.".mysql_error();}
  
  
  // Calculate the number of pages...
  if ($records > $display) { // More than
  $pages = ceil ($records/$display);
  } else {
  $pages = 1;
  }
  }
  if (isset($_GET['s']) && is_numeric
  ($_GET['s'])) {
  $start = $_GET['s'];
  } else {
  $start = 0;
  }
?>
<?php

	$select="SELECT * FROM `post_like_tbl` WHERE `likers_id`='{$_SESSION['postersid']}' AND `post_id`='{$_GET['id']}'";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
	
	if(mysql_num_rows($query)==1){

}

		
	if(mysql_num_rows($query)==0){
$update=mysql_query("INSERT INTO `post_like_tbl` (`post_id`, `likers_id`) VALUES ('{$_GET['id']}', '{$_SESSION['postersid']}')");

}
?>

        
        <?php
		$get="SELECT * FROM `post` ORDER BY `entry_date` DESC LIMIT $start, $display ";
		$get=$object->query($get);
		if(mysql_num_rows($get)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../images/info.JPG' width='56' height='50' />No Posts</p>";}
		
		while($row=mysql_fetch_array($get)){
			$id=$row['id'];
			$posters_id=$row['posters_id'];
			?>
        <?php } ?>
        
        
    
        
       
  <?php
 
  //paginate result set
if ($pages > 1) {
echo '<center>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="post.php?s=' .
($start - $display) . '&p=' . $pages .
'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="post.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="post.php?s=' .
($start + $display) . '&p=' . $pages .
'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
}
 ?>    <center>
</div><br/>
     <h3>Welcome <?php echo $object->getPoster($_SESSION['postersid']); ?><br/> Your Username is: <?php echo $object->getPosterUsername($_SESSION['postersid']); ?></h3><br/><br/>
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