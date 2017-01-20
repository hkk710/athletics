<?php
include("../../connection.php");
$content = $_GET["c1"];
$clr = $_GET["c2"];
$styl = $_GET["c3"];
$update1_query = "UPDATE `event_list` SET `text` = '$content' WHERE `page` = 1";
$update1_query1 = "UPDATE `event_list` SET `color` = '$clr' WHERE `page` = 1";
$update1_query2 = "UPDATE `event_list` SET `font` = '$styl' WHERE `page` = 1";
$qry=mysqli_query($conn, $update1_query);
$qry=mysqli_query($conn, $update1_query1);
$qry=mysqli_query($conn, $update1_query2);
header("Location:../../index.php");
?>
