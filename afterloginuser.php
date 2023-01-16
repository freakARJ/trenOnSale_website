<?php

	session_start() ;
// establishing connection
	$con = mysqli_connect("localhost" , "root" , "" , "tos");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>

	
	<?php include 'header.php';

		global $con ;

		$user_id = $_GET['id'] ;

		$get_sup = "SELECT * FROM user where user_id = '$user_id'" ;
		$run_sup = mysqli_query($con , $get_sup) ;
		$row_sup = mysqli_fetch_array($run_sup) ;

		$user_name = $row_sup['user_firstName'] ;
		$user_sex = $row_sup['user_sex'] ;
		$before_name = 'Mr.' ;

		if ($user_sex == 'male') {
			$before_name = 'Mr.' ;
		}elseif ($user_sex == 'female') {
			$before_name = 'Miss.' ;
		}else{
			$before_name = '' ;
		}

	?>


	<div class="container container_main">
	
		<?php if($_SESSION["user_status"] == 1){

			echo "
				<div class='row'>
					<div class='col my-5 bg-info'>
						
							<h2 >Welcome $before_name $user_name</h2>
							<h3 class='text-white bg-dark' >Here you can find all type of stickers</h3>
						
					</div>
				</div>
				<div class='row'>
					<div class='col'>
						<a href='product.php' class='btn btn- btn-lg mb-5'><strong>Check All Products</strong></a>
						<a href='#logout_user' class='btn btn-danger btn-lg mb-5 float-right' data-toggle='modal'><strong>Log out</strong>
						</a>
					</div>
				</div>
				<div class='row text-center mt-5'>
					<div class='col  list-group-item-dark'>
						<strong>Order Id</strong>
					</div>
					<div class='col list-group-item-dark'>
						<strong>Product Name</strong>
					</div>
					<div class='col list-group-item-dark'>
						<strong>Details</strong>
					</div>
					<div class='col list-group-item-dark'>
						<strong>Complain!</strong>
					</div>
				</div>
			";



				
			
		}
		

		
			
		 ?>

	</div>

	
	<!-- for user -->
	<div class="modal" id="logout_user">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Log out ?!!!</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	   			<a href='logoutuser.php' class='btn btn-success btn-lg mb-5 ml-5'><strong>YES</strong>
	   			</a>
				<a href='afterloginuser.php' class='btn btn-danger btn-lg mb-5 float-right mr-5'><strong>NO</strong>
				</a>
	       	</div>
			

	   
	  </div>
	</div>


		

	<?php include 'footer.php'; ?>

	<!--scripts-->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>
