<?php

// Start session
session_start();

// Database connection
$hostname = "127.0.0.1"; // Replace with your MySQL server hostname
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "security"; // Replace with your MySQL database name
$port = 3306;
$msg = "";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input from form
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$action = $_GET['action'];

//login logic if action is login
if ($action == 'login') {
 //using prepard statements
 // prepare and bind
 $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
 $stmt->bind_param("ss", $email, $password);

 $stmt->execute();
 $result = $stmt->get_result();

 // Check if query returned a row
 if ($result->num_rows > 0) {
  // User authentication successful
  $_SESSION['username'] = $result->fetch_assoc()['username'];
  header("Location: home.php"); // Redirect  home page
 } else {
  // User authentication failed
  $msg = "Invalid email or password.";
 }
}


//registration logic if action is register
if ($action == 'register') {
 // // Query database to check if user exists
 $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
 $stmt->bind_param("sss", $username, $email, $password);
 $stmt->execute();
 $result = $stmt->get_result();

 // Check if query returned a row
 if ($result > 0) {
  header("Location: home.php"); // Redirect  home page
 } else {
  // User authentication failed
  echo "Registration unsuccessful.";
 }
}


// Close database connection
$conn->close();
?>