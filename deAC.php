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
                       <th>Events</th> 
                    </tr>
                    <tr>
                        <td>content</td>
                        <td>content</td>
                        <td>content</td>
                    </tr>
                </table>
                -->
          <form action = "delhandlerC.php" method = "post"  >
<table class="table table-striped table-bordered table-hover">

	<h2> CRICKET MALE </h2>
 <tr>
	 <th> S.no </th>
	 <th>To be removed</th>
 			<th> Team Name </th>
                       <th>Contact</th>
                       
                       <th>Roll no of Captain</th>
                       <th>Captain</th> 
                     
                    </tr>
			<?php
			$sql_m101 = "SELECT * FROM `cricket` where `Gender`=\"M\" ORDER BY `Batch`";

$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				      $rrn = $row["Roll_no"];
				    		echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["TEAM"] . "</td>"."<td>" . $row["contact"] . "</td>" .  "<td>". $row["Roll_no"] . "</td>"."<td>" . $row["Capt_name"] . "</td>" ; 
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
	
<h2> CRICKET FEMALE </h2>
<table class="table table-striped table-bordered table-hover">

	 <tr>
	 <th> S.no </th>
	 <th>To be removed</th>
 			<th> Team Name </th>
                       
                       <th>Contact</th>
                       <th>Roll no of Captain</th>
                       <th>Captain</th> 
                     
                    </tr>
			<?php
			$sql_m101 = "SELECT * FROM `cricket` where `Gender`=\"F\" ORDER BY `Batch`";
$result = mysqli_query($conn, $sql_m101);

			$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				 //   echo "<br> 100 m MALE <br>";
				    while($row = mysqli_fetch_assoc($result)) {
				   $rrn = $row["Roll_no"];
				    	echo "<tr>";
				    	echo "<td>" . $sno++. "</td>"."<td> <input type = \"radio\" name = \"seldel\" value = $rrn> </td>"."<td>" . $row["TEAM"] . "</td>" . "<td>". $row["contact"] . "</td>". "<td>". $row["Roll_no"] . "</td>"."<td>" . $row["Capt_name"] . "</td>" ; 
				    	echo "</tr>";
				    
				    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}	
			?>
			</table>	

						
			<table class="table table-striped table-bordered table-hover">

	

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
