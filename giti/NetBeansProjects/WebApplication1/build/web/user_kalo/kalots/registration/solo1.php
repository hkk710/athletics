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


<form name="f1" method="POST" action="regsolo.php">
<center><h1>On Stage Solo</h1></center>
       <table border=1>
<tr><th>Events
</th>
<th>Astapati
</th>
<th>Classical Dance
</th>
<th>Classical Music
</th>
<th>Elocution English
</th>
<th>Elocution Malayalam
</th>
<th>Elocution Sanskrit
</th>
<th>Elocution Telugu
</th>
<th>Fancy Dress
</th>
<th>Instrumental-Piano
</th>
<th>Instrumental-String
</th>
<th>Instrumental-Wind
</th>
<th>Instrumental-Persussion
</th>
<th>Karoke
</th>
<th>Kathakali Sangeetham
</th>
<th>Kathaprsangam
</th>
<th>Light Music
</th>
<th>Mapilapattu
</th>
<th>Mimicry
</th>
<th>Monoact
</th>
<th>Non Classical Dance
</th>
<th>Resitation English
</th>
<th>Resitation Hindi
</th>
<th>Resitation Malayalam
</th>
<th>Resitation Sanskrit
</th>
<th>Resitation Telugu
</th>

<th>Shakespearean Monologue
</th>
<th>Western Solo
</th>
</tr>

<tr><td>Event 1
</td>
<td><input type="Radio" name="event1" value="ashtapati">
</td>
<td><input type="Radio" name="event1" value="classicaldance">
</td>
<td><input type="Radio" name="event1" value="classicalmusic">
</td>
<td><input type="Radio" name="event1" value="elocutionenglish">
</td>
<td><input type="Radio" name="event1" value="elocutionmalayalam">
</td>
<td><input type="Radio" name="event1" value="elocutionsanskrit">
</td>
<td><input type="Radio" name="event1" value="elocutiontelugu">
</td>
<td><input type="Radio" name="event1" value="fancydress">
</td>
<td><input type="Radio" name="event1" value="instrumentalpiano">
</td>
<td><input type="Radio" name="event1" value="instrumentalstring">
</td>
<th><input type="Radio" name="event1" value="instrumentalwind">
</th>
<th><input type="Radio" name="event1" value="instrumentalpersussion">
</th>
<th><input type="Radio" name="event1" value="karoke">
</th>
<th><input type="Radio" name="event1" value="kathakalisangeetham">
</th>
<th><input type="Radio" name="event1" value="kathaprsangam">
</th>
<th><input type="Radio" name="event1" value="lightmusic">
</th>
<th><input type="Radio" name="event1" value="mapilapattu">
</th>
<th><input type="Radio" name="event1" value="mimicry">
</th>
<th><input type="Radio" name="event1" value="monoact">
</th>
<th><input type="Radio" name="event1" value="nonclassicaldance">
</th>
<th><input type="Radio" name="event1" value="resitationenglish">
</th>
<th><input type="Radio" name="event1" value="resitationhindi">
</th>
<th><input type="Radio" name="event1" value="resitationmalayalam">
</th>
<th><input type="Radio" name="event1" value="resitationsanskrit">
</th>
<th><input type="Radio" name="event1" value="resitationtelugu">
</th>


<th><input type="Radio" name="event1" value="shakespearmonologue">
</th>
<th><input type="Radio" name="event1" value="westernsolo">
</th>
</tr>

<tr><td>Event 2
</td>
<td><input type="Radio" name="event2" value="ashtapati">
</td>
<td><input type="Radio" name="event2" value="classicaldance">
</td>
<td><input type="Radio" name="event2" value="classicalmusic">
</td>
<td><input type="Radio" name="event2" value="elocutionenglish">
</td>
<td><input type="Radio" name="event2" value="elocutionmalayalam">
</td>
<td><input type="Radio" name="event2" value="elocutionsanskrit">
</td>
<td><input type="Radio" name="event2" value="elocutiontelugu">
</td>
<td><input type="Radio" name="event2" value="fancydress">
</td>
<td><input type="Radio" name="event2" value="instrumentalpiano">
</td>
<td><input type="Radio" name="event2" value="instrumentalstring">
</td>
<th><input type="Radio" name="event2" value="instrumentalwind">
</th>
<th><input type="Radio" name="event2" value="instrumentalpersussion">
</th>
<th><input type="Radio" name="event2" value="karoke">
</th>
<th><input type="Radio" name="event2" value="kathakalisangeetham">
</th>
<th><input type="Radio" name="event2" value="kathaprsangam">
</th>
<th><input type="Radio" name="event2" value="lightmusic">
</th>
<th><input type="Radio" name="event2" value="mapilapattu">
</th>
<th><input type="Radio" name="event2" value="mimicry">
</th>
<th><input type="Radio" name="event2" value="monoact">
</th>
<th><input type="Radio" name="event2" value="nonclassicaldance">
</th>
<th><input type="Radio" name="event2" value="resitationenglish">
</th>
<th><input type="Radio" name="event2" value="resitationhindi">
</th>
<th><input type="Radio" name="event2" value="resitationmalayalam">
</th>
<th><input type="Radio" name="event2" value="resitationsanskrit">
</th>
<th><input type="Radio" name="event2" value="resitationtelugu">
</th>


