<?php
include 'admin/db_connect.php';
include 'header.php';

?>

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

<!-- Registration start -->

<center><h2>REGISTER</h2></center>

<form method="POST" action="admin/submit_registration.php">

<div>
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
    </div>
    <div>
      <label for="password">Password:</label><br>
      <input type="text" id="password" name="password"><br>
    </div>
    <div>
      <label for="firstname">Company Name:</label><br>
      <input type="text" id="fname" name="first_name"><br>
</div>
    <div>
    <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br>
    </div>
    <div>
    <label for="contact">Contact:</label><br>
      <input type="int" id="contact" name="contact"><br>
    </div>
    <div>
      <label for="state">State:</label><br>
      <select name="state">
		<option value="">---Choose---</option>
            <option value="Perak">Perak</option>
            <option value="Selangor">Selangor</option>
            <option value="Kuala Lumpur">Kuala Lumpur</option>
            <option value="Melaka">Melaka</option>
            <option value="Johor">Johor</option>
            <option value="Pahang">Pahang</option>
            <option value="Putrajaya">Putrajaya</option>
	</select>
    </div>
    <br>
<div>
    <label>Company Logo</label><br>
    <form action="admin/submit_resume.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_picture" id="profilepic"><br>
        </div>

        <button onclick="clearInputs()">RESET</button>
        <input type="submit" name="submit" value="Register">
        <font color='blue'>*Make sure all your data is correct before register.</font>
        
        </form>
    </div>

    
	<!--<label>Middle Name</label><br>
	<input type="text" name="middlename" placeholder="Your Middle name" required >
	<br>
	<label>Last Name</label><br>
	<input type="text" name="lastname" placeholder="Your Last Name or Your Dad's Name" required >
	<br>
    
    <label>Contact</label><br>
	<input type="text" name="contact" id="contact" 
	placeholder="Your contact number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
	<br>
	<label>email</label><br>
	<input type="email" name="email" placeholder="Your email" required >
	<br>
	<label>Gender</label><br>
	<select name="gender">
		<option value="">---Gender---</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
	</select>
	<br>
	<label>State</label><br>
	<select name="state">
		<option value="">---Choose---</option>
            <option value="Perak">Perak</option>
            <option value="Selangor">Selangor</option>
            <option value="Kuala Lumpur">Kuala Lumpur</option>
            <option value="Melaka">Melaka</option>
            <option value="Johor">Johor</option>
            <option value="Pahang">Pahang</option>
            <option value="Putrajaya">Putrajaya</option>
	</select>
	<br>
	<label>Profile Picture</label><br>
        <input type="file" name="profile_picture" id="profilepic">
		<br>
	<label>Resume</label><br>
		<input type="file" class="custom-file-input" id="resumepath" onchange="displayfname(this,$(this))" name="resume_path" accept="application/msword,text/plain, application/pdf">
	
<br><button onclick="clearInputs()">RESET</button>  	
<button type="submit">REGISTER</button><br><br>
<font color='blue'>*Make sure all your data is correct before register.</font>
</form>	
		</td>
	</tr>
</table>-->

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