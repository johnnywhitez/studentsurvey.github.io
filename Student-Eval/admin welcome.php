<!DOCTYPE html>
<html>
<head>
  <title>Welcome Page</title>
  <style>
    /* Add some styles for the welcome page */
    body {
      background-image: url('bg.jpeg');
      background-size: cover;
      text-align: center;
      padding: 50px;
    }

    h1 {
      font-size: 48px;
      color: white;
    }
  </style>
</head>
<body>
  <h1>Welcoming Admin</h1>
  <p>You will be redirected to Admin Dashboard in <span id="countdown">2</span> seconds...</p>

  <!-- Add a JavaScript countdown -->
  <script>
    // Set the number of seconds to countdown from
    var seconds = 2;

    // Update the countdown every 1 second
    setInterval(function() {
      seconds--;
      document.getElementById("countdown").innerHTML = seconds;
      if (seconds == 0) {
        window.location = "admin_dashboard_db.php";
      }
    }, 1000);
  </script>
</body>
</html>
