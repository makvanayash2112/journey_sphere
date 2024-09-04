<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Tourist - Travel Agency HTML Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <!-- <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div> -->
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
          <a href="contact.php" class="nav-item nav-link active">Contact</a>
        </div>
        <a href="login.php" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
      </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
      <div class="container py-5">
        <div class="row justify-content-center py-5">
          <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-white active" aria-current="page">Contact </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">
          Contact Us
        </h6>
        <h1 class="mb-5">Contact For Any Query</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <h5>Get In Touch</h5>
          <p class="mb-4">
            We're here to help, whenever you need us. Get in touch!
          </p>
          <div class="d-flex align-items-center mb-4">
            <div
              class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
              style="width: 50px; height: 50px">
              <i class="fa fa-map-marker-alt text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">Office</h5>
              <p class="mb-0">Atmiya University "Yogidham Gurukul, Kalavad Rd, Maruti Nagar, Nana Mava, Rajkot, Gujarat 360005</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <div
              class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
              style="width: 50px; height: 50px">
              <i class="fa fa-phone-alt text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">Mobile</h5>
              <p class="mb-0">+91 9104535808</p>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div
              class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
              style="width: 50px; height: 50px">
              <i class="fa fa-envelope-open text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">Email</h5>
              <p class="mb-0">info@example.com</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <iframe
            class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.884473026521!2d70.7652121739752!3d22.282365643547863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbbfcdeb3e33%3A0x11a782bf6775a71d!2sAtmiya%20University!5e0!3m2!1sen!2sin!4v1724570308390!5m2!1sen!2sin"
            frameborder="0"
            style="min-height: 300px; border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"></iframe>
        </div>
        <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Your Name" />
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Your Email" />
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    placeholder="Subject" />
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea
                    class="form-control"
                    placeholder="Leave a message here"
                    id="message"
                    style="height: 100px"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->


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