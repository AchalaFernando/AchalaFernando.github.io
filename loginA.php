<?php
include_once 'dbcon.php';
?>
<?php
include 'login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="loginCss.css">
</head>
<body>
	
	<div id="right">
	<CENTER><h3>Get more things 
			done with Login Platform</h3></CENTER>		
	<center>
		<form action="login.php" method="POST">
	<table cellpadding="10px" width="50%" height="150px">
		<tr>
			
			<td><input type="text" name="fname" placeholder="User Name"></td>
		</tr>
		<tr>
			
			<td><input type="Password" name="pass" placeholder="Password"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Login"></td>
		</tr>
		<tr>
			
		</tr>

	</table>
	</center>
</form>
	<td><center><img src="uni1.jpg" width="90%" height="300px"></center></td>




	</div >


	<divid="left">
		
	</div>
</body>
</html>

