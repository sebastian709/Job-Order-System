<?php
session_start();
include 'include/security.php';
  
include 'include/connect.php';
include 'include/isset.php';



$user = $_SESSION['USERNAME'];



$all = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$user.'" ');

if(mysqli_num_rows($all) > 0)
{
  $pass = "";
  $id_reg = "";
  while ($row = mysqli_fetch_assoc($all)) 
  {
    $pass = $row["password"];
    $id_reg = $row["ID"];
  }
}


?> 
<!DOCTYPE html>
<html lang="en">



<!DOCTYPE html>      <!-- =======LOG IN FORM========-->

<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<title>Job Order System</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">

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


			<form method="post" action="register.php">

        <h6 style="margin-top: -20px;">Register</h6> 
				  <input type="hidden" name="id_reg" value="<?php echo $id_reg; ?>">


				<div class="f-col">
          <div>
              <label>Firstname</label>
              <input type="text" placeholder="Firstname" name="fname_reg">
              <label>Department</label>
              <input type="text" placeholder="Department" name="dept_reg" >
          </div>

          <div class="set-new">      
               <label>Your temporary Username</label>                              
               <input type="text" placeholder="Your Temporary Username" name="" value="<?php echo $user; ?>" readonly>
               <label>Set new Username</label>
               <input type="text" placeholder="New Username" name="new_uname_reg">
          </div>
				</div>
		  
     		 	<div class="s-col">

            <div style="text-align: center;">
               <label>Lastname</label>
               <input type="text" placeholder="Lastname"  name="lname_reg">
               <label>Your temporary Password</label>
               <input type="text" placeholder="Your Temporary Password" value="<?php echo $pass; ?>"  readonly>
            </div>
        		
            <div class="set-new" style="text-align: center;">
               
               <label>Set new password</label>
               <input type="password" placeholder="New Password" name="new_pass_reg">
               <label>Confirm Password</label>
               <input type="password" placeholder="Confirm Password" name="confirm_pass" >

            </div>	
        	
        		

      		</div>
		          <!-- For announcing the Error -->
				    <div class="mess-fail">
             <h4 id="notif"> <?php  echo " "; ?></h4>
            </div>
	
              <div class="btn">
                  <input type="submit" name="register_btn" value="Register" id="btn">
              </div> 
 

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
