<?php
	

$conn=mysqli_connect("localhost","kalotsavam","amrita_108","kalotsavam");

session_start();
$t1 = $_SESSION["user"];//echo $v_name;
$t2 = $_SESSION["house"];
	$sql = "SELECT * FROM `$t2` where `A` LIKE '$t1'" ;
$result = mysqli_query($conn, $sql);

	
				if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) 

{	?><br><br><center><h1>On Stage Events</h1></center>
	<center><table border="1">
	<?php echo "<tr><th>Event 1</th><td>".$row["e1"]."</td><tr>";
	echo "<tr><th>Event 2</th><td>".$row["e2"]."</td><tr>";
echo "<tr><th>Event 3</th><td>".$row["e3"]."</td><tr>";
echo "<tr><th>Event 4</th><td>".$row["e4"]."</td><tr>"; ?>
		</table></center>
<br><br><br>
	<center><h1>Off Stage Events</h1></center>
	<center><table border="1">
<?php 	echo "<tr><th>Event 1</th><td>".$row["e5"]."</td><tr>";
	echo "<tr><th>Event 2</th><td>".$row["e6"]."</td><tr>";
echo "<tr><th>Event 3</th><td>".$row["e7"]."</td><tr>";
echo "<tr><th>Event 4</th><td>".$row["e8"]."</td><tr>"; ?>
		</table></center>	<?php	    
}
}


?>

