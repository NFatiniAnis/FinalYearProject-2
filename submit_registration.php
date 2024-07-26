<?php
session_start();

// Connect to the database
$conn = new mysqli("localhost", "root", "", "recruitment_db");

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// submit_register.php

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$fname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING);
$state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
$profilepic = filter_input(INPUT_POST, 'profile_picture', FILTER_SANITIZE_STRING);



// Prepare the SQL query
$sql = "INSERT INTO register (id, username, password, first_name, email, contact, state, profile_picture) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the query
$stmt = $conn->prepare($sql);

// Check the return value of the prepare() method
if ($stmt) {
    // Bind the user-provided data to the query
    $stmt->bind_param("ssssssss", $id, $username, $password, $fname, $email, $contact, $state, $profilepic);

    // Execute the query
    $result = $stmt->execute();

    if ($result) {
        echo "<script>alert('Application submitted successfully!'); window.location='../employer.php?id=" . $row["id"] . "';</script>";
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