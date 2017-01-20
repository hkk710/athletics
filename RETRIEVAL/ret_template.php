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

$sql = "SELECT `result_discuss_f`.`chest` , `score` , `roll` , `name` , `batch`
FROM `result_discuss_f` , `STUDENT` WHERE `result_discuss_f`.`chest` = `STUDENT`.`CHEST`
ORDER BY `result_discuss_f`.`score` DESC
LIMIT 0 , 5";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["chest"]. " - ".$row["score"]." " . $row["roll"]." " . $row["name"]." " . $row["batch"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
