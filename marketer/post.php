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
	$post=addslashes($_POST['post']);
	if($post==""){$error[]="You've not Entered a comment";}
		if(!empty($error)){
		echo "<p class='msg warning'><b>Oops! ERROR:</b></p>";
		foreach($error as $oops){
			echo "<p class='msg error'>$oops</p>";
			}//foreach loop
			
		}//if !empty error

		//if $error variable is empty, continue with the script
		elseif(empty($error)){

	$select="INSERT INTO `post` (`posters_id`, `message`, `entry_date`, `hits`) VALUES ('{$_SESSION['postersid']}', '$post', NOW(), '0');";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
header("location:post.php");
		}
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table border="0" width="398" height="193">
        	<tr>
            	<td height="37" ><p><h2>Please Post Your Question or What Is on Your Mind Here</h2></p></label><br/>
              <textarea name="post" class="textpost" placeholder="Please Post Your Queston or What Is on Your Mind Here"></textarea>
   </td></tr><tr ><td height="40" align="right"><input name="button" type="submit"  id="button" value="Post"/></td>
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
            <table border="0" width="600px" bordercolor="#c7e7f9">
            <tr bgcolor="#c7e7f9" height="35px" >
            <td><p style="color:#0071BC;">:<?php echo "  ". $object->getPosterUsername2($posters_id); ?>
             Wrote: </p></td>
             <td><?php echo $row['entry_date'];
			?></td></tr>
<tr>
<td>
<img class="avatar" src="images/avatar.gif" width="32" height="32" alt="" />
 <span class="wrote">wrote:</span>
            <?php echo $row['message'];?></td></div>
            <tr>
            <td> <?php	$object->countRes('post_like_tbl', 'post_id',$id); ?> Like(s) <?php	$object->countRes('replies', 'post_id',$id); ?> Comment(s)</td>
            </tr>

           
         </table>   
         <table width="600px">
                     <tr align="right" width="600px">
        

            <td><a href="<?php echo "post.php?id=$id";?>" title="Like these Post"><img src="forum/like.png" width="80px" height="32" /></a><a href="<?php echo "comment.php?id=$id";?>" title="Comment on these Post" ><img src="forum/comment.png" width="80px" height="32" /></a></td>
    
           </tr>
           </table>
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
    
    <div class="box box-bordered last-box">
      <h2> Featured This week Article images</h2>
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
<?php
ob_flush();
?>