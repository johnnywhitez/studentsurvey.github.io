<!DOCTYPE html>
<html>
<head>
    <title>Student Registeration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Student Registeration</h1>
    <form id="register-form" action="register_db.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="password2">Confirm Password:</label>
        <input type="password" id="password2" name="password2" required><br>
        <input type="submit" value="Register">
    </form>
    <script src="script.js"></script>
</body>
</html>
