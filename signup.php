<?php
//Signup Database Code Start

if(isset($_POST['ok']))
{
        if($_POST['psw'] == $_POST['cpsw'])
		{
			$con = mysqli_connect("localhost","root","","userinfo");
			$email = $_POST['email'];
			$unm = $_POST['uname'];
			$pwd = $_POST['psw'];
			$query = "insert into userdata (email,username,password,au) values('$email','$unm','$pwd','u')";
			$result = mysqli_query($con,$query);
			$row = mysqli_affected_rows($con);
			if($row>0)
			{
				echo "<script> alert('Record Added Successfully.'); window.location.assign('login.php');</script>";
				mysqli_close($con);
			}
			else
			{
			    echo "<script> alert('Already Available Username Please Change Username.'); </script>";
			}
		}
		else
		{
			echo "<script> alert('Password Must Be Same.'); </script>";
		}
}
//Signup Database Code End
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Study</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>sTUDY</h2>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="index.php#course" class="nav-item nav-link">Courses</a>
                <a href="index.php#faculty" class="nav-item nav-link">Our Faculty</a>
                <a href="index.php#about" class="nav-item nav-link">About</a>
                <a href="index.php#contact" class="nav-item nav-link">Contact</a>
                <a href="signup.php" class="nav-item nav-link">Sign-Up</a>
                <a href="login.php" class="nav-item nav-link">Log In</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- signup start -->

    <form class="form" action="" method="post">
    <p>Sign-Up</p>
    <div class="group">
      <input required="true" class="main-input" type="email" name="email">
      <span class="highlight-span"></span>
      <label class="lebal-email">Email</label>
    </div>
    <div class="container-1">
        <div class="group">
            <input required="true" class="main-input" type="text" name="uname">
            <span class="highlight-span"></span>
            <label class="lebal-email">Username</label>
        </div>
    </div>
    <div class="container-1">
      <div class="group">
        <input required="true" class="main-input" type="password" name="psw">
        <span class="highlight-span"></span>
        <label class="lebal-email">Password</label>
      </div>
    </div>
    <div class="container-1">
      <div class="group">
        <input required="true" class="main-input" type="password" name="cpsw">
        <span class="highlight-span"></span>
        <label class="lebal-email">Confirm password</label>
      </div>
    </div>
    <button class="submit" name="ok">Submit</button>
    </form>
    <!-- signup end -->
</body>
</html>