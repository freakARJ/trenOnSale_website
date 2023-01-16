<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit= no">
  	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body


	<!--navigation bar-->
	<?php include 'header.php'; ?>

	<section class="my-5">
	<div class="pt-5">
		<h1 class="text-center">  Contact Us </h1>
	</div>

	<div class="w-50 m-auto">
		<form action="userdata.php" method="post">
		<div class="form-group">
	    <label for="pwd">Username:</label>
	    <input type="text" class="form-control" name="user" >
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email" autocomplete="off">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Mobile:</label>
	    <input type="text" class="form-control" name="mobile">
	  </div>
		<div class="form-group">
			<label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>

		</div>
	

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
		
	</div>
	
</section>

			<div class="container pt-3">
			<div class="row text-dark">
				<div class="col-md-4">
					<h6>Email</h6>
					<ul class="list-unstyled">
						<li><a href="mailto:freakarj@gmail.com">trendonsale@gmail.com</a></li>
					</ul>
				</div>
				
				<div class="col-md-4">
					
					<ul class="list-unstyled">
					<h6>Phone</h6>
						<li><a href="#">0177777777</a></li>
								<li> <a href="https://www.facebook.com/stickerprintbd">Facebook</a></li>
					</ul>
					
				</div>
				<div class="col-md-4">
					<h6>Location :</h6>
					<ul class="list-unstyled">
						<li class="text-primary">Cox's Bazar, Bangladesh</li>
						<li><a href="https://goo.gl/maps/LmGrMEreR9cDNhXJ9">Google Link</a></li>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.6189512653573!2d91.96632145036432!3d21.44421748570501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc9c3f669b5c5%3A0x4f247a35bfae395e!2sARIFA%20MANSION!5e0!3m2!1sen!2sbd!4v1617637369452!5m2!1sen!2sbd" width="250" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			
					</ul> 
				</div>
				
			</div>
		</div>


	<?php include 'footer.php' ; ?>

	<!--scripts-->
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
