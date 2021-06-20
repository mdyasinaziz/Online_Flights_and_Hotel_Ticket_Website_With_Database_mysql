<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <style>
          .imageSizeChange img {
              width: 100%;
              max-height: 500000000000px;
          }

          .imageSizeChange2 img {
              width: 100%;
              max-height: 300px;
          }
      </style>
    <title>Best Hotel Booking Online</title>
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

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	      <div class="container">
	          <a class="navbar-brand" href="index.html">FLights & Places</a>


	          <div class="collapse navbar-collapse" id="ftco-nav">
	              <ul class="navbar-nav ml-auto">
	                  <li class="nav-item active"><a href="flights.php" class="nav-link">Flights</a></li>
	                  <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
	                  <li class="nav-item active"><a href="about.php" class="nav-link">About Us</a></li>
	                  <li class="nav-item active"><a href="policy.php" class="nav-link">Policies</a></li>
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







    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 myColor">

                <div id="carouselExampleIndicators" class="carousel slide haha" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner imageSizeChange">


                        <div class="carousel-item active">
                            <img class="d-block w-100 img-fluid js-fullheight" src="images/X9.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid js-fullheight" src="images/X8.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid js-fullheight" src="images/X1.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid js-fullheight" src="images/X11.jpg" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid js-fullheight" src="images/X10.jpg" alt="Fifth slide">
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>










    <section class="ftco-section bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sidebar order-md-last ftco-animate">
                    <h2 class="mb-4">Book A Hotel!</h2>
                    <div class="sidebar-wrap ftco-animate">
                        <h3 class="heading mb-4">Fun Awaits</h3>
                        <form action="" method="post">
                            <div class="fields">
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select type="text" name="hotelname" id="" class="form-control" placeholder="Keyword search">
                                            <option value="">Select Hotel</option>
                                            <option value="Al Bandar Rotana-Creek (4.6?), Dubai">Al Bandar Rotana-Creek (4.6★), Dubai 
                                            <?php $sql="select * from userhotelcount where hotelname = 'Al Bandar Rotana-Creek (4.6?), Dubai';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?>       
                                            </option>
                                            <option value="The Oberoi (4.5?), Dubai">The Oberoi (4.5★), Dubai
                                            <?php $sql="select * from userhotelcount where hotelname = 'The Oberoi (4.5?), Dubai';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Hyatt Regency Sydney (4.3?), Sydney">Hyatt Regency Sydney (4.3★), Sydney
                                            <?php $sql="select * from userhotelcount where hotelname = 'Hyatt Regency Sydney (4.3?), Sydney';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Meriton Suites Carter Street (4.4?), Sydney">Meriton Suites Carter Street (4.4★), Sydney
                                            <?php $sql="select * from userhotelcount where hotelname = 'Meriton Suites Carter Street (4.4?), Sydney';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Meriton Suites Carter Street (4.4?), London">Meriton Suites Carter Street (4.4★), London
                                            <?php $sql="select * from userhotelcount where hotelname = 'Meriton Suites Carter Street (4.4?), London';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="The Strand Palace Hotel (3.8?), London">The Strand Palace Hotel (3.8★), London
                                            <?php $sql="select * from userhotelcount where hotelname = 'The Strand Palace Hotel (3.8?), London';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="citizenM New York Bowery (4.7?), New York">citizenM New York Bowery (4.7★), New York
                                            <?php $sql="select * from userhotelcount where hotelname = 'citizenM New York Bowery (4.7?), New York';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="The Ludlow Hotel (4.7?), New York">The Ludlow Hotel (4.7★), New York
                                            <?php $sql="select * from userhotelcount where hotelname = 'The Ludlow Hotel (4.7?), New York';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Hotel Continental (4.5?), Oslo">Hotel Continental (4.5★), Oslo
                                            <?php $sql="select * from userhotelcount where hotelname = 'Hotel Continental (4.5?), Oslo';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="The Thief (4.5?), Oslo">The Thief (4.5★), Oslo
                                            <?php $sql="select * from userhotelcount where hotelname = 'The Thief (4.5?), Oslo';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Hyatt Regency Paris Etoile (4.2?), Paris">Hyatt Regency Paris Etoile (4.2★), Paris
                                            <?php $sql="select * from userhotelcount where hotelname = 'Hyatt Regency Paris Etoile (4.2?), Paris';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Motel One Paris-Porte Dorée (4.5?), Paris">Motel One Paris-Porte Dorée (4.5★), Paris
                                            <?php $sql="select * from userhotelcount where hotelname = 'Motel One Paris-Porte Dorée (4.5?), Paris';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Hotel Nikko San Francisco (4.4?), San Francisco">Hotel Nikko San Francisco (4.4★), San Francisco
                                            <?php $sql="select * from userhotelcount where hotelname = 'Hotel Nikko San Francisco (4.4?), San Francisco';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Loews Regency San Francisco (4.7?), San Francisco">Loews Regency San Francisco (4.7★), San Francisco
                                            <?php $sql="select * from userhotelcount where hotelname = 'Loews Regency San Francisco (4.7?), San Francisco';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="The Tokyo Station Hotel (4.4?), Tokyo">The Tokyo Station Hotel (4.4★), Tokyo
                                            <?php $sql="select * from userhotelcount where hotelname = 'The Tokyo Station Hotel (4.4?), Tokyo';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Tokyo Bay Tokyu Hotel (4.4?), Tokyo">Tokyo Bay Tokyu Hotel (4.4★), Tokyo
                                            <?php $sql="select * from userhotelcount where hotelname = 'Tokyo Bay Tokyu Hotel (4.4?), Tokyo';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Rome Glam Hotel (4.5?), Rome"> Rome Glam Hotel (4.5★), Rome
                                            <?php $sql="select * from userhotelcount where hotelname = 'Rome Glam Hotel (4.5?), Rome';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="The Liberty Boutique Hotel (4.8?), Rome">The Liberty Boutique Hotel (4.8★), Rome
                                            <?php $sql="select * from userhotelcount where hotelname = 'The Liberty Boutique Hotel (4.8?), Rome';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Bellagio las vegas (4.6?), Las Vegas">Bellagio las vegas (4.6★), Las Vegas
                                            <?php $sql="select * from userhotelcount where hotelname = 'Bellagio las vegas (4.6?), Las Vegas';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                            <option value="Trump International Hotel Las Vegas (4.3?), Las Vegas">Trump International Hotel Las Vegas (4.3★), Las Vegas
                                            <?php $sql="select * from userhotelcount where hotelname = 'Trump International Hotel Las Vegas (4.3?), Las Vegas';";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                   $seat = $row['hotelseat'];
                                            }
                                            echo '('; echo $seat; echo ' seat left)';
                                            ?> 
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fromdate" id="checkin_date" class="form-control checkin_date" placeholder="Date from">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="todate" id="checkout_date" class="form-control checkout_date" placeholder="Date to">
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select type="text" name="children" id="" class="form-control" placeholder="Keyword search">
                                            <option value="">Number of Children</option>
                                            <option value="0">No Child</option>
                                            <option value="1 Child">1 Child</option>
                                            <option value="2 Child">2 Child</option>
                                            <option value="3 Child">3 Child</option>
                                            <option value="4 Child">4 Child</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select type="text" name="roomclass" id="" class="form-control" placeholder="Keyword search">
                                            <option value="">Select Room Class</option>
                                            <option value="Business Class">Business Class</option>
                                            <option value="Premium Class">Premium Class</option>
                                            <option value="Semi-Regular Class">Semi-Regular Class</option>
                                            <option value="Regular Class">Regular Class</option>
                                            <option value="Budget Class">Budget Class</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select type="number" name="roomno" id="" class="form-control" placeholder="Keyword search">
                                            <option value="">Select Number of Rooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button name="purchase" class="btn btn-primary py-3 px-5" type="">Book Now!</button>
                                </div>
                            </div>
                        </form>


            <?php
			if(isset($_POST['purchase']))
			{
                @$email=$_SESSION['email'];
				@$hotelname=$_POST['hotelname'];
				@$fromdate=$_POST['fromdate'];
				@$todate=$_POST['todate'];
                @$children=$_POST['children'];
                @$roomclass=$_POST['roomclass'];
                @$roomno=$_POST['roomno'];
				

				if($hotelname==$hotelname)
				{
                $query = "select * from userhotel where hotelname='nothingtodohere'";
                //echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Email Already exists.. Please try another email!")</script>';
						}
						else
						{
                            $sql="select * from userhotelcount where hotelname = '$hotelname';";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($result)){
                                   $seat = $row['hotelseat'];
                            }
                            $final = $seat - $roomno;
                            if ($final >= 0){
                            $query = "insert into userhotel values('$email','$hotelname','$children','$fromdate','$todate')";
                            $query2 = "insert into userhotelticket values('$email','$roomclass','$roomno')";
                            $query3 = "Update userhotelcount set hotelseat = hotelseat - $roomno where hotelname= '$hotelname';";
                            $query_run = mysqli_query($con,$query);
                            $query_run2 = mysqli_query($con,$query2);
                            $query_run3 = mysqli_query($con,$query3);
                            echo $final; echo ' seats left';
                            }
                            
                            else {
                                echo '<script type="text/javascript">alert("Seat Not Left!")</script>';
                            }
							
							if($query_run2)
							{
								echo '<script type="text/javascript">alert("Purchased... Thank You!")</script>';
								//$_SESSION['email'] = $email;
                                //$_SESSION['password'] = $password;
								//header( "Location: hotels.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>




                    </div>
                </div><!-- END-->


                <div class="col-lg-9 container-fluid">
                    <div class="row">

                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators2" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/H1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/H2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/H3.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/H4.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/H5.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!--carousel end-->
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">Hyatt Regency Sydney</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> Sydney, Australia</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators3" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/T.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/T1.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/T2.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/T3.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/T4.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">Tokyo Bay Tokyu Hotel</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> Tokyo, Japan</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators4" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/C1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/C2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/C3.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/C4.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/C5.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">citizenM New York Bowery</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> New York, United States</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators5" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/B.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/B2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/B3.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/B4.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/B5.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">Bellagio las vegas</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> Las Vegas, Nevada</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators6" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Pk.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Pk1.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Pk2.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Pk3.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Pk4.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">Park Plaza Westminter Bridge London</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> London, England</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators7" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/TT.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/TT1.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/TT2.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/TT3.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/TT4.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">The Thief</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> Oslo, Norway</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators8" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/N.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/N1.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/N2.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/N3.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/N4.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators8" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators8" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">NH Venezia Rio</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> Venice, Italy</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators9" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Hr.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Hr1.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Hr2.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Hr3.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Hr4.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators9" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators9" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">Hyatt Regency Paris Etoile</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> Paris, France</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="destination">
                                <div id="carouselExampleIndicators0" class="carousel slide haha" data-ride="carousel">
                                    <div class="carousel-inner imageSizeChange2">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Tl.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Tl1.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Tl2.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Tl3.jpg" alt="Fourth slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid js-fullheight" src="images/Tl4.jpg" alt="Fifth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators0" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators0" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">The Liberty Boutique Hotel</a></h3>
                                        </div>
                                        <div class="two">
                                            <span class="price">$800</span>
                                        </div>
                                    </div>
                                    <p>Feature Packed Hotel Feature Packed Hotel I wanna Die</p>
                                    <p class="days"></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> Rome, Italy</span>
                                        <span class="ml-auto"><a>5 ★</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->






    <section class="ftco-section testimony-section69 bg-dark">
        <div class="container">
            <div class="row justify-content-center mb-1 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Popular Restaurants</h2>
                    <p>A list of the top booked hotels around the globe by our honourable customers. Go Book One!</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="destination">
                             <div id="carouselExampleIndicators11" class="carousel slide haha" data-ride="carousel">
                          <div class="carousel-inner imageSizeChange2">
                              <div class="carousel-item active">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/IV.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Iv1.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/IV2.jpg" alt="Third slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Iv3.jpg" alt="Fourth slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/IV5.jpg" alt="Fifth slide">
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators11" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators11" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Indego by Vineet</a></h3>
                                    </div>
                                </div>
                                <p>Get a hotel have fun. Get a hotel have fun. get a hotel have fun.</p>
                                <p class="days"><span>Upto 4 Person Per Room</span></p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> Dubai, UAE</span>
                                    <span class="ml-auto"><a>5 Star</a></span>
                                </p>
                            </div>
                        </div>


                        <div class="destination">
                             <div id="carouselExampleIndicators12" class="carousel slide haha" data-ride="carousel">
                          <div class="carousel-inner imageSizeChange2">
                              <div class="carousel-item active">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/E.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/E1.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/E2.jpg" alt="Third slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/E3.jpg" alt="Fourth slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/E4.jpg" alt="Fifth slide">
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators12" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators12" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Epicure</a></h3>
                                    </div>
                                </div>
                                <p>Get a hotel have fun. Get a hotel have fun. get a hotel have fun.</p>
                                <p class="days"><span>Upto 4 Person Per Room</span></p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> Paris, Franch</span>
                                    <span class="ml-auto"><a>5 Star</a></span>
                                </p>
                            </div>
                        </div>

                        <div class="destination">
                             <div id="carouselExampleIndicators13" class="carousel slide haha" data-ride="carousel">
                          <div class="carousel-inner imageSizeChange2">
                              <div class="carousel-item active">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Le.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Le1.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Le2.jpg" alt="Third slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Le3.jpg" alt="Fourth slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Le4.jpg" alt="Fifth slide">
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators13" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators13" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Le Bernardin New York</a></h3>
                                    </div>
                                </div>
                                <p>Get a hotel have fun. Get a hotel have fun. get a hotel have fun.</p>
                                <p class="days"><span>Upto 4 Person Per Room</span></p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> New York, USA</span>
                                    <span class="ml-auto"><a>5 Star</a></span>
                                </p>
                            </div>
                        </div>

                        <div class="destination">
                             <div id="carouselExampleIndicators14" class="carousel slide haha" data-ride="carousel">
                          <div class="carousel-inner imageSizeChange2">
                              <div class="carousel-item active">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Ld.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Ld1.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Ld2.jpg" alt="Third slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Ld3.jpg" alt="Fourth slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Ld4.jpg" alt="Fifth slide">
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators14" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators14" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Le Dame de Pic London</a></h3>
                                    </div>
                                </div>
                                <p>Get a hotel have fun. Get a hotel have fun. get a hotel have fun.</p>
                                <p class="days"><span>Upto 4 Person Per Room</span></p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> London, England</span>
                                    <span class="ml-auto"><a>5 Star</a></span>
                                </p>
                            </div>
                        </div>

                        <div class="destination">
                             <div id="carouselExampleIndicators15" class="carousel slide haha" data-ride="carousel">
                          <div class="carousel-inner imageSizeChange2">
                              <div class="carousel-item active">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Tc.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Tc1.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Tc2.jpg" alt="Third slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Tc3.jpg" alt="Fourth slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 img-fluid js-fullheight" src="images/Tc4.jpg" alt="Fifth slide">
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators15" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators15" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">The Capital Grille</a></h3>
                                    </div>
                                </div>
                                <p>Get a hotel have fun. Get a hotel have fun. get a hotel have fun.</p>
                                <p class="days"><span>Upto 4 Person Per Room</span></p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> Las Vegas, Nevada</span>
                                    <span class="ml-auto"><a>5 Star</a></span>
                                </p>
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