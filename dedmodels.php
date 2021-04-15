<!DOCTYPE html>
<html>
    <head>
        <title>mergo-SERVERS</title>
        <link rel="stylesheet" href="vps.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
      require ("header.php");
      ?>
      <div style="padding-top:10%;" class="first">
        <h1>Cheap & Powerful Dedicated Servers</h1>
        <h2>Have full control over your server.</h2></br>
        <input class="buttonview" type="submit" value="Order">
      </div></br></br>
      <div class="second">
        <div class="vps">
        <form action="form.php" method="post">
        </br></br>
          <img src="images/ded.PNG"></br>
          <p class="from">from</p>
          <h1>€16.99</h1>
          <input name="price" type="text" value="16.99" hidden>
          <p class="from">/month</p>
          <p class="cores">Maximum performance - no ifs, no buts</p>
          <h3><i class="material-icons">check</i> Powerful AMD® or Intel® CPUs</h3>
          <h3><i class="material-icons">check</i> Up to 8 x 4,7 GHz Eight-Core</h3>
          <h3><i class="material-icons">check</i>SATA, SSD or NVMe storage</h3></br>
          <input name="servertype" type="text" value="Up to 8 x 4,7 GHz Eight-Core" hidden>
          <input name="order1" class="button" type="submit" value="ORDER">
          </form>
        </div>
        <div class="vps1">
        </br></br>
        <form action="form.php" method="post">
        <img src="images/ded.PNG"></br>
        <p class="from">from</p>
        <h1>€24.99</h1>
        <input name="price" type="text" value="24.99" hidden>
        <p class="from">/month</p>
        <p class="cores">Maximum performance - no ifs, no buts</p>
        <h3><i class="material-icons">check</i> Powerful AMD® or Intel® CPUs</h3>
        <h3><i class="material-icons">check</i> Up to 12 x 4,7 GHz Eight-Core</h3>
        <h3><i class="material-icons">check</i>SATA, SSD or NVMe storage</h3></br>
        <input name="servertype" type="text" value="Up to 12 x 4,7 GHz Eight-Core" hidden>
        <input name="order2" class="button" type="submit" value="ORDER">
        </form>
        </div>
        <div class="vps2">
        </br></br>
        <form action="form.php" method="post">
        <img src="images/ded.PNG"></br>
        <p class="from">from</p>
        <h1>€34.99</h1>
        <input name="price" type="text" value="34.99" hidden>
        <p class="from">/month</p>
        <p class="cores">Maximum performance - no ifs, no buts</p>
        <h3><i class="material-icons">check</i> Powerful AMD® or Intel® CPUs</h3>
        <h3><i class="material-icons">check</i> Up to 16 x 4,7 GHz Eight-Core</h3>
        <h3><i class="material-icons">check</i>SATA, SSD or NVMe storage</h3></br>
        <input name="servertype" type="text" value="Up to 16 x 4,7 GHz Eight-Core" hidden>
        <input name="order3" class="button" type="submit" value="ORDER">
        </form>
        </div>
      </div></br></br>
      <?php
        if(isset($_POST["order1"]))
        {
          $price=$_POST["price"];
          $servertype=$_POST["servertype"];
          $expirydate="1 month";
          $myfile = fopen("whichorder.txt", "w") or die("Unable to open file!");
          fwrite($myfile, $price."--".$servertype."--".$expirydate);
          fclose($myfile);
          header("Location:form.php");
        }
        else if(isset($_POST["order2"]))
        {
          $price=$_POST["price"];
          $servertype=$_POST["servertype"];
          $expirydate="1 month";
          $myfile = fopen("whichorder.txt", "w") or die("Unable to open file!");
          fwrite($myfile, $price."--".$servertype."--".$expirydate);
          fclose($myfile);
          header("Location:form.php");
        }
        else if(isset($_POST["order3"]))
        {
          $price=$_POST["price"];
          $servertype=$_POST["servertype"];
          $expirydate="1 month";
          $myfile = fopen("whichorder.txt", "w") or die("Unable to open file!");
          fwrite($myfile, $price."--".$servertype."--".$expirydate);
          fclose($myfile);
          header("Location:form.php");
        }
      ?>
      <?php
          require("footer.php");
      ?>
    </body>
</html>