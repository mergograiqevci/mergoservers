<!DOCTYPE html>
<html>
<script type="text/javascript">
	function viewServers(){location.replace("vpsmodels.php")};
	</script>
    <head>
        <title>mergo-SERVERS</title>
        <link rel="stylesheet" href="index.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
      <?php
      require("header.php");
      ?>
      <div style="padding-top:10%;" class="first">
        <h1>Powerful servers, simple pricing</h1>
        <h2>PREMIUM HOSTING AT A FAIR PRICE TAG</h2></br>
        <input onclick="viewServers()" class="buttonview" type="submit" value="View Servers">
      </div></br></br>
      <div class="second">
        <div class="vps">
        </br></br>
          <img src="images/vps.PNG"></br>
          <p class="from">from</p>
          <h1>€4.99</h1>
          <p class="from">/month</p>
          <p class="cores">4 vCores, 8 GB RAM & 200 GB SSD for just €4.99</p>
          <h3><i class="material-icons">check</i> Full Virtualization</h3>
          <h3><i class="material-icons">check</i> 100% Fast SSD Storage</h3>
          <h3><i class="material-icons">check</i> Quick Provisioning</h3></br>
          <a href="vpsmodels.php" style="text-decoration: none;"><input class="button" type="submit" value="See all VPS models"></a>
        </div>
        <div class="vds">
        </br></br>
          <img src="images/vds.PNG"></br>
          <p class="from">from</p>
          <h1>€8.99</h1>
          <p class="from">/month</p>
          <p class="cores">8 vCores, 16 GB RAM & 200 GB SSD for just €8.99</p>
          <h3><i class="material-icons">check</i> Full Virtualization</h3>
          <h3><i class="material-icons">check</i> 100% Fast SSD Storage</h3>
          <h3><i class="material-icons">check</i> Quick Provisioning</h3></br>
          <a href="vdsmodels.php" style="text-decoration: none;"><input class="button" type="submit" value="See all VDS models"></a>
        </div>
        <div class="ded">
        </br></br>
          <img src="images/ded.PNG"></br>
          <p class="from">from</p>
          <h1>€16.99</h1>
          <p class="from">/month</p>
          <p class="cores">16 vCores, 16 GB RAM & 1 TB SSD for just €16.99</p>
          <h3><i class="material-icons">check</i> Full Virtualization</h3>
          <h3><i class="material-icons">check</i> 100% Fast SSD Storage</h3>
          <h3><i class="material-icons">check</i> Quick Provisioning</h3></br>
          <a href="dedmodels.php" style="text-decoration: none;"><input class="button" type="submit" value="See all PDS models"></a>
        </div>
      </div>
      <div class="slideshow-container"></br></br>
        <h2>SOME OF OUR CLIENTS</h2></br>
        <div class="mySlides fade">
          <img src="images/airasia.jpg" style="width:100%;height: 400px;" >
          <h1 class="textairasia">By implementing Alibaba Cloud’s CDN and WAF services and working with Alibaba Cloud’s security professionals,
             AirAsia identified 90 percent of the traffic as Bots. Now, 
             Alibaba Cloud provides Air Asia with weekly security reports and regular updates.
            </br> <span style="color: red">Hogan,Group CIO,Air Asia</span></h1>
        </div>
        <div class="mySlides fade">
          <img src="images/lazada.jpg" style="width:100%;height: 400px;">
          <h1 class="textairasia1">In just two days Lazada's application supported over 1.3 billion visits,
             with customers buying and shipping throughout southeast Asia.</br><span style="color: red">Lazada's CTO</span></div>
          </h1>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div><br>
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
          </div>
      </div>  </br></br>
      <div class="footer">
        <div class="footer-left">
          <h1>mergo-SERVERS</h1></br>
          <p>Our mission is to make life easier for website developers and their customers.
             We do it by offering easy to use, fast and reliable web hosting services.
          </p>
          <i class="fa fa-cc-visa" style="font-size:48px;color:green"></i>
          <i class="fa fa-cc-mastercard" style="font-size:48px;color:red"></i>
          <i class="fa fa-cc-paypal" style="font-size:48px;color:rgb(50, 197, 255)"></i>
        </div>
        <div class="footer-right">
          <div class="row">
            <div class="col">
              <h1>HOSTING</h1> 
              <a href="#"><h2>Web Hosting</h2></a>
              <a href="#"><h2>VPS Hosting</h2></a>
              <a href="#"><h2>Cloud Hosting</h2></a>
              <a href="#"><h2>Email Hosting</h2></a>
              <a href="#"><h2>CMS Hosting</h2></a>
              <a href="#"><h2>Website Builder</h2></a>
            </div>
            <div class="col">
              <h1>DOMAINS</h1> 
              <a href="#"><h2>Domain Checker</h2></a>
              <a href="#"><h2>Domain Transfer</h2></a>
              <a href="#"><h2>Free Domain</h2></a>
              <a href="#"><h2>Free SSL Certificate</h2></a>
            </div>
            <div class="col">
              <h1>INFORMATION</h1>
              <a href="#"><h2>Server Status</h2></a>
              <a href="#"><h2>Payment Methods</h2></a>
              <a href="#"><h2>Reviews</h2></a>
              <a href="#"><h2>Student Discount</h2></a>
              <a href="#"><h2>Pricing</h2></a>
            </div>
            <div class="col">
              <h1>COMPANY</h1> 
              <a href="#"><h2>Why Us</h2></a>
              <a href="#"><h2>About Hostinger</h2></a>
              <a href="#"><h2>Contact Us</h2></a>
              <a href="#"><h2>Our Technology</h2></a>
              <a href="#"><h2>Career</h2></a>
            </div>
          </div>
        </div>


      </div>
      <div class="fundi">
        <h1>Copyright © 2021 mergo-SERVERS - All Rights Reserved.</h1>
      </div>
        <script>
          var slideIndex = 1;
          showSlides(slideIndex);
          
          function plusSlides(n) {
            showSlides(slideIndex += n);
          }
          
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }
          
          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          }
          </script>
    </body>
</html>