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

  <script>
      function validate()
      {
          if(document.getElementsByName("event1").value != document.getElementsByName("event2").value != document.getElementsByName("event3").value != document.getElementsByName("event4").value)
              {
var form = document.getElementById("fo1");
                  form.submit();
                  
              }
          else
              {
                  alert("Same events are not possible");
                  window.location.reload();
              }
      }
    </script>
  



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


<form name="f1" id="fo1" method="POST" action="regsolo.php">
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
<td><input type="Radio" name="event1" value="ashtapati" required="">
</td>
<td><input type="Radio" name="event1" value="classicaldance" required="">
</td>
<td><input type="Radio" name="event1" value="classicalmusic" required="">
</td>
<td><input type="Radio" name="event1" value="elocutionenglish" required="">
</td>
<td><input type="Radio" name="event1" value="elocutionmalayalam" required="">
</td>
<td><input type="Radio" name="event1" value="elocutionsanskrit" required="">
</td>
<td><input type="Radio" name="event1" value="elocutiontelugu" required="">
</td>
<td><input type="Radio" name="event1" value="fancydress" required="">
</td>
<td><input type="Radio" name="event1" value="instrumentalpiano" required="">
</td>
<td><input type="Radio" name="event1" value="instrumentalstring" required="">
</td>
<th><input type="Radio" name="event1" value="instrumentalwind" required="">
</th>
<th><input type="Radio" name="event1" value="instrumentalpersussion" required="">
</th>
<th><input type="Radio" name="event1" value="karoke" required="">
</th>
<th><input type="Radio" name="event1" value="kathakalisangeetham" required="">
</th>
<th><input type="Radio" name="event1" value="kathaprsangam" required="">
</th>
<th><input type="Radio" name="event1" value="lightmusic" required="">
</th>
<th><input type="Radio" name="event1" value="mapilapattu" required="">
</th>
<th><input type="Radio" name="event1" value="mimicry" required="">
</th>
<th><input type="Radio" name="event1" value="monoact" required="">
</th>
<th><input type="Radio" name="event1" value="nonclassicaldance" required="">
</th>
<th><input type="Radio" name="event1" value="resitationenglish" required="">
</th>
<th><input type="Radio" name="event1" value="resitationhindi" required="">
</th>
<th><input type="Radio" name="event1" value="resitationmalayalam" required="">
</th>
<th><input type="Radio" name="event1" value="resitationsanskrit" required="">
</th>
<th><input type="Radio" name="event1" value="resitationtelugu" required="">
</th>


<th><input type="Radio" name="event1" value="shakespearmonologue" required="">
</th>
<th><input type="Radio" name="event1" value="westernsolo" required="">
</th>
</tr>

<tr><td>Event 2
</td>
<td><input type="Radio" name="event2" value="ashtapati" required="">
</td>
<td><input type="Radio" name="event2" value="classicaldance" required="">
</td>
<td><input type="Radio" name="event2" value="classicalmusic" required="">
</td>
<td><input type="Radio" name="event2" value="elocutionenglish" required="">
</td>
<td><input type="Radio" name="event2" value="elocutionmalayalam" required="">
</td>
<td><input type="Radio" name="event2" value="elocutionsanskrit" required="">
</td>
<td><input type="Radio" name="event2" value="elocutiontelugu" required="">
</td>
<td><input type="Radio" name="event2" value="fancydress" required="">
</td>
<td><input type="Radio" name="event2" value="instrumentalpiano" required="">
</td>
<td><input type="Radio" name="event2" value="instrumentalstring" required="">
</td>
<th><input type="Radio" name="event2" value="instrumentalwind" required="">
</th>
<th><input type="Radio" name="event2" value="instrumentalpersussion" required="">
</th>
<th><input type="Radio" name="event2" value="karoke" required="">
</th>
<th><input type="Radio" name="event2" value="kathakalisangeetham" required="">
</th>
<th><input type="Radio" name="event2" value="kathaprsangam" required="">
</th>
<th><input type="Radio" name="event2" value="lightmusic" required="">
</th>
<th><input type="Radio" name="event2" value="mapilapattu" required="">
</th>
<th><input type="Radio" name="event2" value="mimicry" required="">
</th>
<th><input type="Radio" name="event2" value="monoact" required="">
</th>
<th><input type="Radio" name="event2" value="nonclassicaldance" required="">
</th>
<th><input type="Radio" name="event2" value="resitationenglish" required="">
</th>
<th><input type="Radio" name="event2" value="resitationhindi" required="">
</th>
<th><input type="Radio" name="event2" value="resitationmalayalam" required="">
</th>
<th><input type="Radio" name="event2" value="resitationsanskrit" required="">
</th>
<th><input type="Radio" name="event2" value="resitationtelugu" required="">
</th>


