<!doctype html>
<center>  <a class="pull-left" href="index.html"> </center> &lArr; BACK HOME</a>
<br>
<br>

<?php
	$servername = "localhost";
	$username = "athletics";
	$password = "amrita_108";
	$dbname = "athletics";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT `result_200F`.`chest` , `result_200F`.`id` ,`STUDENT`.`roll` ,`STUDENT`.`name` ,`STUDENT`.`batch`
FROM `result_200F` , `STUDENT` WHERE `result_200F`.`chest` = `STUDENT`.`CHEST`
ORDER BY `result_200F`.`id`
LIMIT 0 , 3";

	$result = mysqli_query($conn, $sql);
?>

<head>
    <title>Amrita sports 2017 registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../js/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="../js/bootstrap-theme.min.css">

     <!-- Custom styles -->
     <link rel="stylesheet" href="../css/reg_form.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
   <style>
     #score{
     margin: 0 auto;
     width:960px;
     }
    </style>
    <div class="form_wrap" id="reg_form">
        <form class="form-horizontal" action = "add_scoreHAM_F_handler.php" method = "post" name="form" onsubmit="return check_form();">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                       <img src="../images/header.png"/>
                   </div>
               </div>
                <!-- Registration form -->


                 <div id="legend">
                <h3 class="text-center" class="subhead"><b> 200m (FEMALE)</b> </h3>
                </div>
                <!--Name-->
                <div class="row" id="score">
                <div class="col-md-12">
                <div class="form-group">
                   <form method = "post" action = "add_hscore_100M_handler.php">
			<table class="table">
	<body>
				<th> POSITION </th>
				<th> CHEST NO </th>
				<th> NAME </th>
				<th> ROLL </th>
				<th> BATCH </th>
<!--		<form method = "post" action = "add_hscore_100M_handler.php"> -->
			<?php

			$count = 1;

			if (mysqli_num_rows($result) != 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$batch = $row['batch'];
					if($batch==1)
					$dep="ME";
					else if($batch==2)
					$dep="ECE";
					else if($batch==3)
					$dep="EEE";
					else if($batch==4)
					$dep="CSE";
					else if($batch==5)
					$dep="CSA";
					echo "<tr>";
					echo "<td>".$count++."</td>"." "."<td>".$row['chest']."</td>"." "."<td>".$row['name']."</td>"." "."<td>".$row['roll']."</td>"." "." "
					."<td>".$dep."</td>";
					echo "</tr>";
					//echo "id: " . $row["chest"]. " - ".$row["time"]." " . $row["roll"]." " . $row["name"]." " . $row["batch"]. "<br>";
				}
			} else {
				echo "0 results";
			}


			mysqli_close($conn);
			?>

			</table>


<!--		</form> -->
                </div>


                       </div>
                       </div>
                        </div>
                </div>

            </fieldset>
        </form>
    </div>
</body>
