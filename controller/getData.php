<?php
//Class instantiated 
$obj=new Website();

//Login user
if (isset($_POST['login'])) {
	session_start();

	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$obj->Login($email, $password);
}

//Sign up user
if (isset($_POST['signup'])) {
	session_start();


	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$location=$_POST['location'];
	$gender=$_POST['gender'];
	$password=md5($_POST['password']);
	$obj->CheckAvailability($name,$email,$contact,$location,$gender,$password);
}

//Insert into FAQs
 if (isset($_POST['faq'])) {
	$reply=$_POST['reply'];
	$question=$_POST['question'];
	if(strpos($question, '?') > -1)
	{
	$obj->Faqs($question, $reply);
	}
	 else
	 {
	    	echo "<script>alert('Please include a ? ');</script>";
	    	echo "<script>window.location.href='./account.php'</script>";
	 }
}

//Insert into ContactUs
 if (isset($_POST['contact'])){
	$customer_id=$_POST['customer_id'];
	$message=$_POST['message'];
	$obj->contactUs($customer_id, $message);
}

//Insert into Subscribe
 if (isset($_POST['subscribe'])) {
	$customer_id=$_POST['customer_id'];
	$email=$_POST['email'];
	if(strpos($email, '@') > -1)
	{
	   $obj->Subscribe($customer_id, $email);
	}
	else
	 {
	    echo "<script>alert('Failed, Please try again later!');</script>";
	    echo "<script>window.location.href='./account.php'</script>";
	  }
}


?>