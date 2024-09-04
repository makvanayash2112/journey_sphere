<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Tourist - Travel Agency HTML Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar & Hero Start -->
  <div class="container-fluid position-relative p-0">
    <nav
      class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
      <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0">
          <i class="fas fa-plane-departure me-3"></i>JourneySphere
        </h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="index.php" class="nav-item nav-link ">Home</a>
          <a href="about.php" class="nav-item nav-link">About</a>
          <a href="service.php" class="nav-item nav-link">Services</a>
          <a href="package.php" class="nav-item nav-link">Packages</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle active"
              data-bs-toggle="dropdown">Details/Offers</a>
            <div class="dropdown-menu m-0">
              <a href="destination.php" class="dropdown-item">Destination</a>
              <!-- <a href="booking.php" class="dropdown-item">Booking</a> -->
              <a href="team.php" class="dropdown-item">Travel Guides</a>
              <!-- <a href="testimonial.php" class="dropdown-item">Testimonial</a> -->
              <!-- <a href="404.php" class="dropdown-item">404 Page</a> -->
            </div>
          </div>
          <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>
        <a href="/index.php" class="btn btn-primary rounded-pill py-2 px-4">Log Out</a>
      </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
      <div class="container py-5">
        <div class="row justify-content-center py-5">
          <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">Destination</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Details/Offers</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Destination</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->


  <!-- Destination Start -->
  <div class="container-xxl py-5 destination">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">
          Destination
        </h6>
        <h1 class="mb-5">Popular Destination</h1>
      </div>
      <div class="row g-3">
        <div class="col-lg-7 col-md-6">
          <div class="row g-3">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="">
                <img class="img-fluid" src="img/Coorg_waterfall.png" alt="" />
                <div
                  class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                  30% OFF
                </div>
                <div
                  class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                  Coorg Waterfall
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="">
                <img class="img-fluid" src="img/udaipur.jpg" alt="" />
                <div
                  class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                  25% OFF
                </div>
                <div
                  class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                  Udaipur
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
              <a class="position-relative d-block overflow-hidden" href="">
                <img class="img-fluid" src="img/Kerala_Houseboat_(191490747).jpeg" alt="" />
                <div
                  class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                  35% OFF
                </div>
                <div
                  class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                  Kerala (Houseboat)
                </div>
              </a>
            </div>
          </div>
        </div>
        <div
          class="col-lg-5 col-md-6 wow zoomIn"
          data-wow-delay="0.7s"
          style="min-height: 350px">
          <a class="position-relative d-block h-100 overflow-hidden" href="">
            <img
              class="img-fluid position-absolute w-100 h-100"
              src="img/Darjeeling-panoramic.jpg"
              alt=""
              style="object-fit: cover" />
            <div
              class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
              20% OFF
            </div>
            <div
              class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
              Darjeeling Panoramic
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Destination Start -->


  <?php
  include("footer.php");
  ?>


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>