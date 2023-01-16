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
  
      <!--Navigation bar-->
      <?php include "header.php"; ?>
    

    <!--Cart Section-->
    <section class="mt-5">
        <div class="container">
            <div class="row cart">
                <div class="col-lg-12 text-center border rounded bg-light pt-2">
                    <h2>Sticker Cart :</h2>
                </div>
 <?php
         $con = mysqli_connect("localhost" , "root" , "" , "tos");
	if (mysqli_connect_errno()) {
		echo "Failed to connect : " . mysqli_connect_error();
	}

	global $con ;
          $sql = "SELECT * FROM product";
          $sql_run = mysqli_query($con, $sql);
          if (mysqli_num_rows($sql_run)>0)
		  while ($row = mysqli_fetch_assoc($sql_run)) 
            ?>
			
            <div class="table-responsive col-lg-9">
                <table class="table">
                    <thead class="thead-white">
                        <tr>
                            <th scope="col"class="text-dark">Product</th>
                            <th scope="col"class="text-dark">Price</th>
                            <th scope="col"class="text-dark">Quantity</th>
                            <th scope="col"class="text-dark">Total</th>
                        </tr>
                    </thead>
					
					
			
                    <tbody>
                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                     <img src="images/<?php echo $row['pimg']; ?>" alt="">
                                    </div>
                                    <div class="des">
                         <h4><a href=""> <?php echo $row['pname']; ?></a></h4>
                                    </div>
                                </div>
                            </td>
                            <td>
                              <p class="price">BDT: <?php echo $row['pprice'];?> &#2547 </p>
                            </td>
                            <td>
                                <div class="counter">
                                    <!--<i class="fas fa-angle-down"></i>-->
                                    <input class="input-number text-center"type="number"
                                    value="1"min="0"max="10">
                                    <!--<i class="fas fa-angle-up"></i>-->
                                </div>
                            </td>
                            <td>
                                 <p class="price">BDT: <?php echo $row['pprice'];?> &#2547 </p>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
    <div class="col-lg-3">
        <div class="checkout">
            <ul>
                <li class="subtotal">Quantity
                    <span>10</span>
                </li>
                <li class="cart-total">Total
                <span>&#2547 60.00</span></li>
            </ul>
            <a href="#"class="proceed-btn rounded">Proceed to Checkout</a>
        </div>
    </div>
            </div>
        </div>
    </section>
    
    <!--Footer-->
      <?php include "footer.php"; ?>

   <script src="js/bootstrap.bundle.min.js"></script>
   
	
  </body>
  </html>
