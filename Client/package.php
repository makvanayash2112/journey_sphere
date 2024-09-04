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
  <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
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
          <a href="package.php" class="nav-item nav-link active">Packages</a>
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
        <a href="/index.php" class="btn btn-primary rounded-pill py-2 px-4">Log Out</a>
      </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
      <div class="container py-5">
        <div class="row justify-content-center py-5">
          <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">Packages</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->


  <!-- Package Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6
          class="section-title bg-white text-center text-primary px-3">
          Packages
        </h6>
        <h1 class="mb-5">Awesome Packages</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.1s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/ladakh.jpeg" alt />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Ladakh</small>
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-calendar-alt text-primary me-2"></i>7
                days</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-user text-primary me-2"></i>2
                Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹52,800.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 1 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a
                  href="book_now_form.php"
                  class="btn btn-sm btn-primary px-3"
                  style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/sikkim.jpeg" alt />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Sikkim</small>
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-calendar-alt text-primary me-2"></i>5 days</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-user text-primary me-2"></i>2
                Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹25,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a
                  href="book_now_form.php"
                  class="btn btn-sm btn-primary px-3"
                  style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/srilanka.jpeg" alt />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Srilanka</small>
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-calendar-alt text-primary me-2"></i>7
                days</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-user text-primary me-2"></i>2
                Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹30,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a
                  href="book_now_form.php"
                  class="btn btn-sm btn-primary px-3"
                  style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/punjab.jpeg" alt />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Punjab</small>
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-calendar-alt text-primary me-2"></i>7
                days</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-user text-primary me-2"></i>2
                Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹38,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a
                  href="book_now_form.php"
                  class="btn btn-sm btn-primary px-3"
                  style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/Kerala_Houseboat_(191490747).jpeg" alt />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Kerala</small>
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-calendar-alt text-primary me-2"></i>4
                days</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-user text-primary me-2"></i>2
                Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹33,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a
                  href="book_now_form.php"
                  class="btn btn-sm btn-primary px-3"
                  style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.5s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/package-3.jpg" alt />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Goa</small>
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-calendar-alt text-primary me-2"></i>5
                days</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-user text-primary me-2"></i>2
                Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹21,700.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <!-- <small class="fa fa-star text-primary"></small> -->
              </div>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                2 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 1 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a
                  href="book_now_form.php"
                  class="btn btn-sm btn-primary px-3"
                  style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/udaipur.jpg" alt="" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Udaipur</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>4
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹33,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a href="book_now_form.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/manali.jpeg" alt="" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Manali</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>6
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹40,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a href="book_now_form.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.5s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/kashmir.jpeg" alt />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Kashmir</small>
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-calendar-alt text-primary me-2"></i>7
                days</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-user text-primary me-2"></i>2
                Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹45,450.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <!-- <small class="fa fa-star text-primary"></small> -->
              </div>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                2 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 1 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a
                  href="book_now_form.php"
                  class="btn btn-sm btn-primary px-3"
                  style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/rajsthan.jpeg" alt="" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Rajasthan</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>7
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹32,450.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a href="book_now_form.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/haridwar.jpeg" alt="" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Haridwar</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>4
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹30,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a href="book_now_form.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp"
          data-wow-delay="0.5s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/diu.jpeg" alt />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Diu</small>
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-calendar-alt text-primary me-2"></i>5
                days</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-user text-primary me-2"></i>2
                Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹15,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <!-- <small class="fa fa-star text-primary"></small> -->
              </div>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                2 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 1 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a
                  href="book_now_form.php"
                  class="btn btn-sm btn-primary px-3"
                  style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/lakhshyadeep.jpeg" alt="" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Lakshadweep</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>4
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹27,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a href="book_now_form.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/delhi.jpeg" alt="" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Delhi</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>4
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹25,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <p></p>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                1 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 2 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a href="book_now_form.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/mumbai.jpeg" alt="" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i>Mumbai</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>5
                days</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0">₹20,000.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <!-- <small class="fa fa-star text-primary"></small> -->
              </div>
              <p>
                <i class="fa fa-plane text-primary me-2"></i>
                Flights Charges : Included in Packages. <br>
                <i class="fas fa-hotel text-primary me-2"></i>
                Hotel : Morning Breakfast Included. <br />
                <i class="fa fa-car text-primary me-2"></i>
                2 Transfer : Included in Packages. <br />
                <i class="fas fa-tasks text-primary me-2"></i>
                Activity : Included in Packages (Only 1 Activity).
              </p>
              <div class="d-flex justify-content-center mb-2">
                <a href="book_now_form.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  </div>
  <!-- Package End -->


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