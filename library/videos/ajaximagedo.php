<?php
include('../connect.php');
include("../ballot_class.php");
$object=new library();
session_start();
$path = "animations/";

	$valid_formats = array("MP4","FLV","MP3");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
$videolink="<a href='animations/$actual_image_name?title=0&amp;byline=0&amp;portrait=0'>$actual_image_name</a>";									
	mysql_query("INSERT INTO `video` (`video_name`, `video_link`) VALUES ('$actual_image_name', '$videolink')") or die(mysql_error());

$pic=getimagesize("animations/$actual_image_name");
?>

<center><img  class="pic" src='<?php echo "animations/$actual_image_name";?>'  <?php echo $object->imageResize($pic[0], $pic[1], 200);?>  style='position:relative; top:15px; left:35px;'/></center>
<?php echo "<p style='margin-top:45px; text-align:center;'><a  href='manage_do_you_know.php?id={$_SESSION['voterid']}'>CLICK HERE TO FINISH</a></p>";


								}
							else
								echo "failed";
						}
					
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
		
?>