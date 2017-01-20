<?php
	

$conn=mysqli_connect("localhost","kalotsavam","amrita_108","kalotsavam");

$v_name = $_POST["event_name"]; //echo $v_name;
	$v_roll = $_POST["min_participants"]; //echo $v_roll;
	$v_batch = $_POST["Max_Participants"]; //echo $v_batch;
	$v_gender = $_POST["student_gender"]; //echo $v_gender;

$sql = "INSERT INTO `group_events` (`Name`, `min`, `max`, `sex`) VALUES ('$v_name', '$v_roll', '$v_batch ', '$v_gender ');";

if (mysqli_query($conn, $sql)) {
    echo "Created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>