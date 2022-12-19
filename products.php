<?php require 'model/website_class.php'; ?>
<?php $obj=new Website();
$rows=$obj->viewProducts();?>
<?php require 'controller/session.php';?>
<?php require 'controller/cart_process.php';?>
<?php require 'structures/top-bar.php';?>
<?php require 'structures/header.php';?>
<?php require 'structures/navigation.php';?>
    <!-- ======= Products Section ======= -->


    <br><br><br><br>
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Products</h2>
          <p>Products Available:</p>
        </div>

        <div class="row">
          <?php 
          if (empty($rows)) {?>
          <div class="container text-center font-weight-bold"><p><?php echo 'We Are Sorry, Products Are Not Available In The Stock'; ?></p></div>
          <?php }else{
          foreach ($rows as $row) :?>
          <div class="col-lg-4 col-md-6 mb-5 d-flex align-items-stretch">
            <div class="icon-box">
              <form action="products.php?id=<?php echo $row['id'];?>" method="POST">
              <img src="assets/img/products/<?php echo $row['image'];?>" class="img-fluid">
              <input type="hidden" value="<?php echo $row['image'];?>" name="image">
              <h4><a href=""><?php echo $row['name']; ?></a></h4>
              <input type="hidden" value="<?php echo $row['name'];?>" name="name">
              <p><?php echo $row['description'];?></p>
              <input type="hidden" value="<?php echo $row['description'];?>" name="description">
              <p>MK<?php echo number_format($row['price'],2);?></p>
              <input type="hidden" value="<?php echo $row['price'];?>" name="price">
              <div class="container text-center">
              <p>Quantity:<input type="text" class="mt-3" name="quantity" value="1" min="1" max="5"></p>
              <p><button type="submit" name="add" class="btn btn-primary mt-3">Add To Cart</button></p>
            </div>
          </form>
            </div>
          </div>
          <?php endforeach; }?>

        </div>

      </div>
    </section><!-- End Services Section -->
    <?php require 'structures/footer.php';?>