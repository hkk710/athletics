<?php
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

$rr = $_POST["seldel"];

echo $rr;
// sql to delete a record
$sql = "DELETE FROM `athletics`.`cricket` WHERE `cricket`.`Roll_no` LIKE  \"$rr\"";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location:./admin");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
