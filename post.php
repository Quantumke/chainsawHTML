

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


	//Sanitize the POST values
	$name=($_POST['name']);
    $email=($_POST['email']);
	$message=($_POST['message']);



 	$query_upload="INSERT into contacts (name,email,message) VALUES

        ('$name','$email','$message')";
		$result = @mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());





	if($result) {
			$msg = urlencode("Succesfully sent. ");
			header("Location:contact.php?msg=$msg");
			}

else{

			$msg2 = urlencode("An unexpected error occured. ");
			header("Location:contact.php?msg2=$msg2");
}



?>
