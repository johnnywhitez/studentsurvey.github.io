<?php

// Connect to database
// Create connection

$conn= new mysqli('localhost','root','','Surveys')or die("Could not connect to mysql".mysqli_error($con));


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully -";

// Collect inputs from survey
$studentname = $_POST['name'];
$student_program_level = $_POST['pl'];
$student_course = $_POST['Course'];
$email = $_POST['email'];
$value = $_POST['rating'];
$comments = $_POST['comments'];

// Insert inputs into specific table
$sql = "INSERT INTO survey_results (studentname, student_program_level, student_course, email, comments)
VALUES ('$studentname', '$student_program_level', '$student_course', '$email', '$comments')";

if (mysqli_query($conn, $sql)) {
    echo "Your Record Has been Uploaded: ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Compare other surveys from the same table
$sql = "SELECT * FROM survey_results WHERE studentname='$studentname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "You have studied ";
} else {
    echo "HA.!   I knew u getting F";
}

// Close connection
mysqli_close($conn);
?>
