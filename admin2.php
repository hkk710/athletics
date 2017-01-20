<!doctype html>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sports_db";
*/

$servername = "localhost";
$username = "athletics";
$password = "amrita_108";
$dbname = "athletics";

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
<head>
    <title>Amrita sports 2017 registration</title>
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
        <form class="form-horizontal" action = "after_reg.php" method = "post" name="form" onSubmit="return check_form();">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                 <center>  <a class="pull-left" href="index.html"><img src="img/header.png" alt="Home" class="logo"> </center> &lArr; BACK HOME</a>
                   <div class="col-md-12" id="head-content">
                        <a href=index.html><img src="images/header.png"/></a>
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

                    </tr>
                    <tr>
                        <td>content</td>
                        <td>content</td>
                        <td>content</td>
                    </tr>
                </table>
                -->

<table class="table table-striped table-bordered table-hover">

	<h2> 100 m MALE </h2>
 <tr>
 			<th> S.No </th>
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll No</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll`,  `STUDENT`.`CHEST` , `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 101 OR `EVENT_2` = 101 OR `EVENT_3` = 101 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>" ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
				    }
				} else {
				    echo "0 results";
				}
			?>
			</table>

<table class="table table-striped table-bordered table-hover">

	<h2> 100 m FEMALE </h2>
 <tr>
 			<th> S.No </th>
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` , `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 201 OR `EVENT_2` = 201 OR `EVENT_3` = 201 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);


			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {

				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>"."<td>" . $row["CHEST"] . "</td>"  . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 102 OR `EVENT_2` = 102 OR `EVENT_3` = 102 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 202 OR `EVENT_2` = 202 OR `EVENT_3` = 202 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
				    }
				} else {
				    echo "0 results";
				}
			?>
			</table>
<table class="table table-striped table-bordered table-hover">

	<h2> 400 m MALE </h2>
 <tr>
 			<th> S.No </th>
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 103 OR `EVENT_2` = 103 OR `EVENT_3` = 103 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 203 OR `EVENT_2` = 203 OR `EVENT_3` = 203 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 104 OR `EVENT_2` = 104 OR `EVENT_3` = 104 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
				    }
				} else {
				    echo "0 results";
				}
			?>
			</table>

	<table class="table table-striped table-bordered table-hover">

	<h2> 800 m FEMALE </h2>
 <tr>
 			<th> S.No </th>
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 204 OR `EVENT_2` = 204 OR `EVENT_3` = 204 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 105 OR `EVENT_2` = 105 OR `EVENT_3` = 105 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 205 OR `EVENT_2` = 205 OR `EVENT_3` = 205 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 106 OR `EVENT_2` = 106 OR `EVENT_3` = 106 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 107 OR `EVENT_2` = 107 OR `EVENT_3` = 107 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 111 OR `EVENT_2` = 111 OR `EVENT_3` = 111 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 112 OR `EVENT_2` = 112 OR `EVENT_3` = 112 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 131 OR `EVENT_2` = 131 OR `EVENT_3` = 131 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 231 OR `EVENT_2` = 231 OR `EVENT_3` = 231 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 132 OR `EVENT_2` = 132 OR `EVENT_3` = 132 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 133 OR `EVENT_2` = 133 OR `EVENT_3` = 133 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
				    }
				} else {
				    echo "0 results";
				}
			?>
			</table>
			<table class="table table-striped table-bordered table-hover">

			<h2> Triple Jump FEMALE </h2>
		 <tr>
		 			<th> S.No </th>
		                       <th>Name</th>
		                       <th>Chest No:</th>
		                       <th>Roll no</th>

		                    </tr>
					<?php
					$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
		FROM  `STUDENT` WHERE `EVENT_1` = 208 OR `EVENT_2` = 208 OR `EVENT_3` = 208 order by `STUDENT`.`batch`";

		$result = mysqli_query($conn, $sql_m101);

					$sno = 1;
						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						 //   echo "<br> 100 m MALE <br>";
						    while($row = mysqli_fetch_assoc($result)) {
						    	echo "<tr>";
						    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
						    	echo "</tr>";

						    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 141 OR `EVENT_2` = 141 OR `EVENT_3` = 141 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 241 OR `EVENT_2` = 241 OR `EVENT_3` = 241 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 142 OR `EVENT_2` = 142 OR `EVENT_3` = 142 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>"."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 242 OR `EVENT_2` = 242 OR `EVENT_3` = 242 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 143 OR `EVENT_2` = 143 OR `EVENT_3` = 143 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
				    }
				} else {
				    echo "0 results";
				}
			?>
			</table>

	<table class="table table-striped table-bordered table-hover">

	<h2> Javelin Throw FEMALE </h2>
 <tr>
 			<th> S.No </th>
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 243 OR `EVENT_2` = 243 OR `EVENT_3` = 243 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 144 OR `EVENT_2` = 144 OR `EVENT_3` = 144 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
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
                       <th>Name</th>
                       <th>Chest No:</th>
                       <th>Roll no</th>

                    </tr>
			<?php
			$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`CHEST` ,  `STUDENT`.`batch`
FROM  `STUDENT` WHERE `EVENT_1` = 244 OR `EVENT_2` = 244 OR `EVENT_3` = 244 order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["name"] . "</td>" ."<td>" . $row["CHEST"] . "</td>" . "<td>". $row["roll"] . "</td>"  ;
				    	echo "</tr>";

				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $bth. "<br>";
				    }
				} else {
				    echo "0 results";
				}
			?>
			</table>
<!-- -->
                </div>
                </div>
            </div>
                        </div>
                </div>

            </fieldset>
        </form>
    </div>
</body>
