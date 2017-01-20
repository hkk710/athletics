<?php
$con=mysqli_connect("localhost","athletics","amrita_108","athletics");
//$con=mysqli_connect("localhost","dbusername","db_password","db_name");

$t=$_POST['t1'];
$t1=$_POST['t2'];
$t2=$_POST['t3'];

$query1="UPDATE `cricket_score` SET `Matchno`='$t',`MATCH`='$t1',`RESULT`='$t2' WHERE `Matchno` = '$t';";


mysqli_query($con,$query1);
mysqli_close($con);
header("Location:./scoreboard.php");
?>
