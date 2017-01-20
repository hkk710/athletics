<?php
/*
	$servername = "localhost";
	$username = "root";
	$password = "password";
*/
	echo "sdfsdfsd";

	$servername = "localhost";
	$username = "athletics";
	$password = "amrita_108";
	$dbname = "athletics";



	$reg_status = false;
	
	$v_name = $_POST["student_name"]; //echo $v_name;
	$v_roll = $_POST["student_rollno"]; //echo $v_roll;
	$v_batch = $_POST["student_batch"]; //echo $v_batch;
	$v_gender = $_POST["student_gender"]; //echo $v_gender;
	$v_phone = $_POST["student_phone"]; //echo $v_phone;
	$v_email = $_POST["email"]; //echo $v_email;
	$v_ev1 = $_POST["event_one"];
	$v_ev2 = $_POST["event_two"];
	$v_ev3 = $_POST["event_three"];
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn)  
	    echo "Database connection established!";
	else
	    echo "Database connection failed!";
	  
	$stud_reg_query = "INSERT INTO `athletics`.`STUDENT` 
			(`roll`, `name`, `batch`, `gender`, `phone`, `email`) 
		VALUES ('$v_roll', '$v_name', '$v_batch', '$v_gender', 
			'$v_phone', '$v_email')";
                            
   
        $event_reg_query = "INSERT INTO `athletics`.`REGISTRATION` (`roll` ,
								`event_id`)
					VALUES ('$v_roll', $v_ev1)";
						

	$stud_reg = mysqli_query($conn, $stud_reg_query);
	
	if( $stud_reg )	{
		echo "YAY";
	}
	else	{
		echo "sdkjsh";
	}
/*	
	//DELETE FROM  `STUDENT` WHERE  `roll` LIKE  "AM.AR.U313BCA0052"

	if ($stud_reg)	{
	
		if( $v_ev1 != "none" )	{
			$event_reg_query = "INSERT INTO `athletics`.`REGISTRATION` (`roll` ,
								`event_id`)
					VALUES ('$v_roll', $v_ev1)";
			$reg1 = mysqli_query($conn, $event_reg_query);
			if($reg1)	{
				$reg_status = true;			
			}
			else	{
				$reg_status = false;			
				echo "EV1".mysqli_error($conn);				
			}			
		}
		
		if( $v_ev2 != "none" )	{
			$event_reg_query = "INSERT INTO `athletics`.`REGISTRATION` (`roll` ,
								`event_id`)
					VALUES ('$v_roll', $v_ev2)";
			$reg2 = mysqli_query($conn, $event_reg_query);
			if($reg2)	{
				$reg_status = true;			
			}
			else	{
				$reg_status = false;		
				echo "EV2".mysqli_error($conn);					
			}
		}
		
		if( $v_ev3 != "none" )	{
			$event_reg_query = "INSERT INTO `athletics`.`REGISTRATION` (`roll` ,
								`event_id`)
					VALUES ('$v_roll', $v_ev3)";
			$reg3 = mysqli_query($conn, $event_reg_query);
			if($reg3)	{
				$reg_status = true;			
			}
			else	{
				$reg_status = false;
				echo "EV3".mysqli_error($conn);					
			}
		}      
	/*
		if (mysqli_query($conn, $event_reg_query))	{
			echo "<br>Event registration record created successfully";
			$reg_status = true;
		}
		else	{
			echo "<br>Error: Event registration record".mysqli_error($conn);
			$reg_status = false;
		}
	*/
	//	$reg_status = true;
/*
	}
	else	{
		$reg_status = false;
		echo mysqli_error($conn);
	}
*/
/*
	if (mysqli_query($conn, $event_reg_query))	{
		echo "<br>Event registration record created successfully";
	}
	else	{
		echo "<br>Error: Event registration record".mysqli_error($conn);
	}
//
	if(!$reg_status)	{
		$del_query = "DELETE FROM  `athletics`.`STUDENT` WHERE  `roll` LIKE  '$v_roll' ";
		mysqli_query($conn, $del_query);
	}
*/		
//mysqli_close($conn);
?>
