<?php require "person.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="login.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form class="formlogin" action="test.php" method="post">
            <div class="rightform">
                <h1>Welcome!</h1>
                <p>To keep connected with us please login</br> with your personal info</p>
                <button formaction="ushtrime/../login.php" type="submit" class="btn btn-primary" id="buttonsignup">SIGN IN</button>
            </div>
            <div class="leftform">
                <a href="index.html"><p id="paragraph1">HOME &#8656</p></a>
                <h1>Create Account</h1>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <p id="paragraph">or use your email for registration</p>
                <div class="mb-3">
                    <input class="field" type="name" name="name" id="name" placeholder="Username">
                </div>
                <div class="mb-3">
                <input class="field" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                <input class="field" type="password" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" id="buttonsignin">SIGN UP</button>
            </div>
          </form>
          <script>
            function validotedhenat(){
                var name=document.getElementById("name").value;
                var email=document.getElementById("email").value;
                var password=document.getElementById("password").value;
                if(name.length>1 && email.length>1 && password.length>1 && email.includes("@"))
                {
                    alert("Successfully!");
                }
                else{
                    alert("Name,Email and password must be valid!")
                }
            }
            function signuppage(){
                window.open('page.html', '_self');
            }

          </script>
    </body>



</html>