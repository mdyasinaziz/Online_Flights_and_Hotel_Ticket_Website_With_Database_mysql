<?php
    session_start();
	require_once('dbconfig/config.php');
    //session_destroy();
	//phpinfo();
?>
<html>

<head>
    <title>Welcome! Login</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">

<body background="images/pic1.jpg">
    <div class="loginbox">
        <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="login.php" method="post">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="register.php"><button name="register" type="button" class="sign_up_btn">Register</button></a>
        </form>



        <?php
			if(isset($_POST['login']))
			{
				@$email=$_POST['email'];
				@$password=$_POST['password'];
				$query = "select * from userinfo where email='$email' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					$_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
					//echo "UserName: ".$_SESSION['username']." ".$username."password: ".$_SESSION['password']." ". $password;
					
					//header( "Location: homepage.php");
					echo("<script>window.location.href = 'flights.php';</script>");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
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
