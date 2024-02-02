<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "table";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM storedata WHERE (email = '$username' OR tel = '$username') AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Fetch user data
      $user = $result->fetch_assoc();

      // Store user data in the session
      $_SESSION['user'] = $user;
      echo $user;

      header("Location: welcome.php");
      exit();
    } else {
        header("Location: invalid.php");
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gmail Login Form</title>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div class="wrapper">
      <img src="img/logo.png" alt="" />
      <h1 class="title">Sign In</h1>
      <p>Enter Account</p>
      <form action="correct.php" method="get" id="loginform">
        <div class="animate-label">
          <input type="text" id="username" name="username" required />
          <label for="username" value = "$_POST['username']">Email / PhoneNumber</label>
          <line></line>
        </div>
        <div class="animate-label">
          <input type="password" id="password" name="password" required />
          <label for="password">Password</label>
          <line></line>
        </div>
        <div class="flex">
          <a href="register.php">Do not have account?</a>
          <button class="onleft"><b>NEXT</b></button>
        </div>
      </form>
    </div>
  </body>
</html>