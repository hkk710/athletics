<?PHP
	//SCRIPT TO RETRIEVE DATA FROM DATABASE
	
	$servername = "brahma";
	$username = "athletics";
	$password = "amrita_108";
	$dbname = "athletics";
	
	echo "You're about to see the registration report!";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);



//-----------------------------------
$sql = "SELECT `REGISTRATION`.`roll` , `STUDENT`.`name` , `EVENT`.`event_name`
FROM `REGISTRATION` , `STUDENT` , `EVENT`
WHERE `EVENT`.`event_id` =101";
//$result = mysqli_query($conn, $selquery);
	//$result = mysqli_query($conn, $selquery);
$result = $conn->query($sql);	
	echo "done1";/*
	?>
	
	
	
	<table border = 1 style = "padding: 5px; align: center" > 
		<tr>
		
			<th> &nbsp&nbsp&nbsp Roll no &nbsp&nbsp&nbsp </th> 
			<th> &nbsp&nbsp&nbsp Name &nbsp&nbsp&nbsp </th> 
			<th> &nbsp&nbsp&nbsp Event &nbsp&nbsp&nbsp </th> 

		</tr>
		
					
	<?PHP
	echo "done2";
	while($row = mysqli_fetch_array($result))
	{ echo "done3";
		?> 
	
		
			<tr> 
			
			<td><div align="center"><?PHP echo $row['roll'] ?></div></td> 
			<td><div align="center"><?PHP echo $row['name'] ?> </div></td> 
			<td><div align="center"><?PHP echo $row['event_name'] ?> </div></td> 

		</tr>
		
	<?PHP
	}*/

	if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Event</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["roll"]."</td><td>".$row["name"]."</td><td>".$row["event_name"]."</td></tr>";
    }
    echo "</table>";
} else { 
    echo "0 results";
}
?>


