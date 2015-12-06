

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
		$to      = '$email';
$subject = 'Contact Made';
$message = 'I have recieved your email i will contact you soonest';
$headers = 'From: bensoh.mburu@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

			$msg = urlencode("An unexpected error occured. ");
			header("Location:contact.php?msg2=$msg1");

			}

else{

			$msg2 = urlencode("An unexpected error occured. ");
			header("Location:contact.php?msg2=$msg2");
}



?>
