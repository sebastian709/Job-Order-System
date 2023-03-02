elseif ($_SESSION['USERNAME'] == TRUE) {

	$head ='SELECT * FROM account WHERE username="'.$usern.'" AND access_level="'.$head_acc.'" ';
	$admin ='SELECT * FROM account WHERE username="'.$usern.'" AND access_level="'.$admin_acc.'" ';
	$engr = 'SELECT * FROM account WHERE username="'.$usern.'" AND access_level="'.$engr_acc.'" ';

	$head_con =  mysqli_query($conn,$head);
	$admin_con = mysqli_query($conn,$admin);
	$engr_con = mysqli_query($conn,$engr);

	if (mysqli_num_rows($head_con) == 1) {

		if((!mysqli_num_rows($admin_con) && !mysqli_num_rows($engr_con)) == 1){
			

			$_SESSION['USERNAME'] = $usern;
			header('Location:Head-Record-JOS.php');


		}
		
	}



}