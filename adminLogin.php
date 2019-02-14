<?php
include_once 'dbcon.php';
?>
<?php
include 'adminLoginPhp';
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		admin login page
	</title>
	<link rel="stylesheet" type="text/css" href="adminLoginCss.css">

	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
</head>
<body>
	<center>
		<h1 id="adminHeading"> Admin Sign Up</h1>
	<form  action="adminLoginPhp.php" method="POST">
		<table>
			<tr>
				<td>
					<input type="text" name="uname" placeholder="Username" id="txtBox">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="pwd" placeholder="Password" id="txtBox">
				</td>
			</tr>
			<tr >
				<td >
					<input type="submit" value="Login" id="loginBtn">
				</td>
			</tr>
		</table>
	</form>
</center>
<center>
<div>
	<img src="adminImg.png" id="adminImg">
</div>
</center>

</body>
</html>