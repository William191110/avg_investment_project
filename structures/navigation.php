  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="account.php">Avg Investment</a><a href="account.php" class="logo mr-auto"><img src="assets/img/download.jfif" alt="" class="img-fluid"></a>
</h1>
      
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="account.php#hero">Home</a></li>
          <li><a href="account.php#brands">Our Brands</a></li>
           <li><a href="products.php">Products</a></li>
           <li><a href="shopping_cart.php">Cart <span class="badge badge-warning"><?php
echo count($_SESSION['items_session']);
?></span></a></li>
          <li><a href="account.php#about">About Us</a></li>
          <li><a href="account.php#contact">Contact Us</a></li>
     
         
          <li><a href="account.php#faq">FAQ's</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <a href="account.php?logout" class="appointment-btn scrollto">Log Out</a>

    </div>
     
 
  </header><!-- End Header -->