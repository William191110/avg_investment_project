<?php require 'model/website_class.php';?>
<?php $obj=new Website();?>
<?php require 'controller/session.php';?>
<?php require 'structures/top-bar.php';?>
<?php require 'structures/header.php';?>
<?php require 'structures/navigation.php';?>
<?php require 'controller/store_orders.php';?>
<?php require 'controller/session_unset.php';?>
<br><br><br><br><br>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<h3 class="text-center" style="font-family: Arial Black;">Choose Payment Method</h3>


<br>
</div>
</div>
                      
<div class="container">
<div class="container">
<form action="payment.php" method="POST">
<div class="form-row">
<div class="form-group col-md-6" style="margin-left: 25%;">
<label for="inputState">Payment Method</label>
<select id="inputState" name="pmethod" class="form-control" required>
        <option>Credit Card</option>
        <option>Mo626</option>
        <option>Airtel Money</option>
        <option>TNM Mpamba</option>
</select>
</div>
<input type="hidden" name="userid" value="<?php echo $userid;?>">
</div>
<button type="submit" name="paymethod" class="btn btn-primary"
 style="margin-bottom: 10px; color: #fff; margin-left: 45%;">Check Out</button>
</form>
</div>
</div>
<?php require 'structures/footer.php';?>