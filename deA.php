<?php
session_start();
if($_SESSION["adminlogged"]!=true){
  header("Location:./unset.php");
}
?>
<!doctype html>
<?php
$servername = "localhost";
$username = "athletics";
$password = "amrita_108";
$dbname = "athletics";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
<head>
    <title>Amrita sports 2015 registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="js/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="js/bootstrap-theme.min.css">
  	<style>
  		h2	{
  			text-align: center;
  		}
  	</style>
     <!-- Custom styles -->
     <link rel="stylesheet" href="css/reg_form.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <script src="js/reg_form.min.js"></script>
   <script>
       function check_form(){
        var email = $("#email").val();
        var phone = $("#student_phone").val();
        
        var ck_phone = /^[0]?[789]\d{9}$/
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
           
        if (!ck_phone.test(phone)){
          $("#student_phone").css("border","2px solid #6e1d2c");
            return false;
        }
     
        if (!ck_email.test(email)){
          $("#email").css("border","2px solid #6e1d2c");
            return false;
        }
        
        else{
         return true;
        }
       } 
        </script>
</head>

<body>
    <div class="form_wrap" id="reg_form">
     <!--   <form class="form-horizontal" action = "after_reg.php" method = "post" name="form" onsubmit="return check_form();"> -->
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                        <a href=/athletics/admin/1oopo54621mlkijufravmz3940qwtr.php><img src="images/header.png"/></a>
                   </div>
               </div>
                <!-- Registration form
                 -->
                 <h2 class="text-center">
                     Registrations
                 </h2>
                <div class="row">

                <div class="container">
                <div class="col-md-10">
                <!--
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Batch</th> 
                    </tr>
                    <tr>
                        <td>content</td>
                        <td>content</td>
                        <td>content</td>
                    </tr>
                </table>
                -->
          <form action = "delhandler.php" method = "post"  >
<table class="table table-striped table-bordered table-hover">

	<h2> 100 m MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch` ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 101) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				      $rrn = $row["roll"];
				    	echo "<tr>"; // \"$row[\"roll\"]\"             value = $rrn
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
			<!--
			<input type = "submit">
			</form>
			-->
	<!-- a php comment start belonged here -->		
	

<table class="table table-striped table-bordered table-hover">

	<h2> 100 m FEMALE </h2>
 <tr>
 		<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 201) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    $rrn = $row["roll"];
				    	echo "<tr>";
			//	    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
			echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>	

						
			<table class="table table-striped table-bordered table-hover">

	<h2> 200 m MALE </h2>
 <tr>
 			<th> S.No </th>
			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 102) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				      $rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";
echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>	
			
	<table class="table table-striped table-bordered table-hover">

	<h2> 200 m FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 202) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
				    	//echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>		
<!--  -->
			<table class="table table-striped table-bordered table-hover">

	<h2> 400 m MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 103) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>	
			
	<table class="table table-striped table-bordered table-hover">

	<h2> 400 m FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 203) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
				    	//echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>

			<table class="table table-striped table-bordered table-hover">

	<h2> 800 m MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 104) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>			

				
<table class="table table-striped table-bordered table-hover">


			
<!--  -->
			
	<table class="table table-striped table-bordered table-hover">

	<h2> 800 m FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 204) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
<table class="table table-striped table-bordered table-hover">

	<h2> 1500 m MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 105) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>	
			
	<table class="table table-striped table-bordered table-hover">

	<h2> 1500 m FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 205) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
			
<table class="table table-striped table-bordered table-hover">

	<h2> 5000 m MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 106) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>	
			
	<table class="table table-striped table-bordered table-hover">

	<h2> 3000 m FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 208) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
<table class="table table-striped table-bordered table-hover">

	<h2> 10000 m MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 107) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
					$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>	
			
	<table class="table table-striped table-bordered table-hover">

	<h2> 110 m Hurdles MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 111) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	<table class="table table-striped table-bordered table-hover">

	<h2> 110 m Hurdles FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 213) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	<table class="table table-striped table-bordered table-hover">

	<h2> 400 m Hurdles MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 112) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>

	<table class="table table-striped table-bordered table-hover">

	<h2> Long Jump MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 131) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	<table class="table table-striped table-bordered table-hover">

	<h2> Long Jump FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 231) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
		<!-- -->
	<table class="table table-striped table-bordered table-hover">

	<h2> High Jump MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 132) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	<table class="table table-striped table-bordered table-hover">

	<h2> Triple Jump MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 133) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	<table class="table table-striped table-bordered table-hover">

	<h2> Shot Put MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 141) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	<table class="table table-striped table-bordered table-hover">

	<h2> Shot Put FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 241) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
<!-- -->	
	<table class="table table-striped table-bordered table-hover">

	<h2> Discuss Throw MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 142) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
 					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	
	<table class="table table-striped table-bordered table-hover">

	<h2> Discuss Throw FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 242) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
<!-- -->		
	<table class="table table-striped table-bordered table-hover">

	<h2> Javelin Throw MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 143) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	
	<table class="table table-striped table-bordered table-hover">

	<h2> Javlin Throw FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 243) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
<!-- -->
	<table class="table table-striped table-bordered table-hover">

	<h2> Hammer Throw MALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 144) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>
	
	<table class="table table-striped table-bordered table-hover">

	<h2> Hammer Throw FEMALE </h2>
 <tr>
 			<th> S.No </th>
 			<th> Sel </th>
                       <th>Name</th>
                       <th>Roll no</th>
                       <th>Phone</th>
                       <th>Batch</th> 
                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch`  ,  `STUDENT`.`phone`
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 244) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	$rrn = $row["roll"];
				    	echo "<tr>";
//				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
					echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "</td>" . "<td>". $row["phone"] . "</td>" ."<td>". $row["batch"] . "</td>";				    	
					echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>



<!-- a php comment start belonged here -->	
			  <input type = "submit" value = "Delete Selected Record">
                </div>
                
                </div>
                 
                </div>
                        </div>
                </div>

            </fieldset>
           
		<!--	</form> -->
        </form>
    </div>
</body>
