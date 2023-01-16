<?php

	// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "tos");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	$user_id = $_GET['id'] ;
	$dlt_usr = "DELETE FROM user where user_id = '$user_id'" ;
	
	if ($con->query($dlt_usr) == TRUE) {
    	header('Location: afterloginadmin.php') ;
	} else {
    echo "Error deleting record: " . $con->error;
	}
	
?>
