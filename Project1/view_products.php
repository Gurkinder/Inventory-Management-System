<?php 
 session_start();
 if(!isset($_SESSION['valid_user'])){
    header("Location:login.php");
 }
?>
<Doctype! html>
<head>
<link rel="stylesheet" href="./styles/stylesheets/project_header.css" type="text/css">
<link rel="stylesheet" href="view_products.css" type="text/css">
</head>
<body>
    <?php 
    include "/xampp/htdocs/Project1/project_header.php";
    ?>
    
    <div id="view_div">
    <table>
        <tr>
            <td>Producd ID</td>
            <td>Producd Name</td>
            <td>Producd Description</td>
            <td>Producd Cost</td>
        </tr>
        <?php 
        $host = 'localhost';
        $username = 'tatlayg';
        $password = 'bun246%&';
        $db_name = 'test';
        $conn = mysqli_connect($host, $username, $password, $db_name);
        if(empty($conn)){
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "select * from products";
        
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row['product_id']."</td>";
                echo "<td>". $row['product_name'] . "<br/></td>";
                echo "<td>". $row['product_desc'] . "<br/></td>";
                echo "<td> $ ". $row['product_cost'] . "</td></tr>";
            }
        }
        ?>
        </table>
    </div>
</body>
</html>