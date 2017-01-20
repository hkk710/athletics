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

$c1 = $_POST["pos1_chest"];
$t1 = $_POST["pos1_score"];

//echo "<br> ".$c1." ".$t1."<br>";

$c2 = $_POST["pos2_chest"];
$t2 = $_POST["pos2_time"];

$c3 = $_POST["pos3_chest"];
$t3 = $_POST["pos3_time"];

$c4 = $_POST["pos4_chest"];
$t4 = $_POST["pos4_time"];


$c5 = $_POST["pos5_chest"];
$t5 = $_POST["pos5_time"];


$pos1_updatequery = "UPDATE `result_800M` SET `time` = \"$t1\"  WHERE `chest` = $c1 ";
$pos2_updatequery = "UPDATE `result_800M` SET `time` = \"$t2\"  WHERE `chest` = $c2 ";
$pos3_updatequery = "UPDATE `result_800M` SET `time` = \"$t3\"  WHERE `chest` = $c3 ";
$pos5_updatequery = "UPDATE `result_800M` SET `time` = \"$t4\"  WHERE `chest` = $c4 ";
$pos4_updatequery = "UPDATE `result_800M` SET `time` = \"$t5\"  WHERE `chest` = $c5 ";

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

if (mysqli_query($conn, $pos4_updatequery)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $pos5_updatequery)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?> 