<th><input type="Radio" name="event2" value="shakespearmonologue" required="">
</th>
<th><input type="Radio" name="event2" value="westernsolo" required="">
</th>
</tr>


<tr><td>Event 3
</td>
<td><input type="Radio" name="event3" value="ashtapati" required="">
</td>
<td><input type="Radio" name="event3" value="classicaldance" required="">
</td>
<td><input type="Radio" name="event3" value="classicalmusic" required="">
</td>
<td><input type="Radio" name="event3" value="elocutionenglish" required="">
</td>
<td><input type="Radio" name="event3" value="elocutionmalayalam" required="">
</td>
<td><input type="Radio" name="event3" value="elocutionsanskrit" required="">
</td>
<td><input type="Radio" name="event3" value="elocutiontelugu" required="">
</td>
<td><input type="Radio" name="event3" value="fancydress" required="">
</td>
<td><input type="Radio" name="event3" value="instrumentalpiano" required="">
</td>
<td><input type="Radio" name="event3" value="instrumentalstring"required="" >
</td>
<th><input type="Radio" name="event3" value="instrumentalwind"required="" >
</th>
<th><input type="Radio" name="event3" value="instrumentalpersussion"required="" >
</th>
<th><input type="Radio" name="event3" value="karoke"required="" >
</th>
<th><input type="Radio" name="event3" value="kathakalisangeetham"required=""  >
</th>
<th><input type="Radio" name="event3" value="kathaprsangam" required="">
</th>
<th><input type="Radio" name="event3" value="lightmusic" required="">
</th>
<th><input type="Radio" name="event3" value="mapilapattu" required="">
</th>
<th><input type="Radio" name="event3" value="mimicry" required="">
</th>
<th><input type="Radio" name="event3" value="monoact" required="" >
</th>
<th><input type="Radio" name="event3" value="nonclassicaldance" required="">
</th>
<th><input type="Radio" name="event3" value="resitationenglish" required="">
</th>
<th><input type="Radio" name="event3" value="resitationhindi" required="">
</th>
<th><input type="Radio" name="event3" value="resitationmalayalam" required="">
</th>
<th><input type="Radio" name="event3" value="resitationsanskrit" required="">
</th>
<th><input type="Radio" name="event3" value="resitationtelugu" required="">
</th>


<th><input type="Radio" name="event3" value="shakespearmonologue"required="" >
</th>
<th><input type="Radio" name="event3" value="westernsolo" required="" >
</th>
</tr>

<tr><td>Event 4
</td>
<td><input type="Radio" name="event4" value="ashtapati"required="" >
</td>
<td><input type="Radio" name="event4" value="classicaldance" required="">
</td>
<td><input type="Radio" name="event4" value="classicalmusic" required="">
</td>
<td><input type="Radio" name="event4" value="elocutionenglish"required="" >
</td>
<td><input type="Radio" name="event4" value="elocutionmalayalam" required="">
</td>
<td><input type="Radio" name="event4" value="elocutionsanskrit" required="">
</td>
<td><input type="Radio" name="event4" value="elocutiontelugu" required="">
</td>
<td><input type="Radio" name="event4" value="fancydress" required="">
</td>
<td><input type="Radio" name="event4" value="instrumentalpiano" required="">
</td>
<td><input type="Radio" name="event4" value="instrumentalstring"required="" >
</td>
<th><input type="Radio" name="event4" value="instrumentalwind" required="">
</th>
<th><input type="Radio" name="event4" value="instrumentalpersussion" required="">
</th>
<th><input type="Radio" name="event4" value="karoke" required="">
</th>
<th><input type="Radio" name="event4" value="kathakalisangeetham"required="" >
</th>
<th><input type="Radio" name="event4" value="kathaprsangam" required="">
</th>
<th><input type="Radio" name="event4" value="lightmusic" required="">
</th>
<th><input type="Radio" name="event4" value="mapilapattu" required="">
</th>
<th><input type="Radio" name="event4" value="mimicry" required="">
</th>
<th><input type="Radio" name="event4" value="monoact" required="">
</th>
<th><input type="Radio" name="event4" value="nonclassicaldance"required="" >
</th>
<th><input type="Radio" name="event4" value="resitationenglish" required="">
</th>
<th><input type="Radio" name="event4" value="resitationhindi" required="">
</th>
<th><input type="Radio" name="event4" value="resitationmalayalam" required="">
</th>
<th><input type="Radio" name="event4" value="resitationsanskrit" required="">
</th>
<th><input type="Radio" name="event4" value="resitationtelugu" required="">
</th>


