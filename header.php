



<!--menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Trend ON Sale</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contactUs.php">Contact Us</a>
      </li>
	  <li class="nav-item">
          <a class="nav-link" href="cart.php"> My Cart</a>
        </li>

<!--log-in-->
      		<ul class="navbar-nav mx-auto">
      			<li class="nav-item dropdown">
      				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="login_dropdown"
      				aria-haspopup="true">
      					Log in
      				</a>
      				<div class="dropdown-menu bg-secondary border-dark" arialabelledby="login_dropdown">
      					<a href="#login_user" class="dropdown-item border text-light" data-toggle="modal">
      						Customer
      					</a>
      					<a href="#login_admin" class="dropdown-item border text-light" data-toggle="modal">
      						Admin
      					</a>
      				</div>
  				</li>
      		</ul>
   
   <!--search-->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Modals for login-->
	<!-- for user -->
	<div class="modal" id="login_user">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Login as a user</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	       		<form action="afterloginuserchk.php" method="POST">
				  <div class="form-group">
				    <label for="username_user">User name:</label>
				    <input type="text" class="form-control" id="username_user" name="username_user" required>
				  </div>
				  <div class="form-group">
				    <label for="password_user">Password:</label>
				    <input type="password" class="form-control" id="password_user" name="password_user" required>
				  </div>
				  <button type="submit" class="btn btn-primary float-right">login</button>
				</form>
	       	</div>

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <a href="#signup" data-toggle="modal" data-dismiss="modal">New user? Create an account</a>
	      </div>

	    </div>
	  </div>
	</div>

	<!-- for admin -->
	<div class="modal" id="login_admin">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Login as admin</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	       		<form action="afterloginadminchk.php" method="POST">
				  <div class="form-group">
				    <label for="user_admin">User name:</label>
				    <input type="text" class="form-control" id="user_admin" name="user_admin" required>
				  </div>
				  <div class="form-group">
				    <label for="password_admin">Password:</label>
				    <input type="password" class="form-control" id="password_admin" name="password_admin" required>
				  </div>
	       	</div>


	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">login</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>




<!-- modal for signup -->
<div class="modal" id="signup">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      <div class="modal-header">
	        <div><h1>Sign Up</h1></div>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	       	<div class="modal-body">
	       		<form method="POST" action="signup.php">
				  <div class="form-group">
				    <label for="signup_firstName">First Name:</label>
		  	 		<input type="text" id="signup_firstName" name="signup_firstName" required>
				  </div>
				  <div class="form-group">
				    <label for="signup_lastName">Last Name:</label>
		  	 		<input type="text" id="signup_lastName" name="signup_lastName" required>
				  </div>
				  <div class="form-group">
							<label for="signup_sex">Select your sex:</label>
							<select class="form-control" name="signup_sex" id="signup_sex" required>
						        <option value="" disabled selected>Select sex</option>
						        <option>male</option>
						        <option>female</option>
						        <option>other</option>
						    </select>
						</div>
				  <div class="form-group">
				  	<label for="signup_email">Email Address:</label>
		  	 		<input type="Email" id="signup_email" name="signup_email" required>
				  </div>
				  <div class="form-group">
				  	<label for="signup_phone">Phone Number:</label>
		  	 		<input type="tel" id="signup_phone" name="signup_phone" required>
				  </div>
				  <div class="form-group">
				  	<label for="signup_address">Address:</label>
		  	 		<input type="text" id="signup_address" name="signup_address" required>
				  </div>
				  <div class="form-group">
				  	<label for="signup_user">User Name:</label>
		  	 		<input type="text" id="signup_user" name="signup_user" required>
				  </div>
				  <div class="form-group">
				  	<label for="signup_pass">Password:</label>
		  	 		<input type="password" id="signup_pass" name="signup_pass" onkeyup='check();' required>
				  </div>
				  <div class="form-group">
                 <label>Confirm Password</label><br/>
                 <input type="password" name="confirm_password" id="confirm_password" onkeyup='check();' required>
                   <span id='message'></span>
              </div>
			  
	       	</div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
				<input type="submit" name="submit" value="Sign-up" class="btn btn-primary">
		      </div>
	      	</form>
	    </div>
	  </div>
	</div>
<script>
 var check = function() {
if (document.getElementById('signup_pass').value ==
document.getElementById('confirm_password').value) {
document.getElementById('message').style.color = 'green';
document.getElementById('message').innerHTML = 'matching';
} else {
document.getElementById('message').style.color = 'red';
document.getElementById('message').innerHTML = 'not matching';
}
}
 </script>

