<?php
// Start the session (if not already started)
session_start();
?>
<link rel="stylesheet" href="assets/css/prod.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<body>
<div class="flex">
<div class="d-flex justify-content-center align-items-center" style="height: 100px;">
    <h1 id="product">Products</h1>
</div>
    <div class="container" >
		<div class="container_2">
			<div class="row">
				<?php
				   include 'product_list.php'; // Include the products data

				   $startingProductId = 1; // Start of the product range
				   $endingProductId = 9;   // End of the product range

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
					<div class="prod_container bg-light">
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
			<p class="next-page"><span class="active"><a>1</a></span> <span><a href="page2.php">2</a> &nbsp; &nbsp;</span> <span><a href="page2.php">Next Page</a></span></p>
      <!-- End of Next Page -->
		</div>
	</div>
    </div>    
  <!-- End of PRODUCTS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
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
    

