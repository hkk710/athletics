<?php

if($_GET['t1']==null)
{
    $color = "white";
}
else
{
    $color=$_GET['t1'];
}
echo $color;


if($_GET['t2'] == null)
{
    $font12 = "VERDANA";
}
else
{
    $font12=$_GET['t2'];
}
    

?>




<html>
<head>
</head>
<body bgcolor=<?php echo $color ?> > 
<form name="test" method="get" action="test11.php">
    
<select name="t1">
    <option>red</option>
    <option>black</option>
    </select>
    
<select name="t2">
    <option>Algerian</option>
    <option>VERDANA</option>
    </select>
<input type="submit" value="change to selected color" onclick="">
</form>
    
    <form action="test11.php" method="get">
     heloo..haii
       
<font face=<?php echo $font12 ?> > helooo </font> 
    <input type="submit" value="change to selected font" >
</form>



    
</body>
</html>