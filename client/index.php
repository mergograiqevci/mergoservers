<?php
  require("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
      <?php

        function serverDetails($lloji)
        {
          if(strlen($_POST["username"])>0){
          global $conn;
          $sql = "SELECT `$lloji` FROM `servers` WHERE `username` = ?";
          $value=$conn->prepare($sql);
          if($query = $value) { // assuming $mysqli is the connection
          $query->bind_param('s', $_POST["username"]);
          $query->execute();
          $query->store_result();
          $query->bind_result($column1);
          $query->fetch();
          return $column1; 
          } 
          else {
          return "Error";
          }
        }
        else{
          header("Location:../login.php");
          exit();
        } 
        }
        
      ?>
        <title>Login Mergo-SERVERS</title>
        <link rel="stylesheet" href="indexclient.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body id="body">
      <?php
      require("header.php");
      ?>
        <div class="serverinfo">
            <div id="container" class="container">
                <div class="row">
                  <div id="col" class="col">
                    <h1>Server Type</h1> </br>
                    <p name="massage"><?php echo serverDetails("servertype"); ?> </p>
                  </div>
                  <div id="col" class="col">
                    <h1>Server Status</h1></br>
                    <p><?php echo serverDetails("serverstatus"); ?></p>
                  </div>
                  <div id="col1" class="col">
                    <h1>Server Details</h1></br>
                    <p><?php echo serverDetails("serverdetails"); ?></p>
                  </div>
                  <div id="col" class="col">
                    <h1>Price</h1></br>
                    <p><?php echo serverDetails("price").".99 E"; ?></p>
                  </div>
                  <div id="col" class="col">
                    <h1>Expiry Date</h1></br>
                    <p><?php echo serverDetails("expirydate");?></p>
                  </div>
                </div>
              </div>
        </div>
        <div style="bottom:0%;position: fixed;
                    width: 100%;
                    height: 70px; background-color:#2c2c2c;">
          <h1 style="color:white;font-size: 30px;text-align:center;line-height:70px;">Copyright © 2021 mergo-SERVERS - All Rights Reserved.</h1>
      </div>
    </body>
    
</html>