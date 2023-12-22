<style>
  .container__span {
    width: 20px;
    height: 20px;
    line-height: 19px;
    border-radius: 20px;
    background-color: red;
    color: #fff;
    font-size: 11px;
    position: absolute;
    top: 25px;
    transition: 0.65s;
    right: 70px;
    font-weight: 500;
    text-align: center;
  }
  
</style>

<nav class="nav navbar-expand-lg navbar-dark bg-black">
  <div class="container d-flex justify-center align-items-center">
    <a href="index.php">
      <img src="assets/imgs/RDlogo.png" alt="logo" width="100px" height="100px">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item mx-2">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#product">Product</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
      <a href="cart.php" class="btn btn-outline-light btn-lg">
        <i class="fa fa-shopping-bag"><span class="container__span">0</span></i>
      </a>
  </div>
</nav>
