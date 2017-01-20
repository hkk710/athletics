<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sports_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$c1 = $_POST["pos1_chest"];
$t1 = $_POST["pos1_time"];

//echo "<br> ".$c1." ".$t1."<br>";

$c2 = $_POST["pos2_chest"];
$t2 = $_POST["pos2_time"];

$c3 = $_POST["pos3_chest"];
$t3 = $_POST["pos3_time"];


$pos1_updatequery = "UPDATE  `Heats_100M` SET  `time` = \"$t1\" WHERE  `chest` = $c1 ";
$pos2_updatequery = "UPDATE  `Heats_100M` SET  `time` = \"$t2\" WHERE  `chest` = $c2 ";
$pos3_updatequery = "UPDATE  `Heats_100M` SET  `time` = \"$t3\" WHERE  `chest` = $c3 ";

if (mysqli_query($conn, $pos1_updatequery)) {
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
mysqli_close($conn);

?> 
