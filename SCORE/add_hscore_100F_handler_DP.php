<?php
/*
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sports_db";
*/

$servername = "localhost";
$username = "athletics";
$password = "amrita_108";
$dbname = "athletics";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
	echo "Connection established";	
}


$dept1 = 0; $dept2 = 0; $dept3 = 0;
$score1 = 0; $score2 = 0; $score3 = 0; 

$c1 = $_POST["pos1_chest"];
$t1 = $_POST["pos1_time"];

//echo "<br> ".$c1." ".$t1."<br>";

$c2 = $_POST["pos2_chest"];
$t2 = $_POST["pos2_time"];

$c3 = $_POST["pos3_chest"];
$t3 = $_POST["pos3_time"];


$pos1_updatequery = "UPDATE  `Heats_100F` SET  `time` = \"$t1\" WHERE  `chest` = $c1";
$pos2_updatequery = "UPDATE  `Heats_100F` SET  `time` = \"$t2\" WHERE  `chest` = $c2";
$pos3_updatequery = "UPDATE  `Heats_100F` SET  `time` = \"$t3\" WHERE  `chest` = $c3";

$getDeptQuery1 = "SELECT `batch` FROM `STUDENT` WHERE `CHEST` = $C1";
$getDeptQuery2 = "SELECT `batch` FROM `STUDENT` WHERE `CHEST` = $C2";
$getDeptQuery3 = "SELECT `batch` FROM `STUDENT` WHERE `CHEST` = $C3"; 

	if (mysqli_query($conn, $pos1_updatequery)) {
		$getDeptExecute = mysqli_query($conn, $getDeptQuery1);
		echo "<br> A: ".$getDeptExecute;
		
		$dept1 = mysqli_fetch_field($getDeptExecute);

		if( true )	{
	/*	if( $dept1["batch"] == "u_cse" or 
			$dept1["batch"] == "p_cyb" or 
			$dept1["batch"] == "p_elr" or 
			$dept1["batch"] == "p_wna" )	 { 
	*/		
			$getScoreQuery1 = "SELECT `SCORE` FROM `deptscore` WHERE `DEPT` LIKE '$dept1' ";
					
			$getScoreExecute = mysqli_query($conn, $getScoreQuery1);
			$res =  mysqli_fetch_assoc($getScoreExecute);
			
			$score1 = $res["SCORE"] + 10;
			
			$scoreUpdateQuery = "UPDATE `deptscore` SET `SCORE` = $score1 WHERE `DEPT` LIKE '$dept1['batch'] ";
			
			if( mysqli_query($conn, $scoreUpdateQuery) )	{
				echo "Department score updated!";
			}
			else {
				echo "Could not update department score!";
			}
		}
		else {
			echo "NOT CSE";
		}
			
		echo "New record created successfully";
		
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


	if (mysqli_query($conn, $pos2_updatequery)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


	if (mysqli_query($conn, $pos3_updatequery)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


echo "<br> Dept: ".$dept1["batch"];
echo "<br> Score: ".$score1;

mysqli_close($conn);
*/
?> 
