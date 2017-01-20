<?php
include("../../connection.php");
$sql = "SELECT * FROM `event_head` WHERE `page`=1 ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
				    
while($row = mysqli_fetch_assoc($result)) {
$color = $row["color"] ;
$text = $row["text"] ;
$style = $row["font"];
}
}
?>

<html>
<head>
<title>Content Management System</title>
  
<head>
<body>
<h1>The content editor of page 2 title</h1>
</br>
</br>
<form name="f1" action="p2.php">
Content : <input type="text" name="c1" value = <?php echo $text ?> >
</br>
<form name="f2" action="p2.php">
Color : <input type="text" name="c2" value = <?php echo $color ?> >
</br>
<form name="f3" action="p2.php">
style : <input type="text" name="c3" value = <?php echo $style ?> >
<input type="submit">
</form
    
   
</body>
</html> 