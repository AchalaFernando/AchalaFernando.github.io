<?php
include_once 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		$UName = $_POST['fname'];
		$Mail = $_POST['mail'];
		$Pass = $_POST['pass'];

		$sql = "INSERT INTO users VALUES ('$UName','$Mail','$Pass')";

		if (mysqli_query($con,$sql))
		{
			/*header("Location: home.php"); 
    		exit; */
    		echo "New record entered successfully";

		}
		else
		{
		// echo "Error: " . $sql . "<br>" .mysqli_error($con);
			ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
		}


		$db=mysqli_select_db($con,"AssignmentDB");

		$rs=mysqli_query($con,$sql);
		mysqli_close($con);


	?>

</body>
</html>