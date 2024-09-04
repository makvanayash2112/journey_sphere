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
    <!-- <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div> -->
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
          <a href="about.php" class="nav-item nav-link active">About</a>
          <a href="service.php" class="nav-item nav-link">Services</a>
          <a href="package.php" class="nav-item nav-link">Packages</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
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
        <a href="login.php" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
      </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
      <div class="container py-5">
        <div class="row justify-content-center py-5">
          <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->


  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="img/welcome.jpg" alt="" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
          <h1 class="mb-4">Welcome to <span class="text-primary">Tourist</span></h1>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
            </div>
          </div>
          <a class="btn btn-primary py-3 px-5 mt-2" href="contact.php">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">
          Travel Guide
        </h6>
        <h1 class="mb-5">Founder of Tourist</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/partner-1.jpg" alt="" />
            </div>
            <div
              class="position-relative d-flex justify-content-center"
              style="margin-top: -19px">
              <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
              <a class="btn btn-square mx-1" href="https://www.instagram.com/shyam___raghuvanshi0710/"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Rupareliya Shyam</h5>
              <small>Front - End Developer</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/Screenshot 2024-08-25 144450.png" alt="" />
            </div>
            <div
              class="position-relative d-flex justify-content-center"
              style="margin-top: -19px">
              <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
              <a class="btn btn-square mx-1" href="https://www.instagram.com/_kishan_chauhan_007/"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Chauhan Kishan</h5>
              <small>Presentation - Manager</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/partner-3.jpeg" alt="" />
            </div>
            <div
              class="position-relative d-flex justify-content-center"
              style="margin-top: -19px">
              <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
              <a class="btn btn-square mx-1" href="https://www.instagram.com/shalini_kalola_/"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Kalola Shalini</h5>
              <small>Front - End Developer</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/partner-4.jpeg" alt="" />
            </div>
            <div
              class="position-relative d-flex justify-content-center"
              style="margin-top: -19px">
              <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
              <a class="btn btn-square mx-1" href="https://www.instagram.com/nidhi_sondigara/"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Sondigara Nidhi</h5>
              <small>Front - End Developer </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Team End -->


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