<!DOCTYPE html>
<html>
<head>
	<title>RD Solution</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
   
</head>
<?php include('navbar.php'); ?>
<style>

  /* checkout */

  .top{
  padding: 1em 2em 1em 3.5em;
    margin: 0 0 2em;
    position: relative;
    background-color: #f7f6f7;
    color: #515151;
    border-top: 3px solid #1e85be;
    list-style: none outside;
    width: auto;
    word-wrap: break-word;
    font-size: 18px;
}
.top::before{
    color: #1e85be;
    content: "\e028";
    display: inline-block;
    position: absolute;
    top: 1em;
    left: 1.5em;
    
}
.top a{
    color: red;
}
.coupon{
    border: 1px solid #d3ced2;
    padding: 20px;
    margin: 2em 0;
    text-align: left;
    border-radius: 5px;
}
.coupon p{
    margin-bottom: 1rem;
    font-size: 16px;
}
input[type=text], select, textarea{
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    outline: 0;
    line-height: normal;
    padding: 10px 20px;
    margin: 0 0 6px;
    float: left;
    max-width: 47%;
    border-radius: 3px;
    font-size: 15px;
    font-weight: 500;
    vertical-align: middle;
    min-height: 46px;
    background-color: #fff;
    border: 1px solid #dedede !important;
    letter-spacing: 0.5px;
    transition: all .35s cubic-bezier(.645,.045,.355,1);
}
.coupon button{
    margin-left: 50px;
    font-weight: 600;
    color: #fff;
    background-color: #ff2f00;
    border-radius: 4px;
    overflow: hidden;
    font-size: 14px;
    padding: 0.608em 0.75em !important;
    line-height: 1.7;
    border-color: #ff2f00;
}

.fill h3{
    margin-top: 0;
    margin-bottom: 0.875rem;
    font-weight: 900;
    line-height: 1.2;
    font-size: 35px;
}

