<?php



    $txt=$_GET['t1'];
	$servername = "localhost";
	$username = "akhila";
	$password = "akhila";
	$dbname = "cms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM `samp` WHERE `txt` LIKE 'head' ";

$result = mysqli_query($conn, $sql);
//echo "hello";
		$sno = 1;
				if (mysqli_num_rows($result) > 0) {
				    
					while($row = mysqli_fetch_assoc($result)) {
				   	$color = $row["color"] ;
$txt = $row["txt"] ;
					
}
}
?>





<html>
<head>
<style>
body {
    background-color: #000033;
}
div {
    background-color: lightgrey;
    width:1150px;
	height:700px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
    
}
    div1{
    background-color: lightgrey;
    width:1150px;
	height:700px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
        
    }

h1 {
    color: white;
    text-align: center;
 	border: 2px solid #a1a1a1;
    padding: 10px 40px; 
    background: #003399;
    width: 800px;
    border-radius: 2px;
}
p.ex {
    color: rgb(0,0,0);
	//font-family: "Harlow Solid Italic";
	font-size: 36px;
}
LOL{
	color:#000000;
	background-color:#CCCCCC;
	padding:1px;
}
div2 {
    border: 2px solid #a1a1a1;
    padding: 10px 40px; 
    background: #336600;
    width: 300px;
    border-radius: 25px;
}
div3 {
    border: 2px solid #a1a1a1;
    padding: 10px 40px; 
    background: #336600;
    width: 1250px;
}
p3    {color:white;
font-weight: bold;
}

  



  <title>Page Title</title>

</style>
</head>
<body>



    <div> <center> <h1 id="h1" contenteditable > <?php echo $txt ?></center></h1><input type="submit" value="save">
    <form name="test" method="get" action="home.php"> <input type="text" name="t1" placeholder="enter a name"><input type="submit"> <a href=""><img src="edit.jpg" height="30" width="30"></a></form>
 
<img src="10868147_759403137477311_40179903063275741_n.jpg" style="float:right" width="500" height="500" border="10" align="center" />



<br>
<br>
<br>
<center>
 <div2><a id="LOL" href="academics.html"><p3>ACADEMICS</p3></a></div2>
&nbsp;&nbsp;&nbsp;&nbsp;
<div2><a id="LOL" href="personal.html"><p3>PERSONAL</p3></a></div2>
</div2>
</center>

<br>
<br>
<br>

  <p class="ex" align="center">This website is all about my personal details.. Both Academic and personal.. For any more information, you can contact me at 9496767202 and by mail through r.adarsh1994@gmail.com</p>


</div>
</body>

</html>