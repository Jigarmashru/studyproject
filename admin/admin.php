<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header("location:../index.php");
}
$cn = mysqli_connect("localhost", "root", "", "userinfo");
if (isset($_GET['key']) && $_GET['key'] == "user") {
  if ($_GET['id'] == 1) {
    echo "<script>alert('Admin Can Not Deleted.');window.location.assign('admin.php');</script>";
  } 
  else {
    $query = "DELETE FROM `userdata` WHERE id=" . $_GET['id'];
    $result = mysqli_query($cn, $query);
    $row = mysqli_affected_rows($cn);
    if ($row > 0) {
      echo "<script>alert('Record Deleted Successfully.');window.location.assign('admin.php');</script>";
    }
  }
}
if (isset($_GET['key']) && $_GET['key'] == "faculty") {
    $query = "DELETE FROM `faculty` WHERE id=" . $_GET['id'];
    $result = mysqli_query($cn, $query);
    $row = mysqli_affected_rows($cn);
    if ($row > 0) {
      echo "<script>alert('Record Deleted Successfully.');window.location.assign('admin.php');</script>";
    }
}
if (isset($_GET['key']) && $_GET['key'] == "subject") {
    $query = "DELETE FROM `subject` WHERE id=" . $_GET['id'];
    $result = mysqli_query($cn, $query);
    $row = mysqli_affected_rows($cn);
    if ($row > 0) {
      echo "<script>alert('Record Deleted Successfully.');window.location.assign('admin.php');</script>";
    }
}
if (isset($_GET['key']) && $_GET['key'] == "query") {
  $query = "DELETE FROM `query` WHERE id=" . $_GET['id'];
  $result = mysqli_query($cn, $query);
  $row = mysqli_affected_rows($cn);
  if ($row > 0) {
    echo "<script>alert('Record Deleted Successfully.');window.location.assign('admin.php');</script>";
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

  <!-- slider Start --> 
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="a1.jpg" style="height:70%">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);"> <!--This div is use for put like black shadow on the picture -->
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Admin</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="a2.jpg" style="height:70%">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Admin</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider End -->

 <!--user-->
 <section id="user">
<div class="container">
        <h1 class="text-center" style="color:#2ace53; border-style: dotted;border-width: 1.5px;">User Information</h1>
        <div class="card p-4"  style="border-style: dotted;border-width: 1.5px;">
            <table class="table" >
                <thead style="color: #2ace53;">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Userame</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Admin-User</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                  </tr>
                </thead>
                <tbody>
                
                  <?php
                    $cn = mysqli_connect("localhost", "root", "", "userinfo");
                    $use = mysqli_query($cn, "SELECT * FROM `userdata`");
                    while($u = mysqli_fetch_array($use)){
                      echo "<tr><th scope='row'>".$u['id']."</th>
                      <td>".$u['username']."</td>
                      <td>".$u['email']."</td>
                      <td>".$u['password']."</td>
                      <td>".$u['au']."</td>
                      <td><a href='admin.php?key=user&id=" . $u['id'] . "'><img src='delete.png' width='20'></a></td>
                      <td><a href='edit.php?key=eu&id=" . $u['id'] . "'><img src='update.png' width='20'></a></td></tr>";
                    }
                  ?>    
                </tbody>
              </table>
            
        </div>
</div>
<hr style="color:#2ace53;border-style: dotted;border-width: 9px;"> 
</section>
<!--user end--> 

<!--faculty-->
<section id="faculty">
<div class="container">
    <h1 class="text-center" style="color:#2ace53; border-style: dotted;border-width: 1.5px;">Faculty</h1>
        <div class="card p-4"  style="border-style: dotted;border-width: 1.5px;">
            <table class="table" >
                <thead style="color: #2ace53;">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $cn = mysqli_connect("localhost", "root", "", "userinfo");
                    $use = mysqli_query($cn, "SELECT * FROM `faculty`");
                    while($u = mysqli_fetch_array($use)){
                      echo "<tr><th scope='row'>".$u['id']."</th>
                      <td>".$u['name']."</td>
                      <td>".$u['email']."</td>
                      <td>".$u['subject']."</td>
                      <td><a href='admin.php?key=faculty&id=" . $u['id'] . "'><img src='delete.png' width='20'></a></td>
                      </tr>";
                    }
                  ?>
                </tbody>
              </table>
        </div>
</div>
<hr style="color:#2ace53;border-style: dotted;border-width: 9px;"> 
</section> 
<!--faculty end-->

<!--subject-->
<section id="subject">
<div class="container">
    <h1 class="text-center" style="color:#2ace53; border-style: dotted;border-width: 1.5px;">Subject Details</h1>
        <div class="card p-4"  style="border-style: dotted;border-width: 1.5px;">
            <table class="table" >
                <thead style="color: #2ace53;">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Link</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $cn = mysqli_connect("localhost", "root", "", "userinfo");
                    $use = mysqli_query($cn, "SELECT * FROM `subject`");
                    while($u = mysqli_fetch_array($use)){
                      echo "<tr>
                              <th scope='row'>".$u['id']."</th>
                              <td>".$u['course']."</td>
                              <td>".$u['link']."</td>
                              <td><a href='admin.php?key=subject&id=" . $u['id'] . "'><img src='delete.png' width='20'></a></td>
                              </tr>";
                    }
                  ?>
                </tbody>
              </table>
        </div>    
        <br>
        <a  href="addlink.php"><button style="background-color: #2ace53; color:aliceblue">Add Course Link</button></a>
</div>
<hr style="color:#2ace53;border-style: dotted;border-width: 9px;"> 
</section>
<!--subject end-->

<!--Query start-->
<section id="query">
<div class="container">
    <h1 class="text-center" style="color:#2ace53; border-style: dotted;border-width: 1.5px;">Query</h1>
        <div class="card p-4"  style="border-style: dotted;border-width: 1.5px;">
            <table class="table" >
                <thead style="color: #2ace53;">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $cn = mysqli_connect("localhost", "root", "", "userinfo");
                    $use = mysqli_query($cn, "SELECT * FROM `query`");
                    while($u = mysqli_fetch_array($use)){
                      echo "<tr>
                              <th scope='row' style='width:300px'>".$u['id']."</th>
                              <td style='width:300px'>".$u['name']."</td>
                              <td style='width:300px'>".$u['subject']."</td>
                              <td><textarea readonly style='width:300px;height:70px'>".$u['message']."</textarea></td>
                              <td><a href='admin.php?key=query&id=" . $u['id'] . "'><img src='delete.png' width='20'></a></td></tr>";
                    }
                  ?>
                </tbody>
              </table>
        </div>    
</div>
<hr style="color:#2ace53;border-style: dotted;border-width: 9px;"> 
</section>
<!--Query end--> 
    
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