<th><input type="Radio" name="event2" value="shakespearmonologue">
</th>
<th><input type="Radio" name="event2" value="westernsolo">
</th>
</tr>


<tr><td>Event 3
</td>
<td><input type="Radio" name="event3" value="ashtapati">
</td>
<td><input type="Radio" name="event3" value="classicaldance">
</td>
<td><input type="Radio" name="event3" value="classicalmusic">
</td>
<td><input type="Radio" name="event3" value="elocutionenglish">
</td>
<td><input type="Radio" name="event3" value="elocutionmalayalam">
</td>
<td><input type="Radio" name="event3" value="elocutionsanskrit">
</td>
<td><input type="Radio" name="event3" value="elocutiontelugu">
</td>
<td><input type="Radio" name="event3" value="fancydress">
</td>
<td><input type="Radio" name="event3" value="instrumentalpiano">
</td>
<td><input type="Radio" name="event3" value="instrumentalstring">
</td>
<th><input type="Radio" name="event3" value="instrumentalwind">
</th>
<th><input type="Radio" name="event3" value="instrumentalpersussion">
</th>
<th><input type="Radio" name="event3" value="karoke">
</th>
<th><input type="Radio" name="event3" value="kathakalisangeetham">
</th>
<th><input type="Radio" name="event3" value="kathaprsangam">
</th>
<th><input type="Radio" name="event3" value="lightmusic">
</th>
<th><input type="Radio" name="event3" value="mapilapattu">
</th>
<th><input type="Radio" name="event3" value="mimicry">
</th>
<th><input type="Radio" name="event3" value="monoact">
</th>
<th><input type="Radio" name="event3" value="nonclassicaldance">
</th>
<th><input type="Radio" name="event3" value="resitationenglish">
</th>
<th><input type="Radio" name="event3" value="resitationhindi">
</th>
<th><input type="Radio" name="event3" value="resitationmalayalam">
</th>
<th><input type="Radio" name="event3" value="resitationsanskrit">
</th>
<th><input type="Radio" name="event3" value="resitationtelugu">
</th>


<th><input type="Radio" name="event3" value="shakespearmonologue">
</th>
<th><input type="Radio" name="event3" value="westernsolo">
</th>
</tr>

<tr><td>Event 4
</td>
<td><input type="Radio" name="event4" value="ashtapati">
</td>
<td><input type="Radio" name="event4" value="classicaldance">
</td>
<td><input type="Radio" name="event4" value="classicalmusic">
</td>
<td><input type="Radio" name="event4" value="elocutionenglish">
</td>
<td><input type="Radio" name="event4" value="elocutionmalayalam">
</td>
<td><input type="Radio" name="event4" value="elocutionsanskrit">
</td>
<td><input type="Radio" name="event4" value="elocutiontelugu">
</td>
<td><input type="Radio" name="event4" value="fancydress">
</td>
<td><input type="Radio" name="event4" value="instrumentalpiano">
</td>
<td><input type="Radio" name="event4" value="instrumentalstring">
</td>
<th><input type="Radio" name="event4" value="instrumentalwind">
</th>
<th><input type="Radio" name="event4" value="instrumentalpersussion">
</th>
<th><input type="Radio" name="event4" value="karoke">
</th>
<th><input type="Radio" name="event4" value="kathakalisangeetham">
</th>
<th><input type="Radio" name="event4" value="kathaprsangam">
</th>
<th><input type="Radio" name="event4" value="lightmusic">
</th>
<th><input type="Radio" name="event4" value="mapilapattu">
</th>
<th><input type="Radio" name="event4" value="mimicry">
</th>
<th><input type="Radio" name="event4" value="monoact">
</th>
<th><input type="Radio" name="event4" value="nonclassicaldance">
</th>
<th><input type="Radio" name="event4" value="resitationenglish">
</th>
<th><input type="Radio" name="event4" value="resitationhindi">
</th>
<th><input type="Radio" name="event4" value="resitationmalayalam">
</th>
<th><input type="Radio" name="event4" value="resitationsanskrit">
</th>
<th><input type="Radio" name="event4" value="resitationtelugu">
</th>


