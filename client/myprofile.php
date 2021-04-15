<?php
require("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="myprofile.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="body">
    <?php
      require("header.php");
    ?>
        <form class="formlogin" method="POST" >
            <div class="leftform">
                <h1>My Profile</h1>
                <div class="mb-3">
                <input class="field" type="text" name="username" id="email" placeholder="mergo1" disabled>
                </div>
                <div class="mb-3">
                <input class="field" type="password" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" name="buttonsave" id="buttonsave">SAVE</button>
                <?php
                function kontrolloPass($pass)
                {
                    $pass1=$pass;
                    $upperletter=0;
                    $number=0;
                    if($pass==$pass1)
                    {
                        if(preg_match('~[A-Z]~', $pass));
                        {
                            $upperletter=1;    
                        } 
                        if(preg_match('~[0-9]~', $pass))
                        {
                            $number=1;
                        }
                        if($number==1 && $upperletter==1)
                        {
                            return true;
                        }
                        else{
                            return false;
                        }
                    }
                    else {
                        return false;
                    }
                }
                    if(isset($_POST["buttonsave"]))
                    {
                        $username="mergo1";
                        $pass=$_POST["password"];
                        if(strlen($username)>0 && strlen($pass)>0 && kontrolloPass($pass))
                        {
                            $pass=md5($_POST["password"]);
                            $sql = "UPDATE informationsusers SET pass=? WHERE username =?";
                            global $conn;
                            $value=$conn->prepare($sql) or die ($conn->error);;
                            if($query = $value) { // assuming $mysqli is the connection
                                $query->bind_param('ss',$pass,$username);
                                $query->execute();
                                echo ('<script>alert("Successfully.")</script>');
                            }
                            else
                            {
                                echo ('<script>alert("Not Successfully.")</script>');
                            }
                        }
                        else
                        {
                            echo ('<script>alert("Error:Email and Password are required.")</script>');
                        }
                    }
                ?>
            </div>
          </form>
        <div id="footer">
        <h1 style="color:white;font-size: 30px;text-align:center;line-height:70px;">Copyright © 2021 mergo-SERVERS - All Rights Reserved.</h1>
        </div>
    </body>
</html>