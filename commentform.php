<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit'])){
$name=addslashes($_POST['name']);
$subject=addslashes($_POST['subject']);
$message=addslashes($_POST['message']);
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
			
	$sql=mysql_query("INSERT INTO `faq` (`name`, `subject`, `email`, `message`, `visibility`, `section`, `entry_date`) VALUES ('$name', '$subject', '$email', '$message', '1', 'homepage',NOW()");
		}
}
?>
<div class="row-item col-1_4">
						<h3>Comment Form</h3>
						<!-- Success Message -->
						<div class="form-message"></div>
						<!-- Form -->
						<form class="b-form b-contact-form" action="<?php $_SERVER['PHP_SELF']; ?>">
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
							<input class="btn-submit btn colored" type="submit" name="submit" value="POST ISSUE" style="float:right;">
						</form>
						<!-- End Form -->
					</div>
</body>
</html>