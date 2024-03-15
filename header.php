<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Saviour Immigration - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/.png" rel="icon">
  <link href="assets/img/.png" rel="aicon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SYti1GGKZfyG5MI5fnFfZ+J+kD5tr5+q5tr5+q5" crossorigin="anonymous">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


  <header id="header-info" class="header-info fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <a href="mailto:youremail@example.com"><i class="bi bi-envelope"></i> info@saviourimmigration.com</a>
        &#160;
        &#160;
        &#160;
        &#160;
        &#160;
        <a href="tel:+91 78906-54321"><i class="bi bi-phone"></i> 1234567890</a>
      </div>
      <div class="social-links">
        <a target="_blank" href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
        <a target="_blank" href="https://facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a target="_blank" href="https://instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a target="_blank" href="https://linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </header><!-- End Header-Info -->



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Saviour Immigration</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" <?php if ($title == "home") {
            echo "class='active'";
          } ?>>Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php" <?php if ($title == "about") {
                echo "class='active'";
              } ?>>About</a></li>
              <li><a href="team.php" <?php if ($title == "team") {
                echo "class='active'";
              } ?>>Team</a></li>
              <li><a href="testimonials.php" <?php if ($title == "testimonials") {
                echo "class='active'";
              } ?>>Testimonials</a></li>

              <li class="dropdown"><a href="#"><span>Company</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="privacy.php" <?php if ($title == "privacy") {
                    echo "class='active'";
                  } ?>>Privacy Policy</a>
                  </li>
                  <li><a href="careers.php" <?php if ($title == "careers") {
                    echo "class='active'";
                  } ?>>Careers</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.php" <?php if ($title == "services") {
            echo "class='active'";
          } ?>>Services</a></li>
          <li><a href="portfolio.php" <?php if ($title == "portfolio") {
            echo "class='active'";
          } ?>>Portfolio</a></li>
          <li><a href="blog.php" <?php if ($title == "blog") {
            echo "class='active'";
          } ?>>Blog</a></li>

          <li><a href="contact.php" <?php if ($title == "contact") {
            echo "class='active'";
          } ?>>Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->