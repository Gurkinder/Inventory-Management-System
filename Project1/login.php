<Doctype! html>
<head>
<link rel="stylesheet" href="./styles/stylesheets/project_header.css" type="text/css">
<link rel="stylesheet" href="./styles/stylesheets/login.css" type="text/css">
</head>
<body>
    <?php 
    include "/xampp/htdocs/Project1/project_header.php";
    ?>
    
    <form action="login_authenticate.php" method="POST">
    <div id="login_content">
        <div id="div_username">
            <label class="lbl" id="lbl_1">Username- </label>
            <input required style="font-family: sans-serif" class="inp" id="inp_1" type="text" name="username" />
            
            <br/>
        </div>
        <div id="div_password">
            <label class="lbl" id="lbl_2">Password-</label>
            <input required style="font-family: sans-serif" class="inp" id="inp_2" type="password" name="password" />
            <br/>
        </div>
        <div id="div_buttons">
            <input class="inp" id="sub" type="submit" value="Login">
            <input class="inp" id="re" type="reset" value="Reset Form">
        </div>
    
    <?php 
            if(isset($_REQUEST['result'])){
                if($_REQUEST['result'] == "success" ){
                    echo "Login successfully.";
                    session_start();
                    $_SESSION['valid_user'] = true;
                    header("Location:view_products.php");
                }
                else if($_REQUEST['result'] == "fail"){
                    echo "Login unsuccessful.";
                }
            }
        ?>
        </div>
    </form>
</body>
</html>