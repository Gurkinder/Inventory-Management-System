<?php
$host = 'localhost';
$username = 'tatlayg';
$password = 'bun246%&';
$db_name = 'test';
$conn = mysqli_connect($host, $username, $password, $db_name);
if(empty($conn)){
    die("Connection failed: " . mysqli_connect_error());
}
$product_name = $_REQUEST['product_name'];
$product_desc = $_REQUEST['product_desc'];
$product_cost = $_REQUEST['product_cost'];

$query = "INSERT INTO products (`product_name`, `product_desc`, `product_cost`) VALUES 
( '$product_name', '$product_desc', $product_cost)";

$result = mysqli_query($conn, $query);
if($result > 0){
    header("Location:add_products.php?result=success");
}
else{
    header("Location:add_products.php?result=fail");
}
?>