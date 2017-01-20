<!doctype html>

<head>

<?PHP
	include 'chestnum.php';

	$servername = "localhost";
	$username = "athletics";
	$password = "amrita_108";

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


	$conn = new mysqli($servername, $username, $password);
	/*
	if($conn)
	    echo "Database connection established!";
	else
	    echo "Database connection failed!";
	  */

	$stud_reg_query = "INSERT INTO `athletics`.`STUDENT`
			(`roll`, `name`, `batch`, `gender`, `phone`, `email`,`EVENT_1`,`EVENT_2`,`EVENT_3`)
		VALUES ('$v_roll', '$v_name', '$v_batch', '$v_gender',
			'$v_phone', '$v_email','$v_ev1','$v_ev2','$v_ev3')";


	$stud_reg = mysqli_query($conn, $stud_reg_query);

	if($stud_reg)
	{
		$reg_status = true;
		chestnum();
	}
	else
	{
		mysqli_error($conn);
		$reg_status = false;
	}


	//DELETE FROM  `STUDENT` WHERE  `roll` LIKE  "AM.AR.U313BCA0052"

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
	if (mysqli_query($conn, $event_reg_query))	{
		echo "<br>Event registration record created successfully";
	}
	else	{
		echo "<br>Error: Event registration record".mysqli_error($conn);
	}
*/


mysqli_close($conn);
?>

    <title>Amrita sports 2017 registration</title>
<!--
    <!-- Latest compiled and minified CSS
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,400' rel='stylesheet' type='text/css'>

    <!-- Optional theme
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
 -->
<link rel="stylesheet" href="js/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="js/bootstrap-theme.min.css">

     <!-- Custom styles -->
     <link rel="stylesheet" href="css/reg_form.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <script src="js/reg_form.min.js"></script>
<style>
        body{
        background: #6e1d2c;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
        #reg_form{
         background: rgba(251, 255, 255, 1.9);
        }
        .form_wrap {
            margin: 0 auto; No Privileges
            width: 1024px;
             box-shadow: 7px -1px 69px -5px rgba(0,0,0,0.75);;
        }
        label.radio-inline {
            display: inline;

        }
        h3{
        font-family: 'Open Sans', sans-serif;
        font-size:30px;
        font-weight: 300;
        }
        #student_gender label,
        input {
            display: inline-block;
        }
        label{
        font-weight:bold;
        font-family: 'Open Sans', sans-serif; ;
        }
        #event_list label{
           padding-left:100px;
           display: inline-block;
            font-size:18px;
            font-family: 'open sans';
            font-weight: 600;
        }
        #event_list input[type="text"]{
         border: 1px solid brown;
        }
        #event_list input[type="checkbox"]{
            margin:10px;
        }
        .male-event,female-event{
         color:black;
         font-weight: normal;
        }
        #feilds{
        background:#f4f4f4;
        padding-top: 50px;
        border-top: 2px solid #acd200;
        }
        .form-control:focus{
        box-shadow: 0 1px 1px #acd200 inset, 0 1px 4px #d5de26;
        border: 1px solid #acd200;
        }

       .error_message{
        margin-left:100px;
        font-size:18px;
	}

        .success_bar{

        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            var disabled_color = "#f4f4f4";
            function genderset(){
                //male-event selector
         $("#student_gender-0").click(function(){
             //enable male events
             $(".event_male").attr("disabled",false);
             $(".event_male").parent().css({"color":"black"});

             //disable female
             $(".event_female").attr("disabled",true);
             $(".event_female").parent().css({"color":disabled_color});
                    });
                //female-event selector
          $("#student_gender-1").click(function(){
              //enable female events
             $(".event_female").attr("disabled",false);
             $(".event_female").parent().css({"color":"black"});
               //disable male
             $(".event_male").attr("disabled",true);
             $(".event_male").parent().css({"color":disabled_color});
                    }
         );
            }
                var x = ($(window).width()) / 2;
                $("#form_wrap,").css("width",x);
                genderset();
        });
    </script>
</head>

<body>
    <div class="form_wrap" id="reg_form">
   <div class="navbar-collapse collapse">
          <a class="pull-left" href="index.html"><img src="img/header.png" alt="Home" class="logo">  &lArr; BACK HOME</a> </div>
        <form class="form-horizontal" action = "reg_handler.php" method="POST">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                       <img src="images/header.png"/>
                   </div>
               </div>
                <!-- Registration form
                 -->
                 <div id="legend">
                <h3 class="text-center" class="subhead"></h3>
                <div class="container">
                   <div class ="row">
                <?PHP
//                	$reg_status = true;
                	if($reg_status == true)	{
                		echo "<br><div class ='col-md-9 alert alert-success success_bar text-center error_message'>Your registration is successful!</div>";
                	}
                	else	{
                		echo "<div class='col-md-9 alert alert-danger error_message text-center'>Oops! We have a problem with your registration.</br>Maybe You Have Duplicate Entries</br>Try resubmitting the form with correct details :)</div>";

                		//echo "<br>Try resubmitting!";
                	//	echo "\nPlease contact helpdesk"
         //       		echo "ERR: " .mysqli_error($conn);;
                	}


                ?>
               </div>
                </div>
                </div>

                <!--Name -->
                <!-- hammerthrow stuff -->
            </fieldset>

        </form>
    </div>
</body>
