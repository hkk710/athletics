
<html>
<head><title>Kalotsavam</title></head>
<body>
<?php
	
session_start();
//$sno=0;
$conn=mysqli_connect("localhost","kalotsavam","amrita_108","kalotsavam");

$t1 = $_SESSION["user"];//echo $v_name;
$t2 = $_SESSION["house"];
	$sql = "SELECT * FROM `$t2` where `A` LIKE '$t1'" ;
$result = mysqli_query($conn, $sql);

	
				if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) 

{
?>
<h1>Welcome <?php
echo $row["B"] ; ?> of <?php echo $t2; 
}
}
?>
</body>
</html>