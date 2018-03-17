<?php
session_start();

if( isset($_SESSION['uname']))
header("location:dashboard.php");

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>For My City</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/mainstyle.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-uppercase" href="#page-top">For My City</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Who are we?</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">What We Do?</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Be One of Us!</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <button class="btn btn-lg btn-success" data-toggle="modal" href='#login'>Login</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <br /><br /><br /><br />
      <img src="img/logo.png" width="100%">
    </header>
   
    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Who are we?</h2>
        <br />
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">We are group of individuals who share a common feeling of love towards mankind and strongly feel the need to serve the under-privileged and the Needy.Restricted by monetary and economic factors,  we started out small for this initiative in our city Raipur only and later extended this to many other cities.
</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">If you too are into philanthrophy and share the same ideas as us, you are more than welcome to start your journey with us.Charities and Donations are also accepted if offered (Possible only after logging in).
</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">What We Do?</h2>
        <br /><br />
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/orphan.jpg" width="600" height="600" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/2.jpg" width="600" height="400" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/3.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/4.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/5.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/6.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
    <hr />

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Be One of Us!</h2> <br /><br /><br />
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form action="register.php" method="POST">
              <table class="table table-condensed table-hover">
                <tr>
                  <td><label>Name</label></td>
                  <td>:</td>
                  <td><input type="text" name="name"></td>
                </tr>
                <tr>
                  <td><label>Email</label></td>
                  <td>:</td>
                  <td><input type="email" name="email"></td>
                </tr>
                <tr>
                  <td><label>Password</label></td>
                  <td>:</td>
                  <td><input type="password" name="password"></td>
                </tr>
                <tr>
                  <td><label>Mobile</label></td>
                  <td>:</td>
                  <td><input type="tel" name="phone"></td>
                </tr>
                <tr>
                  <td><label>Location</label></td>
                  <td>:</td>
                  <td><input type="text" name="location"></td>
                </tr>
              </table>
              <div align="center">
                <input type="submit" name="submit" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">We are at:</h4>
            <p class="lead mb-0">IIIT Naya Raipur
              <br>Raipur,CG</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Encoders</h4>
            <p class="lead mb-0">Sundar Kumar Akella, Priyatham Akella and Praneetha</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy;For My City</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">At Old Age Homes & Orphanages</h2>
              <br /> <br />
              <!-- <hr class="star-dark mb-5"> -->
              <img class="img-fluid mb-5" src="img/orphan.jpg" alt="Orphanage Picture">
              <p class="mb-5">To help needy aged ( any person of either sex above 60 years),Orphans irrespective of caste or creed by providing Food,clothing ,Medical care and other activities like Yoga and physical exercises to improve the health of the Ashramites .Together we can care for them ..Until they all have homes.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Cleaning Campaign</h2>
              <br /><br />
              <!-- <hr class="star-dark mb-5"> -->
              <img class="img-fluid mb-5" src="img/2.jpg" alt="">
              <p class="mb-5">This clean up campaign may benefit the community economically and socially if wisely used.We need to  Protect the environment for the benefit of present and future generations  and other measures that prevent pollution and environmental degradation.Let us get together and clean up our environment!</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Awareness Campaigns</h2>
              <br /><br />
              <!-- <hr class="star-dark mb-5"> -->
              <img class="img-fluid mb-5" src="img/3.jpg" alt="">
              <p class="mb-5">Raising awareness refers to alerting the general public that a certain issue exists.Awareness can take shape of promoting a particular idea or belief such as protecting and upholding the rights of women, homosexuals, the disabled, a particular workforce and so forth.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Teaching Illiterates&Unprevilidged</h2>
              <br /><br />
              <!-- <hr class="star-dark mb-5"> -->
              <img class="img-fluid mb-5" src="img/4.jpg" alt="">
              <p class="mb-5">India’s growth relies on a well-educated and skilled workforce. Improving education is a critical area of investment.Already, a considerable proportion of the adult workforce in India is acutely under-equipped to be eligible for skilled and semi-skilled jobs. In order to build India as a consumer market of global standards, it is very important that every child reaps the benefits of quality education.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Plantation Programme</h2>
              <!-- <hr class="star-dark mb-5"> -->
              <br /><br />
              <img class="img-fluid mb-5" src="img/5.jpg" alt="">
              <p class="mb-5">The objective of th plantation programme is to encourage people, communities, organizations, business and industry, civil society and governments to collectively plant at least one million trees worldwide each year..The campaign strongly encourages the planting of indigenous trees and trees that are appropriate to the local environment.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Health Drive</h2>
              <br /><br />
              <!-- <hr class="star-dark mb-5"> -->
              <img class="img-fluid mb-5" src="img/6.png" alt="">
              <p class="mb-5">HealthDrive.Bringing integrated healthcare to you.HealthDrive is the national leader in delivering integrated healthcare.  We understand the critical importance of good health and how it leads to a better quality of life
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="login">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">LOG IN</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <form method="POST" action="login.php">
              <table align="center">
                <tr>
                  <td><label>Email</label></td>
                  <td>:</td>
                  <td><input type="email" name="email"></td>
                </tr>
                <tr>
                  <td><label>Password &nbsp;</label></td>
                  <td>:</td>
                  <td><input type="password" name="password"></td>
                </tr>
              </table>
          </div>
          <div class="modal-footer">
          <input type="submit" name="submit" value="Login" class="btn btn-primary">
          </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/mainscript.min.js"></script>

  </body>

</html>
