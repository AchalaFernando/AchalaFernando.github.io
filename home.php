<!DOCTYPE html>
<html>
<head>
	<title>
		home page
	</title>
	<link rel="stylesheet" type="text/css" href="homeCss.css">

	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>


	<meta name="keywords" content="html,css,javascript,php"/>

	<meta http-equiv="refresh" content="5">

<script>
			function bigImg(x) {
  			x.style.height = "35px";
  			x.style.width = "35px";
		}

			function normalImg(x) {
  			x.style.height = "40px";
  			x.style.width = "50px";
		}
	
</script>

</head>
<body>
	<div id="top"><center>
		<video autoplay muted loop poster id="topVideo">
			<source src="video.mp4" type="video/mp4">
		</video></center>
	</div>
	<div id="writeOverVideo">
		<h1> PURDUE UNIVERSITY </h1>
		
	</div>
	<div id="navBar">
		<a id="navBarLink" href="home.php">
			<h4 id="navBarItems"> Home </h4></a>
		<a id="navBarLink" href="gallery.php">
			<h4 id="navBarItems"> Gallery</h4></a>
		<a id="navBarLink" href="contactUs.php">
			<h4 id="navBarItems">Contact Us </h4> </a>

		<a  id="signOut" href="loginA.php"><button id="signOut1"><h3>Sign Out</h3></button></a>

	</div>
	<div id="vision">
		
				<center><h2>Why We Need To Study At University ?</h2></center>
		
		<p id="visionColor">Purdue University brings students like you from universities across America, on study abroad programs that excite and inspire your personal ideals, your global vision and your academic passions. 

		Explore new cultures; gain international internship experience; learn outside the classroom; become part of local communities - you have a wide choice of type of program and location. 

		You will challenge yourself and come through with new life-long friends and experiences that will stay with you forever. Your individual experience will change how you see the world and your place in it; learn everywhere. Are you ready? Use Program Finder to get started.</p>
	</div>

	<div id="right">
		<center><h3><u>STUDENTS</u></h3></center>
		<table cellpadding="10px">
			<center>
			<tr>
				<td><a href="slide1.php" target="_blank"><p id="slides">Holiday Schedule</p></a></td>
			</tr>
			<tr>
				<td><a href="slide2.php" target="_blank"><p id="slides">Contact an Ambassador</p></a></td>
			</tr>
			<tr>
				<td><a href="slide3.php" target="_blank"><p id="slides">Billing Payment And Financial Aid</p></a></td>
			</tr>
			<tr>
				<td><a href="slide4.php" target="_blank"><p id="slides">Scholarships</p></a></td>
			</tr>
			<tr>
				<td><a href="slide5.php" target="_blank"><p id="slides">Find Your Program</p></a></td>
			</tr>
			</center>
		</table >
		<center><h3><u>FACULTY & ADMINISTRATORS</u></h3></center>
		<table cellpadding="10px">
			<tr>
				<td><a href="slide5.php"><p id="slides">Work With Us</p></a></td>
			</tr>
			<tr>
				<td><a href="slide6.php"><p id="slides">Institutional Relations Team</p> </a></td>
			</tr>
			<tr>
				<td><a href="slide7.php"><p id="slides">Create A Custom Program</p></a></td>
			</tr>
		</table>
	</div>
	<div id="homeAni">
		<h2>
			
		</h2>
		
	</div>
	<div id="social">
		<a href="#top"> <h3 class="section" text="white"><center>Click Here To go Top</center></h3></a>
	</div>
	<div id="footer">
		<h4 id="Copyright">Copyright © 2019</h4>
		<center>
		<h4>
			Follow Us On
		</h4>
		<a href="http://www.facebook.com" target="_blank"><img id="followPics" src="fb.png" onmousemover="bigImg(this)" onmouseout="normalImg(this)"></a>
		<a href="http://www.twitter.com" target="_blank"><img id="followPics" src="twitter.png"  onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a>
		<a href="http://www.instagram.com" target="_blank"><img id="followPics" src="insta.png"  onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a>
		<a href="http://www.gmail.com" target="_blank"><img id="followPics" src="gmail.png"  onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a>
		<a href="http://www.linkedin.com" target="_blank"><img id="followPics" src="link.png"  onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a>
	</center>
	</div>


	

</body>
</html>