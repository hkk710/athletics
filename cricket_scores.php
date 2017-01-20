<?php 
//echo "asdasd";
?>

<!doctype html>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sports_db";
*/
echo "hello";
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

$sql =" SELECT *
FROM `cricket_score`";
?>
<head>
    <title>Amrita sports 2015 cricket scores </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="js/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="js/bootstrap-theme.min.css">
  	<style>
  		h2	{
  			text-align: center;
  		}
  		.match_data	{
			text-align: center;
		}
  	</style>
  	
     <!-- Custom styles -->
     <link rel="stylesheet" href="css/reg_form.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <script src="js/reg_form.min.js"></script>
</head>

<body>
    <div class="form_wrap" id="reg_form">
        <form class="form-horizontal" action = "after_reg.php" method = "post" name="form" onsubmit="return check_form();">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                        <a href=index.html><img src="images/header.png"/></a>
                   </div>
               </div>
                <!-- Registration form
                 -->
                 <h2 class="text-center">
                    
                 </h2>
                <div class="row">

                <div class="container">
                <div class="col-md-10">
                <h1 class="text-center"></h1>
<table class="table table-striped table-bordered table-hover">
                        <tr>r
                   <th>Match no </th>
                   <th class = 'match_data'>Match</th>
                   <th>Result</th>
                 </tr>
              <tr>
     		<?php 
                 $result = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
				    	echo "<td>" . $row["Matchno"]. "</td>"."<td class = 'match_data'>" . $row["MATCH"] . "</td>" .  "<td>". $row["RESULT"] . "</td>";
						echo "</tr>";
				  //  echo "hello11";
				   
				    }
				} else {
				    echo "0 results";
				}
               ?>
 	</tr>
		</table>
			

                </div>
                </div>
            </div>
                        </div>
                </div>
                
            </fieldset>
        </form>
    </div>
</body>

