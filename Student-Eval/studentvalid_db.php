<?php


$conn= new mysqli('localhost','root','','Surveys')or die("Could not connect to mysql".mysqli_error($con));

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Query the database for the user
    $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    // If the user was found, store their information in a session and redirect to the homepage
    if ($user) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $user["username"];
        header("Location: Survey.php");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}

// Close connection
mysqli_close($conn);
