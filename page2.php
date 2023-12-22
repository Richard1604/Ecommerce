<?php
// Start the session (if not already started)
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RD Solutions</title>
    <link rel="stylesheet" href="assets/css/prod.css"/>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<style>

a:hover {
    text-decoration: none; 
}
* {
    box-sizing: border-box;
 }
 body{
    font-family: 'Roboto', sans-serif !important;
 }


  
</style>
  </head>
  <?php include('navbar.php'); ?>
  <body>
<br>
<div class="container">
		<div class="container_2">
			<div class="row">
				<?php
				   include 'product_list.php'; // Include the products data

				   $startingProductId = 10; // Start of the product range
				   $endingProductId = 15;   // End of the product range

				   foreach ($products as $product) {
				     $productId = $product["product_id"];
				     $productName = $product["product_name"];
				     $productPrice = $product["product_price"];
				     $productLink = $product["product_link"];
				     $productImage = $product["product_image"];

				     $id = $productId;
				     $image = $productImage;
				     $name = $productName;
				     $price = $productPrice;

				     // Check if the product ID is within the specified range
				     if ($productId >= $startingProductId && $productId <= $endingProductId) {
				     $productName = $product["product_name"];
				     $productPrice = number_format($product["product_price"], 2);
				     $productLink = $product["product_link"];
				     $productImage = $product["product_image"];
				 ?>
				<div class="col-sm-4">
					<div class="prod_container">
						<div class="prod-image">
							<a href="<?php echo $productLink;?>"><img src="<?php echo $productImage;?>"></a>
						</div>
						<div class="prod-details">
							<a href="<?php echo $productLink;?>">
							<p><?php echo $productName;?></p></a>
							<p>$<?php echo $productPrice;?></p>
							<center>
                               <button class="add" type="button" onclick="addToCart(<?php echo $id; ?>, '<?php echo $name; ?>', <?php echo $price; ?>, '<?php echo $image; ?>');">Add to cart</button>&nbsp;<?php if (isset($_GET['id']) == $productId) { ?><span><a href="cart.php" style="color:red;">View cart</a></span><?php } ?>
                            </center>
						</div>
					</div>
				</div>
        <!-- Start for quantity -->
				<div class="prod-qty prod-quantity" style="display: none;">
					Quantity: <select class="addons" id="quantity" name="qty">
						<option selected value="1">
							1 - $29.95
						</option>
						<option value="3">
							3 - $39.00
						</option>
						<option value="5">
							5 - $65.70
						</option>
					</select>
				</div>
        <!-- End for quantity -->
        <?php 
				    } 
				    }
				 ?>
			</div>
      <!-- Start of Next Page -->
      <div class="text-center"><p class="prev-page"><span><a href="product.php">Previous Page</a> &nbsp; &nbsp;</span> <span><a href="product.php">1</a></span> <span class="active"><a>2</a></span></p>
</div>
      <!-- End of Next Page -->
		</div>
	</div>
  <!-- End of PRODUCTS -->
	<br>
	<br>
	<br>
	<br>	 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script> 
	<script>
	      var className = "inverted";
	   var scrollTrigger = 60;

	   window.onscroll = function() {
	    // We add pageYOffset for compatibility with IE.
	    if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
	      document.getElementsByTagName("header")[0].classList.add(className);
	    } else {
	      document.getElementsByTagName("header")[0].classList.remove(className);
	    }
	   };

	</script> 
	<script>
	      var btn = $('#button');

	   $(window).scroll(function() {
	    if ($(window).scrollTop() > 300) {
	      btn.addClass('show');
	    } else {
	      btn.removeClass('show');
	    }
	   });

	   btn.on('click', function(e) {
	    e.preventDefault();
	    $('html, body').animate({scrollTop:0}, '300');
	   });


	</script> 
	<script>
	          function addToCart(productId, name, price, image) {
	              // Get the quantity value from the input field
	              var quantity = document.getElementById('quantity').value;

	              // Redirect to the "add_to_cart.php" page with the product data as query parameters
	              window.location.href = 'cart.php?product_id=' + productId + '&name=' + name + '&price=' + price + '&quantity=' + quantity + '&image=' + image;
	          }
	</script>
</body>
</html>

          </div>
        </div>
      </div>
    </div>
  </div>
  </center>
</section>

 <?php include('footer.php'); ?>
 
</body> 
</html>