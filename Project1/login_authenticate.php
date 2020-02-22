<?php
$host = 'localhost';
$username = 'tatlayg';
$password = 'bun246%&';
$db_name = 'test';
$conn = mysqli_connect($host, $username, $password, $db_name);
if(empty($conn)){
    die("Connection failed: " . mysqli_connect_error());
}
$user_name = $_REQUEST['username'];
$password = $_REQUEST['password'];

$query = "select * from `users` where user_name = '$user_name'";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        if(strcmp($row['user_password'],$password) == 0){
            echo "login successful";
            header("Location:login.php?result=success");
        }
        else{
            echo "login unsuccessful";
            header("Location:login.php?result=fail");
        }
    }
}
else{
    echo "login unsuccessful";
    header("Location:login.php?result=fail");
}
?>