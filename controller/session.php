<?php
session_start();
if(isset($_SESSION['avg']))
{
 $email=$_SESSION['avg'];
 $userData=$obj->userData($email);

 foreach ($userData as $user) {
 	$userid=$user['id'];
	$username=$user['name'];
	$email=$user['email'];
	$contact=$user['contact'];
	$location=$user['location'];
}

}
else{
	echo "<script>alert('An error has occurred, please try again later!');</script>";
    echo "<script>window.location.href='./index.php'</script>";
}
?>