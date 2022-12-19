<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['action'])){
  if($_GET["action"] == "setup"){

  //Create database
$sql = "CREATE DATABASE `avgDB`";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}

//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql= " CREATE TABLE `contact_us` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `customer_id` int(255) NOT NULL ,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}

//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql= "  CREATE TABLE `customerpurchasehistory` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `customer_id` int(50) NOT NULL,
  `product_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price_by_quantity` double(10,2) NOT NULL,
  `transaction_date` date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql= "CREATE TABLE `customers` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql= "CREATE TABLE `detailedreceiptinformation` (
  `id` int(50) NOT NULL AUTO_INCREMENT, 
  `customer_id` int(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `delivery_charges` varchar(255) NOT NULL,
  `quantity` int(50) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `issued_date` date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}



//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql= "CREATE TABLE `faq` (
  `id` int(50) NOT NULL AUTO_INCREMENT, 
  `question` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}

//INSERT DATA
$conn = mysqli_connect("localhost","root","","avgDB");
$sql="INSERT INTO `faq` (`id`, `question`, `reply`) VALUES
(1, 'How Can I View Products Available In The Cart?', 'Answer Not Avialable')";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table: " . $conn->error;
}

//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql= "CREATE TABLE `payment_method` (
  `id` int(50) NOT NULL AUTO_INCREMENT, 
  `customer_id` int(50) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql= "CREATE TABLE `products` (
  `id` int(50) NOT NULL AUTO_INCREMENT, 
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}



//INSERT DATA
$conn = mysqli_connect("localhost","root","","avgDB");
$sql="INSERT INTO `products` (`id`, `image`, `name`, `price`, `description`) VALUES
(1, '1.jpg', 'Build Plast Cement', 30500.00, 'For Brickwork - 50KG (30%)'),
(2, '4.jpg', 'ACC - Suraksha', 19500.00, '100KG - 50% Strength'),
(3, '6.jpg', 'Dura Crete', 30500.00, '50KG - 34% Strength'),
(4, '7.jpg', 'Dura Crete', 40000.00, '80KG - 45% Strength'),
(5, '8.jpg', 'Akshar', 40000.00, 'Akshar Cement - 50KG - 40% '),
(6, '2.jpg', 'Portland Cement', 30500.00, 'Type 1/3 - 92.1KG - 35%'),
(7, '10.jpg', 'Dangote', 35000.00, '5OKG (35%)'),
(8, '11.jpeg', 'Dangote 3X', 40000.00, '50KG +/- 1KG (40%)'),
(9, '12.jpeg', 'SupaSet', 25500.00, ' ---'),
(10, '150.jpg', 'Hima Cement', 20000.00, 'Power Max - 50KG (10%)'),
(11, '160.jpg', 'Elephant', 45500.00, 'Elephant Cement - 50KG'),
(12, '180.jpg', 'White Portland Cement', 40000.00, 'Type 1 - 60KG')";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table";
}



//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql= "CREATE TABLE `receipt_information` (
 `id` int(50) NOT NULL AUTO_INCREMENT, 
  `customer_id` int(50) NOT NULL,
  `product_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price_by_quantity` double(10,2) NOT NULL,
  `transaction_date` date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}




//CREATING TABLE
$conn = mysqli_connect("localhost","root","","avgDB");
$sql="CREATE TABLE `subscribers` (
   `id` int(50) NOT NULL AUTO_INCREMENT, 
  `customer_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
header("location:../index.php");
} else {
echo "Error creating table: " . $conn->error;
}
}
}

?>
<button><a href="setup.php?action=setup" style="text-decoration: none;font-size: 30px; color: black;">Setup Database</a>
</button>