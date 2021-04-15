<?php
require("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="orderc.css">
    </head>
    <body>
    <?php
    require("header.php");
    ?>   
    <div id="pop" >
        <form id="forma" method="post">
            <p id="paragraphsize">Personal information</p>
            <input type="radio" name="zgjidhje" value="private"><label style="font-size: 20px; margin-right:3%;margin-left:1%" for="private">Private</label>
            <input type="radio" name="zgjidhje" value="company"><label style="font-size: 20px;margin-right:3%;margin-left:1%" for="company">Company</label></br>
            <input type="text" placeholder="First name*" name="emri" id="emri" required>
            <input type="text" placeholder="Middle name" name="emrimesem" id="emrimesem">
            <input type="text" placeholder="Last name*" name="mbiemri" id="mbiemri" required> </br>
            <input type="email" placeholder="Email*" name="email" id="email" required></br>
            <input type="text" placeholder="Street*" name="street" id="street" required></br>
            <input type="text" placeholder="Address" name="address" id="address" required></br>
            <input type="text" placeholder="ZIP*" name="zip" id="zip" required>
            <input type="text" placeholder="City*" name="city" id="city" required></br>
            <p style="text-align: center;
                    font-size: 15px;
                    color: red;" id="informatat"></p>
            <label id="phonelabel">Phone+</label><input type="text" placeholder="376" name="phone" id="phone" required>
            <input type="text" placeholder="area code" name="areacode" id="areacode" required>
            <input type="text" placeholder="number" name="telnumber" id="telnumber" required></br>
            <p style="text-align: center;
                    font-size: 15px;
                    color: red;" id="informatat1"></p>
            <input type="text" placeholder="Username" name="username" id="username" required>
            <input type="password" placeholder="Password" name="psw" id="psw" required>
            <input type="password" placeholder="Confirm password" name="psw1" id="psw1" required></br></br>
            <input type="checkbox" value="terms"><label for="terms" name="readterms" id="readterms" required>I have read the terms and conditions of Host Europe GmbH and I agree to them.*</label></br>
            <p id="fillinformation">Please fill in your personal information first before selecting the payment method.</p>
            <i onclick="shfaqi()" class="fa fa-cc-visa" style="font-size:48px;color:green;margin-right: 3%;"></i>
            <i onclick="shfaqi()" class="fa fa-cc-mastercard" style="font-size:48px;margin-right: 3%;color:red"></i> </br>
            <input style="display:none" type="text" placeholder="Card Number" name="cardnumber" id="cardnumber" required>
            <input style="display:none" type="text" placeholder="Expiry Date: 01:21" name="expirydate" id="expirydate">
            <input style="display:none" type="text" placeholder="CVC" name="cvc" id="cvc" required>
            <button name="orderbutton" id="orderbutton">ORDER NOW</button>
        </form>
    </div>
        <div style="
                bottom: 0;
                width: 100%;">
        <?php
            require("footer.php");
        ?>   
        </div>
        <?php
                function konfirmoTedhenat($zip,$phone,$areacode,$telnumber,$psw,$psw1){
                    if(kontrolloNumrin($zip) && kontrolloNumrin($phone)
                    && kontrolloNumrin($areacode) && kontrolloNumrin($telnumber)
                    && kontrolloPass($psw,$psw1))
                    {
                        return true;
                    }
                    else{
                        return false;
                    }
                }
                function kontrolloNumrin($numri)
                {
                    for ($i = 0; $i < strlen($numri); $i++){
                        $char = $numri[$i];
                        if (is_numeric($char)) {
                           return true;
                        } else {
                           return false;
                        }
                     }
                }
                function kontrolloCC($cardnumber,$expirydate,$cvc)
                {
                    if(kontrolloNumrin($cardnumber) && kontrolloNumrin($cvc))
                    {
                        return true;
                    }
                    else{
                        return false;
                    }
                }
                function kontrolloPass($pass,$pass1)
                {
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
                if(isset($_POST["orderbutton"]))
                {
                    $firstname=$_POST["emri"];
                    $emrimesem=$_POST["emrimesem"];
                    $mbiemri=$_POST["mbiemri"];
                    $email=$_POST["email"];
                    $street=$_POST["street"];
                    $address=$_POST["address"];
                    $zip=$_POST["zip"];
                    $city=$_POST["city"];
                    $phone=$_POST["phone"];
                    $areacode=$_POST["areacode"];
                    $telnumber=$_POST["telnumber"];
                    $username=$_POST["username"];
                    $psw=$_POST["psw"];
                    $psw1=$_POST["psw1"];

                    $cardnumber=$_POST["cardnumber"];
                    $expirydate=$_POST["expirydate"];
                    $cvc=$_POST["cvc"];
                    $pendingserver="Pending";
                    $nullserver="NULL";
                    $myfile = fopen("whichorder.txt", "r") or die("Unable to open file!");
                    $str=fread($myfile,filesize("whichorder.txt"));
                    $str1=explode("--",$str);
                    fclose($myfile);
                    if(konfirmoTedhenat($zip,$phone,$areacode,$telnumber,$psw,$psw1) && kontrolloCC($cardnumber,$expirydate,$cvc))
                    {
                        $pswmd5=md5($psw);
                        $sql = "SELECT * FROM `informationsusers` WHERE `username` = '$username'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0)
                        {
                            echo ('<script>
                            var string="This username exists,please use different username.";
                            document.getElementById("informatat1").innerHTML=string; 
                            </script>');
                        }
                        else
                        {   
                            $stmt=$conn->prepare("insert into informationsusers (firstname,middlename,lastname,email,street,address,zip,city,phone,areacode,number,username,pass) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
                            $stmt->bind_param("sssssssssssss",$firstname,$emrimesem,$mbiemri,$email,$street,$address,$zip,$city,$phone,$areacode,$telnumber,$username,$pswmd5);
                            $result = $stmt->execute();
                            $stmt1=("insert into servers (username,expirydate,servertype,price,serverstatus,serverdetails) values ('$username','$str1[2]','$str1[1]','$str[0]','$pendingserver','$nullserver')");
                            $result1=$conn->query($stmt1);
                            //$stmt1=("insert into servers (username,expirydate,servertype,price) values ('$username','$str1[2]','$str1[1]','$str[0]')");
                            //$result1 = $conn->query($stmt1);
                            if ($result)
                            {
                                echo('<script>alert("Successfully") </script>'); 
                                echo '<script type="text/javascript">
				                location.replace("login.php");
			                    </script>';
                            }
                            else
                            {
                                echo('<script>alert("Not Successfully") </script>'); 
                                echo '<script type="text/javascript">
				                location.replace("index.php");
			                    </script>';
                            }
                        }
                    }
                    else
                    {
                        echo ('<script>
                        var string="Zip code must be only with numbers.</br>Area code must be only with numbers.</br>Phone Number must be only with numbers.</br> Password and Confirm Password must be equals and contain at least one uppercase letter and at least one number";
                        document.getElementById("informatat").innerHTML=string; 
                        </script>');
                    }
                }
            ?>
        <script>
            function shfaqi(){
              document.getElementById('cardnumber').style.display='inline';
              document.getElementById('expirydate').style.display='inline';
              document.getElementById('cvc').style.display='inline';
            }
        </script>
    </body>
</html>