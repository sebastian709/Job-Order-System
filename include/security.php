<?php 

include 'include/connect.php';
$head_acc = "head";
$admin_acc = "admin";
$engr_acc = "engineer";
$usern = $_SESSION['USERNAME'];
 
if(!$_SESSION['USERNAME']){
	header('Location:index.php');

}


#LOGOUT BUTTON 
if (isset($_POST['logout_btn'])) {


		session_destroy();
		header('Location:index.php');


}
?>