<?php
include_once 'dbcon.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
</head>
<body>

</body>
</html>
<?php
		$UName = $_POST['fname'];
		$Pass = $_POST['pass'];

		$sql = "SELECT * FROM users where Full_Name='$UName' && Password='$Pass'";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);

		if($count == 1)
		{
			echo "<script> location.href='home.php'; </script>";
        exit;
		}
		else
		{
			echo (" Oopz! User Not Exist");
		}

	mysqli_close($con)
	?>	