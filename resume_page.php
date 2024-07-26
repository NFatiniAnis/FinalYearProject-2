<?php
session_start();
include('admin/db_connect.php');
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Job Searching for Graduates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
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
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h2 class="m-0 text-primary">GRADUATES SELF-PROMOTE FOR JOB<br>SEARCHING AND RESUME MAKING</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resume</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="resumebuild.html" class="dropdown-item">Create A Resume</a>
                            <a href="existingResume.html" class="dropdown-item">Import Existing Resume</a>
                            <a href="comparisonResume.html" class="dropdown-item">Auto-Detect Resume</a>
                        </div>
                    </div>
                    <a href="profile.html" class="nav-item nav-link">Profile</a>
                </div>
                <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Employer Here<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
        
        <!-- Masthead-->

<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 10px 0;
  font-size: 30px;
  
  img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

}
</style>
</head>
<body>

<h1>Resume Template</h1>

<p>You can use the <em> templates </em> as needed. </p>


<a href="Template1Show.php">
  <img src="admin\assets\img\Resume_Juliana.jpg" alt="template 1" style="max-height: 400px;min-height: 100px">
</a>

<a href="Template2Show.php">
  <img src="admin\assets\img\Resume2.png" alt="template 2" style="max-height: 400px;min-height: 100px">
</a>

<a href="Template3Show.php">
  <img src="admin\assets\img\Resume_Richard.jpg" alt="template 3" style="max-height: 400px;min-height: 100px">
</a>

<a href="Template4Show.php">
  <img src="admin\assets\img\Resume4.png" alt="template 4" style="max-height: 400px;min-height: 100px">
</a>

<a href="Template5Show.php">
  <img src="admin\assets\img\Resume5.png" alt="template 5" style="max-height: 400px;min-height: 100px">
</a>

<a href="Template6Show.php">
  <img src="admin\assets\img\Resume6.png" alt="template 6" style="max-height: 400px;min-height: 100px">
</a>

<a href="Template7Show.php">
  <img src="admin\assets\img\Resume7.png" alt="template 7" style="max-height: 400px;min-height: 100px">
</a>

<!--<div class="grid-container">
<div class="grid-item">
<a href="resumePersonalinfo.php" class="image-button">
    <img class="card-img-top" src="admin\assets\img\Resume_Richard.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</a></div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Juliana.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Donna.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Shawn.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Korina.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Adaline.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Olivia.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Mariana.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Lorna.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Richard1.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Ong.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

<div class="grid-item">
<img class="card-img-top" src="admin\assets\img\Resume_Sato.jpg" alt="Card image cap" style="max-height: 400px;min-height: 100px">
</div>

</body>
</html>-->

<!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Company</h5>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Contact</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
                        
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>