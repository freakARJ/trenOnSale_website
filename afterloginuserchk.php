<?php

	session_start() ;
// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "tos");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;

	$passp = $_POST["password_user"] ;
	$pass = MD5($passp) ;
	$get_pro = "SELECT * FROM user where user_pass = '$pass'" ;
	$run_pro = mysqli_query($con , $get_pro) ;
	$row_pro = mysqli_fetch_array($run_pro) ;

	$username = $row_pro["user_username"] ;
	$user_id = $row_pro["user_id"] ;
	$er = 0 ;

	if ($_POST["username_user"] == $username) {
		$_SESSION["user_status"] = 1 ;
		header("Location: afterloginuser.php?id=$user_id") ;
	}else{
		$er = 1 ;
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
</head>
<body background="images/tos.jpg">

	<!--navigation bar-->
	<?php include 'header.php';

	if ($er == 1){
		echo "
			<div class='container container_main text-light mt-5'>
				<div class='row'>
					<div class='col'>
						<h1 class='text-center'>User-name and password didn't match.</h1>
					</div>
				</div>
				<div class='row'>
					<div class='col'>
						<h1 class='text-center'>Please try again with a valid user-name and password.</h1>
					</div>
				</div>
			</div>";
	}


	include 'footer.php'; ?>


	<!--scripts-->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
