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
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">

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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resume</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <<a href="resume_page.php" class="dropdown-item">Create A Resume</a>
                            <a href="educationalVideos.php" class="dropdown-item">Educational Videos for Creating Resume</a>
                            <a href="ResumeCheckerInterface.php" class="dropdown-item">Examples of Resume</a>
                        </div>
                    </div>
                    <a href="profile.html" class="nav-item nav-link">Profile</a>
                </div>
                <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Employer Here<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Create Resume</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Create Resume</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->

         <!--Resume builder-->

    <form method="POST" action="admin/submit_resume.php">
    <div>
      <label for="first_name">First Name:</label><br>
      <input type="text" id="fname" name="first_name"><br>
    </div>
    <div>
      <label for="middle_name">Middle Name:</label><br>
      <input type="text" id="mname" name="middle_name"><br>
    </div>
    <div>
      <label for="last_name">Last Name:</label><br>
      <input type="text" id="lname" name="last_name"><br>
    </div>
    <div>
      <label for="address">Address:</label><br>
      <input type="text" id="address" name="address"><br>
    </div>
    <div>
      <label for="city">City:</label><br>
      <input type="text" id="city" name="city"><br>
    </div>
    <div>
      <label for="post_code">Post Code:</label><br>
      <input type="int" id="postcode" name="post_code"><br>
    </div>
    <div>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br>
    </div>
    <div>
       <label for="phone">Phone:</label><br>
       <input type="int" id="pnumber" name="phone_number" ><br>
    </div>
    <div>
            <label for="job_title">Job Title:</label><br>
            <input type="text" id="job_title" name="job_title"><br>
</div>
<div>
            <label for="employer">Employer:</label><br>
            <input type="text" id="employer" name="employer"><br>
</div>
<div>
            <label for="start_date">Start Date:</label><br>
            <input type="date" id="start_date" name="start_date"><br>
            </div>
<div>
            <label for="end_date">End Date:</label><br>
            <input type="date" id="end_date" name="end_date"><br>
            </div>
<div>
            <label for="job_city">Job City:</label><br>
            <input type="text" id="job_city" name="job_city"><br>
            </div>
<div>
            <label for="currently_working">Currently Working:</label><br>
            <input type="text" id="currently_working" name="currently_working"><br>
            </div>
<div>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description"><br>
    </div>
    <div>
            <label for="school">School:</label><br>
            <input type="text" id="school" name="school"><br>
</div>
<div>
            <label for="degree">Degree:</label><br>
            <input type="text" id="degree" name="degree"><br>
            </div>
<div>
            <label for="graduation_date">Graduation Date:</label><br>
            <input type="date" id="graduation_date" name="graduation date"><br>
            </div>
<div>
            <label for="grad_city">Graduation City:</label><br>
            <input type="text" id="grad_city" name="grad_city"><br>
            </div>
<div>
            <label for="grad_description">Graduation Description:</label><br>
            <input type="text" id="grad_description" name="grad_description"><br>
            </div>
<div>
            <label for="skill">Skill:</label><br>
            <input type="text" id="skill" name="skill"><br>
            </div>
<div>
            <label for="summary">Summary:</label><br>
            <input type="text" id="summary" name="summary"><br>
    </div>
    <div>
            <label for="media_social">Media Social:</label><br>
            <input type="text" id="media_social" name="media_social"><br>
</div>
<div>
            <label for="link">Link:</label><br>
            <input type="text" id="link" name="link"><br>
            </div>
<div>
            <label for="language">Language:</label><br>
            <input type="text" id="language" name="language"><br>
            </div>
<div>
            <label for="level">Level:</label><br>
            <input type="text" id="level" name="level"><br>
            </div>
<div>
            <label for="hobbies">Hobbies:</label><br>
            <input type="text" id="hobbies" name="hobbies"><br>
            </div>
<div>
            <label for="nationality">Nationality:</label><br>
            <input type="text" id="nationality" name="nationality"><br>
            </div>
<div>
            <label for="date_of_birth">Date of Birth:</label><br>
            <input type="date" id="date_of_birth" name="date_of_birth"><br>
            </div>
<div>
            <label for="marital_status">Marital Status:</label><br>
            <input type="text" id="marital_status" name="marital_status"><br>
    </div>
    <div>
            <label for="course">Course:</label><br>
            <input type="text" id="course" name="course"><br>
</div>
<div>
            <label for="institution">Institution:</label><br>
            <input type="text" id="institution" name="institution"><br>
            </div>
<div>
            <label for="referent_name">Referent Name:</label><br>
            <input type="text" id="referent_name" name="referent_name"><br>
            </div>
<div>
            <label for="company">Company:</label><br>
            <input type="text" id="company" name="company"><br>
            </div>
<div>
            <label for="referent_phone">Referent Phone:</label><br>
            <input type="text" id="referent_phone" name="referent_phone"><br>
            </div>
<div>
            <label for="referent_email">Referent Email:</label><br>
            <input type="text" id="referent_email" name="referent_email"><br>
    </div>
    <div>
            <label for="intern_job">Intern Job:</label><br>
            <input type="text" id="intern_job" name="intern_job"><br>
</div>
<div>
            <label for="intern_employer">Intern Employer:</label><br>
            <input type="text" id="intern_employer" name="intern_employer"><br>
            </div>
<div>
            <label for="internStart_date">Intern Start Date:</label><br>
            <input type="date" id="internStart_date" name="internStart_date"><br>
            </div>
<div>
            <label for="internEnd_date">Intern End Date:</label><br>
            <input type="date" id="internEnd_date" name="internEnd_date"><br>
            </div>
<div>
            <label for="intern_city">Intern City:</label><br>
            <input type="text" id="intern_city" name="intern_city"><br>
            </div>
<div>
            <label for="intern_description">Intern Description:</label><br>
            <input type="text" id="intern_description" name="intern_description"><br>
            </div>
<div>
            <label for="driving_license">Driving License:</label><br>
            <input type="text" id="driving_license" name="driving_license"><br>
            </div>
<div>
            <label for="part_time_job">Part Time Job:</label><br>
            <input type="text" id="part_time_job" name="part_time_job"><br>
            </div>
<div>
            <label for="partTimeJob_employer">Part Time Job Employer:</label><br>
            <input type="text" id="partTimeJob_employer" name="partTimeJob_employer"><br>
            </div>
            <div>
            <label for="job_position">Job Position:</label><br>
            <input type="text" id="jobposition" name="job_position"><br>
            </div>
<div>
    <label>Profile Picture</label><br>
    <form action="admin/submit_resume.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_picture" id="profilepic"><br>
        </div>
            <input type="submit" name="submit" value="Submit Resume">
        </form>
    </div>
    <!--Resume Builder End-->

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