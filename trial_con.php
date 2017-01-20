<?php

mysql_connect('localhost', 'akhila', 'akhila');
mysql_select_db('cms');

$sql = "SELECT col FROM samp";
$result = mysql_query($sql);
$col=$_GET['col'];

?>

<html>
    <body bgcolor=<?php echo $col ?>>
        
        
        <form method="GET" action="trial_con.php">
    <select name='col'>

    <?php
while ($row = mysql_fetch_array($result)) {
   // <select name="color" value=''>
    echo "<option value='" . $row['col'] ."'>" . $row['col'] ."</option>";

     
}?>
    </select>
    <input type="submit" value="change to selected color">



    
    
</body>
</html>