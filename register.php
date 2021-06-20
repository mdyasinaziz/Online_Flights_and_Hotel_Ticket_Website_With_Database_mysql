<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<html>

<head>
    <title>Welcome! Register</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">

<body background="images/pic1.jpg">
    <div class="loginbox2">
        <img src="images/avatar1.png" class="avatar">
        <h1>Register Here</h1>
        <form action="register.php" method="post">
            <div class="inner_container">
                <label><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" name="fname" required>

                <label><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="lname" required>

                <label><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Phone No." name="phoneno" required>

                <label><b>Address</b></label>
                <input type="text" placeholder="Enter Address" name="addr" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button name="register" class="sign_up_btn" type="">Sign Up</button>

                <a href="login.html">
                    <h3>Go Back</h3>
                </a>
            </div>
        </form>



        <?php
			if(isset($_POST['register']))
			{
				@$fname=$_POST['fname'];
				@$lname=$_POST['lname'];
				@$email=$_POST['email'];
                @$phoneno=$_POST['phoneno'];
                @$addr=$_POST['addr'];
                @$password=$_POST['password'];
				

				if($password==$password)
				{
                $query = "select * from userinfo where email='$email'";
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
							$query = "insert into userinfo values('$fname','$lname','$email','$phoneno','$addr','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['email'] = $email;
                                $_SESSION['password'] = $password;
								header( "Location: flights.php");
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
</body>
</head>

</html>
