<!DOCTYPE html>
<html>
<head>
	<title>
		Table with database
	</title>
	<style>
		table{
			border-collapse: collapse;
			width: 80%;
			color: black;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #282828;
			color: white;
		}
		tr:nth-child(even){
			background-color: lightgrey;
		}
	</style>
</head>
<body bgcolor="#FFFFFF"><center>
	<h1><ins> Contact details</ins></h1> </center>
	<center>
	<table border="1">
		<tr>
			<th> Name </th>
			<th> Email</th>
			<th>Gender</th>
			<th>Message</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","AssignmentDB");
		if(!$con)
		{
			die("Connection Failed:". mysqli_error($con));
		}

		$sql = "SELECT * FROM contacts";
		$res = mysqli_query($con,$sql);


			while($row=mysqli_fetch_assoc($res))
			{
			echo "<tr>";
    		echo "<td>".$row['Name']."</td>";
    		echo "<td>".$row['Email']."</td>";
    		echo "<td>".$row['Gender']."</td>";
    		echo "<td>".$row['Message']."</td>";
    		echo "<tr>";
    	}
			echo "</table>";
		
		mysqli_close($con);
		?>
	</table>

</center>
</body>
</html>