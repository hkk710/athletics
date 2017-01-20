<?php
	

$conn=mysqli_connect("localhost","kalotsavam","amrita_108","kalotsavam");

session_start();
$e1="Not Registered";
$e2="Not Registered";
$e3="Not Registered";
$e4="Not Registered";
$e5="Not Registered";
$e6="Not Registered";
$e7="Not Registered";
$e8="Not Registered";

$count=0;
$count1=0;
$e1 = $_POST["event1"]; //echo $v_name;
$e2 = $_POST["event2"]; 
$e3 = $_POST["event3"]; 
$e4 = $_POST["event4"]; 
$e5 = $_POST["event11"]; 
$e6 = $_POST["event12"]; 
$e7 = $_POST["event13"]; 
$e8 = $_POST["event14"]; 

echo $e2;
$t1 = $_SESSION["user"];//echo $v_name;
$t2 = $_SESSION["house"];
	$sql = "SELECT * FROM `$t2` where `A` LIKE '$t1'" ;
$result = mysqli_query($conn, $sql);

	
				if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) 

{
	$u1= $row["A"];
//echo $u1;
	$u2= $row["B"];
//echo $u2;
}
}

if($e1!=null)
{
$count++;
$sql1 = "INSERT INTO `$e1` (`rollno`, `name`, `group`) VALUES ('$u1', '$u2', '$t2')";
mysqli_query($conn, $sql1);

}
if($e2!=null)
{
$count++;
$sql1 = "INSERT INTO `$e2` (`rollno`, `name`, `group`) VALUES ('$u1', '$u2', '$t2')";
mysqli_query($conn, $sql1);

}
if($e3!=null)
{
$count++;
$sql1 = "INSERT INTO `$e3` (`rollno`, `name`, `group`) VALUES ('$u1', '$u2', '$t2')";
mysqli_query($conn, $sql1);

}
if($e4!=null)
{
$count++;
$sql1 = "INSERT INTO `$e4` (`rollno`, `name`, `group`) VALUES ('$u1', '$u2', '$t2')";
mysqli_query($conn, $sql1);

}
if($e5!=null)
{
$count1++;
$sql1 = "INSERT INTO `$e5` (`rollno`, `name`, `group`) VALUES ('$u1', '$u2', '$t2')";
mysqli_query($conn, $sql1);

}
if($e6!=null)
{
$count1++;
$sql1 = "INSERT INTO `$e6` (`rollno`, `name`, `group`) VALUES ('$u1', '$u2', '$t2')";
mysqli_query($conn, $sql1);

}
if($e7!=null)
{
$count1++;
$sql1 = "INSERT INTO `$e7` (`rollno`, `name`, `group`) VALUES ('$u1', '$u2', '$t2')";
mysqli_query($conn, $sql1);

}
if($e8!=null)
{
$count1++;
$sql1 = "INSERT INTO `$e8` (`rollno`, `name`, `group`) VALUES ('$u1', '$u2', '$t2')";
mysqli_query($conn, $sql1);

}

$sql2="UPDATE `$t2` SET `soloon`=$count,`solooff`=$count1,`e1`='$e1',`e2`='$e2',`e3`='$e3',`e4`='$e4',`e5`='$e5',`e6`='$e6',`e7`='$e7',`e8`='$e8' WHERE `A` like '$u1'";
mysqli_query($conn, $sql2);
echo "123";
?>



