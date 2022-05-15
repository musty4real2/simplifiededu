<?php


/**************************************************************************************************************/
class library{
	
public $field1;
public $field2;
public $field3;
public $field4;
public $field5;
public $field6;
public $field7;
public $field8;
public $field9;

public $value1;
public $tabdelete;

public $where;
public $is;
public $all;
public $tab;
public $qstring;
public $catid;

/**************************************************************************************************************/

public function query($string){
	$this->string=$string;
	$l=@mysql_query($this->string) or die(mysql_error());
	return $l;
	
}
/**************************************************************************************************************/
//mysqlQuery method
public function mysqlQuery($querystring){
	$this->qstring=$querystring;
	
	if(!$sql=mysql_query($this->qstring)){
		die("Sorry and error occured: ". mysql_error());
		}
	
	}
	
	
	public function imageResize($width, $height, $target){
		
		//takes the larger size of the width and height and applies the formular accordingly.. this is so this script will work dynamically with any size
		
		if($width>$height){
			$percentage = ($target/$width);
			}
			//gets the new value and applies the percentage, then rounds the values
			$width=round($width*$percentage);
			$height=round($height*$percentage);
			//returns the new sizes in html tag format... this is so you can plug this function inside an image tag and just get the 
			return "width=\"$width\" height=\"$height\"";
		
		}
//end of mysqlQuery method	
/**************************************************************************************************************/
/**************************************************************************************************************/
	
//selectall method	
public function selectall($table){
	$this->tab=$table;
	
	$query="SELECT * FROM `{$this->tab}`";
	if(!$execute=mysql_query($query)){
		die("Sorry, could not select all records in the {$this->tab} table. <br/> ERROR: ".mysql_error());
		}
		
	else{return $execute;}
	
	}	
			
	
//end of selectall method	
/**************************************************************************************************************/
	
		public function getImageWhere($entryid, $phototable){
		$this->entryid=$entryid;
		$this->phototable=$phototable;
		$query="SELECT * FROM `{$this->phototable}` WHERE `id`='{$this->entryid}'";
		$exe=@mysql_query($query) or die("SYSTEM ERROR: Server cannot execute query.".mysql_error());
		return $exe;
		}
	
/**************************************************************************************************************/
	
public function selectAllWhere($table, $where, $is){
	$this->tab=$table;
	$this->where=$where;
	$this->is=$is;
	
	
	$query="SELECT * FROM `{$this->tab}` WHERE `{$this->where}`='{$this->is}'";
	if(!$execute=mysql_query($query)){
		die("Sorry, could not select all records in the {$this->tab} table. <br/> ERROR: ".mysql_error());
		}
		
	else{return $execute;}
	
	}
	
/**************************************************************************************************************/

/**************************************************************************************************************/
public function selectfieldWhere($field, $table, $where, $is){
	$this->field1=$field;
	$this->tab=$table;
	$this->where=$where;
	$this->is=$is;
	
	
	$query="SELECT `{$this->field1}` FROM `{$this->tab}` WHERE `{$this->where}`='{$this->is}'";
	if(!$execute=mysql_query($query)){
		die("Sorry, could not select this {$this->field1} in the {$this->tab} table. <br/> ERROR: ".mysql_error());
		}
		
	else{return $execute;}
	
	}
/**************************************************************************************************************/





/**************************************************************************************************************/
	public function deleteAllWhere($tab, $whereid){
		
		$this->tabdelete=$tab;
		$this->where=$whereid;
		
		
	$query="DELETE FROM  `{$this->tabdelete}` WHERE `id`='{$this->where}'";
	if(!$execute=mysql_query($query)){
		die("Sorry, could not delete records {$this->tab} table. <br/> ERROR: ".mysql_error());
		}
		
	else{return $execute;}
	
	
		}
	
/**************************************************************************************************************/





/**************************************************************************************************************/
	public function voterlogin($matric, $pass){
		
		$this->field1=$matric;
		$this->field2=$pass;
		
	$log="SELECT * FROM `voters` WHERE `matric`='{$this->field1}' AND `password`='{$this->field2}'";
	
	if(!$execute=mysql_query($log)){
		die("Sorry, Could not log you in at this time <br/> ERROR: ".mysql_error());
		}
				
	else{return $execute;}
		
		}
		
		
		
		/***************************************************************************/
					public function getCategory($catid){
	$this->catid=$catid;
	$fetchcat=$this->query("SElECT `category_name` FROM `categories` WHERE `id`='{$this->catid}'");
	while($row=mysql_fetch_array($fetchcat)){
		return $row['category_name'];
		}//while
		//$object->getCat(1)======= Luxury
	}
	
						public function getSubject($subid){
	$this->subid=$subid;
	$fetchsub=$this->query("SElECT `subject_name` FROM `subjects` WHERE `id`='{$this->subid}'");
	while($row=mysql_fetch_array($fetchsub)){
		return $row['subject_name'];
		}//while
		//$object->getCat(1)======= Luxury
	}
	
	/**********************************************************************************************************/
	public function displayPhoto($photo, $folder, $scale){
		$this->photo=$photo;
		$this->folder=$folder;

		$this->scale=$scale;
	$pic=getimagesize("{$this->folder}/{$this->photo}");
	?>
  <img style="border:1px solid #999; padding:1px;"  class="pic" src="<?php echo "{$this->folder}/{$this->photo}";?>" 
   <?php echo $this->imageResize($pic[0], $pic[1], $this->scale);?> />
		<?php } 
/**************************************************************************************************************/


						public function getPoster($posterid){
	$this->posterid=$posterid;
	$fetchposterid=$this->query("SElECT * FROM `marketers` WHERE `id`='{$this->posterid}'");
	while($row=mysql_fetch_array($fetchposterid)){
		return $row['name'].' '. $row['surname'];
		}//while
		//$object->getCat(1)======= Luxury
	}
	
							public function getPosterUsername($posterid2){
	$this->posterid2=$posterid2;
	$fetchposterid2=$this->query("SElECT * FROM `marketers` WHERE `id`='{$this->posterid2}'");
	while($row=mysql_fetch_array($fetchposterid2)){
		return $row['username'];
		}//while
		//$object->getCat(1)======= Luxury
	}
								public function getPosterUsername2($posterid3){
	$this->posterid3=$posterid3;
	$fetchposterid3=$this->query("SElECT * FROM `forumn_reg` WHERE `id`='{$this->posterid3}'");
	while($row=mysql_fetch_array($fetchposterid3)){
		return $row['username'];
		}//while
		//$object->getCat(1)======= Luxury
	}
	
	
	
	
		public function countRes($table, $field, $value){
		$this->field=$field;
		$this->value=$value;
		$this->table=$table;
		
		$sql="SELECT COUNT(`id`) AS `total` FROM `{$this->table}` WHERE `{$this->field}`='{$this->value}' ";
		$exe=mysql_query($sql);
		while($row=mysql_fetch_array($exe)){ echo  $row['total'];}
		}
		
			
		public function countRes2($table){
		$this->table=$table;
		
		$sql="SELECT COUNT(`id`) AS `total` FROM `{$this->table}`";
		$exe=mysql_query($sql);
		while($row=mysql_fetch_array($exe)){ echo  $row['total'];}
		}
	public function currentDate(){
		echo date('F j, Y g:i A');;
		}
	}
	
 
	
	





















?>