
<?php
/**********MYSQL Settings****************/
$host="localhost";
$databasename="personal_webpage";
$user="root";
$pass="master12!";
/**********MYSQL Settings****************/


$conn=mysql_connect($host,$user,$pass);

if($conn)
{
$db_selected = mysql_select_db($databasename, $conn);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
}
else
{
    die('Not connected : ' . mysql_error());
}
?>




<?php


function GetImageExtension($imagetype){
	if (empty($imagetype)) return false;
	switch ($imagetype) {
		case 'image/bmp': return '.bmp';
		case 'image/gif': return '.gif';
		case 'image/jpeg': return '.jpg';
		case 'image/png':return '.png';
	         default: return false;

	}
}
if(!empty($_FILES["uploadedimage"] ["name"])) {
	$file_name = $_FILES["uploadedimage"] ["name"];
	$temp_name = $_FILES["uploadedimage"] ["tmp_name"];
	$imagetype = $_FILES["uploadedimage"] ["type"];
	$ext = GetImageExtension($imagetype);
	$imagename =$_FILES["uploadedimage"]["name"];
	$target_path=$imagename;




	function clean($str){

	$str = @trim($str);
	if(get_magic_quotes_gpc()) {
		$str = stripslashes($str);

	}
	return mysql_real_escape_string($str);

			}
	$title = clean($_POST['title']);
	$technology = clean($_POST['technology']);
	$fork = clean($_POST['fork']);
	$git_link = clean($_POST['git_link']);
	$git_clone = clean($_POST['git_clone']);


	if(move_uploaded_file($temp_name, $target_path)){
		$upload="INSERT into portfolio (title, img, technology, fork, git_link, git_clone,hover)
		VALUES('$title',   '".$target_path."' ,  '$technology',  '$fork', '$git_link',  '$git_clone',  '".$target_path2."')";
		$result = @mysql_query($upload) or die("ERROR UPLOADING AT " .mysql_error());
	}
	if($result){
		$msg=urlencode("SUCCESS");
		header("Location:index.php?msg=$msg");
	}
	else{
		$msg = urlencode("ERROR");
		header("Location:index.php?msg=$msg");
	}

}
}
