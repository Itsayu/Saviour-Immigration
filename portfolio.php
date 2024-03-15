<?php
$title = "portfolio";
include_once("header.php");
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portolio</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Portolio</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <?php
  include_once("portfolio-info.php");
  ?>

</main><!-- End #main -->

<?php
include_once("footer.php");
?>