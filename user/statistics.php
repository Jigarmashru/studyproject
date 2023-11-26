<!DOCTYPE html>
<html lang="en">
<body>
 <!-- Navbar Start -->
 <?php include "header.php" ?>
<!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">COMMERCE / Statistics</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <?php
        $cn = mysqli_connect("localhost", "root", "", "userinfo");
        $use = mysqli_query($cn, "SELECT * FROM `subject` where course='c/s'");
        while($u = mysqli_fetch_array($use))
        {
            echo "<iframe class='col-lg-12' width='1000' height='320'  src='".$u['link']."'></iframe><hr style='color:#2ace53;border-style: dotted;border-width: 9px;'>";
        }
    ?>
    
<!-- Footer Start -->
<?php include "footer.php" ?>
<!-- Footer End -->
</body>
</html>