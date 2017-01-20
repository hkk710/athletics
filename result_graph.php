<?php
echo "hello";
$cot=mysqli_connect("localhost","root","password","sports_db");

$query1="SELECT `SCORE`
FROM `deptscore`
WHERE `DEPT` = 'CSA'";
$query2="SELECT `SCORE`
FROM `deptscore`
WHERE `DEPT` = 'CSE'";
$query3="SELECT `SCORE`
FROM `deptscore`
WHERE `DEPT` = 'MECH'";
$query4="SELECT `SCORE`
FROM `deptscore`
WHERE `DEPT` = 'EEE'";
$query5="SELECT `SCORE`
FROM `deptscore`
WHERE `DEPT` = 'ECE'";

$result=mysqli_query($cot,$query1);
$result2=mysqli_query($cot,$query2);
$result3=mysqli_query($cot,$query3);
$result4=mysqli_query($cot,$query4);
$result5=mysqli_query($cot,$query5);
while($row=mysqli_fetch_array($result))
{
$scr=$row['SCORE'];
}
while($row1=mysqli_fetch_array($result2))
{
$scr1=$row1['SCORE'];
}
while($row2=mysqli_fetch_array($result3))
{
$scr2=$row2['SCORE'];
}
while($row3=mysqli_fetch_array($result4))
{
$scr3=$row3['SCORE'];
}
while($row4=mysqli_fetch_array($result5))
{
$scr4=$row4['SCORE'];
}


?>


<html>
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
	
 
    <script type='text/javascript' src='js/jsapi.js'></script>
   
	<script type="text/javascript">
    
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1', {'packages':['piechart', 'imagepiechart', 'barchart','imageBarChart','linechart']});
      
      // Set a callback to run when the API is loaded.
      google.setOnLoadCallback(drawChart);
      
      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
		  var value= <?php 
					
					echo $scr;
					
					?>;
	 var value1= <?php 
					
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
					
					
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'list');
        data.addColumn('number', 'Department Score');
        data.addRows(5);
        data.setValue(0, 0, 'CSA');
        data.setValue(0, 1, value);
        data.setValue(1, 0, 'CSE');
        data.setValue(1, 1, value1);
        data.setValue(2, 0, 'MECH');
        data.setValue(2, 1,value2);
        data.setValue(3, 0, 'EEE');
        data.setValue(3, 1, value3);
        data.setValue(4, 0, 'ECE');
        data.setValue(4, 1, value4);
	

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
					<h1 class="text-center">Annual Athletic meet 2014-15 RESULTS</h1>
					<br><br><br>
					
   <div style="width:800px; margin:0 auto;"><center>
	
	<div id='2' style="float:left"></div>
	
	<div id='9lessonschart' style="float:left"></div>
	
	<div id='3' style="float:left"></div>
	
	<div id='4' style="float:left"></div>
	
	<div id='5' style="float:left"></div>
	
	</center>
	</div>

	<h2>  </h2>
			<table class="table table-striped table-bordered table-hover">
 <tr>
	 <th> <center>DEPARTMENT</center></th>
 	 <th><center>POINTS</center></th> 
                     
</tr>
		 	<?php
		 //	echo "hello";
		 	

	$sql = "SELECT * FROM `deptscore` ORDER BY `SCORE` desc ";

$resultp = mysqli_query($cot, $sql);
//echo "hello";
		//$sno = 1;
				if (mysqli_num_rows($resultp) > 0) {
				    
					while($rowp = mysqli_fetch_assoc($resultp)) {
				   	echo "<tr>";
				    	echo "<td><center>" . $rowp["DEPT"] . "</center></td>" . "<td><center>". $rowp["SCORE"] . "</center></td>" ; 
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
