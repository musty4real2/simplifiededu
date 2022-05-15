
<?php
	require 'connect.php';
	
	require 'core.php';
	
	if(!loggedin())
	{
		header('location:index.php');
	}
	
	$query = "INSERT INTO result (matric_number, fullname) VALUES('$_SESSION[matric_number]', '$_SESSION[full_name]')";
	
	$result = mysql_query($query);
	
	if(!$result)
	{
		//echo "you have violated the rule, this is the end";
		
		session_destroy();
		
		header('location:index.php');
	}
	$query = "SELECT * from questions"; 
	
	$result = mysql_query($query);
	
	$numberOfQuestions = mysql_num_rows($result);
	
	$row = mysql_fetch_array($result, MYSQL_BOTH);
?>
<html>
	<head>
    	<title>DLCF PS</title>
        
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        
        <script type="text/javascript" src="js/jquery.js">
		
        </script>
        
        <script type="text/javascript">
		var number = '<?=$numberOfQuestions;?>';
		
		//alert(number);
		
		var questions = new Array(100);
		
		var answers = new Array(100);
		
		$(document).ready(function(){
			
			function is_exist(number, index)
				{
					for(var i=0; i<index; i++)
					{
						if(questions[i] == number){
							//alert("generated b4");
							return 0;
							break;
						}
					}
					//return 1;
				}
				
				for(var index = 0; index <= 99; index++)
				{					
					do
					{
						questions[index] = Math.floor(Math.random()*number)+1;				
					}
					while(is_exist(questions[index], index) == 0);
				}
				
			
			});
			
			
		//document.forms[0].
		
			var questionNumber = -1;
		
			function nextfunction(){
								
				if(questionNumber == 39){
					
					alert("You have successfully completed the test, please click End button and Logout.");
					
				}
				
				else{
				
				questionNumber++;
		
				var questionId = questions[questionNumber];
				
					$.ajax({
							
							url:'ajaxNext.php?id='+questionId+'&index='+questionNumber,
				
						cache:false,
				
							success:function(html){
				
									if(html==0){
								
										alert("something is wrong");
										
										return false;
											
										}else{
											//alert("everything is alright");	
											
											$('#testquestion').empty();
											
											$('#testquestion').append(html);
											
											pickoption();
										}
								}
							});	
						
				}
				
			}
			
			function prevfunction(){
				
				if(questionNumber == 0){
					
					alert("This is the first question");
					
				}
				
				else{
				
				questionNumber--;
				
				
				var questionId = questions[questionNumber];
				
					$.ajax({
							
							url:'ajaxNext.php?id='+questionId+'&index='+questionNumber,
				
							cache:false,
				
							success:function(html){
				
									if(html==0){
								
										alert("something is wrong");
										
										return false;
											
										}else{
											//alert("everything is alright");	
											
											$('#testquestion').empty();
											
											$('#testquestion').append(html);
											
											pickoption();
										}
								}
							});	
					
				}
				
			}
			function submitOption(){
				
				$.ajax({
							
							url:'ajaxMark.php?answers='+answers+'&questions='+questions,
				
							cache:false,
				
							success:function(html){
				
									if(html==0){
								
										alert("something is wrong");
										
										return false;
											
										}else{
											//alert("everything is alright");	
											$('.clock').empty();
											
											$('#testquestion').empty();
											
											$('#testquestion').append(html);
											
											$('#control').empty();
											
										}
								}
							});	
					}
			
			function optionClicked(){
				if (questionNumber >= 0){
					
					if(document.getElementById('A').checked){
						
						answers[questionNumber]='A';
						
					}
					else if(document.getElementById('B').checked){
						
						answers[questionNumber]='B';
						
					}
					else if(document.getElementById('C').checked){
						
						answers[questionNumber]='C';
						
					}
					else if(document.getElementById('D').checked){
						answers[questionNumber]='D';
						
					}
					else{
						answers[questionNumber]='';
					}
				}
			}
			
			function pickoption(){
				
				//alert(answers[questionNumber]);
				
				if(questionNumber >= 0){
					
					if(answers[questionNumber]=='A'){
						document.getElementById('A').checked = true;
					}
					else if(answers[questionNumber]=='B'){
						document.getElementById('B').checked = true;
					}
					else if(answers[questionNumber]=='C'){
						document.getElementById('C').checked = true;
					}
					else if(answers[questionNumber]=='D'){
						document.getElementById('D').checked = true;
					}
					
					
				}
			}
			
			
		</script>
        
        <script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.countdown.pack.js"></script>
<script type="text/javascript">
function countdown(){
		var m = $('.min');
		var s = $('.sec');
		if(m.html()==0 && parseInt(s.html()) <= 0){
			//$('.clock').html('Time UP.');
			submitOption();
		}
		if(parseInt(s.html()) <=0 ){
			m.html(parseInt(m.html()-1));
			s.html(60);
		}
		if(parseInt(s.html()) <=0){
			$('.clock').html('<span class="sec">59</span> seconds. ');
		}
		s.html(parseInt(s.html()-1));
}
		setInterval ('countdown()', 1000);
</script>
    </head>
    
    <body>
    	
        <div id="main_body">
        
        	<div style="height:145px;">
            
            	<div style="margin-top:0px; vertical-align:top; text-align:center">
			 	<span style="font-size:50px;">Online Examination</span><br />
				<span style="font-size:50px">System for School</span>
			 </div>
                                              
            </div>
            
            <div id="area" style="text-align:center; padding-top:3px;">
            	
                <br />
                <div class="clock">
				<!--<span class="countdown">0</span>minutes-->
    			<span align="center" style="font-size:24px; background:#FFF;"><span style="color:black;" class="min">15</span><span style="color:white;"> <span style="color:black"> : </span></span><span style="color:black;" class="sec">00</span></span>
				</div>
            	<div id="testquestion" style="height:315px">
               	
            	<!--the div where the questions and options will be fetched -->
                
                <p style="color:white; font-size:24px; text-align:center">You have 40 questions to answer within 15 minutes </p>	
                    
     		</div>
                    
                    <br />
                    
           	<div id="control">
                    
                    <table width="100%">
                    
                    	<tr>
                        
                            <td align="left"><input type="button" name="prev" value="" id="prev" style="background:url(images/previous.png);border:0px; height:47px; width:78px;" onClick="prevfunction()" /> </td>
                            
                            <td align="center"><input type="button" name="end" value="" id="end" style="background:url(images/end.png);border:0px; height:30px; width:75px" onClick="submitOption()"/></td>
                                    
							<td align="right"><input type="button" align="right" name="next" value="" style="background:url(images/next.png);border:0px;width:78px;height:47px;" id ="next" onClick="nextfunction()" /></td>
                
                		</tr>
                        
                 	</table>
                    
           	</div>
            	<!--<div style="margin-top:200px; vertical-align:bottom;">
                	<marquee direction="left" scrollamount="5">...exploring the universe and its energy</marquee>
                </div>-->
            </div>
            
   	</div>	
        
    </body>
</html>