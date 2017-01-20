<?php
echo "hello";
$cot=mysqli_connect("localhost","athletics","amrita_108","athletics");

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
        data.addColumn('number', 'Tutorials Pesentage');
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
  
   <div>
	
	<div id='2' style="float:left"></div>
	<div id='9lessonschart' style="float:left"></div>
	<div id='3' style="float:left"></div>
	<div id='4' style="float:left"></div>
	<div id='5' style="float:left"></div>
	
	</div>
  </body>
</html>
