<?php 

include 'include/connect.php'; 

#action
if (isset($_POST['action_btn'])) {
	$id =$_POST['action_id'];

	$action = mysqli_query($conn,'SELECT * FROM jos_description WHERE ID="'.$id.'"  ');
	if(mysqli_num_rows($action) > 0) {

		$_SESSION['action_id'] = $id;
		
		 header('Location:Detail-Head-Request.php');
	}

}

#approve 
if (isset($_POST['approve_btn'])) {
	$id = $_POST['approve_id'];
	$approve = "Approve";
	$approve_run = mysqli_query($conn,'UPDATE jos_record SET admin="'.$approve.'" WHERE id="'.$id.'" ');

if($approve_run > 0) {

		
		
		 header('Location:Admin-Proghead.php');
	}

}

#deliver
if (isset($_POST['deliver_btn'])) {
	$id = $_POST['deliver_id'];
	$petsa = $_POST['petsa'];
	$approve = "Delivered";
	$approve_run = mysqli_query($conn,'UPDATE materials_record SET status="'.$approve.'", petsa="'.$petsa.'"  WHERE id="'.$id.'" ');

if($approve_run > 0) {

		
		
		 header('Location:Admin-Engineer.php');
	}

}

#materials view
if (isset($_POST['materialsbtn'])) {

	$id = $_POST['materials_id'];

$rec = mysqli_query($conn,'SELECT * FROM materials_record WHERE id="'.$id.'"  ');

	if(mysqli_num_rows($rec) > 0) {

		$_SESSION['mid'] = $id;
		
		 header('Location:Materials.php');
	}

}

#materials view
if (isset($_POST['material_req_btn'])) {

	$id = $_POST['material_req_id'];

$rec = mysqli_query($conn,'SELECT * FROM materials_record WHERE id="'.$id.'"  ');

	if(mysqli_num_rows($rec) > 0) {

		$_SESSION['mrid'] = $id;
		
		 header('Location:Materials-Request.php');
	}

}



#this isset is for view only!!!
if (isset($_POST['view_btn'])) {
	
	$id = $_POST['view_id'];
	$name = $_POST['view_name'];

	
	$record = mysqli_query($conn,'SELECT * FROM jos_description WHERE name="'.$name.'"  ');

	if(mysqli_num_rows($record) > 0) {

		$_SESSION['vid'] = $id;
		$_SESSION['view_name'] = $name;
		 header('Location:Description.php');
	}

}

#This isset php is for delete data only!!!!!

if (isset($_POST['deletedata'])) {
	include 'include/connect.php'; 
	
	$id = $_POST['delete_id'];


	
	$run = mysqli_query($conn, 'DELETE FROM account WHERE id="'.$id.'" ');

	if($run == 1) {
		
		echo '<script> alert("Data Update"); </script>';
		header("Location:Admin-ManageAccount.php");
	}
	else{
		echo '<script> alert("Data Not Update"); </script>'; 
	}
}

#This isset php is for Edit data only!!!!!

if (isset($_POST['updatedata'])) {
	include 'include/connect.php'; 
	
	$id = $_POST['update_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dept = $_POST['dept'];
	$acclvl = $_POST['acclvl'];
	$uname = $_POST['uname'];


	
	$running = mysqli_query($conn,'UPDATE account SET firstname="'.$fname.'", lastname="'.$lname.'", department="'.$dept.'", access_level="'.$acclvl.'", username="'.$uname.'" WHERE id="'.$id.'" ');

	if($running == 1) {
		
		echo '<script> alert("Data Update"); </script>';
		header("Location:Admin-ManageAccount.php");
	}
	else{
		echo '<script> alert("Data Not Update"); </script>'; 
	}
}



# This php isset is for temporary register only!!!!!!!!

if (isset($_POST['temp_acc'])) {
 	

 	$acclvl_reg = $_POST['acclvl_reg'];
 	$username = $_POST['temp_uname'];
 	$password = $_POST['temp_pass'];

$check="SELECT USERNAME FROM account WHERE Username='".$username."' ";
$checkdb = $conn->query($check);
if ($checkdb->num_rows >0) {
	
 	echo '<script> alert("name already exists"); </script>';
 }else{



 	$sql = "INSERT INTO account(username,password,access_level,firstname,lastname,department) VALUES ('$username','$password','$acclvl_reg','temporary','temporary','temporary')";
 	$run_sql = mysqli_query($conn, $sql);


 if($run_sql == 1) {

 		$_SESSION['UNAME'] = $username;
 		$_SESSION['PASS'] = $password;

 		echo '<script> alert("Successfully added temporary account!"); </script>';
		header("Location:Admin-ManageAccount.php");
 }else{
 	echo "Error!";
 }
}
}


#This is for real register only use by the user!!!!!

if (isset($_POST['register_btn'])) {
 	
	$id = $_POST['id_reg'];
 	$fname = $_POST['fname_reg'];
 	$lname = $_POST['lname_reg'];
 	$dept = $_POST['dept_reg'];
 	$uname = $_POST['new_uname_reg'];
 	$pass = $_POST['new_pass_reg'];
 	$cpass = $_POST['confirm_pass'];

if(preg_match("/([%\$#\*]+)/", $pass))
{
   echo '<script> alert("Do not use special characters in password!"); </script>';
}
elseif(preg_match("/([%\$#\*]+)/", $uname))
{
   echo '<script> alert("Do not use special characters in Username!"); </script>';
}
elseif(preg_match("/^[0-9a-zA-Z_]{8,}$/", $uname) === 0){
	echo '<script> alert("Your username must be minimum of 8 characters!"); </script>';
}
elseif(preg_match("/^[0-9a-zA-Z_]{8,}$/", $pass) === 0){
	echo '<script> alert("Your password must be minimum of 8 characters!"); </script>';
}
elseif(preg_match("/^.*(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $pass) === 0){
	echo '<script> alert("Please put atleast one uppercase letter and numbers in your password!"); </script>';
}


elseif($pass == $cpass){

$check="SELECT USERNAME FROM account WHERE Username='".$uname."' ";
$checkdb = $conn->query($check);
if ($checkdb->num_rows >0) {
	
 	echo '<script> alert("name already exists"); </script>';
 }
 else{



 	
 	$run_sql = mysqli_query($conn, 'UPDATE account SET firstname="'.$fname.'", lastname="'.$lname.'", department="'.$dept.'", username="'.$uname.'", password="'.$pass.'" WHERE id="'.$id.'" ');


 if($run_sql == 1) {

 		

 		echo '<script> alert("Successfully added temporary account!"); </script>';
		header("Location:index.php");
 }
 
 else{
 	echo "Error!";
 }
}

}else{
		echo '<script> alert("The Password does not match!"); </script>'; 
	}

}









?>