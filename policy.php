<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Policies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

		  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	      <div class="container">
	          <a class="navbar-brand" href="index.html">FLights & Places</a>


	          <div class="collapse navbar-collapse" id="ftco-nav">
	              <ul class="navbar-nav ml-auto">
	                  <li class="nav-item active"><a href="flights.php" class="nav-link">Flights</a></li>
	                  <li class="nav-item active"><a href="hotels.php" class="nav-link">Hotels</a></li>
	                  <li class="nav-item active"><a href="about.php" class="nav-link">About Us</a></li>
	                  <li class="nav-item"><a href="policy.php" class="nav-link">Policies</a></li>
	                  <li class="nav-item active"><a href="myaccount.php" class="nav-link">SQL (WIP)</a></li>
	                  <li class="nav-item"><a href="login.php" class="nav-link"> Welcome!


                      <?php
                      if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                      $holder = $_SESSION['email'];
                      $sql="select fname from userinfo where email = '$holder';";
                      $result = mysqli_query($con, $sql);
                      while ($row = mysqli_fetch_assoc($result)){
                             echo $row['fname'];
                      }
                      }
                      ?>


	                      </a></li>
	              </ul>
	          </div>
	      </div>
	  </nav>
    <!-- END nav -->



    <div class="hero-wrap js-fullheight" style="background-image: url('images/paris_france.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="flights.html">Flights</a></span>
                        <span class="mr-2"><a href="hotels.html">Hotels</a></span> <span>Policies</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Policies</h1>
                    <p data-scrollax="properties: { translateY: '40%', opacity: 1.4 }">A Few List of Policies and Procedures Regarding Our Ticket Purchases </p>
                </div>
            </div>
        </div>
    </div>





    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(images/ticket.jpg);"></div>
        <div class="one-half ftco-animate bg-dark">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Ticket Purchase Policy</h2>
            </div>
            <div>
                <h5>Ticket Purchase: </h5>
                <p>We Purchase your tickets and sent to your doorsteps. Usually takes 6/8 hours after successful purchase. With your preference we choose the Best tickets from our respective partners with the help of our Expert Analysists.</p>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half ftco-animate bg-dark">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Ticket Return Policy</h2>
            </div>
            <div>
                <h5>Refund Tickets: </h5>
                <p>Want to return your Tickets? No Problem. Refunding Tickets deadline is 3 days before departing day. Our respective representative will knock at your doorstep to collect the tickets.</p>
            </div>
        </div>
        <div class="one-half img" style="background-image: url(images/return.jpg);"></div>
    </section>


    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-animate ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Adventure</h2>
                        <p>We only live once. So buckle up and enjoy! We're here to help. Contact us on these Social Media Platforms. </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pl-20">
                    <div class="ftco-footer-widget block-23 pl-20 mb-4">
                        <h2 class="ftco-heading-2"> Experience</h2>
                        <ul class="list-unstyled">
                            <li><span class="text"> Beach</span></li>
                            <li><span class="text"> Adventure</span></li>
                            <li><span class="text"> Wildlife</span></li>
                            <li><span class="text"> Honeymoon</span></li>
                            <li><span class="text"> Nature</span></li>
                            <li><span class="text"> Party</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Dhaka, Bangladesh</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+88 017 81500 854</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">yasinabir7@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
