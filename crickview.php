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
        <form class="form-horizontal" action = "after_reg.php" method = "post" name="form" onsubmit="return check_form();">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                  <center> <div id="head-content">
                        <a href=index.html><img src="images/header.png"/></a>
                   </div></center>
               </div>
                <!-- Registration form
                 -->
                 <h2 class="text-center">

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

<table class="table table-striped table-bordered table-hover">

	<h2> CRICKET MALE </h2>
 <tr>
	 <th> S.no </th>
 			<th> Team Name </th>


                       <th>Roll no of Captain</th>
                       <th>Captain</th>

                    </tr>
		 	<?php
		 //	echo "hello";


	$sql = "SELECT * FROM CRICKET where `Gender`=\"M\" ORDER BY `Batch`";

$result = mysqli_query($conn, $sql);
//echo "hello";
		$sno = 1;
				if (mysqli_num_rows($result) > 0) {

					while($row = mysqli_fetch_assoc($result)) {
				   	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["TEAM"] . "</td>" .  "<td>". $row["Roll_no"] . "</td>"."<td>" . $row["Capt_name"] . "</td>" ;
				    	echo "</tr>";
				  //  echo "hello11";

				    }
				} else {
				    echo "0 results";
				}
			?>
			</table>



			<h2> CRICKET FEMALE </h2>
			<table class="table table-striped table-bordered table-hover">
 <tr>
	 <th> S.no </th>
 			<th> Team Name </th>


                       <th>Roll no of Captain</th>
                       <th>Captain</th>

                    </tr>
		 	<?php
		 //	echo "hello";


	$sql = "SELECT * FROM `cricket` where `Gender`=\"F\" ORDER BY `Batch`";

$result = mysqli_query($conn, $sql);
//echo "hello";
		$sno = 1;
				if (mysqli_num_rows($result) > 0) {

					while($row = mysqli_fetch_assoc($result)) {
				   	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td>" . $row["TEAM"] . "</td>" .  "</td>". "<td>". $row["Roll_no"] . "</td>"."<td>" . $row["Capt_name"] . "</td>" ;
				    	echo "</tr>";
				  //  echo "hello11";

				    }
				} else {
				    echo "0 results";
				}
			?>
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
