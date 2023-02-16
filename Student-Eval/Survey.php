<!DOCTYPE html>
<html>
<head>
    <title>Survey Evaluation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Survey Evaluation</h1>
    <form id="survey-form" action="survey db_connect.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="name">Program & Level:</label>
        <input type="text" id="pl" name="pl" required><br>
        <label for="name">Course</label>
        <input type="text" id="Course" name="Course" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="rating">Overall rating:</label>
        <select id="rating" name="rating" required>
            <option value="">Please select</option>
            <option value="1">Bad</option>
            <option value="2">Ok</option>
            <option value="3">Good</option>
            <option value="4">Standard</option>
            <option value="5">Great</option>
        </select><br>
        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments"></textarea><br>
        <input type="submit" value="Submit">
    </form>
    <script src="script.js"></script>
</body>
</html>
