<?php
session_start();

// Connect to the database
$conn = new mysqli("localhost", "root", "", "recruitment_db");

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// submit_resume.php

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$fname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
$mname = filter_input(INPUT_POST, 'middle_name', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
$postcode = filter_input(INPUT_POST, 'post_code', FILTER_SANITIZE_STRING);
$pnumber = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$jobtitle = filter_input(INPUT_POST, 'job_title', FILTER_SANITIZE_STRING);
$employer = filter_input(INPUT_POST, 'employer', FILTER_SANITIZE_STRING);
$sdate = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_STRING);
$edate = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING);
$jcity = filter_input(INPUT_POST, 'job_city', FILTER_SANITIZE_STRING);
$currentlyw = filter_input(INPUT_POST, 'currently_working', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$school = filter_input(INPUT_POST, 'school', FILTER_SANITIZE_STRING);
$degree = filter_input(INPUT_POST, 'degree', FILTER_SANITIZE_STRING);
$gdate = filter_input(INPUT_POST, 'graduation_date', FILTER_SANITIZE_STRING);
$gcity = filter_input(INPUT_POST, 'grad_city', FILTER_SANITIZE_STRING);
$gdescription = filter_input(INPUT_POST, 'grad_description', FILTER_SANITIZE_STRING);
$skill = filter_input(INPUT_POST, 'skill', FILTER_SANITIZE_STRING);
$summary = filter_input(INPUT_POST, 'summary', FILTER_SANITIZE_STRING);
$medsoc = filter_input(INPUT_POST, 'media_social', FILTER_SANITIZE_STRING);
$link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);
$language = filter_input(INPUT_POST, 'language', FILTER_SANITIZE_STRING);
$level = filter_input(INPUT_POST, 'level', FILTER_SANITIZE_STRING);
$hobbies = filter_input(INPUT_POST, 'hobbies', FILTER_SANITIZE_STRING);
$nationality = filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING);
$dob = filter_input(INPUT_POST, 'date_of_birth', FILTER_SANITIZE_STRING);
$marital = filter_input(INPUT_POST, 'marital_status', FILTER_SANITIZE_STRING);
$course = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_STRING);
$institution = filter_input(INPUT_POST, 'institution', FILTER_SANITIZE_STRING);
$refname = filter_input(INPUT_POST, 'referent_name', FILTER_SANITIZE_STRING);
$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
$refphone = filter_input(INPUT_POST, 'referent_phone', FILTER_SANITIZE_STRING);
$refemail = filter_input(INPUT_POST, 'referent_email', FILTER_SANITIZE_STRING);
$internj = filter_input(INPUT_POST, 'intern_job', FILTER_SANITIZE_STRING);
$interne = filter_input(INPUT_POST, 'intern_employer', FILTER_SANITIZE_STRING);
$internsdate = filter_input(INPUT_POST, 'internStart_date', FILTER_SANITIZE_STRING);
$internedate = filter_input(INPUT_POST, 'internEnd_date', FILTER_SANITIZE_STRING);
$icity = filter_input(INPUT_POST, 'intern_city', FILTER_SANITIZE_STRING);
$idesc = filter_input(INPUT_POST, 'intern_description', FILTER_SANITIZE_STRING);
$drivinglicense = filter_input(INPUT_POST, 'driving_license', FILTER_SANITIZE_STRING);
$parttimejob = filter_input(INPUT_POST, 'part_time_job', FILTER_SANITIZE_STRING);
$parttimejobe = filter_input(INPUT_POST, 'partTimeJob_employer', FILTER_SANITIZE_STRING);
$profilepic = filter_input(INPUT_POST, 'profile_picture', FILTER_SANITIZE_STRING);
$jobposition = filter_input(INPUT_POST, 'job_position', FILTER_SANITIZE_STRING);


/*$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$postcode = $_POST['post_code'];
$pnumber = $_POST['phone_number'];
$email = $_POST['email'];
$jobtitle = $_POST['job_title'];
$employer = $_POST['employer'];
$sdate = $_POST['start_date'];
$edate = $_POST['end_date'];
$jcity = $_POST['job_city'];
$currentw = $_POST['current_working'];
$description = $_POST['description'];
$school = $_POST['school'];
$degree = $_POST['degree'];
$gdate = $_POST['graduation_date'];
$gcity = $_POST['grad_city'];
$gdescription = $_POST['grad_description'];
$skill = $_POST['skill'];
$summary = $_POST['summary'];
$medsoc = $_POST['media_social'];
$link = $_POST['link'];
$language = $_POST['language'];
$level = $_POST['level'];
$hobbies = $_POST['hobbies'];
$nationality = $_POST['nationality'];
$dob = $_POST['date_of_birth'];
$marital = $_POST['marital_status'];
$course = $_POST['course'];
$institution = $_POST['institution'];
$refname = $_POST['referent_name'];
$company = $_POST['company'];
$refphone = $_POST['referent_phone'];
$refemail = $_POST['referent_email'];
$internj = $_POST['intern_job'];
$interne = $_POST['intern_employer'];
$internsdate = $_POST['internStart_date'];
$internedate = $_POST['internEnd_date'];
$icity = $_POST['intern_city'];
$idesc = $_POST['intern_description'];
$drivinglicense = $_POST['driving_license'];
$parttimejob = $_POST['part_time_job'];
$parttimejobe = $_POST['partTimeJob_employer'];*/

