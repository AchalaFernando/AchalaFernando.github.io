<?php
include_once 'dbcon.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Contact us form
	</title>
	<link rel="stylesheet" type="text/css" href="contactUsForm.css">

	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
</head>
<body><center>
	<div id="navBar">
		<a id="navBarLink" href="home.php">
			<h4 id="navBarItems"> Home </h4></a>
		<a id="navBarLink" href="gallery.php">
			<h4 id="navBarItems"> Gallery</h4></a>
		<a id="navBarLink" href="contactUs.php">
			<h4 id="navBarItems">Contact Us </h4> </a>
	</div></center>
	<br>
	<center>
	<div id="contactForm">
	<form action="contactUsFormPhp.php" method="POST">
		<br>
		<h1> Contact Us
		</h1>
		<table>
			<tr>
				<td>
					<input type="text" name="txt1" placeholder="Your Name" id="contactTxtBox">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="txt2" placeholder="Your E-mail Address" id="contactTxtBox">
				</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="gender" value="Male"> Male
				
					<input type="radio" name="gender" value="female"> Female
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="txt3" placeholder="Your Message Or Question" id="contactTxtBox">
				</td>	
			</tr>
			<tr>
				<td><center>
				 <input type="submit" value="Send" id="contactUsSendBtn">
				</center></td>
			</tr>
		</table>
	</form></center>
	</div>

</body>
</html>