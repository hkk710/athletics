       <%@page import="java.sql.*"%>
<%

 Connection con=DriverManager.getConnection("jdbc:derby://localhost:1527/VAJRA", "superuser", "superuser");

String sql = "SELECT * FROM `TITLE` WHERE `PAGE`=1 ";
PreparedStatement ps = null;
String pageno;
String color = null;
String text = null;
String font = null;
//ResultSet rs= null;
 ps=con.prepareStatement("select * from title");
             
             ResultSet rs1=ps.executeQuery();
             while(rs1.next())
             {
             pageno = rs1.getString(1).toString();
             color = rs1.getString(2).toString();
             text = rs1.getString(3).toString();
             font = rs1.getString(4).toString();
             
            
            
      

         }
%>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title> kalotsavam</title>

	<script>
function title1()
{
	alert("reached title1");
	window.location.assign("titleeditor/page1/page1.php");
}
</script>


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
						<h2 onClick="title1()" style="color:<%= color %>"> <font face="<%=font%>">
    <%= text%></h2></font>
						<p><img src="images/logo.png"></p>
					</section>
					
					<section class="st-panel st-color" id="st-panel-2">
						<div class="st-deco" data-icon="2"></div>
						
						
						<h2> Events </h2>

						<p> You Have to Log-In for registering and monitoring your events </p>
  
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