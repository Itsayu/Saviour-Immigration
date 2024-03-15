<?php
$title = "services";
include_once("header.php");
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Services</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Services</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <?php
  include_once("services-common.php");
  ?>

  <!-- ======= Features Section ======= -->

  <?php
  include_once("service-details-info.php");
  ?>

  <!-- End Features Section -->

</main><!-- End #main -->

<?php
include_once("footer.php");
?>