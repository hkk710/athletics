<!doctype html>
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
</head>

<body>
<style>
  #head-content{
   background:url('images/cover-cricket.jpg');
   width:110%;
  }

 #head-content h1{
 height:200px;
 color:#f4f4f4;
 margin:auto;
 padding:50px;
 text-shadow:2px 2px 2px black;
 font-weight:bold;
 }
</style>
    <div class="form_wrap" id="reg_form">
    <!--    <form class="form-horizontal" action = "after_reg.php" method = "post" name="form" onsubmit="return check_form();"> --!>
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-10">
                       <div id="head-content">
                           <h1 class="text-left">Cricket scores</h1>
                       </div>
                 </div>
               </div>
                <!-- Registration form
                 -->
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
             <br><br>
            <h1 class="text-center">SUPER OVER CRICKET MALE</h1>  
<form id="helo" action="pp.php" method="POST"><br><br>
	<center>
Match No : 
<input type="text" name="t1"><br>
Match 
<input type="text" name="t2" size="50"><br>
RESULT
<input type="text" name="t3"><br>

<input type="submit"></center>
</form>

<br><br>
<h1 class="text-center">SUPER OVER CRICKET FEMALE</h1>  
<form id="helof" action="ppf.php" method="POST">
	<center>
Match No : 
<input type="text" name="t1"><br>
Match 
<input type="text" name="t2" size="50"><br>
RESULT
<input type="text" name="t3"><br>

<input type="submit"></center>
</form>

<br><br>
<h1 class="text-center">SUPER OVER CRICKET MALE CHECK</h1> 


	
<center>
<?php
$con=mysqli_connect("localhost","athletics","amrita_108","athletics");
$t=$_POST['tt'];
$sql = "SELECT `MATCH` FROM `cricket_score` WHERE `Matchno`= '$t'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
		echo $row["MATCH"];
	}

?> 
</center>
<form id="helof" action="scoreboard.php" method="POST">
<center>
Match No : 
<input type="text" name="tt"><br>


<input type="submit"></center>
</form>

<h1 class="text-center">SUPER OVER CRICKET MALE UPDATE</h1> 
<form id="helof" action="sp1.php" method="POST">
<center>
Match No : 
<input type="text" name="t1"><br>
Match 
<input type="text" name="t2" size="50"><br>
RESULT
<input type="text" name="t3"><br>

<input type="submit"></center>
</form>

<br><br>
<h1 class="text-center">SUPER OVER CRICKET FEMALE CHECK</h1> 


	
<center>
<?php
$con=mysqli_connect("localhost","athletics","amrita_108","athletics");
$t5=$_POST['ttf'];
$sql = "SELECT `MATCH` FROM `cricket_score_f` WHERE `Matchno`= '$t5'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
		echo $row["MATCH"];
	}

?> 
</center>
<form id="helof" action="scoreboard.php" method="POST">
<center>
Match No : 
<input type="text" name="ttf"><br>


<input type="submit"></center>
</form>
<br><br>
<h1 class="text-center">SUPER OVER CRICKET FEMALE UPDATE</h1> 
<form id="helof" action="sp2.php" method="POST">
<center>
Match No : 
<input type="text" name="t1"><br>
Match 
<input type="text" name="t2" size="50"><br>
RESULT
<input type="text" name="t3"><br>

<input type="submit"></center>
</form>

			

                </div>
                </div>
            </div>
                        </div>
                </div>
                
            </fieldset>
        </form>
    </div>
</body>

