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
$adminName= "Achala";
$adminPass = "12";

$sql = "SELECT Full_Name,Password FROM users WHERE Full_Name='$adminName' && Password ='$adminPass'";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);

		if($_POST['uname'] == 'Achala' && $_POST['pwd']=='12' || $_POST['uname'] == 'Eranga' && $_POST['pwd']=='34')
		{
			 echo "<script> location.href='dataTable.php'; </script>";
        exit;

		}
		else
		{
			echo (" You can't access to this page!");
		}


	?>
</body>
</html>
