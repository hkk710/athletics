<?php
session_start();
$user=$_POST['uname'];
$pass=$_POST['pwd'];
if($user=="admin" && $pass=="u313bca001"){
	        $_SESSION["adminlogged"] = true;
		header("Location:./1oopo54621mlkijufravmz3940qwtr.php");
		echo 'hallo';
		die();
				
	}
else
{
		echo 'hallo';
    
		header("Location:./ADMIN.html");
		echo 'hallo';
		die();

}


?>
