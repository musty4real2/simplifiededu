<?php
include('connect.php');
include("../ballot_class.php");
$object=new library();
session_start();
$path = "../logo/";

	$valid_formats = array("jpg", "png", "gif", "bmp","JPG","GIF","PNG","BMP");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
									
								mysql_query("UPDATE `categories` SET `logo` = '$actual_image_name' WHERE `id`='{$_SESSION['voterid']}'") or die(mysql_error());

$pic=getimagesize("../logo/$actual_image_name");
?>

<center><img  class="pic" src='<?php echo "../logo/$actual_image_name";?>'  <?php echo $object->imageResize($pic[0], $pic[1], 200);?>  style='position:relative; top:15px; left:35px;'/></center>
<?php echo "<p style='margin-top:45px; text-align:center;'><a  href='manage_categories.php?id={$_SESSION['voterid']}'>CLICK HERE TO FINISH</a></p>";


								}
							else
								echo "failed";
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
		
?>