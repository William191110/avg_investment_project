<?php require 'model/website_class.php';?>
<?php $obj=new Website();?>
<?php require 'controller/session.php';?>
<?php require 'structures/top-bar.php';?>
<?php require 'structures/header.php';?>
<?php require 'structures/navigation.php';?>
<?php require 'controller/store_orders.php';?>
<br><br><br><br><br>
<div  class="jumbotron jumbotron-fluid">
  <div class="container">
    <h3 class="text-center" style="font-family: Arial Black;">Verification Form</h3>
    <br>
  </div>
</div>
<!---- end information---->


<div class="container">
  <div class="container">
<form action="payment.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Customer Name</label>
      <input type="text" name="name" value="<?php echo $username;?>" class="form-control" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" value="<?php echo $email;?>" class="form-control" readonly>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Contact</label>
    <input type="text" name="contact" value="<?php echo $contact;?>" class="form-control" readonly>
  </div>
   <div class="form-group col-md-6">
    <label for="inputAddress">Location</label>
    <input type="text" name="location" value="<?php echo $location;?>" class="form-control" readonly>
    <input type="hidden" name="delivery_charges" value="FREE" class="form-control" readonly>
  </div>
</div>
 

 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Total Quantity</label>
      <input type="text" name="total_quantity" value="<?php print $total_quantity;?>" class="form-control" readonly>
    </div>

     <div class="form-group col-md-6">
      <label for="inputCity">Grand Total</label>
      <input type="text" name="total_products_cost" value="<?php print $total_products_cost;?>" class="form-control" readonly>
    </div>

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" required>
      <label class="form-check-label" for="gridCheck">
       Confirm
      </label>
    </div> 
  </div>
  <div class="container" style=" padding-bottom: 10px; ">
   <button class="btn btn-success" name="receipt" type="submit" style="margin-left: 48% ;">OK</button></div>
</form>

</div>

</div>
<?php require 'structures/footer.php';?>