<?php

	$servername = "localhost";
	$username = "athletics";
	$password = "amrita_108";
	$dbname = "athletics";
$score=0;
	// Create connection
	//$conn = mysqli_connect($servername, $username, $password, $dbname);
	$conn = mysqli_connect($servername, $username, $password, $dbname);	
	
		echo "done1";
	
	
	$chest1 = $_POST["chest_no1"];
	$chest2 = $_POST["chest_no2"];
	$chest3 = $_POST["chest_no3"];

	
	$dist1 = $_POST["time_no1"];
	$dist2 = $_POST["time_no2"];
	$dist3 = $_POST["time_no3"];

	
	$insert1_query = "INSERT INTO `athletics`.`QUAL_200M`(`CHEST`, `TIME`) VALUES ('$chest1','$dist1')";
	$insert2_query = "INSERT INTO `athletics`.`QUAL_200M`(`CHEST`, `TIME`) VALUES ('$chest2','$dist2')";
	$insert3_query = "INSERT INTO `athletics`.`QUAL_200M`(`CHEST`, `TIME`) VALUES ('$chest3','$dist3')";

	$insert1 = mysqli_query($conn, $insert1_query);
	$insert2 = mysqli_query($conn, $insert2_query);
	$insert3 = mysqli_query($conn, $insert3_query);



	






	mysqli_close($conn);
		header("Location:../RESULTS/");
	
?>
