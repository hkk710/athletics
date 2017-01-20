<!doctype html>

<<<<<<< HEAD
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

	$sql = "SELECT *
FROM `marchpast`
ORDER BY `SCORE` DESC";

	$result = mysqli_query($conn, $sql);
?>

<head>
    <title>Amrita sports 2015 registration</title>
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
                <h3 class="text-center" class="subhead"> MARCH PAST </h3>
                </div>
                <!--Name-->
                <div class="row" id="score">
                <div class="col-md-12">
                <div class="form-group">
                   <form method = "post" action = "add_hscore_100M_handler.php">
			<table class="table">
	<body>
				<th>Position</th>
				<th> DEPARTMENT </th>
				<th> SCORE </th>

<!--		<form method = "post" action = "add_hscore_100M_handler.php"> -->
			<?php
			
			$count = 1;

			if (mysqli_num_rows($result) != 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					if($row["DEPT"]==100)
					{
						$script="CSE";
					}
					if($row["DEPT"]== 200 )
					{
						$script="CSA";
					}
					if($row["DEPT"]== 300)
					{
						$script="MECH";
					}
					if($row["DEPT"]== 400)
					{
						$script="ECE";
					}

					if($row["DEPT"]== 500)
					{
						$script="EEE";
					}

					echo "<tr>";
					echo "<td>".$count++."</td>"."<td>".$script."</td>"."<td>".$row["SCORE"]."</td>";
					echo "</tr>";
					//echo "id: " . $row["chest"]. " - ".$row["score"]." " . $row["roll"]." " . $row["name"]." " . $row["batch"]. "<br>";
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
