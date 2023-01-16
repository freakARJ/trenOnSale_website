<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<?php include 'header.php'; ?>

			<!--slide-->
			<div class="col-md- carousel slide" data-ride="carousel" id="intro">
				<!--indicator-->
				<ul class="carousel-indicators">
					<li data-target="#intro" data-slide-to="0" class="active"></li>
					<li data-target="#intro" data-slide-to="1"></li>
					<li data-target="#intro" data-slide-to="2"></li>

				</ul>
				<!--wrapper-->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/bs1.png" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="images/bs2.png" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="images/bs3.png" class="img-fluid">
					</div>
					
				</div>
				<!--left and right control-->
				<a href="#intro" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#intro" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>


<section class="m-5">
	<div >
		<h2 class="text-center"> About Us</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 col-12">
			<img src="images/tos.jpg" class="img-fluid aboutimg" >
		</div>
		<div class="col-lg-6 col-12">
			<h2 class="display-4"> About trend On sale! </h2>
			<p class="py-4"> We first started making basic stickers for ourselfs then later our friends ...  </p>
			<a href="about.php" class="btn btn-success">Wanna Know More?</a>		
		</div>
	</div>
</section>






<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center">Products:</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc1.jpg" class="img-fluid">
		</div>
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc2.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc3.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc4.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc5.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc6.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc7.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc8.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc9.jpg" class="img-fluid">
		</div>
	</div>
	<div class=" text-center">
	
		 <a href="products.php" class="btn btn-primary">See more products?</a>
	</div>
</section>




<?php include'footer.php' ?>



</body>
</html>