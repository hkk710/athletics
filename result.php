<?php

$cot=mysqli_connect("localhost","root","","athletics");

$querya="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='1') WHERE  `DEPT`='1'";
$queryb="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='2') WHERE  `DEPT`='2'";
$queryc="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='3') WHERE  `DEPT`='3'";
$queryd="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='4') WHERE  `DEPT`='4'";
$querye="UPDATE `DEPTSCORE` SET `SCORE`=(SELECT SUM(`STUDENT`.`SCORE`) FROM `STUDENT` WHERE  `batch`='5') WHERE  `DEPT`='5'";

mysqli_query($cot,$querya);
mysqli_query($cot,$queryb);
mysqli_query($cot,$queryc);
mysqli_query($cot,$queryd);
mysqli_query($cot,$querye);


$query1="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '1'";
$query2="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '2'";
$query3="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '3'";
$query4="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '4'";
$query5="SELECT `SCORE`
FROM `DEPTSCORE`
WHERE `DEPT` = '5'";


$result1=mysqli_query($cot,$query1);
$result2=mysqli_query($cot,$query2);
$result3=mysqli_query($cot,$query3);
$result4=mysqli_query($cot,$query4);
$result5=mysqli_query($cot,$query5);


while($row=mysqli_fetch_array($result1))
{
echo $scr1=$row['SCORE'];
}
while($row1=mysqli_fetch_array($result2))
{
echo $scr2=$row1['SCORE'];
}
while($row2=mysqli_fetch_array($result3))
{
echo $scr3=$row2['SCORE'];
}
while($row3=mysqli_fetch_array($result4))
{
echo $scr4=$row3['SCORE'];
}
while($row4=mysqli_fetch_array($result5))
{
echo $scr5=$row4['SCORE'];
}
?>


<html>
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

	<script type="text/javascript">
             function reload(){
              setInterval(function(){
              console.log("reload");
               window.location.href="result_m.php";
              },100000);
          }
//reload();
     </script>


  <script type='text/javascript' src='http://www.google.com/jsapi'></script>

	<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1', {'packages':['piechart', 'imagepiechart', 'barchart','imageBarChart','linechart']});

      // Set a callback to run when the API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
		  var value1= <?php
					  $score1 = "SELECT SCORE FROM DEPTSCORE WHERE DEPT = '1'";
					  $result1 = mysqli_query($conn, $score1);
					  while($row = mysqli_fetch_assoc($result1))
					  {

						  $score1 = $row["SCORE"];
						  $score1 = $score1+$dist2;
					  }
					echo $scr1;

					?>;
	 var value2= <?php

		echo $scr2;

		?>;
		var value3= <?php

		echo $scr3;

		?>;
		var value4= <?php

		echo $scr4;

		?>;
		var value5= <?php

		echo $scr5;

		?>;


        var data = new google.visualization.DataTable();
        data.addColumn('string', 'list');
        data.addColumn('number', 'Department Score');
        data.addRows(5);
        data.setValue(0, 0, 'Mech');
        data.setValue(0, 1, value1);
        data.setValue(1, 0, 'ECE');
        data.setValue(1, 1, value2);
        data.setValue(2, 0, 'EEE');
        data.setValue(2, 1, value3);
		data.setValue(3, 0, 'CSE');
        data.setValue(3, 1, value4);
		data.setValue(4, 0, 'CSA');
        data.setValue(4, 1, value5);

     //   var chart = new google.visualization.ImagePieChart(document.getElementById('9lessonschart'));
     //   chart.draw(data, {width: 400, height: 240, is3D: true, title: '9lessons Tutorials 3D Chart'});

		var chart = new google.visualization.PieChart(document.getElementById('2'));
        chart.draw(data, {width: 400, height: 240, is3D: true, title: 'DEPARTMENT VICE PIE CHART'});

		var chart = new google.visualization.BarChart(document.getElementById('3'));
        chart.draw(data, {width: 400, height: 240, is3D: true, title: 'DEPARTMENT VICE BAR CHART'});

	//	var chart = new google.visualization.ImageBarChart(document.getElementById('4'));
    //    chart.draw(data, {width: 400, height: 240, min: 0});

	//	var chart = new google.visualization.LineChart(document.getElementById('5'));
    //    chart.draw(data, {width: 400, height: 240, legend: 'bottom', title: 'Tutorials'});
      }

    </script>
	<style type="text/css">

body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.comment_box
{
background-color:#D3E7F5; border-bottom:#ffffff solid 1px; padding-top:3px
}
a
	{
	text-decoration:none;
	color:#d02b55;
	}

</style>
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
					<h1 class="text-center">Annual Athletic meet 2016-17 RESULTS </h1>
				<!--	<br><br><br><marquee><h3 class="text-center"><?php echo $scr5 ?></h3></marquee> -->

						<h2>  OVERALL DEPARTMENT SCORE
</h2>
   <div style="width:800px; margin:0 auto;"><center>

	<div id='2' style="float:left"></div>

	<div id='9lessonschart' style="float:left"></div>

	<div id='3' style="float:left"></div>

	<div id='4' style="float:left"></div>

	<div id='5' style="float:left"></div>

	</center>
	</div>


			<table class="table table-striped table-bordered table-hover">
 <tr>
	 <th> <center>DEPARTMENT</center></th>
 	 <th><center>POINTS</center></th>

</tr>
		 	<?php
		 //	echo "hello";


	$sql = "SELECT * FROM `DEPTSCORE` ORDER BY `SCORE` desc ";

