<?php

	// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "tos");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body 

	<!--navigation bar-->
	<?php include 'header.php'; ?>

	<?php
        $w = 0 ;
		$firstName = $_POST['signup_firstName'] ;
		$lastName = $_POST['signup_lastName'] ;
		$email = $_POST['signup_email'] ;
		$phone = $_POST['signup_phone'] ;
		$address = $_POST['signup_address'] ;
		$user = $_POST['signup_user'] ;
		$pass = $_POST['signup_pass'] ;
		$sex = $_POST['signup_sex'] ;

		$sql = "INSERT INTO user (user_firstName , user_lastName , user_sex , user_email , user_phone , user_address , user_username , user_pass)
		VALUES ('$firstName' , '$lastName' , '$sex' , '$email' , '$phone' ,
				'$address' , '$user' , MD5('$pass'))" ;
	?>

	
	<div class="container container_main text-dark">
		<div class="row">
			<div class="col">
				<?php
					if (mysqli_query($con , $sql)) {
						$w = 1 ;

						$get_usr = "SELECT * FROM user ORDER BY user_id DESC LIMIT 1";
						$run_usr = mysqli_query($con , $get_usr) ;
						$row_usr = mysqli_fetch_array($run_usr) ;

						$user_id = $row_usr['user_id'] ;


						echo "
							<h1>Congratulations !!! You are a user now !!! In order to buy, please log in to your account.</h1>
							
						";
					}else{
						echo "
							<h1>Ooops !!! There are some problem. In order to create the account , please try again.</h1>
						";
					}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php

					if ($w == 1) {
						echo "<h1>Welcome to trend ON Sale</h1>";
					}
				?>
			</div>
		</div>
	</div>



	<?php include 'footer.php' ; ?>

	<!--scripts-->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>
