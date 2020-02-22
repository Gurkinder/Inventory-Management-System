<Doctype! html>
<head>
<link rel="stylesheet" href="./styles/stylesheets/project_header.css" type="text/css">
<link rel="stylesheet" href="./styles/stylesheets/register.css" type="text/css">
</head>
<body>
    <?php 
    include "/xampp/htdocs/Project1/project_header.php";
    ?>
    
    <form action="process_register.php" method="POST">
    <div id="register_content">
        <div id="div_username">
            <label class="lbl" id="lbl_1">New Username- </label>
            <input style="font-family: sans-serif" required class="inp" id="inp_1" type="text" name="username" />
            
            <br/>
        </div>
        <div id="div_password">
            <label class="lbl" id="lbl_2">New Password-</label>
            <input style="font-family: sans-serif" required class="inp" id="inp_2" type="password" name="password" />
            <br/>
        </div>
        <div id="div_buttons">
            <input class="inp" id="sub" type="submit" value="Register">
            <input class="inp" id="re" type="reset" value="Reset Form">
        </div>
    
    
    <?php 
            if(isset($_REQUEST['result'])){
                if($_REQUEST['result'] == "success" ){
                    echo "Login successfully.";
                }
                else if($_REQUEST['result'] == "fail"){
                    echo "Login unsuccessful.";
                }
                else if($_REQUEST['result'] == "exists"){
                    echo "Username already exits. Choose a different username.";
                }
            }
        ?>
        </div>
    </form>
</body>
</html>