<?php
	
session_start();
$sno=0;
$conn=mysqli_connect("localhost","kalotsavam","amrita_108","kalotsavam");

$t1 = $_POST["t1"]; //echo $v_name;
$t2 = $_POST["t2"];
	$sql = "SELECT * FROM `amritamayi`" ;
$result = mysqli_query($conn, $sql);

	
				if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) {
if($t1 == $row["A"])
{	$sno = 1;
	$_SESSION["user"]=$t1;
	$_SESSION["house"]="amritamayi";
}
}
}
	$sql = "SELECT * FROM `anandamayi`" ;
$result = mysqli_query($conn, $sql);
//echo "hello";
		
				if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) {
if($t1 == $row["A"] && $t2 == $row["B"])
{	$sno = 1;
	$_SESSION["user"]=$t1;
	$_SESSION["house"]="anandamayi";
}
}
}
	$sql = "SELECT * FROM `chinmayi`" ;
$result = mysqli_query($conn, $sql);
//echo "hello";
	
				if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) {
if($t1 == $row["A"])
{	$sno = 1;
	$_SESSION["user"]=$t1;
	$_SESSION["house"]="chinmayi";
}
}
}

	$sql = "SELECT * FROM `jythirmayi`" ;
$result = mysqli_query($conn, $sql);
//echo "hello";
	
				if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) {
if($t1 == $row["A"])
//if($t1 == $row["A"] && $t2 == $row["B"])
{	$sno = 1;
	$_SESSION["user"]=$t1;
	$_SESSION["house"]="jyothirmayi";
}
}
}
if($sno==0)
{
	?>
<script>
alert("Incorrect Informations");
</script>
<?php
echo "wrong";
header("Location:login.html");
}
else
{
header("Location:registration/trail.php");

}
mysqli_close($conn);
?>
