<!DOCTYPE HTML>
<body>
	<?php
		$server = "localhost";
		$username = "php";
		$password = "pass01";
		$database = "berries";

		$res = $_GET["name_search"];
		
		$conn = mysqli_connect($server, $username, $password, $database);
	
		if (!$conn)
		{
			die("failed to connect: " . mysqli_connect_error());
		}

		$sql = "select * from Berry where names='$res';";
	    $result = mysqli_query($conn, $sql);

	?>

	<div>
		<?php
		foreach($result as $row)
		{	
	 		echo "id: {$row['id']} | {$row['names']} | {$row['is_berry']}\n<br>"; 
		}
		?>
	</div>
</body>
</html>

