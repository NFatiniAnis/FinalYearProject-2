<?php
session_start();

// Prevent user from accessing page after logging out
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === false) {
    header("location:login.php");
    exit;
}

// Prevent user from accessing page after logging in
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location:index.php");
    exit;
}

// Check if user is logged in
if(!isset($_SESSION['username'])) {
    // Redirect to login page if user is not logged in
    header("location:login.php");
    exit;
}

// Display content for logged-in users
echo "Welcome, " . $_SESSION['username'] . "!";
?>