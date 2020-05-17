<?php
$email=$_POST['email'];
$pas=$_POST['pass'];
$eid=$_POST['eid'];
$nt=$_POST['nt'];

$link = mysqli_connect("localhost", "root", "", "eventasia");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT UID,FNAME,LNAME,PASSWORD FROM  USERS WHERE EMAIL='".$email."'";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        if($row = mysqli_fetch_array($result)){
                $uid = $row['UID'];
                $fname = $row['FNAME'];
                $lname = $row['LNAME'];
				$pass = $row['PASSWORD'];
        }
        // Free result set
        mysqli_free_result($result);
			if($pas==$pass)
			{
?>
<html>
<body>
<form name="formid" id="formid"action="payment.php" method="post">
 <input  type = "hidden" name="eid" id="eid" value="<?php echo $eid?>">
	<input type="hidden" name="nt" id="nt" value="<?php echo $nt ?>">
	 <input  type = "hidden" name="uid" id="uid" value="<?php echo $uid?>">
</form>
<script type="text/javascript">
document.getElementById("formid").submit(); // Here formid is the id of your form
</script>
</body>
</html>
	<?php			header("refresh:.01; url=payment.php");
			}
			else
			{
?>
<script>
alert("Email/Password is wrong");
</script>


<?php			
				header("refresh:.01; url=signIn.php");
			}
			
		
    } 
	else
		{
?>
<script>
alert("You are not signed-up with us. Please sign-up to be able to book tickets");
</script>
<?php
			header("refresh:.01; url=signUp.html");
			

		}
		
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