$resultp = mysqli_query($cot, $sql);
//echo "hello";
		//$sno = 1;
				if (mysqli_num_rows($resultp) > 0) {

					while($rowp = mysqli_fetch_assoc($resultp)) {
						if($rowp["DEPT"] == 1 )
						{
							$script="ME";
						}
						else if($rowp["DEPT"] == 2 )
						{
							$script="ECE";

						}
						else if($rowp["DEPT"] == 3 )
						{
							$script="EEE";
						}
						else if($rowp["DEPT"] == 4 )
						{
							$script="CSE";
						}
						else if($rowp["DEPT"] == 5 )
						{
							$script="CSA";
						}
				   	echo "<tr>";
				    	echo "<td><center>" . $script . "</center></td>" . "<td><center>". $rowp["SCORE"] . "</center></td>" ;
				    	echo "</tr>";
				  //  echo "hello11";

				    }
				} else {
		//		    echo "0 results";
				}
			?>
			</table>

				<br><br>
<h1><center>OVERALL CHAMPIONS MALE</center></h1>
			<table class="table table-striped table-bordered table-hover">
 <tr>
	 <th> <center>NO : </center></th>
	 <th> <center>NAME</center></th>
	 <th><center>GENDER</center></th>
 	 <th><center>CHEST</center></th>
 	 <th> <center>BATCH</center></th>
 	 <th><center>SCORE</center></th>

</tr>
		 	<?php
		 //	echo "hello";


	//$sql = "SELECT `name`,`gender`,`CHEST`,`batch`,`SCORE` FROM `STUDENT` WHERE `STUDENT`.`CHEST`>506 AND `STUDENT`.`CHEST`<599 OR `STUDENT`.`CHEST`>606 AND `STUDENT`.`CHEST`<699 OR `STUDENT`.`CHEST`>706 AND `STUDENT`.`CHEST`<799 ORDER BY `SCORE` DESC LIMIT 15 ";
$sqlmale = "SELECT `name`,`gender`,`CHEST`,`batch`,`SCORE` FROM `STUDENT` WHERE SCORE = (SELECT MAX(SCORE) FROM STUDENT) AND gender='male'";
$resultp = mysqli_query($cot, $sqlmale);
//echo "hello";
		$sno = 1;
				if (mysqli_num_rows($resultp) > 0) {

					while($rowp = mysqli_fetch_assoc($resultp)) {
						if($rowp["batch"] == 1 )
						{
							$script="ME";
						}
						else if($rowp["batch"] == 2 )
						{
							$script="ECE";

						}
						else if($rowp["batch"] == 3 )
						{
							$script="EEE";
						}
						else if($rowp["batch"] == 4 )
						{
							$script="CSE";
						}
						else if($rowp["batch"] == 5 )
						{
							$script="CSA";
						}
				   	echo "<tr>";
				    	echo "<td><center>" . $sno++ . "</center></td>" ."<td><center>" . $rowp["name"] . "</center></td>" ."<td><center>" . $rowp["gender"] . "</center></td>" . "<td><center>". $rowp["CHEST"] . "</center></td>". "<td><center>". $script . "</center></td>". "<td><center>". $rowp["SCORE"] . "</center></td>" ;
				    	echo "</tr>";
				  //  echo "hello11";

				    }
				} else {
		//		    echo "0 results";
				}
			?>
			</table>

			<h1><center>OVERALL CHAMPIONS FEMALE</center></h1>
						<table class="table table-striped table-bordered table-hover">
			 <tr>
				 <th> <center>NO : </center></th>
				 <th> <center>NAME</center></th>
				 <th><center>GENDER</center></th>
			 	 <th><center>CHEST</center></th>
			 	 <th> <center>BATCH</center></th>
			 	 <th><center>SCORE</center></th>

			</tr>
					 	<?php
					 //	echo "hello";


				//$sql = "SELECT `name`,`gender`,`CHEST`,`batch`,`SCORE` FROM `STUDENT` WHERE `STUDENT`.`CHEST`>506 AND `STUDENT`.`CHEST`<599 OR `STUDENT`.`CHEST`>606 AND `STUDENT`.`CHEST`<699 OR `STUDENT`.`CHEST`>706 AND `STUDENT`.`CHEST`<799 ORDER BY `SCORE` DESC LIMIT 15 ";
			$sqlfemale = "SELECT `name`,`gender`,`CHEST`,`batch`,`SCORE` FROM `STUDENT` WHERE SCORE = (SELECT MAX(SCORE) FROM STUDENT) AND gender='female'";
			$resultp = mysqli_query($cot, $sqlfemale);
			//echo "hello";
					$sno = 1;
							if (mysqli_num_rows($resultp) > 0) {

								while($rowp = mysqli_fetch_assoc($resultp)) {
									if($rowp["batch"] == 1 )
									{
										$script="ME";
									}
									else if($rowp["batch"] == 2 )
									{
										$script="ECE";

									}
									else if($rowp["batch"] == 3 )
									{
										$script="EEE";
									}
									else if($rowp["batch"] == 4 )
									{
										$script="CSE";
									}
									else if($rowp["batch"] == 5 )
									{
										$script="CSA";
									}
							   	echo "<tr>";
							    	echo "<td><center>" . $sno++ . "</center></td>" ."<td><center>" . $rowp["name"] . "</center></td>" ."<td><center>" . $rowp["gender"] . "</center></td>" . "<td><center>". $rowp["CHEST"] . "</center></td>". "<td><center>". $script . "</center></td>". "<td><center>". $rowp["SCORE"] . "</center></td>" ;
							    	echo "</tr>";
							  //  echo "hello11";

							    }
							} else {
					//		    echo "0 results";
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

</html>
