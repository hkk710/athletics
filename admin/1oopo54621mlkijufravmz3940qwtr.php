<?php
session_start();
if($_SESSION["adminlogged"]!=true){
  header("Location:./index.html");
}
?>
<!doctype html>

<head>
    <title>Amrita sports 2015 registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../js/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="../js/bootstrap-theme.min.css">
  
     <!-- Custom styles -->
     <link rel="stylesheet" href="../css/reg_form.min.css">
      <link rel="stylesheet" href="../css/main.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <script src="../js/reg_form.min.js"></script>
  <style>
  #admin_links{
  margin: 0 auto;
}

#admin_links a{
margin-bottom:10px;
}

#clear{
 margin:300px;
}
</style>
</head>
<body>
    <div class="form_wrap" id="reg_form">
			<div class="navbar-collapse collapse">
          <a class="pull-left" href="unset.php">   LOG OUT</a> </div>
        <form class="form-horizontal" action = "add.php" method = "post" name="form" onsubmit="return check_form();">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                       <img src="../images/header.png"/>
                   </div>
               </div>
                <!-- Registration form
                 -->
                 <div id="legend">
                <h3 class="text-center" class="subhead">Welcome admin</h3><br><br>
               <div id="admin_links" class="container">
                   <div class="row">
               <!--   <div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../deA.php" class="btn btn-primary btn-lg col-md-6">Delete Student Registration</a>
         </div>
          <div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../deAC.php" class="btn btn-primary btn-lg col-md-6">Delete Cricket Team</a>
         </div>
         
         <div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../adminchest.php" class="btn btn-primary btn-lg col-md-6">Chest Numbers</a>
         </div>-->
<div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../announce.html" class="btn btn-primary btn-lg col-md-6">EVENTWISE LIST</a>

         </div>
<div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../classwise.php" class="btn btn-primary btn-lg col-md-6">CLASSWISE LIST</a>
         </div>
		 <div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../RESULTS" class="btn btn-primary btn-lg col-md-6">RESULTS ENTER</a>
         </div>
		 <div class="col-md-12  col-md-6 col-md-offset-4">
             <a href="../ANNOUNCE" class="btn btn-primary btn-lg col-md-6">RESULT VIEW</a>
         </div>
		 

            </div>
  <div  id="clear"> 
  
</div>
                </div>
                
    </div> 
<!-- /container --> 
                        </div>
                        </div>
                </div>
                
            </fieldset>
        </form>
    </div>
</body>
