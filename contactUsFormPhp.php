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

		$UName = $_POST['txt1'];
		$Mail = $_POST['txt2'];
		$Gender = $_POST['gender'];
		$Message = $_POST['txt3'];


		$sql = "INSERT INTO contacts VALUES ('$UName','$Mail','$Gender','$Message')";

		if (mysqli_query($con,$sql))
		{
			/*header("Location: home.php"); 
    		exit; */
    		echo "Your message sent successfully";

		}
		else
		{
		// echo "Error: " . $sql . "<br>" .mysqli_error($con);
			
		}


		$db=mysqli_select_db($con,"AssignmentDB");

		$rs=mysqli_query($con,$sql);
		mysqli_close($con);


	?>

</body>
</html>