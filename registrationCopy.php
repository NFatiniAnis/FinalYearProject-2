<?php

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'recruitment_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $id = $_POST['id'];
    $contact = $_POST['contact'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $profilepic = $_FILES['profile_picture']['name'];
    $resumepath = $_FILES['resume_path']['name'];

    // Validate form data
    if (empty($id) || empty($contact) || empty($fname) || empty($mname) || empty($lname) || empty($email) || empty($gender) || empty($state) || empty($profilepic) || empty($resumepath)) {
        echo "All fields are required.";
        exit();
    }

    // Upload profile picture and resume
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($profilepic);
    $target_file_resume = $target_dir . basename($resumepath);

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        exit();
    }

    // Check file size
    if ($_FILES["profile_picture"]["size"] > 500000 || $_FILES["resume_path"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        exit();
    }

    // Allow certain file formats
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imageFileType_resume = strtolower(pathinfo($target_file_resume,PATHINFO_EXTENSION));

    // Check if file is an image or PDF
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType_resume != "pdf") {
        echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
        exit();
    }

    // Upload file
    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["resume_path"]["tmp_name"], $target_file_resume)) {
        echo "The file ". basename( $_FILES["profile_picture"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
        exit();
    }

    // Insert data into database
    $sql = "INSERT INTO application (id, contact, firstname, middlename, lastname, email, gender, state, profile_picture, resume_path) VALUES ('$id', '$contact', '$fname', '$mname', '$lname', '$email', '$gender', '$state', '$profilepic', '$resumepath')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();

}

?>

<!-- Registration start -->
<form method="POST" enctype="multipart/form-data">

    <label>Identification Card Number</label><br>
    <input type="text" name="id" placeholder="Your IC num without -" maxlength='12' onkeypress='return event.charCode >= 48 && event.charCode <= 57' required autofocus>
    <br>	
    <label>Contact</label><br>
    <input type="text" name="contact" id="contact" placeholder="Your contact number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
    <br>
    <label>First Name</label><br>
    <input type="text" name="firstname" placeholder="Your First name" required >
    <br>
    <label>Middle Name</label><br>
    <input type="text" name="middlename" placeholder="Your Middle name" required >
    <br>
    <label>Last Name</label><br>
    <input type="text" name="lastname" placeholder="Your Last Name or Your Dad's Name" required >
	<br>
	<label>email</label><br>
	<input type="text" name="email" placeholder="Your email" required >
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
        </div>
		<label>Resume File</label><br>
        <input type="file" name="resume_path" id="resumepath">
        </div>
	
<br><button onclick="clearInputs()">RESET</button>  	
<button type="submit">REGISTER</button><br><br>
<font color='blue'>*Make sure all your data is correct before register.</font>
</form>	
		</td>
	</tr>
</table>