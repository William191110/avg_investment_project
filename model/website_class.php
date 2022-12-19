<?php 
require 'configuration.php';

class Website extends DbConfiguration{

	public function viewProducts()
	{
		$query=$this->Connection()->query("SELECT * FROM products");
		$query->execute();
		$rows=$query->fetchAll();
		return $rows;
	}

	public function viewQueries()
	{
		$query=$this->Connection()->query("SELECT * FROM faq");
		$query->execute();
		$faqs=$query->fetchAll();
		return $faqs;
	}

	public function userData($email)
	{
		$query=$this->Connection()->prepare("SELECT * FROM customers WHERE email=:u");
		$query->bindParam(':u', $email, PDO::PARAM_STR);
		$query->execute();
		$userData=$query->fetchAll();
		return $userData;
	}

	public function Login($email, $password)
	{
		$query=$this->Connection()->prepare("SELECT email, password FROM customers WHERE 
			(email=:e) AND (password=:p)");
		$query->bindParam(':e', $email, PDO::PARAM_STR);
		$query->bindParam(':p', $password, PDO::PARAM_STR);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		if($query->rowCount()>0)
		{
			$_SESSION['avg']=$email;
			$_SESSION['items_session']=array();
			header('Location:./account.php');
		}
		else
		{
			echo "<script>alert('Wrong email or password');</script>";
			echo "<script>window.location.href='./index.php'</script>";
		}
	}

	public function CheckAvailability($name,$email,$contact,$location,$gender,$password)
	{
		$query=$this->Connection()->prepare("SELECT * FROM customers WHERE email=:e");
		$query->bindParam(':e', $email, PDO::PARAM_STR);
		$query->execute();
		$results = $query->fetchAll();
		if($query->rowCount()>0)
		{
			echo "<script>alert('Email already exist');</script>";
			echo "<script>window.location.href='./signup.php'</script>";
		}
		else
		{
			$this->signUp($name,$email,$contact,$location,$gender,$password);
		}
	}

	public function signUp($name,$email,$contact,$location,$gender,$password)
	{
		$query=$this->Connection()->prepare("INSERT INTO customers (name,gender,email, password,contact, location) VALUES(:n, :g, :e, :p, :c, :l)");
		$query->bindParam(':n', $name, PDO::PARAM_STR);
		$query->bindParam(':g', $gender, PDO::PARAM_STR);
		$query->bindParam(':e', $email, PDO::PARAM_STR);
		$query->bindParam(':p', $password, PDO::PARAM_STR);
		$query->bindParam(':c', $contact, PDO::PARAM_INT);
		$query->bindParam(':l', $location, PDO::PARAM_STR);
		if($query->execute())
		{ 
			$_SESSION['avg']=$email;
			$_SESSION['items_session']=array();
			echo "<script>window.location.href='./account.php'</script>";
		}
	}

	public function Faqs($question, $reply)
	{
		$query=$this->Connection()->prepare("INSERT INTO faq (question, reply) VALUES(:q,:r)");
		$query->bindParam(':q', $question,PDO::PARAM_STR);
		$query->bindParam(':r', $reply, PDO::PARAM_STR);
		if($query->execute())
		{
			echo "<script>alert('We Have Received Your Question, Thank You!');</script>";
 	        echo "<script>window.location.href='./account.php'</script>";
		}
		else
		{
			echo "<script>alert('Failed to send your question, Please try again later!');</script>";
			echo "<script>window.location.href='./account.php'</script>";
		}
	}

	public function contactUs($customer_id, $message)
	{
		$query=$this->Connection()->prepare("INSERT INTO contact_us (customer_id, message) VALUES(:ci,:m)");
		$query->bindParam(':ci', $customer_id, PDO::PARAM_INT);
		$query->bindParam(':m', $message, PDO::PARAM_STR);
		if($query->execute())
		{
			echo "<script>alert('We Have Received Your Message, Thank You!');</script>";
 	        echo "<script>window.location.href='./account.php'</script>";
		}
		else
		{
			echo "<script>alert('Failed to send your Message, Please try again later!');</script>";
			echo "<script>window.location.href='./account.php'</script>";
		}
	}

	public function Subscribe($customer_id,$email)
	{
		$query=$this->Connection()->prepare("INSERT INTO subscribers (customer_id, email) VALUES(:ci,:e)");
		$query->bindParam(':ci', $customer_id, PDO::PARAM_INT);
		$query->bindParam(':e', $email, PDO::PARAM_STR);
		if($query->execute())
		{
			echo "<script>alert('You have subscribed, Thank You!');</script>";
 	        echo "<script>window.location.href='./account.php'</script>";
		}
		else
		{
			echo "<script>alert('Failed to subscribe, Please try again later!');</script>";
			echo "<script>window.location.href='./account.php'</script>";
		}  
	}

	public function getOrders($userid, $product_id,$image,$name,$description,$price,$quantity,$productbyprice,$date)
	{
		$query=$this->Connection()->prepare("INSERT INTO receipt_information (customer_id, product_id, image, name, description, price, quantity, price_by_quantity,  transaction_date) VALUES(:cid,:pid, :im,:nm, :d,:p,:q, :pbq, :td)");
		$query->bindParam(':cid', $userid, PDO::PARAM_INT);
		$query->bindParam(':pid', $product_id, PDO::PARAM_INT);
		$query->bindParam(':im', $image, PDO::PARAM_STR);
		$query->bindParam(':nm', $name, PDO::PARAM_STR);
		$query->bindParam(':d', $description, PDO::PARAM_STR);
		$query->bindParam(':p', $price, PDO::PARAM_INT);
		$query->bindParam(':q', $quantity, PDO::PARAM_INT);
		$query->bindParam(':pbq', $productbyprice, PDO::PARAM_INT);
		$query->bindParam(':td', $date, PDO::PARAM_STR);
		$query->execute();
	}

	public function detailedOrders($userid, $location, $contact, $dc,$total_quantity,
		$total_products_cost,$date)
	{
		$query=$this->Connection()->prepare("INSERT INTO detailedreceiptinformation
			(customer_id, location, contact, delivery_charges, quantity, grand_total,  issued_date) VALUES(:cid,:l, :c, :dc, :q, :gt, :isd)");
		$query->bindParam(':cid', $userid, PDO::PARAM_INT);
		$query->bindParam(':l', $location, PDO::PARAM_STR);
		$query->bindParam(':c', $contact, PDO::PARAM_STR);
		$query->bindParam(':dc', $dc, PDO::PARAM_STR);
		$query->bindParam(':q', $total_quantity, PDO::PARAM_INT);
		$query->bindParam(':gt', $total_products_cost, PDO::PARAM_STR);
		$query->bindParam(':isd', $date, PDO::PARAM_STR);
		$query->execute();
		
	}

	public function ordersHistory($userid)
	{
		$query=$this->Connection()->prepare("INSERT INTO customerpurchasehistory(customer_id, product_id, image, name, description, price, quantity, price_by_quantity,  transaction_date) SELECT  customer_id, product_id, image, name, description, price, quantity,price_by_quantity,  transaction_date FROM receipt_information  WHERE customer_id=:usi");
		$query->bindParam(':usi', $userid, PDO::PARAM_INT);
		$query->execute();
	}

	public function paymentMethod($userid,$pmethod)
	{
		$query=$this->Connection()->prepare("INSERT INTO payment_method (customer_id, payment_method) VALUES(:cid,:pm)");
		$query->bindParam(':cid', $userid, PDO::PARAM_INT);
		$query->bindParam(':pm', $pmethod, PDO::PARAM_STR);
		if($query->execute())
		{
			echo "<script>alert('Your Payments Has Been Received, Thank You!');</script>";
			echo "<script>window.location.href='./receipt_generate.php'</script>";
		}else
		{
			echo "<script>alert('Failed to process your payments');</script>";
			echo "<script>window.location.href='./payment.php'</script>";
		}
	}

	public function viewReceipt($userid,$date)
	{
		$query=$this->Connection()->prepare("SELECT * FROM detailedreceiptinformation WHERE customer_id=:cid AND issued_date=:id");
		$query->bindParam(':cid', $userid, PDO::PARAM_INT);
		$query->bindParam(':id', $date, PDO::PARAM_STR);
		$query->execute();
		$rows=$query->fetchAll();
		return $rows;
	}

	public function ReceiptDetails($userid, $date)
	{
		$query=$this->Connection()->prepare("SELECT * FROM receipt_information WHERE customer_id=:cid AND transaction_date=:td");
		$query->bindParam(':cid', $userid, PDO::PARAM_INT);
		$query->bindParam(':td', $date, PDO::PARAM_STR);
		$query->execute();
		$receipt=$query->fetchAll();
		return $receipt;
		
	}

	public function unsetData()
	{
		$query=$this->Connection()->query("DELETE FROM receipt_information");
		$query=$this->Connection()->query("DELETE FROM detailedreceiptinformation");
		$query->execute();
	}


}

?>