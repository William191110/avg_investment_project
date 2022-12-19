<?php

$image="image";
$name="name";
$description="description";
$price="price";
$quantity="quantity";

if (isset($_POST["add"])) {
if(isset($_SESSION['items_session'])){
  
$item_array_id=array_column($_SESSION["items_session"], "id");
if(!in_array($_GET["id"], $item_array_id))
{
$count=count($_SESSION['items_session']);
  $item_array=array(

    'id' =>$_GET['id'],
    'image' =>$_POST['image'],
    'name' =>$_POST['name'],
    'description' =>$_POST['description'],
    'price' =>$_POST['price'],
    'quantity' =>$_POST['quantity']

  );
   $_SESSION['items_session'][$count]=$item_array;
}
else{
  echo "<script>alert('item is already added');</script>";
  echo '<script>window.location="./products.php"</script>';
}
 
}

else{
  $item_array=array(

    'id' =>$_GET['id'],
    'image' =>$_POST['image'],
    'name' =>$_POST['name'],
    'description' =>$_POST['description'],
    'price' =>$_POST['price'],
    'quantity' =>$_POST['quantity']

  );
  //storing details above into $_SESSION['cart']
  $_SESSION['items_session'][0]=$item_array;
}
//@array_push($_SESSION['cart']);
  
}
?>