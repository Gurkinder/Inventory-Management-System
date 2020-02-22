<?php 
 session_start();
 if(!isset($_SESSION['valid_user'])){
    header("Location:login.php");
 }
?>
<Doctype! html>
<head>
<link rel="stylesheet" href="./styles/stylesheets/project_header.css" type="text/css">
<link rel="stylesheet" href="./styles/stylesheets/add_products.css" type="text/css">
</head>
<body>
    <?php 
    include "/xampp/htdocs/Project1/project_header.php";
    ?>
    <form action="process_add_products.php" method="GET">
        <div id="form_rowsss">
            <div id="row1">
                <label class="lbl">Product Name:</label> 
                <input style="font-family: sans-serif" required class="inp" id="inp_1" type="text" name="product_name" />
            </div>
            <div id="row2">
                <label class="lbl">Product Description:</label>
                <input style="font-family: sans-serif" required class="inp" id="inp_2" type="text" name="product_desc">
            </div>
            <div id="row3">
                <label class="lbl">Product Cost:</label>
                <input style="font-family: sans-serif" required class="inp" id="inp_3" type="text" name="product_cost" >
            </div>
            <div id="row4">
                <input class="inp" id="sub" type="submit" value="Submit">
                <input class="inp" id="re" type="reset" value="Reset">
            </div>
        </div>

        <?php 
            if(isset($_REQUEST['result'])){
                if($_REQUEST['result'] == "success" ){
                    echo "Product Successfully added.";
                }
                else if($_REQUEST['result'] == "fail"){
                    echo "Product not added to the database.";
                }
            }
        ?>
    </form>
</body>
</html>