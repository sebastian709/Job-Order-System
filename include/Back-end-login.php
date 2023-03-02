<?php
include 'connect.php';
session_start();

$error = "";
$success = "";

  if (isset($_POST['log_btn'])) {
    require 'connect.php';
    $error = "";
    $success = "";
    $phpusername = $_POST['user'];
    $phppassword = $_POST['pass'];
    
    $result = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$phpusername.'" AND PASSWORD="'.$phppassword.'"');

    $head = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$phpusername.'" AND access_level="head" ');

    $admin = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$phpusername.'" AND access_level="admin" ');

    $engr = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$phpusername.'" AND access_level="engineer" ');
    
    $register = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$phpusername.'" AND FIRSTNAME="temporary" ');





    if(mysqli_num_rows($result) == 1) {
      if(mysqli_num_rows($register) == 1) {
        $success = "Success!";
      $_SESSION['USERNAME'] = $phpusername;
      header('Location:register.php');

      }
      elseif (mysqli_num_rows($head) == 1) {
        $success = "Success!";
        
      $_SESSION['USERNAME'] = $phpusername;
      
      header('Location:Head-Record-JOS.php');

      }
      elseif (mysqli_num_rows($admin) == 1) {
        $success = "Success!";
       $_SESSION['USERNAME'] = $phpusername;
      header('Location:Admin-ManageAccount.php');

      }
      elseif (mysqli_num_rows($engr) == 1) {
        $success = "Success!";
      $_SESSION['USERNAME'] = $phpusername;
      header('Location:Engineer-Record-JOS.php');

      }


    
    }else{
        $error = 'Invalid Username or password!';
        $success = "";
        
        }
 }
        


?>