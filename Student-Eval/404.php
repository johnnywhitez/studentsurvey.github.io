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
  <h1>Welcome to our website!</h1>
  <p>Wrong Password Entered ___Getting redirected back to Login <span id="countdown">6</span> seconds...</p>

  <!-- Add a JavaScript countdown -->
  <script>
    // Set the number of seconds to countdown from
    var seconds = 6;

    // Update the countdown every 1 second
    setInterval(function() {
      seconds--;
      document.getElementById("countdown").innerHTML = seconds;
      if (seconds == 0) {
        window.location = "index.php";
      }
    }, 1000);
  </script>
</body>
</html>
