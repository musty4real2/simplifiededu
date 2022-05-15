<?php
ob_start();
include("../connect.php");
session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Simplified Education</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>                        
  <?php
	
if(isset($_POST["rest"])){
$e = mysql_real_escape_string($_POST['e']);
$sql = "SELECT `id`, `username`,`password` FROM `tutor_reg` WHERE `email`='$e' LIMIT 1";
$query = mysql_query($sql);
$numrows = mysql_num_rows($query);
if($numrows > 0){
while($row = mysql_fetch_array($query)){
$id = $row["id"];
$u = $row["username"];
$p = $row["password"];
}

$to = "$e";
$from = "simplifiededu@simplifiededu.com";
$header ="From: $from\n";
$header.="Reply:simplifiededu@simplifiededu.com\n";

$header .= "MIME-Version: 1.0\n";
$header.= "Content-type: text/html; charset=iso-8859-1 \n";
  $header.= "X-Mailer: PHP". phpversion() ."\r\n" ;
  $header .= "X-Priority: 1\r\n";



  
$subject ="your Password and Username just retrived";
$msg = '<h2>Hello '.$u.'</h2><p>This is an automated message from simplifiededu.com. If you did not recently initiate the Forgot Password process from our simplified tutorial submission, please disregard this email.</p><p>You indicated that you forgot your login password or username.<br/>
Username='.$u.'.<br/>.
password='.$p.'


</p>';
if(mail($to,$subject,$msg,$header)) {
echo "your username and password has been successfully sent to your mail please check your spam box for your username and password <a href='www.simplifiededu.com/study_lab/'>LOGIN</a> ";
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
      <li><a href="index.php" class="active">HOME</a></li>
      <li><a href="signup.php" >Sign up for simplified tutorial submission</a></li>
    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
    Please Enter your email address you used during registration below: <table width="100%" border="0" >
    <tr width="100%">
      <td width="40%">
<center>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off"  >
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
      
<br/><br/><br/><br/>

</td>
          
      </tr>
        </table>    <div class="cl">
  </div>
    
</div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
</html>
<?php
ob_flush();
?>