<th><input type="Radio" name="event4" value="shakespearmonologue" required="">
</th>
<th><input type="Radio" name="event4" value="westernsolo" required="">
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
<th><input type="radio" name="event11" value="cartooning" required="">
</th>
<th><input type="radio" name="event11" value="claymodeling" required="">
</th>
<th><input type="radio" name="event11" value="essayenglish" required="">
</th>
<th><input type="radio" name="event11" value="essaymalayalam" required=""> 
</th>
<th><input type="radio" name="event11" value="essaytamil" required="">
</th>
<th><input type="radio" name="event11" value="pencildrawing" required="" >
</th>
<th><input type="radio" name="event11" value="poetryenglish" required="">
</th>
<th><input type="radio" name="event11" value="poetrymalayalam" required="">
</th>
<th><input type="radio" name="event11" value="Poetrytelugu"required="" >
</th>
<th><input type="radio" name="event11" value="storyenglish" required="">
</th>
<th><input type="radio" name="event11" value="storymalayalam" required="">
</th>
<th><input type="radio" name="event11" value="watercolor" required="">
</th></tr>

<tr><th>Event 2
</th>
<th><input type="radio" name="event12" value="cartooning" required="">
</th>
<th><input type="radio" name="event12" value="claymodeling" required="">
</th>
<th><input type="radio" name="event12" value="essayenglish" required="">
</th>
<th><input type="radio" name="event12" value="essaymalayalam" required="" >
</th>
<th><input type="radio" name="event12" value="essaytamil" required="">
</th>
<th><input type="radio" name="event12" value="pencildrawing"required="" >
</th>
<th><input type="radio" name="event12" value="poetryenglish" required="">
</th>
<th><input type="radio" name="event12" value="poetrymalayalam"required="" >
</th>
<th><input type="radio" name="event12" value="Poetrytelugu" required="">
</th>
<th><input type="radio" name="event12" value="storyenglish" required="">
</th>
<th><input type="radio" name="event12" value="storymalayalam" required="">
</th>
<th><input type="radio" name="event12" value="watercolor" required="">
</th></tr>


<tr><th>Event 3
</th>
<th><input type="radio" name="event13" value="cartooning" required="">
</th>
<th><input type="radio" name="event13" value="claymodeling" required="" >
</th>
<th><input type="radio" name="event13" value="essayenglish" required="">
</th>
<th><input type="radio" name="event13" value="essaymalayalam" required="">
</th>
<th><input type="radio" name="event13" value="essaytamil" required="">
</th>
<th><input type="radio" name="event13" value="pencildrawing" required="">
</th>
<th><input type="radio" name="event13" value="poetryenglish" required="">
</th>
<th><input type="radio" name="event13" value="poetrymalayalam" required="">
</th>
<th><input type="radio" name="event13" value="Poetrytelugu" required="">
</th>
<th><input type="radio" name="event13" value="storyenglish" required="">
</th>
<th><input type="radio" name="event13" value="storymalayalam" required="">
</th>
<th><input type="radio" name="event13" value="watercolor" required="">
</th></tr>

<tr><th>Event 4
</th>
<th><input type="radio" name="event14" value="cartooning" required="">
</th>
<th><input type="radio" name="event14" value="claymodeling"required="" >
</th>
<th><input type="radio" name="event14" value="essayenglish"required="" >
</th>
<th><input type="radio" name="event14" value="essaymalayalam"required="" >
</th>
<th><input type="radio" name="event14" value="essaytamil"required="" >
</th>
<th><input type="radio" name="event14" value="pencildrawing" required="">
</th>
<th><input type="radio" name="event14" value="poetryenglish" required="">
</th>
<th><input type="radio" name="event14" value="poetrymalayalam"required="" >
</th>
<th><input type="radio" name="event14" value="Poetrytelugu"required="" >
</th>
<th><input type="radio" name="event14" value="storyenglish" required="">
</th>
<th><input type="radio" name="event14" value="storymalayalam" required="">
</th>
<th><input type="radio" name="event14" value="watercolor" required="">
</th></tr>


	</table><br><br><br><center>
<input type="button" value="register" onclick="validate()"></center>
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
