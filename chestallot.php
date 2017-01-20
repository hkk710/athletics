<?php

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

$fetchquery = "SELECT `roll`,`CHEST`,`batch` FROM `STUDENT` ";
//$chestupquery = "UPDATE  `STUDENT` SET  `CHEST` =776 WHERE  `roll` LIKE  \"am.en.u4bca12546\"";
$result = mysqli_query($conn, $fetchquery);
 while($rowp = mysqli_fetch_assoc($result))
	 {
		 $bch=$rowp["batch"];

	// echo $bch;
/*$maxchest= "SELECT MAX(`CHEST`) FROM `STUDENT` WHERE `batch`='$bch'";
$result1 = mysqli_query($conn, $maxchest);
 while($rowm = mysqli_fetch_assoc($result1))
	 {
		 $bcr=$rowm["MAX(`CHEST`)"];
	 }
	 echo $bcr;*/
//$cse = 185; $csa = 241; $me = 368; $ece = 499; $eee = 563;



$val = 0;

$rr = 0;
$result = mysqli_query($conn, $fetchquery);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$bch=$row["batch"];
		$maxchest= "SELECT MAX(`CHEST`) FROM `STUDENT` WHERE `batch`='$bch'";
$result1 = mysqli_query($conn, $maxchest);
 while($rowm = mysqli_fetch_assoc($result1))
	 {
		 $bcr=$rowm["CHEST"];
	 }
	 $cse = $bcr; $csa = $bcr; $me = $bcr; $ece = $bcr; $eee = $bcr;
	if( $row["CHEST"] == 0 )	{

		echo "<br> id: " . $row["roll"]. " - Name: " . $row["batch"];

		$rr = $row["roll"];

		if( $row["batch"] == '1')
			{
			if( $cse == 599 )	{
				$cse = 5001;
			}
			else	{
				$cse++;
			}
			$val = $cse;
		}
		else if( $row["batch"] == '2' )
			{
			//bca, bsc, mca, msc
			if( $csa == 699 )	{
				$csa = 6200;
			}
			else	{
				$csa++;
			}
			$val = $csa;
		}
		else if( $row["batch"] == '3'	){
			if( $me == 799 )	{
				$me = 7300;
			}
			else	{
				$me++;
			}
			$val = $me;
		}



$chestupquery = "UPDATE  `STUDENT` SET  `CHEST` = '$val' WHERE  `roll` LIKE  '$rr'";
		$res = mysqli_query($conn, $chestupquery);

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "mail.yourdomain.com"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "vajravyuha@gmail.com";  // GMAIL username
  $mail->Password   = "9744547214";            // GMAIL password
  $mail->AddReplyTo($email, 'participant');
  $mail->AddAddress($email, 'participant');
  $mail->SetFrom('vajravyuha@gmail.com', 'Athletics Meet - Vajravyuha');
  $mail->AddReplyTo($email, '$email');
	$msg= 'Registered '.$rr.' with chest no : '.$val;

  $mail->Subject = $msg;
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML(file_get_contents('examples/contents.html'));
 // $mail->AddAttachment('images/phpmailer.gif');      // attachment
 // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}

		echo "<br> HI ".$res." ".$val." ".$rr;
	} //end of if
header("Location: success.html");
    }

} else {
    header("Location: index.html");
}
}
//mysqli_close($conn);
?>
