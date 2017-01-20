<?php

if($_GET['t1']==null)
{
    $col = "white";
}
else
{
    $col=$_GET['t1'];
}
echo $col;


if($_GET['t2'] == null)
{
    $font_face = "VERDANA";
}
else
{
    $font_face=$_GET['t2'];
}

?>




   <?php

mysql_connect('localhost', 'akhila', 'akhila');
mysql_select_db('cms');

$sql = "SELECT col FROM samp";
$result = mysql_query($sql);


?>

<html>
<head>
</head>
<body bgcolor=<?php echo $col ?> > 

   <?php
    echo "<form name="test" method="get" action="test11.php">";
    echo "<select name='col'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['col'] ."'>" . $row['col'] ."</option>";
}
echo "</select>";
      echo "<input type="submit" value="change to selected color">";
echo "</form>";
/*<select name="t1">
    <option>red</option>
    <option>black</option>
    <option>greem</option>
    </select>*/
     ?>
    
<!--select name="t2">
    <option>Algerian</option>
    <option>VERDANA</option>
    </select>


    
    <form action="test11.php" method="get">
     heloo..haii
       
<font face=</*?php echo $font_face ?> > helooo </font> 
    <input type="submit" value="change to selected font" >
</form>

-->

    
</body>
</html>