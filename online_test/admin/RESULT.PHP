<?php
include '../connect.php';

		//$re = "SELECT * FROM result";
//		
//		$me = mysql_query($re);
//		
//		$result = mysql_num_rows($me);
//		
//		for ($i = 0; $i<$result; $i++)
//		{
//			$row = mysql_fetch_array($result);
//			
//			$fullname = $row['fullname'];
//			
//			$score = $row['score'];
//		}


?>

<html>
<head>
    	
        <title>DLCF PS - Admin Page</title>
        
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
        
        	
            
            	<!--<div style="margin-top:0px; vertical-align:top; float:right">
                    <img src="images/banner.png" />
                    <br/>
                    <span style="text-align:center; font-size:18px; margin-left:220px">...aggressive evangelism</span> 
                </div>-->
			 <div style="margin-top:0px; vertical-align:top; text-align:center">
			 	<span style="font-size:50px;">Depper Life</span><br />
				<span style="font-size:50px">Campus Fellowship</span>
			 </div>
             <div id="area2" style="text-align:center"><br>
                
                <?php //echo "$result"; ?>
            	<table width="450"  align="center">
                <center><font face= face="Times New Roman, Times, serif" size="+2"><b> Here are the Results </b></font></center>
                <center><a href="logout.php"  style="text-align:center; "title="">LogOut</a></center>
            
                <td><b>Name</b></td>  <td><b>Score</b></td>
                    <?php
					$re = "SELECT * FROM result";
		
					$me = mysql_query($re);
		
					//$result = mysql_num_rows($me);
		
					while($date = mysql_fetch_array($me)){?>
					<tr>
                	<td><?php echo $date['fullname']; ?>  </td> 
                    <td><?php echo $date['result']; ?> % </td>
                    
                   </tr>
						
					<?php }
                ?>
                
                    </table>                                                          
            </div>
            	
            	
            	<!--<div style="margin-top:250px; vertical-align:bottom;">
                	<marquee direction="left" scrollamount="5">...the happiest people on campus</marquee>
                </div>-->
            </div>
            
   	</div>
    	
    </body>
    
</html>