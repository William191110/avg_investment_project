<?php require 'model/website_class.php'; ?>
<?php $obj=new Website();?>
<?php require 'controller/session.php';?>
<?php require 'controller/cart_process.php';?>
<?php require 'controller/remove_item.php';?>
<?php require 'structures/top-bar.php';?>
<?php require 'structures/header.php';?>
<?php require 'structures/navigation.php';?>
<!-- ======= Doctors Section ======= -->
 <br><br><br>
    <section id="doctors" class="doctors">
      <div class="container">
        <div class="section-title">
          <h2>Shopping Cart</h2>
          <p>.</p>
        </div>

        <div class="row">

        <?php 
       if(!empty($_SESSION["items_session"]))
       {
        $total=0;
        foreach ($_SESSION["items_session"] as $keys => $values) {?>
         <div class="col-lg-6 mt-4 mt-lg-0">
         <form action="verification.php" method="POST">
          <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/products/<?php echo $values["image"];?>" class="img-fluid" alt=""></div>
          <div class="member-info">
          <h4><?php echo $values['name'];?></h4>
          <span class="font-weight-bold" style="font-size: 13px;">Description: <?php echo $values['description'];?></span>
          <span>Price: MK<?php echo number_format($values['price'],2);?></span>
          <p>Quantity: <?php echo $values['quantity'];?></p>
          <p>Price * Quantity: MK<?php echo number_format($values['quantity'] * $values['price'],2);?></p>
          <div class="pt-2">
          <a class="btn btn-danger" type="button" name="submit" href="shopping_cart.php?action=delete&id=<?php echo $values["id"];?>">Remove</a>
                </div>
              </div>
            </div>
          </div>
        <?php 
        $total=$total + ($values["quantity"] * $values["price"]);
        @$items= $items + $values["quantity"];
        }?>
          
          <div class="container mt-5 text-dark bg-light">
            <p class="font-weight-bold mt-4">Order Details</p>
            <hr class="bg-light">
            <p><span class="font-weight-bold">Total Quantity:</span> <?php echo $total_quantity=number_format($items);?></p>

          <!--   //Hidden quantity -->
  <input type="hidden" name="total_quantity" value="<?php echo $total_quantity=number_format($items);?>"/>
                <!-- //Hidden user id -->
              <input type="hidden" name="userid" value="<?php echo $userid;?>">

            <p><span class="font-weight-bold">Grand Total:</span> MK<?php echo $total_products_cost=number_format($total,2);?></p>

           <!--  //Hidden total -->
<input type="hidden" name="total_products_cost" value="<?php echo number_format($total,2);?>"/>

            <p><button class="btn btn-primary" type="submit" name="orders">Check out</button></p></div>
        </form>
        <?php }
        else
          {?>
<div class="container text-center font-weight-bold"><p>No Items Available In Your Cart</p></div>
          <?php }?>
        </div>
      </div>
    </section><!-- End Doctors Section -->
      <?php require 'structures/footer.php';?>