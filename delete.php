<?php
include_once 'dbcon.php'

?>
<html>
<head></head>

<body>
	<?php
	$id2 =$_POST['txt1'];
	$del = "DELETE FROM users WHERE Full_Name='$id2'";

	if(mysqli_query($con,$del))
		{
			echo "You have deactivated your account successfully <br>";
		}
	else
		{
			echo "Error:" .$del> "<br>".mysqli_error($con);
		}
	mysqli_close($con);
	?>
</body>
</html>
