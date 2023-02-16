<?php


$conn= new mysqli('localhost','root','','Surveys')or die("Could not connect to mysql".mysqli_error($con));

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the username and password exist in the database
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

// Check if there are any results from the query
if ($result->num_rows > 0) {
    // Redirect to another page
    header("Location: admin welcome.php");
    exit;
} else {
    // Redirect to another page with an error message
    header("Location: 404.php");
    exit;
}

// Close the connection
$conn->close();

?>
