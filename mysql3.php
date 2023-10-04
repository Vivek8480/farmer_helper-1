<?php
// Replace these variables with your database credentials
$servername = "127.0.0.1";
$username_db = "root@localhost";
$password_db = "vivek@6372";
$database = "farmer";

// Create a database connection
$mysqli = new mysqli('127.0.0.1', 'root@localhost', 'vivek@6372' ,'farmer');

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

// Assuming you have a form input for the username, retrieve the username from the form
//@$username = $_POST['root@localhost']; // Replace 'username' with the actual name of your input field

// Prepare and execute the SQL statement
$stmt = $mysqli->prepare("INSERT INTO farmer_details1(username,email,password,confirm_password) VALUES(?,?,?,?)");

// Assuming you have other columns to insert data into; replace 'other_columns' with your actual column names

// Bind parameters
$stmt->bind_param("ssss", $username, $email, $password,$confirm_password); // Replace 'other_value' with the value for your other columns

// Execute the statement
if ($stmt->execute()) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();
?>