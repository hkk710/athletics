<?php


function chestnum(){
  $servername = "localhost";
  $username = "athletics";
  $password = "amrita_108";
  $dbname = "athletics";
  static $max;
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  //selecting all chest number unallotted students
  $query = 'SELECT * FROM STUDENT WHERE CHEST = 0';
  $result = mysqli_query($conn, $query);

  //selecting all departments' max chest number
  //$query = 'SELECT MAX(CHEST) FROM student GROUP BY batch';
  //$max = mysqli_query($conn, $query);


  while($row = mysqli_fetch_assoc($result)){
    $batch = $row['batch'];
    $roll =  $row['roll'];
    $mail12 = $row['email'];
    $user1 = $row['name'];
    $q = "SELECT MAX(`CHEST`) FROM `STUDENT` WHERE `batch`='$batch'";
    //$q = "SELECT MAX(CHEST) WHERE batch = $batch";
    $allmax = mysqli_query($conn, $q);

    while($rowm = mysqli_fetch_assoc($allmax))
   	 {
   		  $max=$rowm['MAX(`CHEST`)'];
   	 }
/*
  CHEST NUMBER ALLOCATION INFO
  //100-250mech, 251-400ec, 401-550eee, 551-700cse, 701-850csa
*/
    //Checking for the department and setting chest number
    if($batch==1 && $max==0){
      $q = "UPDATE STUDENT SET CHEST = 100 WHERE roll LIKE '$roll'";
      $max = 100;
    } else if($batch==1 && $max == 250) {
      $q = "UPDATE student SET CHEST = 900 WHERE roll LIKE '$roll'";
      $max = 900;
    } else if($batch==1){
      $max++;
      $q = "UPDATE STUDENT SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    if($batch==2 && $max==0){
      $q = "UPDATE STUDENT SET CHEST = 251 WHERE roll LIKE '$roll'";
      $max = 251;
    } else if($batch==2 && $max == 400) {
      $q = "UPDATE STUDENT SET CHEST = 1000 WHERE roll LIKE '$roll'";
      $max = 1000;
    } else if($batch==2) {
      $max++;
      $q = "UPDATE STUDENT SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    if($batch==3 && $max==0){
      $q = "UPDATE STUDENT SET CHEST = 401 WHERE roll LIKE '$roll'";
      $max = 401;
    }  else if($batch==3 && $max == 550) {
      $q = "UPDATE STUDENT SET CHEST = 1100 WHERE roll LIKE '$roll'";
      $max = 1100;
    } else if($batch==3) {
      $max++;
      $q = "UPDATE STUDENT SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    if($batch==4 && $max==0){
      $q = "UPDATE STUDENT SET CHEST = 551 WHERE roll LIKE '$roll'";
      $max = 551;
    } else if($batch==4 && $max == 700) {
      $q = "UPDATE STUDENT SET CHEST = 1200 WHERE roll LIKE '$roll'";
      $max = 1200;
    } else if($batch==4) {
      $max++;
      $q = "UPDATE STUDENT SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    if($batch==5 && $max==0){
      $q = "UPDATE STUDENT SET CHEST = 701 WHERE roll LIKE '$roll'";
      $max = 701;
    } else if($batch==5 && $max == 850) {
      $q = "UPDATE STUDENT SET CHEST = 1300 WHERE roll LIKE '$roll'";
      $max = 1300;
    } else if($batch==5) {
      $max++;
      $q = "UPDATE STUDENT SET CHEST = $max WHERE roll LIKE '$roll'";
    }

    //assigning the chest number
    mysqli_query($conn, $q);

    $res = mysqli_query($conn, $q);

    //sending email

    if ($res) {

  require("/home/public_html/athletics/PHPMailer-master/PHPMailerAutoload.php");

  /////////////////Email to participant

  $mail = new PHPMailer(true);

  $mail->IsSMTP();                                      // set mailer to use SMTP
  $mail->Host = "smtp.sendgrid.net";  // specify main and backup server
  $mail->Port = 25;
  $mail->SMTPAuth = true;     // turn on SMTP authentication
  $mail->Username = "apikey";  // SMTP username
  $mail->Password = "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"; // SMTP password
  //$mail->SMTPDebug = 3; Uncomment to enable error_reporting in mail
  $mail->From = "arjunnmisme@gmail.com";
  $mail->FromName = "Department of Physical Education";
  $mail->AddAddress($mail12, $user1);
  $mail->AddReplyTo("arjunnmisme@gmail.com", "Information");

  $mail->WordWrap = 50;                                // set word wrap to 50 characters
  //$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
  //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
  $mail->IsHTML(true);                                  // set email format to HTML
  $mail->Subject = "Annual Athletic Meet 2016-2017";
  $mail->Body    = "Dear $user1,"."<br/>
      Greetings from Amrita University & Congratulations for registering for Annual Athletic Meet 2016-2017!<br/><br/>".
  "<center><b>Your chest number is</b>".$max."</center><br><br>We wish you all the very best!";
  $mail->AltBody = "Greetings from Amrita University & Congratulations for registering for Annual Athletic Meet 2016-2017!<br/><br/>".
  "<center><b>Your chest number is</b>".$max."</center><br><br>We wish you all the very best!";

  if(!$mail->Send())
  {
     echo "Message could not be sent. <p>";
     echo "Mailer Error: " . $mail->ErrorInfo;
     exit;
  }

  echo "<h4 style='color:white'><center>Chest number has been sent to your email</center></h4>";

  }
  	// could not insert
  else {
  	   echo "User could not be added to the database. Reason: " . mysqli_error($conn);
  		echo "Something went wrong";
  }

}
}
?>
