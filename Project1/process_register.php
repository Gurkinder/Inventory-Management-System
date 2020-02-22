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

    $check = "SELECT `user_name` FROM `users` where `user_name` = '$user_name'";

    if(mysqli_num_rows(mysqli_query($conn,$check)) > 0){
        header("Location:register.php?result=exists");
        echo "exists";
    }
    else{
    $query = "INSERT INTO `users` (`user_name`, `user_password`) VALUES ('$user_name', '$password')";

    $result = mysqli_query($conn, $query);

    if($result > 0){
        header("Location:register.php?result=success");
        echo "success";
    }
    else{
        echo "unsuccessful";
        header("Location:register.php?result=fail");
    }
}
?>