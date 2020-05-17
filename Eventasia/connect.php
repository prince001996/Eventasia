<?php
$user = 'root';
$pass ='';
$db = 'eventasia';

$con = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];



?>