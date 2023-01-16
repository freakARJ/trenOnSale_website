<?php

	session_start() ;
	// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "tos");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	$product_id = $_GET['id'] ;

	$dlt_pro = "DELETE FROM product where pcode = '$product_id' " ;
	
if ($con->query($dlt_pro) == TRUE) {
    	header('Location: afterloginadmin.php') ;
	} else {
    echo "Error deleting record: " . $con->error;
	}
?>
