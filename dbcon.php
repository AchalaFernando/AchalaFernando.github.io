<?php
		
		$server = "localhost";
		$username ="root";
		$password = "";
		$db = "AssignmentDB";

		$con = mysqli_connect($server,$username,$password,$db);

		if(!$con)
		{
			die("Connection error " .mysqli_connect_error());
		}
		
?>