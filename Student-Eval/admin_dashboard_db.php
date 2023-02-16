<?php

// Connect to database
// Create connection
$conn= new mysqli('localhost','root','','Surveys')or die("Could not connect to mysql".mysqli_error($con));

  // Check for connection errors
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Select all data from the "survey_results" table
  $sql = "SELECT * FROM survey_results";
  $result = mysqli_query($conn, $sql);
  
  // Check if the "id" parameter is present in the URL
  if (isset($_GET["id"])) {
    // Delete the row with the specified "id"
    $id = $_GET["id"];
    $sql = "DELETE FROM survey_results WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
      // Redirect to the current page to refresh the table
      header("Location: " . $_SERVER["PHP_SELF"]);
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
?>

<html>
  <head>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 15px;
      }
    </style>
  </head>
  <body>
    <h1>Student Evaluation database</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Student Program Level</th>
        <th>Student Course</th>
        <th>Email</th>
        <th>Comments</th>
        <th>Score</th>
        <th>Action</th>
      </tr>
      <?php while ($row = mysqli_fetch_array($result)): ?>
        <tr>
          <td><?php echo $row["id"]; ?></td>
          <td><?php echo $row["studentname"]; ?></td>
          <td><?php echo $row["student_program_level"]; ?></td>
          <td><?php echo $row["student_course"]; ?></td>
          <td><?php echo $row["email"]; ?></td>
          <td><?php echo $row["comments"]; ?></td>
          <td><?php echo $row["score"]; ?></td>
          <td>
            <a href="?id=<?php echo $row["id"]; ?>">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </body>
</html>
