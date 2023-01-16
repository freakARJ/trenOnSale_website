<!doctype html>
<html lang="en">
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
   
    
    <?php include "header.php";?>

<section id="product-all" class="product-all py-5">
  <div class="container">
  
    <!-- section title -->
  <div class="jumbotron">
  <h1 class="text-uppercase">All the stickers... </h1> 
  <p class="text-capitalize"> Dive on!</p> 
</div>

    <div class="row">

      <?php
         $con = mysqli_connect("localhost" , "root" , "" , "tos");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;
          $sql = "SELECT * FROM product";
          $sql_run = mysqli_query($con, $sql);
          if (mysqli_num_rows($sql_run)>0) {
            while ($row = mysqli_fetch_assoc($sql_run)) {
            ?>
      <div class="container">
        <div class="row product-single mb-2">
      <div class="col-md-4">
        <div class="card product-single-img">
        <img src="images/<?php echo $row['pimg']; ?>" alt="">
      </div>
      </div>
	  
      <div class="col-md-8 pt-6 product-single-body">
        <h4><a href=""> <?php echo $row['pname']; ?></a></h4>
        <p>Product Code: <?php echo $row['pcode']; ?></p>
        <p class="price">BDT: <?php echo $row['pprice'];?> &#2547 </p>
        <button class="mb-3 btn btn-color"><a href="cart.php"> Add to cart</a></button>
      </div>
      </div>
      </div>
      <?php
                      }
                    }
                    else{
                      echo "No Products Found";
                    }?>
    </div>
  </div>
    </section>

      <!--Footer-->
      <?php include "footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>