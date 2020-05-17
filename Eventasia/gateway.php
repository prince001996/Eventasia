<?php
$eid=$_POST['eid'];
$nt=$_POST['nt'];
$uid=$_POST['uid'];
?>
<html>
<body>
<form name="form2" id="form2" method ="post" action="tickets.php" class="subscribe-form">
				<input  type = "hidden" name="eid" id="eid" value="<?php echo $eid?>">
	<input type="hidden" name="nt" id="nt" value="<?php echo $nt ?>">
	 <input  type = "hidden" name="uid" id="uid" value="<?php echo $uid?>">
    </form>

<script type="text/javascript">
document.getElementById("form2").submit(); // Here formid is the id of your form
</script>
</body>
</html>	

this is just a gateway page