<?php ob_start(); ?>
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
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>    <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="../index.php">ABOUT GMU</a></li>
      <li><a href="../partners.php">PARTNERS</a></li>
      <li><a href="../study_lab/index.php">SUBMIT A TUTORIAL</a></li>
       <li><a href="../study_lab.php">STUDY LAB</a></li>
      <li><a href="../library_temp/index.php">ENTER LIBRARY</a></li>
      <li><a href="../contact.php">CONTACT</a></li>
            <li><a href="book_shop/index.php"  class="active">BOOK SHOP</a></li>


    </ul>

  </div> 
  <div id="main">
    <?php
	include('../connect.php');
include("../ballot_class.php");
$object=new library();
?>
      <h2>WELCOME TO OUR BOOKSHOP</h2>
      
      <table border="0" width="80%"/>
      <tr><td><a href="continue.php">I have my teller number </a> </td></tr>
      </table><br/><br/>
      
 <?php
	$query="SELECT * FROM `bookshop` ORDER BY `id` DESC";
	$result=mysql_query($query);
 
	$cols=4;		
	echo "<table>";	
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	
									
			$row=mysql_fetch_array($result);
			if($row){
 ?>
        <td>
            <table>
                <tr valign="top">

 <td><?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'bookshop');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	 $id=$row['id'];
		$picture=$m['book_cover'];
	
if($picture!=""){
$pic=getimagesize("../administrator/uploads/$picture");

?>
                 
                       
                      <center><a href="<?php echo "book_review.php?id2=$id" ?>"><?php
echo "<br /><img style='border:#666 1px solid;' src='../administrator/uploads/$picture' alt='{$row['book_title']}' width='170' height='200' border='1' title='{$row['book_title']}' /><br/> Price N: {$row['price']}; </a>"; ?>
                    </td>
                    <td width="30">&nbsp;</td>	<!-- Create gap between columns -->
                </tr>
           </table>
        </td>
<?php
 }
 }
 }
			
		}
	} while($row);
	echo "</table>";
 ?>

    <br/>
    
    
               
    <div class="row-item col-1_4">
						<!-- Success Message -->
						<div class="form-message"></div>
						<!-- Form -->
						<?php
if(isset($_POST['submit'])){
$name=addslashes($_POST['name']);
$subject=addslashes($_POST['subject']);
$message=addslashes($_POST['msgfield']);
$email=addslashes($_POST['email']);
if($name==""){$error[]="Please specify name";}
if($subject==""){$error[]="Please specify the subject or the problem you are having";}
if($email==""){$error[]="Please specify email";}
if($message==""){$error[]="Please specify message";}


	if(!empty($error)){
		echo "<p class='msg warning'><b>Oops! ERROR:</b></p>";
		foreach($error as $oops){
			echo "<p class='msg error'>$oops</p>";
			}//foreach loop
		}//if !empty error

		//if $error variable is empty, continue with the script
		elseif(empty($error)){
			
	$sql=mysql_query("INSERT INTO `faq` (`name`, `subject`, `email`, `message`, `visibility`, `section`, `entry_date`,`reply`) VALUES ('$name', '$subject', '$email', '$message', '1', 'bookshop',NOW(),'')");
	
		}
				header("location:index.php?msg=your sugestion has been submitted to the faq section of this site");

}
?>
   <?php
						if(isset($_GET['msg'])){
						
						$msg=$_GET['msg'];
						echo "<h2 style='color:#F00'>" .$msg. "</h2>";	
						}
						
						?>

<div class="row-item col-1_4">
						<h3>Comment Form</h3>
						<!-- Success Message -->
						<div class="form-message"></div>
						<!-- Form -->
						<center><form class="b-form b-contact-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post"/>
							<div class="input-wrap m-full-width">
								<i class="icon-user"></i>
								<input class="field-name" type="text" placeholder="Name (required)" name="name">
							</div>
                            <div class="input-wrap m-full-width">
								<i class="icon-user"></i>
								<input class="field-name" type="text" placeholder="Subject (required)" name="subject">
							</div>
							<div class="input-wrap m-full-width">
								<i class="icon-envelope"></i>
								<input class="field-email" type="text" placeholder="E-mail (required)" name="email">
							</div>
							<div class="textarea-wrap">
								<i class="icon-pencil"></i>
								<textarea class="field-comments" placeholder="Message (required)" name="msgfield"></textarea>
							</div>
							<input class="btn-submit btn colored" type="submit" name="submit" value="POST" style="float:center;">
						</form></center>
						<!-- End Form -->
					</div>

						<!-- End Form -->
					</div>
       <br/>

    <div class="cl">&nbsp;</div>
  </div>
 
</div>
<!-- END PAGE SOURCE -->
</html>
<?php
ob_flush();
?>