.fill input[type=text], select, textarea{
    width: 100%;
    max-width: 100%;
    margin-bottom: 6px;
}
label{
    line-height: 2;
    font-size: 16px;
    color: #002a34;
}
span.required{
    color: red !important;
    font-weight: 900;
}
select {
    height: 28px !important;
    margin-bottom: 6px !important;
}
table{
    border: 1px solid rgba(0,0,0,.1);
    margin: 0 -1px 24px 0;
    text-align: left;
    width: 100%;
    border-collapse: separate;
    border-radius: 5px;
    border-collapse: separate;
}
th{
    font-weight: 700;
    padding: 9px 12px;
    line-height: 1.5em;
    font-size: 16px;
}
td{
    border-top: 1px solid rgba(0,0,0,.1);
    padding: 9px 12px;
    vertical-align: middle;
    line-height: 1.5em;
    font-size: 16px;
}
tr{
    border: 1px solid #dedede !important;
}
.payment{
    background: #ebe9eb;
    border-radius: 5px;
}
.credit{
    text-align: left;
    padding: 1em;
    border-bottom: 1px solid #d3ced2;
    margin: 0;
    list-style: none outside;
}
.stripe{
    position: relative;
    box-sizing: border-box;
    width: 100%;
    padding: 1em;
    margin: 1em 0;
    font-size: .92em;
    border-radius: 2px;
    line-height: 1.5;
    background-color: #dfdcde;
    color: #515151;
}
.stripe::before{
    content: "";
    display: block;
    border: 1em solid #dfdcde;
    border-right-color: transparent;
    border-left-color: transparent;
    border-top-color: transparent;
    position: absolute;
    top: -0.75em;
    left: 0;
    margin: -1em 0 0 2em;
}
fieldset{
    border: 0;
    padding: 0;
    margin: 1em 0 0;
}
.stripe fieldset input[type=text]{
    min-height: 24px;
    margin: 0 0 1em;
}
.stripe i{
    position: absolute;
    top: 18%;
    /* margin-top: -44px; */
    right: 20px;
    background: no-repeat url(https://usadefenderstore.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/credit-card.svg);
    display: block;
    width: 30px;
    height: 24px;
}
.creditfoot{
    border: 0.5px solid white;
    min-height: 35px;
}

.agree{
    padding: 16px;
}
.agree a{
    color: red;
}
.agree p{
    font-size: 18px;
}

button[type=submit]{
    margin-left: 50px;
    font-weight: 600;
    color: #fff;
    background-color: #0070F4;
    border-radius: 4px;
    overflow: hidden;
    font-size: 14px;
    padding: 0.608em 0.75em !important;
    line-height: 1.7;
    border-color: #ff2f00;
}
.cclogo{
    margin-top: 10px;
}
    /* checkout */

        /* cart */
        .cart input[type=text]{
            width: 100%;
            max-width: 100px;
        }
        .cart button{
            margin-left: 10px;
    font-weight: 600;
    color: #fff;
    background-color: #ff2f00;
    border-radius: 4px;
    overflow: hidden;
    font-size: 14px;
    padding: 0.608em 0.75em !important;
    line-height: 1.7;
    border-color: #ff2f00;
        }
        .cart table .xbutton , .p_image{
            text-align: center;
            width: 10px;
        }
        .pname{
            width: 500px;
        }
        .cart input[type=number]{
            width: 50px;
        }
        .totalcart td{
            text-align: center;
        }

        /* cart */
  
</style>
<?php include 'product_list.php'; 
foreach ($products as $product) {
				     $productId = $product["product_id"];
				     $productName = $product["product_name"];
				     $productPrice = $product["product_price"];
				     $productLink = $product["product_link"];
				     $productImage = $product["product_image"];
                     $productTotal = $product["product_price"]* 2;

				     $id = $productId;
				     $image = $productImage;
				     $name = $productName;
				     $price = $productPrice;
}
                     ?>
                     
<body>
<div class="container">
        <div class="container_2">
            <div class="cart">
            <form id="cart-form" method="post" action="update_cart.php">
            <table>
                <thead>
                    <tr>
                        <th class="xbutton"></th>
                        <th class="p_image"></th>
                        <th class="pname">Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                                    <tr>
                        <!-- <td><a href="remove.php?remove_product_id=1" style="color: red;"><i class="fa fa-close" style="font-size:24px"></i></a></td>
                        <td><img class="cart-product-image" src=<?php echo $productImage;?> style="max-width: 60px;" alt="Product 2"></td>
                        <td><a  style="color: red" href="<?php echo $productLink;?>"> <?php echo $productName;?></a></td>
                        <td><?php echo $productPrice;?></td>
                        <td class="qty"><input type="number" value="1" min="1" max="100" step="1" name="quantity[1]"></td>
                        <td> <?php echo $productTotal;?></td> -->
                    </tr>
                    
                 </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="row">
                                <div class="col-10">
                                    <input type="text" name="Coupon">
                                    <button type="submit" id="apply">Apply coupon</button> 
                                </div>
                                <div class="col-2 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" id="update">Update cart</button>
                                </div>
                            </div>             
                        </td>
                    </tr>
                    
                </tfoot>
            </table>
                      <form id="cart-form" method="post" action="https://usadefenderstore.com/checkout/">
            <div class="row">
              <div class="col-6">

              </div>
              
              <div class="col-6">
                <br><br>
                <h1 style="text-align: left;"><b>Cart totals</b></h1>
                <table class="totalcart">
                  <thead>
                      <tr>
                         <th>
                          Subtotal
                         </th>
                         <td>
                         $4.95                         </td>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th>Shipping</th>
                          <td>
                            <p>Free shipping</p>
                            <p>Shipping to FL.</p>
                            <a href="" id="showDivLink"><p>Change address</p></a>
                            <div class="coupon" id="coupon" style="display: none;min-height: 244px;">
                              <select name="country" id="country">
                                <option value="us">United State (US)</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                              </select> <br>
                              <select name="country" id="country">
                                <option value="alabama">Alabama</option>
                                <option value="florida">Florida</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                              </select> <br>
                            <input type="text" placeholder="City" style="max-width: 100%;">
                            <input type="text" placeholder="Postcode / ZIP" style="max-width: 100%;">
                            </div>
                          </td>
                      </tr>
                      <tr>
                        <th>Total</th>
                        <th style="text-align:center;">$4.95</th>
                      </tr>
                  </tbody>
              </table>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="checkout.php"><button type="button">Proceed to checkout</button></a>
              </div>
              </div>
            </div>
            </form>
        </div>
        </div>
    </div>
     
    
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
    function checkMe(selected)
{
if(selected)
{
document.getElementById("divcheck").style.display = "";
} 
else
{
document.getElementById("divcheck").style.display = "none";
}

}
  </script>
 <script>
    // JavaScript to show/hide the div when the link is clicked
    document.getElementById('showDivLink').addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default link behavior

      var div = document.getElementById('coupon');
      if (div.style.display === 'none') {
        div.style.display = 'block'; // Show the div
      } else {
        div.style.display = 'none'; // Hide the div
      }
    });
  </script>
<?php include('footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
