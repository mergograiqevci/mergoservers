<!DOCTYPE html>
<html>
      <?php
      require("header.php");
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
          <img src="images/vds.PNG"></br>
          <p class="from">from</p>
          <h1>€8.99</h1>
          <input name="price" type="text" value="8.99" hidden>
          <p class="from">/month</p>
          <p class="cores">Intel E3-1240 v6, 3.90GHz Turbo, 4 Cores, 8 Threads, 8MB Cache</p>
          <input name="servertype" type="text" value="Intel E3-1240 v6, 3.90GHz Turbo, 4 Cores, 8 Threads, 8MB Cache" hidden>
          <h3><i class="material-icons">check</i> 1Gbps Shared Bandwidth</h3>
          <h3><i class="material-icons">check</i> Virtual KVM Console</h3>
          <h3><i class="material-icons">check</i> Free 500Gbps DDoS Protection</h3></br>
          <input name="order1" class="button" type="submit" value="ORDER">
          </form>
        </div>
        <div class="vps1">
        </br></br>
        <form action="form.php" method="post">
          <img src="images/vds.PNG"></br>
          <p class="from">from</p>
          <h1>€12.99</h1>
          <input name="price" type="text" value="12.99" hidden>
          <p class="from">/month</p>
          <p class="cores">Intel E3-1240 v6, 3.90GHz Turbo, 8 Cores, 16 Threads, 16MB Cache</p>
          <input name="servertype" type="text" value="Intel E3-1240 v6, 3.90GHz Turbo, 8 Cores, 16 Threads, 16MB Cache" hidden>
          <h3><i class="material-icons">check</i> 2Gbps Shared Bandwidth</h3>
          <h3><i class="material-icons">check</i> Virtual KVM Console</h3>
          <h3><i class="material-icons">check</i> Free 1000Gbps DDoS Protection</h3></br>
          <input name="order2" class="button" type="submit" value="ORDER">
          </form>
        </div>
        <div class="vps2">
        </br></br>
        <form action="form.php" method="post">
          <img src="images/vds.PNG"></br>
          <p class="from">from</p>
          <h1>€16.99</h1>
          <input name="price" type="text" value="16.99" hidden>
          <p class="from">/month</p>
          <p class="cores">Intel 2x E5-2450L 5.90GHz Turbo, 16 Cores, 32 Threads, 32MB Cache</p>
          <input name="servertype" type="text" value="Intel 2x E5-2450L 5.90GHz Turbo, 16 Cores, 32 Threads, 32MB Cache" hidden>
          <h3><i class="material-icons">check</i> 4Gbps Shared Bandwidth</h3>
          <h3><i class="material-icons">check</i> Virtual KVM Console</h3>
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