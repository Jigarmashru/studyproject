<?php
session_start();
$con = mysqli_connect("localhost","root","","userinfo");
$uid = $_GET['id'];
$u1 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `userdata` WHERE id='$uid'"));
  
if (isset($_POST["ok"])) {
  $uid = $_GET['id'];
  $u1 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `userdata` WHERE id='$uid'"));
  
  $email = $_POST["email"];
  $unm = $_POST["unm"];
  $psw = $_POST["psw"];
  $cpsw = $_POST["cpsw"];
  $au = $_POST["au"];
  if ($psw == $cpsw) 
    {
      $sql = "UPDATE `userdata` SET `email`='$email',`username`='$unm',`password`='$psw',`au`='$au' where id = '$uid'";
      mysqli_query($con, $sql);
      echo "<script> alert('Update Successful'); </script>";
      echo "<script> window.location.assign('admin.php'); </script>";
    } 
    else 
    {
      echo
        "<script> alert('Password Does Not Match'); </script>";
    }
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
                <a href="#user" class="nav-item nav-link">user</a>
                <a href="#faculty" class="nav-item nav-link">Faculty</a>
                <a href="#subject" class="nav-item nav-link">Subject</a>
                <a href="#query" class="nav-item nav-link">Query</a>
                <a href="signup.php" class="nav-item nav-link">Create New Admin</a>
                <a href="logout.php" class="nav-item nav-link">LogOut</a>
            </div>
        </div>
    </nav>
    <!--header end-->

    <!-- update data-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="../img/u1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp">
                    <form action="" method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="<?php echo $u1['email'] ?>" name="email" placeholder="Email" required>
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="<?php echo $u1['username'] ?>" name="unm" required>
                                    <label>Username</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="<?php echo $u1['password'] ?>" name="psw" placeholder="Email" required>
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="<?php echo $u1['password'] ?>" name="cpsw" placeholder="Email" required>
                                    <label>Confirm Password</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="<?php echo $u1['au'] ?>" name="au" placeholder="Email" required>
                                    <label>User/Admin</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="ok">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- update data-->

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