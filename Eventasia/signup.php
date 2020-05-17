<?php
$user = 'root';
$pass ='';
$db = 'eventasia';

$con = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$con1 = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$sql = "INSERT INTO USERS (FNAME, LNAME, EMAIL, PASSWORD, GENDER) VALUES('$fname','$lname','$email','$password','$gender')";
$sql1 = "INSERT INTO subscribe (EMAIL_ID) VALUES('$email')";
if(!mysqli_query($con,$sql))
{
	header("refresh:.01; url=signup.html");
	
}
else
{
	if(!mysqli_query($con1,$sql1))
	{
		header("refresh:.01; url=signup.html");
	}
	else
	{
	header("refresh:.01; url=index.html");
	}
}



?>