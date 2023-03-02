<?php 

include 'include/connect.php'; 

if (isset($_POST['view_btn'])) {
	
	$id = $_POST['view_id'];
	$name = $_POST['view_name'];

	
	$record = mysqli_query($conn,'SELECT * FROM jos_description WHERE name="'.$name.'"  ');

	if(mysqli_num_rows($record) > 0) {

		$_SESSION['vid'] = $id;
		$_SESSION['view_name'] = $name;
		 header('Location:Description-Engineer.php');
	}

}

if (isset($_POST['action_btn'])) {
	$id = $_POST['action_id'];

	$action = mysqli_query($conn,'SELECT * FROM jos_description WHERE id="'.$id.'"  ');

	if(mysqli_num_rows($action) > 0) {

		$_SESSION['action_id'] = $id;
		 header('Location:Engineer-Detail-Head-Request.php');
	}
}

#approve 
if (isset($_POST['finish_btn'])) {
	$id = $_POST['finish_id'];
	$approve = "Finish";
	$approve_run = mysqli_query($conn,'UPDATE jos_record SET engineer="'.$approve.'" WHERE id="'.$id.'" ');

if($approve_run > 0) {

		header('Location:Engineer-Proghead.php');
	}

}

#materials view
if (isset($_POST['materialsbtn'])) {

	$id = $_POST['materials_id'];

$rec = mysqli_query($conn,'SELECT * FROM materials_record WHERE id="'.$id.'"  ');

	if(mysqli_num_rows($rec) > 0) {

		$_SESSION['mid'] = $id;
		
		 header('Location:Materials-Engineer.php');
	}

}

if(isset($_POST['req_btn'])){
	$name = $_POST['fullname'];



	#materials
	$m1 = $_POST['material1'];
	$m2 = $_POST['material2'];
	$m3 = $_POST['material3'];
	$m4 = $_POST['material4'];
	$m5 = $_POST['material5'];



	#quantity
	$q1 = $_POST['quantity1'];
	$q2 = $_POST['quantity2'];
	$q3 = $_POST['quantity3'];
	$q4 = $_POST['quantity4'];
	$q5 = $_POST['quantity5'];

	$stat = "pending";
	$petsa = "pending";

	$query1 = "INSERT INTO materials_record(name,status,petsa) VALUES ('$name','$stat','$petsa')"; 
	$query2 = "INSERT INTO materials_description(name,m1,q1,m2,q2,m3,q3,m4,q4,m5,q5) VALUES ('$name','$m1','$q1','$m2','$q2','$m3','$q3','$m4','$q4','$m5','$q5')";

	$run1 = mysqli_query($conn,$query1);
	$run2 = mysqli_query($conn,$query2);

	if (($run1 && $run2) == TRUE) {
		
		header('Location:Engineer-Record-Materials.php');

	}

}
?>