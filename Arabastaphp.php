<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '123456','arabasta');

// get the post records
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];

$Number = $_POST['Number'];
$Adress = $_POST['Adress'];
$Dish = $_POST['Dish'];
$Size = $_POST['Size'];
$Quantity = $_POST['Quantity'];

// database insert SQL code
$sql = "INSERT INTO `orders_list` (`FirstName`, `LastName`, `Number`, `Adress`, `Dish`, `Size`, `Quantity`) VALUES ('$FirstName', '$LastName', '$Number', '$Adress', '$Dish', '$Size', '$Quantity')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>