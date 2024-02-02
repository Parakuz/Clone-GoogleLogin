<?php
session_start();

if (!isset($_SESSION['user'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}


// Retrieve user data from the session
$user = $_SESSION['user'];
$fullname = $user['firstname'] . ' ' . $user['lastname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
  
    <div class="wrapper">
    <img src="img/logo.png" alt="" />
      <h1 class="title">WELCOME</h1>
      <img src="img/person.jpg" alt="account" class="accountimg"></img>
      <div class="wrap">

          <?php
        
        echo "<p>📧 Email: {$user['email']}</p>";
        echo "<p>😁 Full Name: {$fullname}</p>";
        echo "<p>☎️ TeleNumber: {$user['tel']}</p>";
        echo "<p>👋 Gender: {$user['gender']}</p>";
        echo "<p>🎉 Birthyear: {$user['birthyear']}</p>";
        
        ?>
        </div>
        
        <button class = "buttonlast"><b><a href="login.php">OUT</a></b></button>
    </div>
</body>
</html>
