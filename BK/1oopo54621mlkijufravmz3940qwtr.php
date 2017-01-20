<?php
session_start();
if($_SESSION["adminlogged"]!=true){
  header("Location:./ADMIN.html");
}
?>

<!DOCTYPE html>



<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Athletic Meet Registration </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
            #event_table tr td{
               text-transform: capitalize;
            }
            .box_dept ul{
             display: none;
            }
            .box_dept{
            cursor: pointer;
            }
            .list-group-item{
            color:#4f4f4f;
            }
        </style>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script>
		function cricAlert()	{
			alert("Potru Sarath (S8 ECE)\nMob: 8129603543 ");
		}
        
	</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navbar">
      <div class="container">
        <divclass="navbar-collapse collapse">
          <a class="pull-left" href="index.html"><img src="img/header.png" alt="Home" class="logo"></a> 
          <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="#events">Events</a></li>
          <li role="presentation"><a href="#rules_section">Rules</a></li>
          <li role="presentation"><a href="registration.html">Register</a></li>
	  <li role="presentation"><a href="crickreg.html">Super Over Cricket</a></li> 
	  <li role="presentation"><a href="admin2.php">View Current Registrations</a></li>
	<li role="presentation"><a href="unset.php">Log Out</a></li>
<!--           <li role="presentation"><a href="#">Contact</a></li> -->
           <li role="presentation" onclick = "cricAlert()"><a href="#">Contact</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" id="featured">
      <div class="container">
       <P class="text-center"><img src="img/logo_full.png" alt="logo"></p>
        <h1 class="text-center">Annual Athletic meet 2014-15</h1>
        <h2 class="text-center"><span class="glyphicon glyphicon-calendar"></span> 27-28 February 2015</h2>
          <h3 class="text-center"><span class="glyphicon glyphicon-map-marker"></span> Amrita School of Engineering, Amritapuri</h3>
        
      </div>
    </div>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <p class="lead" style = "text-align: center"> Welcome to Amrita Vishwa Vidyapeetham Annual Athletic Meet 2015 </p>
          </div>
      </div>
      
<div class="container" id="events" align = "center">
!--------------------------------------------------------
</div>
        
      <div class="row">
            <table class="table table-striped table-bordered" id="event_table">
          
         <div class="container">
             <h2 class="text-center">
                Departments 
             </h2>
             <div class="row dept">
                 <div class="col-md-2 box_dept">
                     <h3 class="text-center">CSE</h3>
                     <ul class="list-group">
              <li class="list-group-item"> B.Tech CSE</li>
              <li class="list-group-item">M.Tech CSE</li>
              <li class="list-group-item">M.Tech Cybersecurity</li>
              <li class="list-group-item">M.Tech E-Learning</li>
	      <li class="list-group-item">M.Tech WNA</li>
            </ul>
                 </div>
                 <div class="col-md-2 box_dept">
                     <h3 class="text-center">CSA</h3>
                     <ul class="list-group">
              <li class="list-group-item"> BCA</li>
              <li class="list-group-item">B.Sc CS</li>
              <li class="list-group-item">MCA</li>
              <li class="list-group-item">M.Sc CS</li>
            </ul>
                 </div>
                 <div class="col-md-2 box_dept">
                     <h3 class="text-center">MECH</h3>
                     <ul class="list-group">
              <li class="list-group-item">B.Tech ME </li>
              <li class="list-group-item">M.Tech Robotics & Automation</li>
              <li class="list-group-item">M.Tech Thermal & Fluids</li>
            </ul>
                 </div>
                 <div class="col-md-2 box_dept">
                     <h3 class="text-center">ECE</h3>
                     <ul class="list-group">
              <li class="list-group-item">B.Tech ECE </li>
              <li class="list-group-item">M.Tech VLSI Design</li>
            </ul>
                 </div>
                 <div class="col-md-2 box_dept">
                     <h3 class="text-center">EEE</h3>
                     <ul class="list-group">
              <li class="list-group-item">B.Tech EEE  </li>
              <li class="list-group-item">M.Tech Control & Instrumentation</li>
              <li class="list-group-item">M.Tech Power & Energy</li>
            </ul>
                 </div>
             </div>
         </div>
         
         <div class="container">
             <div class="row" id = "rules_section">
<!--			 <a id = "#rules_section"> </a> -->
		  <h2 class="text-center">Rules & Regulations</h2>
                  <ul id="rules_list " class="list-group">
                      <li class="rules_list_item list-group-item"><span class="glyphicon glyphicon-ok"></span>  All students of Amrita school of Engineering, Amritapuri campus are eligible to participate.</li>
                      <li class="rules_list_item list-group-item"><span class="glyphicon glyphicon-ok"></span> The sports meet is conducted on inter branch basis.</li>
                      <li class="rules_list_item list-group-item"><span class="glyphicon glyphicon-ok"></span> A single student can enter for a maximum of 3 individual items.</li>
                      <li class="rules_list_item list-group-item"><span class="glyphicon glyphicon-ok"></span> An individual event will be conducted only if there is a minimum of 3 participants.</li>
                      <li class="rules_list_item list-group-item"><span class="glyphicon glyphicon-ok"></span> For team events,there can be a maximum of one team per batch. </li>
                      <li class="rules_list_item list-group-item"><span class="glyphicon glyphicon-ok"></span> First, second, and third prizes will be given for each individual item.</li>
                      <li class="rules_list_item list-group-item"><span class="glyphicon glyphicon-ok"></span> The overall championship will be awarded to the branch scoring maximum points based on the points for sports events.</li>
                  </ul>
             </div>
         </div>
         
     </div>
      <hr>
      <footer>
        <p class="text-center">&copy; <a href = "http://www.amrita.edu" target = "_blank">Amrita Vishwa Vidyapeetham</a></p>
         </div>
      </footer>
      <script>
           $(document).ready(function(){
               
                $('.box_dept').hover(
         function () {
           $(this).css({"background-color":"#acd200"});
         }, 
         function () {
           $(this).css({"background-color":"#6e1d2c"});
          $(this).find("ul").slideUp(450);
         }
     );
               $(".box_dept").on("hover",function(){
                $(this).css("background","#d5de26");
               });
           $(".box_dept").on("click",function(){
          $(this).find("ul").slideToggle();
        });  
           });
               
</script>
    </div> <!-- /container --> 
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

    </body>
</html>
