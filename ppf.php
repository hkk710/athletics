<?php
$con=mysqli_connect("localhost","athletics","amrita_108","athletics");
//$con=mysqli_connect("localhost","dbusername","db_password","db_name");

$t=$_POST['t1'];
$t1=$_POST['t2'];
$t2=$_POST['t3'];

$query1="INSERT INTO `athletics`.`cricket_score_f` (`Matchno`, `MATCH`, `RESULT`) VALUES ('$t', '$t1', '$t2');";


mysqli_query($con,$query1);
mysqli_close($con);
header("Location:./scoreboard.html");
?>
