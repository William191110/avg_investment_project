<?php 
if(isset($_POST['orders'])){
  $total_quantity=$_POST['total_quantity'];
  $total_products_cost=$_POST['total_products_cost'];
  $userid=$_POST['userid'];

  foreach ($_SESSION["items_session"] as $keys => $values){
  	$date=date("Y-m-d");
  	
  	$product_id=$values['id'];
  	$image=$values['image'];
  	$name=$values['name'];
  	$description=$values['description'];
  	$price=$values['price'];
  	$quantity=$values['quantity'];
  	$productbyprice=$values["quantity"] * $values["price"];
  	$obj->getOrders($userid, $product_id,$image,$name,$description,$price,$quantity,$productbyprice,$date);
  }
  
}

//Insert into detailed receipt
if (isset($_POST['receipt'])) {

  $dc='FREE';
  $date=date("Y-m-d");
  $total_quantity=$_POST['total_quantity'];
  $total_products_cost=$_POST['total_products_cost'];
  $obj->detailedOrders($userid, $location, $contact, $dc,$total_quantity, $total_products_cost,$date);
  $obj->ordersHistory($userid);
  
}

//insert into payments
if (isset($_POST['paymethod'])) {
  $userid=$_POST['userid'];
  $pmethod=$_POST['pmethod'];
  unset($_SESSION["items_session"]);
  $obj->paymentMethod($userid,$pmethod);


}

?>