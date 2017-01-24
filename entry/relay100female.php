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

	$insert1_query = "INSERT INTO `athletics`.`result_relay100F`(`chest`, `time`) VALUES ('$chest1','$dist1')";
	$insert2_query = "INSERT INTO `athletics`.`result_relay100F`(`chest`, `time`) VALUES ('$chest2','$dist2')";
	$insert3_query = "INSERT INTO `athletics`.`result_relay100F`(`chest`, `time`) VALUES ('$chest3','$dist3')";

	$insert1 = mysqli_query($conn, $insert1_query);
	$insert2 = mysqli_query($conn, $insert2_query);
	$insert3 = mysqli_query($conn, $insert3_query);

	$score1 = "SELECT SCORE FROM student WHERE CHEST = $chest1";
	$result1 = mysqli_query($conn, $score1);

	while($row = mysqli_fetch_assoc($result1))
	{

		$score1 = $row["SCORE"];
		$score1 = $score1+10;
	}
	$score2 = "SELECT SCORE FROM student WHERE CHEST = $chest2";
	$result2 = mysqli_query($conn, $score2);
	while($row = mysqli_fetch_assoc($result2))
	{

		$score2 = $row["SCORE"];
		$score2 = $score2+6;
	}
	$score3 = "SELECT SCORE FROM student WHERE CHEST = $chest3";
	$result3 = mysqli_query($conn, $score3);
	while($row = mysqli_fetch_assoc($result3))
	{

		$score3 = $row["SCORE"];
		$score3 = $score3+3;
	}

	$update1_query = "UPDATE `athletics`.`student` SET `SCORE` = $score1 WHERE `CHEST` = $chest1";
	$qry=mysqli_query($conn, $update1_query);
$update2_query = "UPDATE `athletics`.`student` SET `SCORE` = $score2 WHERE `CHEST` = $chest2";
	$qry=mysqli_query($conn, $update2_query);
$update3_query = "UPDATE `athletics`.`student` SET `SCORE` = $score3 WHERE `CHEST` = $chest3";
	$qry=mysqli_query($conn, $update3_query);


	mysqli_close($conn);
		header("Location:../RESULTS/");

?>
