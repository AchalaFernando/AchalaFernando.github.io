<?php
include_once 'dbcon.php';
?>
<?php
include  'signUp.php';
?>
<?php
include 'userTable.php';
?>


<html>
<head>
	<title>
		interface
	</title>
	<link rel="stylesheet" type="text/css" href="interfaceCss.css">

	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>


	<meta name="keywords" content="html,css,javascript,php"/>

	


</head>
<body>
	<div id="interfaceTop">
		<center><h1 id="uniName">PURDUE UNIVERSITY</h1></center>
	 <a href="adminLogin.php"><button id="adminBtn"> Admin only </button></a>

		<a href="loginA.php"><button id="signInBtn"> SIGN IN</button></a>
	</div>
	
	<div id="left">
		
	</div>
	
	<form action="signUp.php" method="POST">
	<table width="50%" height="560px" id="signUpTable">
		
		<hr>
		<th>
			<h2 id="signUpSentence"><ins>Create a New Account</ins></h2>
		</th>
		<tr>
			<td><input type="text" name="fname" placeholder="Full Name" id="signUpTxtBox"></td>
		</tr>
		<tr>
			<td><input type="text" name="mail" placeholder="Email" id="signUpTxtBox"></td>	
		</tr>
		<tr>
			<td><input type="password" name="pass" placeholder="Password" id="signUpTxtBox"></td>	
		</tr>
		<tr>
			<td>
				 <p id="signUpSentence">By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. </p>
			</td>
		</tr>

		<tr>
			<td>
				<input type="submit" value="Sign Up" placeholder="Sign Up" id="signUpBtn">
			</td>
		</tr>
		
	</table>
</form>
	
	<div id="footer">
	
	<h4> copy Rights 2019</h4>		
	</div>

</body>
</html>