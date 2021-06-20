<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test Sql Here</title>
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
                    <li class="nav-item active"><a href="policy.php" class="nav-link">Policies</a></li>
                    <li class="nav-item"><a href="myaccount.php" class="nav-link">SQL (WIP)</a></li>
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



    <div class="hero-wrap js-fullheight" style="background-image: url('images/newyork_usa.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="flights.php">Flights</a></span>
                        <span class="mr-2"><a href="hotels.php">Hotels</a></span><span>SQL Testing</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">My SQL</h1>
                    <p data-scrollax="properties: { translateY: '40%', opacity: 1.4 }">Please type a query below to test SQL database! </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(images/ticket.jpg);"></div>
        <div class="one-half ftco-animate bg-dark">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Query Enter: (import data)</h2>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="quer" id="checkin_date" class="form-control" placeholder="Typer your query here">
                </div>


                <div class="form-group">
                    <button name="run" class="btn btn-primary py-3 px-5" type="">Run Query!</button>
                </div>
            </form>


            <?php
			if(isset($_POST['run']))
			{
                @$email = $_SESSION['email'];
				@$quer=$_POST['quer'];
				if($quer==$quer)
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
							$query = "$quer";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Operation Done Successfully")</script>';
								//$_SESSION['email'] = $email;
                                //$_SESSION['password'] = $password;
								//header( "Location: myaccount.php");
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
    </section>
    
    
    
    
    
    <section class="ftco-about d-md-flex bg-dark">
        <div class="one-half ftco-animate bg-dark">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Query Enter: (export data)</h2>
            </div>
            <form action="" method="post">
               <div class="form-group">
                    <input type="text" name="quer" id="checkin_date" class="form-control" placeholder="Typer your query here">
                </div>
                <div class="form-group">
                    <input type="text" name="c1" id="checkin_date" class="form-control" placeholder="Column Name">
                    <input type="text" name="c2" id="checkin_date" class="form-control" placeholder="Column Name">
                    <input type="text" name="c3" id="checkin_date" class="form-control" placeholder="Column Name">
                    <input type="text" name="c4" id="checkin_date" class="form-control" placeholder="Column Name">
                    <input type="text" name="c5" id="checkin_date" class="form-control" placeholder="Column Name">
                    <input type="text" name="c6" id="checkin_date" class="form-control" placeholder="Column Name">
                </div>


                <div class="form-group">
                    <button name="run2" class="btn btn-primary py-3 px-5" type="">Run Query!</button>
                </div>
            </form>


            <?php
			if(isset($_POST['run2']))
			{
                @$email = $_SESSION['email'];
				@$quer=$_POST['quer'];
                @$c1=$_POST['c1'];
                @$c2=$_POST['c2'];
                @$c3=$_POST['c3'];
                @$c4=$_POST['c4'];
                @$c5=$_POST['c5'];
                @$c6=$_POST['c6'];
				if($quer==$quer)
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
							$query = "$quer";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
                                ?>
                                <table width="900" border="2" cellpadding="5" cellspacing="1"> 
                                <tr>
                                    <th><?php echo $c1 ?></th>
                                    <th><?php echo $c2 ?></th>
                                    <th><?php echo $c3 ?></th>
                                    <th><?php echo $c4 ?></th>
                                    <th><?php echo $c5 ?></th>
                                    <th><?php echo $c6 ?></th>
                                </tr>
                                <?php
								//echo '<script type="text/javascript">alert("Operation Done Successfully")</script>';
                                while ($row=mysqli_fetch_assoc($query_run)) {
                                    //echo "".$row["email"]. " ".$row["type"]."<br>";
                                
                                echo "<tr>"; 
                                if ($c1 != ""){
                                echo "<td>".$row[$c1]."</td>";
                                }
                                if ($c2 != ""){
                                echo "<td>".$row[$c2]."</td>";
                                }
                                if ($c3 != ""){
                                echo "<td>".$row[$c3]."</td>";
                                }
                                if ($c4 != ""){
                                echo "<td>".$row[$c4]."</td>";
                                }
                                if ($c5 != ""){
                                echo "<td>".$row[$c5]."</td>";
                                }
                                if ($c6 != ""){
                                echo "<td>".$row[$c6]."</td>";
                                }
                                echo "</tr>"; 
                                }
								//$_SESSION['email'] = $email;
                                //$_SESSION['password'] = $password;
								//header( "Location: myaccount.php");
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
       </table>
        </div>
    </section>
    
    
    
    
<footer class="ftco-footer ftco-animate ftco- bg-dark ftco-section">
         <div class="container">
             <div class="row mb-5">
                 <div class="col-md">
                     <div class="ftco-footer-widget mb-4">
                         <h2 class="ftco-heading-2"></h2>
                         <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                         </ul>
                     </div>
                 </div>
                 <div class="col-md pl-20">
                     <div class="ftco-footer-widget block-23 pl-20 mb-4">
                         <h2 class="ftco-heading-2"> </h2>
                         <ul class="list-unstyled">
                             <li><span class="text"> </span></li>
                             <li><span class="text"> </span></li>
                             <li><span class="text"> </span></li>
                             <li><span class="text"> </span></li>
                             <li><span class="text"> </span></li>
                             <li><span class="text"> </span></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-md">
                     <div class="ftco-footer-widget mb-4">
                         <h2 class="ftco-heading-2"></h2>
                         <div class="block-23 mb-3">
                             <ul>
                                 <li><span class="icon aicon-map-marker"></span><span class="text"></span></li>
                                 <li><a href="#"><span class="icon aicon-phone"></span><span class="text"></span></a></li>
                                 <li><a href="#"><span class="icon aicon-envelope"></span><span class="text"></span></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12 text-center">
                 </div>
             </div>
         </div>
     </footer>

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