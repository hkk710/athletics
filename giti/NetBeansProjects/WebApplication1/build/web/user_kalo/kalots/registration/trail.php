<!DOCTYPE html>
<html lang="en">

<head><meta charset="UTF-8" />
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

  
  



<style>
    
    #sam{
        background-color:#1abc9c;
        background-size: cover;
        
        height: 270px;
    }
    
    
    
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
    
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: whitesmoke;
    text-align:1 center;
    
    
    padding: 20px 20px;
    text-decoration:none;
    
}

li a:hover {
    background-color: black;
    
}
   </style>
<title>Kalotsavam</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["user"]))
{
?>
        <div id="sam" >
        <h> </h>
<center><img src="../images/logo.png" style="display:inline;border-radius: 150px; " alt="logo" width="300" height="230">
        
    </div>   
    
<iframe src="show.php" width="100%" height="720px" name="iframe_a"></iframe>
<center> <a href="event.php" target="iframe_a">
<br>

<center>
<a href="solo.php" target="iframe_a"><img src="../images/thYIWBYD2F.jpg" height="80"></a>
<a href="event.php" target="iframe_a"><img src="../images/event.jpg" height="80"></a>
<?php
}
else
{?>
<h1><a href="../login.html">Log in first</a></h1>
<?php
}
?>
</body>
</html>