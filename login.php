<?php
require("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="login.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="body">
        <form action="client/index.php" class="formlogin" method="POST" >
            <div class="leftform">
                <h1>Sign In</h1>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <p id="paragraph">or use your account</p>
                <div class="mb-3">
                <input class="field" type="text" name="username" id="email" placeholder="Username">
                </div>
                <div class="mb-3">
                <input class="field" type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="forgetpassword">
                <a href="#"><p id="paragraph">Forget your password?</p></a>
                </div>
                <button type="submit" class="btn btn-primary" name="buttonsignin" id="buttonsignin">SIGN IN</button>
                <?php
                    if(isset($_POST["buttonsignin"]))
                    {
                        $username=$_POST["username"];
                        $pass=$_POST["password"];
                        if(strlen($username)>0 && strlen($pass)>0)
                        {
                            $pass=md5($_POST["password"]);
                            $sql = "SELECT * FROM `informationsusers` WHERE `username` = '$username' AND `pass` = '$pass'";
                            $result = $conn->query($sql);
                        
                            if ($result->num_rows > 0)
                             {
                                if(!isset($_COOKIE))
                                {
                                    setcookie("emri",$username,time()+60*60*60*24);       
                                }
                            }
                            else
                            {
                                echo ('<script>alert("The password you’ve entered is incorrect.")</script>');
                            }
                        }
                        else
                        {
                            echo ('<script>alert("Error:Email and Password are required.")</script>');
                        }
                    }
                ?>
            </div>
            <div class="rightform" >
            <a href="index.php"><p id="paragraph1">HOME &#8656</p></a>
                <?php
                if(isset($_COOKIE))
                {
                    echo("<h1>Welcome Back!</h1>
                    <p>Another account ?</p>
                    "
                );
                }
                else{
                    echo("<h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start </br> journey with us</p>
                    ");
                   
                }
                ?>
                <button formaction="ushtrime/../index.php" type="submit" class="btn btn-primary" id="buttonsignup">ORDER NOW</button>
            </div>
          </form>
          <script>
            function validotedhenat(){
                var email=document.getElementById("email").value;
                var password=document.getElementById("password").value;
                if(email.length>1 && password.length>1 && email.includes("@"))
                {
                    alert("Successfully!");
                }
                else{
                    alert("Email and password must be valid!")
                }
            }
            function signuppage(){
                window.open('page.html', '_self');
            }

          </script>
    </body>
</html>