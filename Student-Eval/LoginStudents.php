<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
      .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px;
        background-color: #f2f2f2;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #333;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      input[type="submit"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        border-radius: 5px;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        border: none;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h1>Students Portal</h1>
      <form action="studentvalid_db.php" method="post">
        <input
          type="text"
          placeholder="Username"
          name="username"
          required
        />
        <input
          type="password"
          placeholder="Password"
          name="password"
          required
        />
        <input type="submit" value="Submit" />
      </form>
    </div>
    <script>
      // JavaScript code to perform any desired behavior on the form
    </script>
  </body>
</html>
