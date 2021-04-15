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
        </br></br>
        <form action="form.php" method="post">
          <img src="images/vps.PNG"></br>
          <p class="from">from</p>
          <h1>€4.99</h1>
          <input name="price" type="text" value="4.99" hidden>
          <p class="from">/month</p>
          <p class="cores">Intel i3-7100, 4 Threads, 3.90 GHz Turbo, 3MB Cache for just €4.99</p>
          <input name="servertype" type="text" value="Intel i3-7100, 4 Threads, 3.90 GHz Turbo, 3MB Cache" hidden>
          <h3><i class="material-icons">check</i> Min 8 GB / Max 32 GB RAM</h3>
          <h3><i class="material-icons">check</i> Software RAID</h3>
          <h3><i class="material-icons">check</i> Free 500Gbps DDoS Protection</h3></br>
          <input name="order1" class="button" type="submit" value="ORDER">
        </form>
        </div>
        <div class="vps1">
        </br></br>
        <form action="form.php" method="post">
          <img src="images/vps.PNG"></br>
          <p class="from">from</p>
          <h1 name="price">€8.99</h1>
          <input name="price" type="text" value="8.99" hidden>
          <p class="from">/month</p>
          <p name="servertype" class="cores">Intel i5-8400, 4.0 Ghz Turbo, 6 Cores, 6 Threads, 9MB Cache for just €8.99</p>
          <input name="servertype" type="text" value="Intel i5-8400, 4.0 Ghz Turbo, 6 Cores, 6 Threads, 9MB Cache" hidden>
          <h3><i class="material-icons">check</i> Min 8 GB / Max 32 GB RAM</h3>
          <h3><i class="material-icons">check</i> Software RAID</h3>
          <h3><i class="material-icons">check</i> Free 1000Gbps DDoS Protection</h3></br>
          <input name="order2" class="button" type="submit" value="ORDER">
          </form>
        </div>
        <div class="vps2">
        </br></br>
        <form action="form.php" method="post">
          <img src="images/vps.PNG"></br>
          <p class="from">from</p>
          <h1 name="price">€16.99</h1>
          <input name="price" type="text" value="16.99" hidden>
          <p class="from">/month</p>
          <p name="servertype" class="cores">Intel Xeon E3-1241 v3, 3.50GHz ,12 Threads , 9MB Cache for just €16.99</p>
          <input name="servertype" type="text" value="Intel Xeon E3-1241 v3, 3.50GHz ,12 Threads , 9MB Cache" hidden>
          <h3><i class="material-icons">check</i> Min 16 GB / Max 64 GB RAM</h3>
          <h3><i class="material-icons">check</i> Hardware RAID</h3>
          <h3><i class="material-icons">check</i> Free 2000Gbps DDoS Protection</h3></br>
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