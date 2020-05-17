<?php
$user = 'root';
$pass ='';
$db = 'eventasia';

$con = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$email = $_POST['email'];


$sql = "INSERT INTO subscribe (EMAIL_ID) VALUES('$email')";

if(!mysqli_query($con,$sql))
{
	header("refresh:.01; url=pricing.html");
}
else
{
	header("refresh:.01; url=index.html");
}



?>