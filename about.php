<?php
$title = "about";
include_once("header.php");
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>About</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row content">
        <div class="col-lg-6">
          <h2>Welcome To Saviour Immigration</h2>
          <h3>Consultant In Jalandhar.</h3>
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Saviour Immigration is your trusted partner in navigating the complex world of immigration. Our dedicated
            team provides expert guidance and personalized solutions, ensuring a smooth and successful journey to your
            desired destination. Your dreams, our commitment.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Your gateway to successful immigration journeys.</li>
            <li><i class="ri-check-double-line"></i> Transforming dreams into reality with Saviour Immigration.</li>
            <li><i class="ri-check-double-line"></i> Empowering dreams through seamless immigration solutions at Saviour
              Immigration.</li>
          </ul>
          <p class="fst-italic">
            At Saviour Immigration, we specialize in guiding individuals through the intricate immigration process. Our
            dedicated team ensures a smooth and successful journey to a new chapter in life. Explore opportunities with
            us.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->



  <!-- ======= Team Section ======= -->
  <?php
  include_once("team-info.php");
  ?>


</main><!-- End #main -->

<?php
include_once("footer.php");
?>