<th><input type="Radio" name="event4" value="shakespearmonologue">
</th>
<th><input type="Radio" name="event4" value="westernsolo">
</th>
</tr>

	</table>



<center><h1>Off Stage Solo</h1></center>
       <table border=1>
<tr><th>Events
</th>
<th>Cartooning
</th>
<th>Clay Modelling
</th>
<th>Essay Writing English
</th>
<th>Essay Writing Malayalam
</th>
<th>Essay Writing Tamil
</th>
<th>Pencil Drawing
</th>
<th>Poetry English
</th>
<th>Poetry Malayalam
</th>
<th>Poetry Telugu
</th>
<th>Story Writing English
</th>
<th>Story Writing Malayalam
</th>
<th>Water Color
</th></tr>

<tr><th>Event 1
</th>
<th><input type="radio" name="event11" value="cartooning">
</th>
<th><input type="radio" name="event11" value="claymodeling">
</th>
<th><input type="radio" name="event11" value="essayenglish">
</th>
<th><input type="radio" name="event11" value="essaymalayalam">
</th>
<th><input type="radio" name="event11" value="essaytamil">
</th>
<th><input type="radio" name="event11" value="pencildrawing">
</th>
<th><input type="radio" name="event11" value="poetryenglish">
</th>
<th><input type="radio" name="event11" value="poetrymalayalam">
</th>
<th><input type="radio" name="event11" value="Poetrytelugu">
</th>
<th><input type="radio" name="event11" value="storyenglish">
</th>
<th><input type="radio" name="event11" value="storymalayalam">
</th>
<th><input type="radio" name="event11" value="watercolor">
</th></tr>

<tr><th>Event 2
</th>
<th><input type="radio" name="event12" value="cartooning">
</th>
<th><input type="radio" name="event12" value="claymodeling">
</th>
<th><input type="radio" name="event12" value="essayenglish">
</th>
<th><input type="radio" name="event12" value="essaymalayalam">
</th>
<th><input type="radio" name="event12" value="essaytamil">
</th>
<th><input type="radio" name="event12" value="pencildrawing">
</th>
<th><input type="radio" name="event12" value="poetryenglish">
</th>
<th><input type="radio" name="event12" value="poetrymalayalam">
</th>
<th><input type="radio" name="event12" value="Poetrytelugu">
</th>
<th><input type="radio" name="event12" value="storyenglish">
</th>
<th><input type="radio" name="event12" value="storymalayalam">
</th>
<th><input type="radio" name="event12" value="watercolor">
</th></tr>


<tr><th>Event 3
</th>
<th><input type="radio" name="event13" value="cartooning">
</th>
<th><input type="radio" name="event13" value="claymodeling">
</th>
<th><input type="radio" name="event13" value="essayenglish">
</th>
<th><input type="radio" name="event13" value="essaymalayalam">
</th>
<th><input type="radio" name="event13" value="essaytamil">
</th>
<th><input type="radio" name="event13" value="pencildrawing">
</th>
<th><input type="radio" name="event13" value="poetryenglish">
</th>
<th><input type="radio" name="event13" value="poetrymalayalam">
</th>
<th><input type="radio" name="event13" value="Poetrytelugu">
</th>
<th><input type="radio" name="event13" value="storyenglish">
</th>
<th><input type="radio" name="event13" value="storymalayalam">
</th>
<th><input type="radio" name="event13" value="watercolor">
</th></tr>

<tr><th>Event 4
</th>
<th><input type="radio" name="event14" value="cartooning">
</th>
<th><input type="radio" name="event14" value="claymodeling">
</th>
<th><input type="radio" name="event14" value="essayenglish">
</th>
<th><input type="radio" name="event14" value="essaymalayalam">
</th>
<th><input type="radio" name="event14" value="essaytamil">
</th>
<th><input type="radio" name="event14" value="pencildrawing">
</th>
<th><input type="radio" name="event14" value="poetryenglish">
</th>
<th><input type="radio" name="event14" value="poetrymalayalam">
</th>
<th><input type="radio" name="event14" value="Poetrytelugu">
</th>
<th><input type="radio" name="event14" value="storyenglish">
</th>
<th><input type="radio" name="event14" value="storymalayalam">
</th>
<th><input type="radio" name="event14" value="watercolor">
</th></tr>


	</table><br><br><br><center>
<input type="submit" value="register"></center>
</form>

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
