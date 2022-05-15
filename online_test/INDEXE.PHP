<?php
	require 'connect.php';
	
	require 'core.php';
	
	if(loggedin())
	{
		header('location:exam.php');
	}

	if(isset($_REQUEST['login']))
	{	
		$matric_number = trim($_POST['matric_number']);
		
		$full_name = trim($_POST['name']);
		
		if(empty($matric_number)|| empty($full_name))
		{
			$message = 1;
		}
		else
		{
			if(strlen($matric_number)!=10)
			{
				$message = 3;
			}
			else
			{
				echo 'working';
				$_SESSION['matric_number'] = $matric_number;
			
				$_SESSION['full_name'] = $full_name;
			
				header('location:exam.php');
			}
		}
	}
	else
	{
		$message = 2;
		//echo "problem here";
	}
?>
<html>
	<head>
    	
        <title>AFBF</title>
        
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        
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
			 	<span style="font-size:50px;">ACCOUNTING & FINANCE</span><br />
				<span style="font-size:50px">BELIEVERS' FELLOWSHIP</span>
			 </div>
                
            	<!--<img src="images/rcf.png" style="margin-left:5px; margin-top:4px;"/>-->
                                              
            </div>
            
            <div id="area" style="text-align:center">
            	
            	<form action="index.php" method="post">
                	<?php
						if($message==1)
						{
							  echo "<span style=text-align:center;font-size:20px;>All fields are required</span>";
						}
						else if($message==3)
						{
							  echo "<span style=text-align:center;font-size:20px;>Incorrect matric number</span>";
						}
					?>
                	<table align="center" style="padding-top:10px" cellpadding="5" cellspacing="5">
                    	
                        <tr>
                        	<td style="color:white; font-size:20px;">Matric Number: </td>
                            <td><input type="text" name="matric_number" style="background:url(images/t_box.png) no-repeat; width:208px; height:35px; border:0px; text-align:center; font-size:20px;" maxlength="10"/>
                        </tr>
                        
                        <tr>
                        	<td style="color:white; font-size:20px;">Full Name: </td>
                            <td><input type="text" name="name" style="background:url(images/t_box.png) no-repeat; width:208px; height:35px; border:0px; text-align:center; font-size:20px;" maxlength="50"/>
                        </tr>
                        
                        <tr>
                        	<td>&nbsp;</td>
                            <td><input type="submit" name="login" value="Login" style="width:100px; height:40px; font-size:24px"/>
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