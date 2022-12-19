<?php require 'model/website_class.php';?>
<?php $obj=new Website();?>
<?php require 'controller/session.php';?>
<?php require 'structures/top-bar.php';?>
<?php require 'structures/header.php';?>
<?php require 'structures/navigation.php';?>
<br><br><br><br><br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h3 class="text-center" style="font-family: Arial Black;">Download Your Receipt</h3>
    <br>
  </div>
</div>
<!---- end information---->

<div class="container">
  <div class="container">
  	<br><br>
<form action="receipt/receipt.php" method="POST">
	<input type="hidden" name="userid" value="<?php echo $userid;?>">
	<button type="submit" name="generate" class="btn btn-primary" style="margin-bottom: 10px; color: #fff; margin-left: 45%;"><i class="fa fa-download" aria-hidden="true"></i>download <em>receipt</em></button>
</form>
<br><br>
</div>

</div>
<?php require 'structures/footer.php';?>