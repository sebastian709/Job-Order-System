<?php 

include 'include/connect.php'; 

if (isset($_POST['view_btn'])) {
	
	$id = $_POST['view_id'];
	$name = $_POST['view_name'];

	
	$record = mysqli_query($conn,'SELECT * FROM jos_description WHERE name="'.$name.'"  ');

	if(mysqli_num_rows($record) > 0) {

		$_SESSION['vid'] = $id;
		$_SESSION['view_name'] = $name;
		 header('Location:Description-Head.php');
	}

}
if(isset($_POST['jobreq_btn'])){
	$name = $_POST['name'];
	$dept = $_POST['department'];
	$loc = $_POST['location'];

	#need
	$n1 = $_POST['need1'];
	$n2 = $_POST['need2'];
	$n3 = $_POST['need3'];
	$n4 = $_POST['need4'];
	$n5 = $_POST['need5'];

	#object
	$o1 = $_POST['object1'];
	$o2 = $_POST['object2'];
	$o3 = $_POST['object3'];
	$o4 = $_POST['object4'];
	$o5 = $_POST['object5'];

	#quantity
	$q1 = $_POST['quantity1'];
	$q2 = $_POST['quantity2'];
	$q3 = $_POST['quantity3'];
	$q4 = $_POST['quantity4'];
	$q5 = $_POST['quantity5'];

	$query1 = "INSERT INTO jos_record(name,department,location,admin,engineer,head,petsa) VALUES ('$name','$dept','$loc','pending','pending','pending','pending')"; 
	$query2 = "INSERT INTO jos_description(need_one,o1,q1,n2,o2,q2,n3,o3,q3,n4,o4,q4,n5,o5,q5,name) VALUES ('$n1','$o1','$q1','$n2','$o2','$q2','$n3','$o3','$q3','$n4','$o4','$q4','$n5','$o5','$q5','$name') ";

	$run1 = mysqli_query($conn,$query1);
	$run2 = mysqli_query($conn,$query2);

	if (($run1 && $run2) == TRUE) {
		echo '<script> alert("Successfully added temporary account!"); </script>';
		header('Location:Head-Request.php');

	}

}


#approve 
if (isset($_POST['certifiedbtn'])) {
	$id = $_POST['certified_id'];
	$petsa =$_POST['petsa'];
	$approve = "Certified";
	$approve_run = mysqli_query($conn,'UPDATE jos_record SET head="'.$approve.'", petsa="'.$petsa.'" WHERE id="'.$id.'" ');

if($approve_run > 0) {

		header('Location:Head-Request.php');
	}

}

?>