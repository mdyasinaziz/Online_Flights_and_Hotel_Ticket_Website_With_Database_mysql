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
    <title>Best Flight Tickets Online</title>
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
	                  <li class="nav-item"><a href="flights.php" class="nav-link">Flights</a></li>
	                  <li class="nav-item active"><a href="hotels.php" class="nav-link">Hotels</a></li>
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
		                        <img class="d-block w-100 img-fluid js-fullheight" src="images/2.jpg" alt="First slide">
		                    </div>
		                    <div class="carousel-item">
		                        <img class="d-block w-100 img-fluid js-fullheight" src="images/Im1.jpg" alt="Second slide">
		                    </div>
		                    <div class="carousel-item">
		                        <img class="d-block w-100 img-fluid js-fullheight" src="images/Im3.jpg" alt="Third slide">
		                    </div>
		                    <div class="carousel-item">
		                        <img class="d-block w-100 img-fluid js-fullheight" src="images/Im4.jpg" alt="Fourth slide">
		                    </div>
		                    <div class="carousel-item">
		                        <img class="d-block w-100 img-fluid js-fullheight" src="images/5.jpg" alt="Fifth slide">
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
        	<h2 class="mb-4">Purchase A Ticket!</h2>
        		<div class="sidebar-wrap ftco-animate">
        			<h3 class="heading mb-4">Journey Awaits</h3>
        			<form action="" method="post">
            <div class="fields">
                <div class="form-group">
                    <input type="text" name="fromcity" class="form-control" placeholder="From City">
                </div>
                <div class="form-group">
                    <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select type="text" name="tocity" id="" class="form-control" placeholder="Keyword search">
                            <option value="">Select Destination</option>
                            <option value="Dubai, UAE">Abu Dhabi International Airport,  Dubai</option>
                            <option value="Dubai, UAE">Dubai International Airport,  Dubai</option>
                            <option value="Sydney, Australia">Sydney (Kingsford Smith) Airport,  Sydney</option>
                            <option value="Sydney, Australia">Camden Airport,  Sydney</option>
                            <option value="London, England">Heathrow Airport,  London</option>
                            <option value="London, England">Southend Airport,  London</option>
                            <option value="New York, USA">LaGuardia Airport (and Marine Air Terminal),  New York</option>
                            <option value="New York, USA">John F. Kennedy International Airport,  New York</option>
                            <option value="Oslo, Norway">Oslo Airport,  Oslo</option>
                            <option value="Oslo, Norway">TORP Sandefjord Airport,  Oslo</option>
                            <option value="Paris, France">Charles de Gaulle Airport,  Paris</option>
                            <option value="Paris, France">Paris–Le Bourget Airport,  Paris</option>
                            <option value="San Franciso, California">San Francisco International Airport (SFO),  San Francisco</option>
                            <option value="San Franciso, California">Oakland International Airport,  San Francisco</option> 
                            <option value="Tokyo, Japan">Narita Airport,  Tokyo</option>
                            <option value="Tokyo, Japan">Haneda Airport,  Tokyo</option>
                            <option value="Rome, Italy"> Rome Urbe Airport,  Rome</option>
                            <option value="Rome, Italy">Leonardo da Vinci International Airport,  Rome</option>
                            <option value="Las Vegas, Nevada">McCarran International Airport,  Las Vegas</option>
                            <option value="Las Vegas, Nevada">North Las Vegas Airport,  Las Vegas</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="depdate" id="checkin_date" class="form-control checkin_date" placeholder="Departure Date">
                </div>
                <div class="form-group">
                    <input type="text" name="retdate" id="checkout_date" class="form-control checkout_date" placeholder="Retrun Date">
                </div>
                <div class="form-group">
                    <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="tickclass" type="text" id="" class="form-control" placeholder="Keyword search">
                            <option value="">Select Ticket Class</option>
                            <option value="Premium">Premium</option>
                            <option value="Business">Business</option>
                            <option value="Semi-Regular">Semi-Regular</option>
                            <option value="Regular">Regular</option>
                            <option value="Budget">Budget</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="number" type="text" id="" class="form-control" placeholder="Keyword search">
                            <option value="">Select Number of Tickets</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="type" type="text" id="" class="form-control" placeholder="Keyword search">
                            <option value="">Trip Type</option>
                            <option value="One Way">One Way</option>
                            <option value="Round Trip">Round Trip</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <button name="purchase" class="btn btn-primary py-3 px-5" type="">Purchase!</button>
                   
                </div>
            </div>
        </form>




        <?php
			if(isset($_POST['purchase']))
			{
                @$email = $_SESSION['email'];
				@$fromcity=$_POST['fromcity'];
				@$tocity=$_POST['tocity'];
				@$depdate=$_POST['depdate'];
                @$retdate=$_POST['retdate'];
                @$tickclass=$_POST['tickclass'];
                @$number=$_POST['number'];
                @$type=$_POST['type'];
				

				if($fromcity==$fromcity)
				{
                $query = "select * from userflight where fromcity='nothingtodohere'";
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
							$query = "insert into userflight values('$email', '$fromcity','$tocity','$depdate','$retdate','$type')";
                            $query2 = "insert into userflightticket values('$email','$tickclass','$number')";
							$query_run = mysqli_query($con,$query);
                            $query_run2 = mysqli_query($con,$query2);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Purchased... Thank You!")</script>';
								//$_SESSION['email'] = $email;
                                //$_SESSION['password'] = $password;
								//header( "Location: flights.php");
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

          </div>  <!-- END-->
          
          
          <div class="col-lg-9 container-fluid">
          	<div class="row">
          	
          		<div class="col-sm col-md-6 col-lg-4 ftco-animate">
          		    <div class="destination">
          		        <div id="carouselExampleIndicators2" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Os1.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Os2.jpg" alt="Second slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Os3.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Os4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Os.jpg" alt="Fifth slide">
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
          		                    <h3><a href="#">Oslo</a></h3>
          		                </div>
          		                <div class="two">
          		                    <span class="price">$800</span>
          		                </div>
          		            </div>
          		            <p>Beauty of the stunning Northern Light Awaits at Norway.</p>
          		            <p class="days"></p>
          		            <hr>
          		            <p class="bottom-area d-flex">
          		                <span><i class="icon-map-o"></i> Oslo, Norway</span>
          		                <span class="ml-auto"><a>Discover</a></span>
          		            </p>
          		        </div>
          		    </div>
          		</div>
          		
          		
          		
          		<div class="col-sm col-md-6 col-lg-4 ftco-animate">
          		    <div class="destination">
          		        <div id="carouselExampleIndicators3" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/K2.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/K1.jpg" alt="Second slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/K3.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/K4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/K5.jpg" alt="Fifth slide">
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
          		        <!--carousel end-->
          		        <div class="text p-3">
          		            <div class="d-flex">
          		                <div class="one">
          		                    <h3><a href="#">Kyoto</a></h3>
          		                </div>
          		                <div class="two">
          		                    <span class="price">$800</span>
          		                </div>
          		            </div>
          		            <p>Beauty of the stunning Northern Light Awaits at Norway.</p>
          		            <p class="days"></p>
          		            <hr>
          		            <p class="bottom-area d-flex">
          		                <span><i class="icon-map-o"></i> Kyoto, Japan</span>
          		                <span class="ml-auto"><a>Discover</a></span>
          		            </p>
          		        </div>
          		    </div>
          		</div>
		    			
		    			
		    			
		    			
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<div id="carouselExampleIndicators4" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pa1.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pa2.jpg" alt="Second slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pa3.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pa4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pa5.jpg" alt="Fifth slide">
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
    					            <h3><a href="#">Paris</a></h3>
    					        </div>
    					        <div class="two">
    					            <span class="price">$500</span>
    					        </div>
    					    </div>
    					    <p>Far far away, behind the word mountains, far from the countries</p>
    					    <p class="days"></p>
    					    <hr>
    					    <p class="bottom-area d-flex">
    					        <span><i class="icon-map-o"></i> Paris, France</span>
    					        <span class="ml-auto"><a>Discover</a></span>
    					    </p>
    					</div>
                        </div>
		    			</div>


		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<div id="carouselExampleIndicators5" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/A1.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/A2.jpg" alt="Second slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/A.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/A4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/A5.jpg" alt="Fifth slide">
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
		    						<h3><a href="#">Amsterdam</a></h3>
	    						</div>
	    						<div class="two">
	    							<span class="price">$700</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Amsterdam, Netherland</span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
    					    </div>
                        </div>
		    			</div>

		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    			<div class="destination">
		    					<div id="carouselExampleIndicators0" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pr1.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pr2.jpg" alt="Second slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pr3.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pr4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Pr5.jpg" alt="Fifth slide">
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
		    						<h3><a href="#">Prague</a></h3>
	    						</div>
	    						<div class="two">
	    							<span class="price">$750</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Prague, Czech Republic</span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
    					    </div>
                        </div>
		    			</div>


		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<div id="carouselExampleIndicators6" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/San1.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/San2.jpg" alt="Second slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/San3.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/San4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/San5.jpg" alt="Fifth slide">
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
		    						<h3><a href="#">San Francisco</a></h3>
	    						</div>
	    						<div class="two">
	    							<span class="price">$650</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Francisco, United States</span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
    					</div>
		    				</div>
		    			</div>


             <div class="col-sm col-md-6 col-lg-4 ftco-animate">
             <div class="destination">
    					<div id="carouselExampleIndicators7" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/D1.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/D2.jpg" alt="Second slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/D3.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/D4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/D5.jpg" alt="Fifth slide">
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
		    						<h3><a href="#">Delhi</a></h3>
	    						</div>
	    						<div class="two">
	    							<span class="price">$550</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Delhi, India</span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
    					</div>
    				</div>
             </div>


             
              <div class="col-sm col-md-6 col-lg-4 ftco-animate">
             <div class="destination">
    					<div id="carouselExampleIndicators8" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Ny1.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Ny2.jpg" alt="Second slide">
          		                </div>
          		                 <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Ny3.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Ny4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Ny5.jpg" alt="Fifth slide">
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
		    						<h3><a href="#">New York</a></h3>
	    						</div>
	    						<div class="two">
	    							<span class="price">$640</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> </span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
    					</div>
    				</div>
             </div>
             

              <div class="col-sm col-md-6 col-lg-4 ftco-animate">
             <div class="destination">
    					<div id="carouselExampleIndicators9" class="carousel slide haha" data-ride="carousel">
          		            <div class="carousel-inner imageSizeChange2">
          		                <div class="carousel-item active">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Db.jpg" alt="First slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Db2.jpg" alt="Second slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Db6.jpg" alt="Third slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Db4.jpg" alt="Fourth slide">
          		                </div>
          		                <div class="carousel-item">
          		                    <img class="d-block w-100 img-fluid js-fullheight" src="images/Db5.jpg" alt="Fifth slide">
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
		    						<h3><a href="#">Dubai</a></h3>
	    						</div>
	    						<div class="two">
	    							<span class="price">$580</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Dubai, UAE</span> 
    							<span class="ml-auto"><a >Discover</a></span>
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
            <h2 class="mb-4">Most Popular Destination</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
             <div class="destination">
    					<a href="images/Des1.jpg" target="_blank" data-lightbox="image" data-title="My caption 1" class="img img-2 img-fluid d-flex justify-content-center align-items-center" style="background-image: url(images/Des1.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Eiffel Tower</a></h3>
	    						</div>
    						</div>
    						<p>An Object of discord, desire and fascination, the Eiffel Tower never fails to impress</p>
    						<p class="days"><span>Paris, France</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Paris, France</span> 
    							<span class="ml-auto"><a>Discover</a></span>
    						</p>
    					</div>
           </div>
           
           <div class="destination">
    					<a href="images/destination-1.jpg" target="_blank" data-lightbox="image" data-title="My caption 1" class="img img-2 img-fluid d-flex justify-content-center align-items-center" style="background-image: url(images/Des4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Colosseum</a></h3>
	    						</div>
    						</div>
    						<p>The Colosseum is filled with amazing knowledge and is an architectural wonder and a vast amount of history just waiting to be found.</p>
    						<p class="days"><span>Rome, Italy</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Rome, Italy</span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
    					</div>
    				</div>
           
           <div class="destination">
    					<a href="images/destination-1.jpg" target="_blank" data-lightbox="image" data-title="My caption 1" class="img img-2 img-fluid d-flex justify-content-center align-items-center" style="background-image: url(images/Des3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Opera House</a></h3>
	    						</div>
    						</div>
    						<p>The Sydney Opera House is one of the most famous architectural wonders of the modern world</p>
    						<p class="days"><span>Sydney, Australia</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Sydney, Australia</span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
    					</div>
    				</div>
           
           <div class="destination">
    					<a href="images/destination-1.jpg" target="_blank" data-lightbox="image" data-title="My caption 1" class="img img-2 img-fluid d-flex justify-content-center align-items-center" style="background-image: url(images/Des2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">New York-New York Hotel & Casino</a></h3>
	    						</div>
    						</div>
    						<p>New York-New York Resort in Las Vegas is your home for all things entertainment and gaming.</p>
    						<p class="days"><span>Las Vegas, Nevada</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Las Vegas, Nevada</span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
    					</div>
    				</div>
           
           <div class="destination">
    					<a href="images/destination-1.jpg" target="_blank" data-lightbox="image" data-title="My caption 1" class="img img-2 img-fluid d-flex justify-content-center align-items-center" style="background-image: url(images/Des.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Santorini</a></h3>
	    						</div>
    						</div>
    						<p>Santorini has a whimsical charm that lures visitors from all over the world.</p>
    						<p class="days"><span>Santorini, Greece</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Santorini, Greece</span> 
    							<span class="ml-auto"><a >Discover</a></span>
    						</p>
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
              <h2 class="ftco-heading-2">   Experience</h2>
              <ul class="list-unstyled">
                <li><span class="text"  >   Beach</span></li>
                <li><span class="text" >   Adventure</span></li>
                <li><span class="text"  >   Wildlife</span></li>
                <li><span class="text" >   Honeymoon</span></li>
                <li><span class="text"  >   Nature</span></li>
                <li><span class="text"  >   Party</span></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
         </p>
          </div>
        </div>
      </div>
    </footer>

 
		
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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