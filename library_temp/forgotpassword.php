<?php ob_start(); ?>
<?php
session_start();

include("job_class.php");
$object=new job();
include("connect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>welcome to job connect Nigeria :: Homepage</title>
<meta name="keywords" content="jobs, connect, jobconnect" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="templatemo_header_wrapper">
<!--  Free Web Templates by TemplateMo.com  -->
  <div id="templatemo_header">
    
   	<div id="site_logo"></div>
        
		<div id="templatemo_menu">
      		<div id="templatemo_menu_left"></div>
            <ul>
                  <li><a href="index.php" class="current">Home</a></li>
                  <li><a href="client.php">Our Clients</a></li>
                  <li><a href="select_state.php">Jobs in Nigeria</a></li>
                  <li><a href="applicant_services.php">Applicant Services</a></li>
                                    <li><a href="#">How it works</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="register.php">Register</a></li>
                  <li><a href="latest_info.php">Latest Info</a></li>


                  <li><a href="contact_us.php" class="last">Contact Us</a></li>
            </ul>    	
		</div>
    
    </div>  <!-- end of header -->
</div> <!-- end of header wrapper -->

 <!-- end of banner wrapper -->
<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
    
    	<div id="column_w530_2">
        	
            <div class="header_02"><b style="color:#F00;">JOB-CONNECT </b> <i> <b style="color:#9C6;">NIGERIA</b></i>&nbsp;RETRIEVE PASSWORD </div>
                  
      
  <?php
	
if(isset($_POST["rest"])){
$e = mysql_real_escape_string($_POST['e']);
$sql = "SELECT `id`, `username`,`password` FROM `employer_form` WHERE `email`='$e' LIMIT 1";
$query = mysql_query($sql);
$numrows = mysql_num_rows($query);
if($numrows > 0){
while($row = mysql_fetch_array($query)){
$id = $row["id"];
$u = $row["username"];
$p = $row["password"];
}

$to = "$e";
$from = "jobconnectng@jobconnectng.org";
$header ="From: $from\n";
$header.="Reply:jobconne@jobconnectng.org\n";

$header .= "MIME-Version: 1.0\n";
$header.= "Content-type: text/html; charset=iso-8859-1 \n";
  $header.= "X-Mailer: PHP". phpversion() ."\r\n" ;
  $header .= "X-Priority: 1\r\n";



  
$subject ="your Password and Username just retrived";
$msg = '<h2>Hello '.$u.'</h2><p>This is an automated message from jobconnectng. If you did not recently initiate the Forgot Password process, please disregard this email.</p><p>You indicated that you forgot your login password or username.<br/>
Username='.$u.'.<br/>.
password='.$p.'


</p>';
if(mail($to,$subject,$msg,$header)) {
echo "your username and password has been successfully sent to your mail please check your spam box for your username and password<a href='register.php'>LOGIN</a> ";
exit();
} else {
echo "email_send_failed";
exit();
}
    } else {
        echo "the email address you have just entered doesnot exist on our database or you are not yet registered with us";
    }
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Forgot Password</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
<style type="text/css">
#forgotpassform{
margin-top:24px;
}
#forgotpassform > div {
margin-top: 12px;
}
#forgotpassform > input {
width: 250px;
padding: 3px;
background: #F3F9DD;
}
#forgotpassbtn {
font-size:15px;
padding: 10px;
}
</style>
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
<script>
function forgotpass(){
var e = _("email").value;
if(e == ""){
_("status").innerHTML = "Type in your email address";
} else {
_("forgotpassbtn").style.display = "none";
_("status").innerHTML = 'please wait ...';
var ajax = ajaxObj("POST", "forgot_pass.php");
        ajax.onreadystatechange = function() {
       if(ajaxReturn(ajax) == true) {
var response = ajax.responseText;
if(response == "success"){
_("forgotpassform").innerHTML = '<h3>Step 2. Check your email inbox in a few minutes</h3><p>You can close this window or tab if you like.</p>';
} else if (response == "no_exist"){
_("status").innerHTML = "Sorry that email address is not in our system";
} else if(response == "email_send_failed"){
_("status").innerHTML = "Mail function failed to execute";
} else {
_("status").innerHTML = "An unknown error occurred";
}
       }
        }
        ajax.send("e="+e);
}
}
</script>

<body>

</body>
</html>

            <p class="em_text">
            
        <table border="0" width="398" height="255px">
    <tr width="100%">
      <td width="40%">
      
      <center>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off"  >
  <div id="bar">
    <h3>Retrieve your Password And Username</h3></div>

<table width="600" border="0">
            <td height="52">Email Address:</td>
            <td><label for="textfield2"></label>
              <input type="text" name="e" id="textfield2"  size="40" style=" border:1px solid #CCC; height:30px; color:#999;" value="<?php if($_POST['e']){echo $_POST['e'];}?>"/></td>
            </tr>
          
          
          <tr>
            <td>&nbsp;</td>
            <td>  <input   type="submit" name="rest" value="Retrieve" class="but"  /></td>
            </tr>
          </table>
       
	</form>
    </center>
    
 </p>
          <div class="margin_bottom_20"></div>
            
      
            
          <div class="margin_bottom_20"></div>           
            
            <div class="content_section_01">

       </div>
            
            <div class="cleaner"></div>
</div>
    	<div class="cleaner"></div>
    </div> <!-- end of content wrapper -->
</div> <!-- end of content wrapper -->



<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
	  <div class="section_w180">
	    <div class="header_05">Partners</div>  
            <div class="section_w180_content">      
                 <ul class="footer_menu_list">
                    <li>GMU360 Concept</li>
                     <li>Sparkles Dry Cleaners</li>
                      <li>Smart Kiddies Academy</li>
                </ul>
			</div>
        </div>
        
        <div class="margin_bottom_20"></div>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
    <!--  Free CSS Templates by TemplateMo.com  -->
    <!--  Free CSS Templates by TemplateMo.com  -->
</div> <!-- end of footer -->
</html>
<?php
ob_flush();
?>