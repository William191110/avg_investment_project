<?php if(isset($_GET["action"])){
if($_GET["action"] == "delete")
{
foreach ($_SESSION["items_session"] as $keys => $values) 
{
if($values["id"] == $_GET["id"])
{
unset($_SESSION["items_session"][$keys]);
echo "<script>alert('item has been removed');</script>";
echo "<script>window.location.href='./shopping_cart.php'</script>";
}
}
}
}
?>