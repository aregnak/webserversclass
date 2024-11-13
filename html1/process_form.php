<!DOCTYPE HTML>
<body>
	<?php
		$server = "localhost";
		$username = "php";
		$password = "pass01";
		$database = "berries";
		
		$new_name = $_POST["name"];
		$new_isb = $_POST["is_berry"];		

		$conn = mysqli_connect($server, $username, $password, $database);
	
		if (!$conn)
		{
			die("failed to connect: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO Berry (names, is_berry) VALUES ('$new_name', '$new_isb');";
	    $result = mysqli_query($conn, $sql);
		
		$sql2 = "select * from Berry;";
	    $result2 = mysqli_query($conn, $sql2);


	?>

	<div>
		<?php
		echo $result ? "success" : "failed";
        echo "<br><br>";
		foreach($result2 as $row)
		{	
	 		echo "id: {$row['id']} | {$row['names']} | {$row['is_berry']}\n<br>"; 
		}
		?>
	</div>
</body>
</html>
