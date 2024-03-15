<?php
$title = "home";
include_once("header.php");
?>

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Student Visa</h2>
            <p class="animate__animated animate__fadeInUp">Get your Sturdy Visa.</p>
            <a href="service-details.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
              More</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Tourist Visa</h2>
            <p class="animate__animated animate__fadeInUp">Get your Travel Visa.</p>
            <a href="service-details.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
              More</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Permanent Residency</h2>
            <p class="animate__animated animate__fadeInUp">Get your permanent Residency Visa.</p>
            <a href="service-details.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
              More</a>
          </div>
        </div>
      </div>
      

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

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


  <!-- ======= Country Section ======= -->
  <?php
  include_once("country.php");
  ?>

  <!-- End country Section -->


  <!-- ======= Services Section ======= -->

  <?php
  include_once("services-common.php");
  ?>

  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->

  <?php
  include_once("portfolio-info.php");
  ?>

  <!-- End Portfolio Section -->



  <?php
  include_once("team-info.php");
  ?>



  <?php
  include_once("testimonials-info.php");
  ?>


  <?php
  include_once("faq.php");
  ?>

</main><!-- End #main -->

<?php
include_once("footer.php");
?>