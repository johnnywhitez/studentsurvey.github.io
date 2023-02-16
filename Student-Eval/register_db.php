<?php


$conn= new mysqli('localhost','root','','Surveys')or die("Could not connect to mysql".mysqli_error($con));

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

// Insert data into table
$sql = "INSERT INTO register (username, password, email) VALUES ('$username', '$password', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
