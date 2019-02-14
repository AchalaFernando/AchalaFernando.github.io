<?php
include_once 'dbcon.php';
?>
<html>
<head>
	<title>
		web lab jan 14
	</title>
</head>
<body> <center> 
<h1>
	Delete Data
</h1>
<form name="" action="delete.php" method="POST">
	<table>
		<tr>
			<td>
				Full Name
			</td>
			<td>
				<input type="text" name="txt1">
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="text" name="txt2">
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" name="pword">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Delete">
			</td>
		</tr>
	</table>

</form>
</center>
</body>
</html>