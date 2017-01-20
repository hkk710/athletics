<?php


function chestnum(){
  $servername = "localhost";
  $username = "athletics";
  $password = "amrita_108";
  $dbname = "athletics";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  //selecting all chest number unallotted students
  $query = 'SELECT * FROM student WHERE CHEST = 0';
  $result = mysqli_query($conn, $query);

  //selecting all departments' max chest number
  //$query = 'SELECT MAX(CHEST) FROM student GROUP BY batch';
  //$max = mysqli_query($conn, $query);


  while($row = mysqli_fetch_assoc($result)){
    $batch = $row['batch'];
    $roll =  $row['roll'];
    $q = "SELECT MAX(`CHEST`) FROM `STUDENT` WHERE `batch`='$batch'";
    //$q = "SELECT MAX(CHEST) WHERE batch = $batch";
    $allmax = mysqli_query($conn, $q);

    while($rowm = mysqli_fetch_assoc($allmax))
   	 {
   		 echo $max=$rowm['MAX(`CHEST`)'];
   	 }
   	 //echo $cse = $bcr;echo $csa = $bcr;echo $me = $bcr; echo $ece = $bcr;echo $eee = $bcr;

/*
  CHEST NUMBER ALLOCATION INFO
  //100-250mech, 251-400ec, 401-550eee, 551-700cse, 701-850csa
*/

    //Checking for the department and setting chest number
    if($batch==1 && $max==0){
      $q = "UPDATE student SET CHEST = 100 WHERE roll LIKE '$roll'";
    } else if($batch==1 && $max == 250) {
      $q = "UPDATE student SET CHEST = 900 WHERE roll LIKE '$roll'";
    } else if($batch==1){
      $max++;
      $q = "UPDATE student SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    if($batch==2 && $max==0){
      $q = "UPDATE student SET CHEST = 251 WHERE roll LIKE '$roll'";
    } else if($batch==2 && $max == 400) {
      $q = "UPDATE student SET CHEST = 1000 WHERE roll LIKE '$roll'";
    } else if($batch==2) {
      $max++;
      $q = "UPDATE student SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    if($batch==3 && $max==0){
      $q = "UPDATE student SET CHEST = 401 WHERE roll LIKE '$roll'";
    }  else if($batch==3 && $max == 550) {
      $q = "UPDATE student SET CHEST = 1100 WHERE roll LIKE '$roll'";
    } else if($batch==3) {
      $max++;
      $q = "UPDATE student SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    if($batch==4 && $max==0){
      $q = "UPDATE student SET CHEST = 551 WHERE roll LIKE '$roll'";
    } else if($batch==4 && $max == 700) {
      $q = "UPDATE student SET CHEST = 1200 WHERE roll LIKE '$roll'";
    } else if($batch==4) {
      $max++;
      $q = "UPDATE student SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    if($batch==5 && $max==0){
      $q = "UPDATE student SET CHEST = 701 WHERE roll LIKE '$roll'";
    } else if($batch==5 && $max == 850) {
      $q = "UPDATE student SET CHEST = 1300 WHERE roll LIKE '$roll'";
    } else if($batch==5) {
      $max++;
      $q = "UPDATE student SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    //assigning the chest number
    $res = mysqli_query($conn, $q);

    //sending email

    $dupnameerror=1062;

    if($res){

      require("PHPMailerAutoload.php");

      $mail = new PHPMailer();

      $mail->IsSMTP();                                      // set mailer to use SMTP
      $mail->Host = "smtp.sendgrid.net";  // specify main and backup server
      $mail->SMTPAuth = true;     // turn on SMTP authentication
      $mail->Username = "Darkwolf";  // SMTP username
      $mail->Password = "vasudev123"; // SMTP password

      $mail->From = "from@example.com";
      $mail->FromName = "Mailer";
      $mail->AddAddress($mail12, $user1);
      $mail->AddAddress("ellen@example.com");                  // name is optional
      $mail->AddReplyTo("info@example.com", "Information");

      $mail->WordWrap = 50;                                 // set word wrap to 50 characters
      //$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
      //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
      $mail->IsHTML(true);                                  // set email format to HTML

      $mail->Subject = "Here is the subject";
      $mail->Body    = "This is your chest number:</b>".$max;
      $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

      if(!$mail->Send())
      {
         echo "Message could not be sent. <p>";
         echo "Mailer Error: " . $mail->ErrorInfo;
         exit;
      }

      echo "Message has been sent";

      	}


      	// could not insert
      	else {
      		if (mysqli_errno($conn) == $dupnameerror)
      		{
      			print 'User already exists';
      		}
      		else
      		{
      			//echo "User could not be added to the database. Reason: " . mysql_error();
      			echo "Something went wrong";
      		}
    }

  }
}

?>
