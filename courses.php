<?php
include 'includes/head.php';
?>
<body>
<?php
include 'includes/nav.php';
?>
<br><br>
  <main id="main">
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Courses</h3>

        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" onclick="window.location.href='engineering.php'">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="engineering.php">Engineering</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" onclick="window.location.href='medical.php'">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="medical.php">Medical</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s" onclick="window.location.href='foundation.php'">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="foundation.php">Foundation</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s" onclick="window.location.href='dlp.php'">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="dlp.php">Distance Learning Program (DLP)</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s" onclick="window.location.href='sip.php'">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="sip.php">School Integrated Program</a></h4>
              <p class="description"></p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

<?php
include 'includes/footer.php';
 ?>

</body>

</html>
