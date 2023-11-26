<?php
//addlink Database Code Start

if(isset($_POST['ok']))
{
	$con = mysqli_connect("localhost","root","","userinfo");
	$cn = $_POST['cnm'];
	$lk = $_POST['link'];
	$query = "insert into subject (course,link) values('$cn','$lk')";
	$result = mysqli_query($con,$query);
	$row = mysqli_affected_rows($con);
	if($row>0)
	{
		echo "<script> alert('Link Added Successfully.');</script>";
		mysqli_close($con);
	}
	else
	{
	    echo "<script> alert('Something Wrong Please Try Again...'); </script>";
	}
}
//addlink Database Code End
?>
<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header("location:../index.php");
}
?>
<!DOCTYPE >
<html>
<head>
    <meta charset="utf-8">
    <title>Study</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>  
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>sTUDY</h2>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="admin.php" class="nav-item nav-link">Home</a>
                <a href="admin.php#user" class="nav-item nav-link">user</a>
                <a href="admin.php#faculty" class="nav-item nav-link">Faculty</a>
                <a href="admin.php#subject" class="nav-item nav-link">Subject</a>
                <a href="admin.php#query" class="nav-item nav-link">Query</a>
                <a href="signup.php" class="nav-item nav-link">Create New Admin</a>
                <a href="../user/logout.php" class="nav-item nav-link">LogOut</a>
            </div>
        </div>
    </nav>
    <!--nav end-->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Add Course Link</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- add link Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="../img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp">
                    <form action="" method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="cnm" placeholder="Course Name" required>
                                    <label>Course Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Youtube Link" name="link" style="height: 150px" required></textarea>
                                    <label>Youtube Link</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="ok">Add Link</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- add link End -->


<!--Footer start-->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn">
        <div class="container py-5">
            <div class="row lg-5">
                <div class="col-lg-6 col-md-12">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="#">About Us</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <a class="btn btn-link" href="#">Privacy Policy</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                    <a class="btn btn-link" href="#">FAQs & Help</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Junagadh, Gujrat, India</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 91064 41410</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>studyinfo@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <!-- &copy is use for symbol c --> &copy; <a class="border-bottom" href="#">sTUDY</a>, All Right Reserved. Designed By Jigar Mashru.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer end-->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="../js/main.js"></script>

</body>
</html>
