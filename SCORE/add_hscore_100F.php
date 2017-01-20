<html>
	<head>
		<title> Score Handling </title>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sports_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}		

$chest_fetchquery = "SELECT `chest` FROM `Heats_100F` WHERE `team` = 1"
$fetch_res = mysqli_query($conn, $chest_fetchquery);


*/
?>
	</head>

	<body>
<?php
echo "<br> ".mysqli_num_rows($fetch_res);
?>
		<h1> 100 m FEMALE HEATS </h1>
		<form method = "post" action = "add_hscore_100F_handler_DP.php">
			<table>
				<tr>
					<th> POS </th>
					<th> Chest Number </th>
					<th> TIME (HH.MM.SS) </th>
				</tr>
				<tr>
					<td> Pos 1 </td>

					<td> 
<?php
					while( $row =  mysqli_fetch_assoc($result)) {
?>
						<select name = "pos1_chest">
							<option value = "hey!"> hey </option>
							<option value = "<?php /*echo $row['chest']; */ ?>">
						</select>
<?php
					} //closing brace of while()
?>					

					</td>
					
					<td> <input type="text" name = "pos1_time"> </td>
				</tr>
				<tr>
					<td> Pos 2 </td>
					<td> <input type="text" name = "pos2_chest"> </td>
					<td> <input type="text" name = "pos2_time"> </td>
				</tr>		
				<tr>
					<td> Pos 3 </td>
					<td> <input type="text" name = "pos3_chest"> </td>
					<td> <input type="text" name = "pos3_time"> </td>
				</tr>				
			</table>
			
			<input type =  "submit">
		</form>
	</body>
</html>
