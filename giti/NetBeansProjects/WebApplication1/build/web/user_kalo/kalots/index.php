<?php

include("connection.php");

$sql = "SELECT * FROM `title` WHERE `page`=1 ";
$sql1 = "SELECT * FROM `event_head` WHERE `page`=1 ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
				    
while($row = mysqli_fetch_assoc($result)) {
$color = $row["color"] ;
$text  = $row["text"] ;
$style = $row["font"] ;
}
}

$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
				    
while($row = mysqli_fetch_assoc($result1)) {
$color1 = $row["color"] ;
$text1  = $row["text"] ;
$style1 = $row["font"] ;
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title> kalotsavam</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSS-only Responsive Layout with Smooth Transitions" />
        <meta name="keywords" content="css3, transitions, animations, css-only, navigation, smooth scrolling, full width, full height, window width, window height" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]>
			 <link rel="stylesheet" type="text/css" href="css/simple.css" />
		<![endif]-->
    </head>
    <body>
        <div class="container">
		
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			
			<div class="st-container">
			
				<input type="radio" name="radio-set" checked="checked" id="st-control-1"/>
				<a href="#st-panel-1">Home</a>
				<input type="radio" name="radio-set" id="st-control-2"/>
				<a href="#st-panel-2">Events</a>
				<input type="radio" name="radio-set" id="st-control-3"/>
				<a href="#st-panel-3">Results</a>
				<input type="radio" name="radio-set" id="st-control-4"/>
				<a href="#st-panel-4">Teams</a>
				<input type="radio" name="radio-set" id="st-control-5"/>
				<a href="#st-panel-5">Developers</a>
				
				<div class="st-scroll">
				
					<!-- Placeholder text from http://hipsteripsum.me/ -->
					
					<section class="st-panel" id="st-panel-1">
						<div class="st-deco" data-icon="H">Welcome</div>
<a href="login.html"><img src="images/login-button.png"></a>
						<h2 style="color:<?php echo $color ?>"> <font face="<?php echo $style ?>">
    <?php echo $text ?></h2></font>
						<p><img src="images/logo.png"></p>
					</section>
					
					<section class="st-panel st-color" id="st-panel-2">
						<div class="st-deco" data-icon="2"></div>
						
						 
                        <h2 style="color:<?php echo $color1 ?>"> 
                        <font face="<?php echo $style ?>">
              <?php echo $text1 ?></h2></font>>
						<p>You Have to Log-In for registering and monitoring your events</p>
					</section>
					
					<section class="st-panel" id="st-panel-3">
						<div class="st-deco" data-icon="B"></div>
						<h2>Results</h2>
						<p>Events yet to begin</p>
					</section>
					
					<section class="st-panel st-color" id="st-panel-4">
						<div class="st-deco" data-icon="x"></div>
						<h2>Amritamayi <br><br>Anandamayi <br><br> Chinmayi </br><br>Jyothirmayi</h2>
						<p></p>
					</section>
					
					<section class="st-panel" id="st-panel-5">
						<div class="st-deco" data-icon="Ç"></div>
						<h2>Adarsh R Nair(S6 BCA) </br>Akhila Ashok(S6 BCA) </br>Ashwin Narayanan(S6 CSE)</br>Aparna Nair(S6 BCA)</br></h2>
						
					</section>

				</div><!-- // st-scroll -->
			<p>Adarsh is a student of BCA in Amrita University, Amritapuri Campus. </p>
<p>Specialisation : Distributed Computing </p>
	
			</div><!-- // st-container -->
			
        </div>
	</body>
</html>