// Insert the resume into the database
/*$sql = "INSERT INTO resume (first_name, last_name, address, city, post_code, phone_number, email, job_title, employer, start_date, end_date, job_city, currently_working, description, school, degree, graduation_date, grad_city, grad_description, skill, summary, media_social, link, language, level, hobbies, nationality, date_of_birth, marital_status, course, institution, referent_name, company, referent_phone, referent_email, intern_job, intern_employer, internStart_date, internEnd_date, intern_city, intern_description, driving_license, part_time_job, partTimeJob_employer) 
VALUES ('$fname', '$lname', '$address', '$city', '$postcode', '$pnumber', '$email' , '$jobtitle' , '$employer' , '$sdate' , '$edate' , '$jcity' , '$currentlyw' , '$description' , '$school' , '$degree' , '$gdate' , '$gcity' , '$gdescription' , '$skill' , '$summary' , '$medsoc' , '$link' , '$language' , '$level' , '$hobbies' , '$nationality' , '$dob' , '$marital' , '$course' , '$institution' , '$refname', '$company' , '$refphone' , '$refemail', '$internj', '$interne' , '$internsdate' , '$internedate' , '$icity', '$idesc' , '$drivinglicense' , '$parttimejob' , '$parttimejobe')";


$sql = "INSERT INTO resume (first_name, last_name, address, city, post_code, phone_number, email, job_title, employer, start_date, end_date, job_city, currently_working, description, school, degree, graduation_date, grad_city, grad_description, skill, summary, media_social, link, language, level, hobbies, nationality, date_of_birth, marital_status, course, institution, referent_name, company, referent_phone, referent_email, intern_job, intern_employer, internStart_date, internEnd_date, intern_city, intern_description, driving_license, part_time_job, partTimeJob_employer) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind the user-provided data to the query
$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssss", $fname, $lname, $address, $city, $postcode, $pnumber, $email, $jobtitle, $employer, $sdate, $edate, $jcity, $currentlyw, $description, $school, $degree, $gdate, $gcity, $gdescription, $skill, $summary, $medsoc, $link, $language, $level, $hobbies, $nationality, $dob, $marital, $course, $institution, $refname, $company, $refphone, $refemail, $internj, $interne, $internsdate, $internedate, $icity, $idesc, $drivinglicense, $parttimejob, $parttimejobe);

// Execute the query
$result = $stmt->execute();

if ($result) {
    echo "Resume submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
*/

// Prepare the SQL query
$sql = "INSERT INTO resumedetails (id, first_name, middle_name, last_name, address, city, post_code, phone_number, email, job_title, employer, start_date, end_date, job_city, currently_working, description, school, degree, graduation_date, grad_city, grad_description, skill, summary, media_social, link, language, level, hobbies, nationality, date_of_birth, marital_status, course, institution, referent_name, company, referent_phone, referent_email, intern_job, intern_employer, internStart_date, internEnd_date, intern_city, intern_description, driving_license, part_time_job, partTimeJob_employer, profile_picture, job_position) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the query
$stmt = $conn->prepare($sql);

// Check the return value of the prepare() method
if ($stmt) {
    // Bind the user-provided data to the query
    $stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssss", $id, $fname, $mname, $lname, $address, $city, $postcode, $pnumber, $email, $jobtitle, $employer, $sdate, $edate, $jcity, $currentlyw, $description, $school, $degree, $gdate, $gcity, $gdescription, $skill, $summary, $medsoc, $link, $language, $level, $hobbies, $nationality, $dob, $marital, $course, $institution, $refname, $company, $refphone, $refemail, $internj, $interne, $internsdate, $internedate, $icity, $idesc, $drivinglicense, $parttimejob, $parttimejobe, $profilepic, $jobposition);

    // Execute the query
    $result = $stmt->execute();

    if ($result) {
        echo "<script>alert('Resume submitted successfully!'); window.location='../template5.php?id=" . $row["id"] . "';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close the statement
    $stmt->close();
} else {
    // Handle the error
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>