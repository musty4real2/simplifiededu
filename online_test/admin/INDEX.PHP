<?php
include '../connect.php';

if(isset($_REQUEST['submit'])){
	
	$username = $_POST['username'];
	
	$password = $_POST['password'];

if (empty($username) || empty ($password)){
	
	echo "Username and Passoword is required";
	
}

$query = "SELECT * FROM admin WHERE username = '$username'";

$result = mysql_query($query);



if ($result){
	
	$row = mysql_num_rows($result);
	
	if($row == 0){
	
	echo "Username or password Incorrect";
	
	}else{
		$_SESSION['username'] = $username;
		header('Location:dash.php');
	}
}

}

?>
<html>
	<head>
    	
        <title>DLCF PS - Admin Login</title>
        
        <link rel="stylesheet" type="text/css" href="../css/main.css" />
        
        <style type="text/css">
		input[type=submit]{
			font-weight:bold;
			margin-left:14px;
			border: 1px solid #aaa;
			padding: 3px 7px;
			color:#FFF;
			text-decoration: none;
			background: #ddd;
		
			border-radius: 12px;
			-webkit-border-radius: 12px;
			-moz-border-radius: 12px;
		
			text-shadow: 0 1px 0 #fff;
		
			background-image: url(svg_gradient.php?from=ffffff&to=000000);
		background-size: 100% 100%;
		background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#000000));
		background: -webkit-linear-gradient(top, #ffffff, #000000);
		background: -moz-linear-gradient(top, #ffffff, #000000);
		background: -ms-linear-gradient(top, #ffffff, #000000);
		background: -o-linear-gradient(top, #ffffff, #000000);}
		
		input[type=submit]:hover{position: relative;
			background-image: url(svg_gradient.php?from=000000&to=dddddd);
		background-size: 100% 100%;
		background: -webkit-gradient(linear, left top, left bottom, from(#000000), to(#dddddd));
		background: -webkit-linear-gradient(top, #000000, #dddddd);
		background: -moz-linear-gradient(top, #000000, #dddddd);
		background: -ms-linear-gradient(top, #000000, #dddddd);
		background: -o-linear-gradient(top, #000000, #dddddd);    cursor:pointer;
		}
		
		input[type=submit]:active{position: relative;
			top: 1px;
			left: 1px;
		}
		</style>
        
    </head>
    
    <body>
    
  <div id="main_body">
        
        	<div style="height:145px;">
            
            	<!--<div style="margin-top:0px; vertical-align:top; float:right">
                    <img src="images/banner.png" />
                    <br/>
                    <span style="text-align:center; font-size:18px; margin-left:220px">...aggressive evangelism</span> 
                </div>-->
			 <div style="margin-top:0px; vertical-align:top; text-align:center">
			 	<span style="font-size:50px;">Deeper Life</span><br />
				<span style="font-size:50px">Campus Fellowship</span>
			 </div>
                
            	<!--<img src="images/rcf.png" style="margin-left:5px; margin-top:4px;"/>-->
                                              
            </div>
            
            <div id="area" style="text-align:center">
            	
            	<form action="index.php" method="post">
                	
                	<table align="center" style="padding-top:10px" cellpadding="5" cellspacing="5">
                    	
                        <tr>
                        	<td style="color:white; font-size:20px;">Username: </td>
                            <td><input type="text" name="username" style="background: url(../images/t_box.png) no-repeat; width:208px; height:35px; border:0px; text-align:center; font-size:20px;" maxlength="10"/>
                        </tr>
                        
                        <tr>
                        	<td style="color:white; font-size:20px;">Password: </td>
                            <td><input type="password" name="password" style="background:url(../images/t_box.png) no-repeat; width:208px; height:35px; border:0px; text-align:center; font-size:20px;" maxlength="50"/>
                        </tr>
                        
                        <tr>
                        	<td>&nbsp;</td>
                            <td><input type="submit" name="submit" value="Login" style="width:100px; height:40px; font-size:24px"/>
                        </tr>
                    </table>
                </form>
            	<!--<div style="margin-top:250px; vertical-align:bottom;">
                	<marquee direction="left" scrollamount="5">...the happiest people on campus</marquee>
                </div>-->
            </div>
            
   	</div>
    	
    </body>
    
</html>