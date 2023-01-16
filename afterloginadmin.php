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

	<!--navigation bar-->
	<?php include 'header.php'; ?>


	<div class="container container_main text-center">
		<?php

			if ($_SESSION['admin_status'] == 1) {

				echo "
				<div class='row mb-5'>
					<div class='col'>
						<a href='#logout_admin' class='btn btn-danger btn-lg float-center  mt-2' data-toggle='modal'><strong>Log out</strong></a>
					</div>
				</div>
			";


				echo "
					<div class='row mt-2 border list-group-item-dark'>
						<div class='col-md-2 border'>
							<strong>Customer ID</strong>
						</div>
						<div class='col-md-3 border'>
							<strong>Customer Name</strong>
						</div>
						<div class='col-md-2 border'>
							<strong>Customer Details</strong>
						</div>
						<div class='col-md-2 border'>
							<strong>Ordered Products</strong>
						</div>
						<div class='col-md-3 border'>
							<strong>Remove Customer</strong>
						</div>
					</div>
					
					
					
				";

				global $con ;

				$get_usr = "SELECT * FROM user ORDER BY joiningTimeAndDate DESC" ;
				$run_usr = mysqli_query($con , $get_usr) ;
				
				

				while ($row_usr = mysqli_fetch_array($run_usr) ) {
					$user_id = $row_usr['user_id'] ;
					$user_name = $row_usr['user_firstName'].' '.$row_usr['user_lastName'] ;
					
					echo "
						<div class='row mt-5'>
							<div class='col-md-2 float-right list-group-item-info'>
								$user_id
							</div>
							<div class='col-md-3 float-right list-group-item-warning'>
								$user_name
							</div>
							<div class='col-md-2 float-right list-group-item-danger'>
								<a href='userdetails.php?id=$user_id'>Details</a>
							</div>
							<div class='col-md-2 list-group-item-success'>
								<a href='showorderproduct.php?id=$user_id'>Products</a>
							</div>
							<div class='col-md-3'>
								<a href='deleteuser.php?id=$user_id' class='btn btn-danger form-control' >Delete User</a>
							</div>
						</div>
						
						
					";
				}

            echo "<div class='row mt-2 border list-group-item-dark'>
						<div class='col-md-4 border'>
							<strong>Product ID</strong>
						</div>
						<div class='col-md-4 border'>
							<strong>Product Name</strong>
						</div>
						
						<div class='col-md-4 border'>
							<strong>Remove Product</strong>
						</div>
					</div> ";
					
				   global $con ;
					$get_pro = "SELECT * FROM product ORDER BY pcode DESC" ;
				    $run_pro = mysqli_query($con , $get_pro) ;
					
					while ($row_pro = mysqli_fetch_array($run_pro) ) {
					$pro_id = $row_pro['pcode'] ;
					$pro_name = $row_pro['pname'] ;
					
					echo "<div class='row mt-5'>
							<div class='col-md-4 float-right list-group-item-info'>
								$pro_id
							</div>
							<div class='col-md-4 float-right list-group-item-warning'>
								$pro_name
							</div>
							
							<div class='col-md-4'>
								<a href='deleteitem.php?id=$pro_id' class='btn btn-danger form-control' >Delete item</a>
							</div>
						</div>";
						}

		}else{
			echo "
					<div class='row'>
						<div class='col my-5 bg-danger'>
							<h2>to see the content of this page, you have to be an admin</h2>
						</div>
					</div>
			";
		}
	?>

	</div>

	<!-- Modals for logout-->
	<!-- for admin -->
	<div class="modal" id="logout_admin">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title"> Log out ?!!!</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	   			<a href='logoutadmin.php' class='btn btn-success btn-lg mb-5 ml-5'><strong>YES</strong>
	   			</a>
				<a href='afterloginadmin.php' class='btn btn-danger btn-lg mb-5 float-right mr-5'><strong>NO</strong>
				</a>
	       	</div>

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
