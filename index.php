<?php
include 'include/connect.php';
include 'include/Back-end-login.php';

 
        


?>


<!DOCTYPE html>      <!-- =======LOG IN FORM========-->


<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<title>Job Order System</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>


<body >

<div class="container">
<!--   HEADER  -->
<header class="ulo" >
	<ul>
		<li class="list1"><img src="img/olfu_logo_white_burned.png" class="olfu_logo"></li>
		<li class="list2"><h2 id="fatima_text">O u r &nbsp Lady &nbsp of &nbsp Fatima <br> U&nbsp  n&nbsp i &nbsp v &nbsp e &nbsp r&nbsp s &nbsp i &nbsp t &nbsp y</h2></li>
		<li class="list3" style="position: static;"><h1 class="mis">Pampanga Campus</h1></li>
	</ul>
</header >
<!--  END HEADER  -->


<!--   LOGIN FORM  -->
	<div class="background" style="width: 100%; height: 88.4vh;">

		<div class="rgba">


			<form action="index.php?action=login" method="POST">
				


				<div class="logo_title">
					<img src="img/olfu_logo_white_burned.png" class="log_logo">
					<h5>Job Order System</h5>
				</div>



		  
     		 	<div class="input">


     		 		<h6>Log in</h6>

       			 	<div class="user">
         				 <i class="fas fa-user fa-2x"></i>
         				 <input type="text" name="user" placeholder="Username" id="username" style="border-radius: 10px;" required>
       				 </div>

        			<div class="pass">
         				<i class="fas fa-lock fa-2x"></i>
          				<input type="password" name="pass" placeholder="Password" id="password" style="border-radius: 10px;"  required>
        			</div>
        	
        			<div class="btn">
          				<input type="submit" name="log_btn" value="Login" id="btn">
        			</div>

      			</div>

            <p style="text-align: center; color:red;"> <?php  echo $error;
               ?>  </p>
		        <p style="text-align: center; color:green;"> <?php  echo $success;
               ?>  </p>
				


			</form>

		</div>
	</div>
<!--   LOGIN FORM END -->
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
</html>