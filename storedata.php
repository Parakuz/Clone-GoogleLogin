<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a MySQLi connection already established
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "table";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      echo 'C9d';
        die("Connection failed: " . $conn->connect_error);
    } 

    // Retrieve data from previous forms
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $birthyear = $_POST['birthyear'];
    $email = $_POST['email'];
  

    $sql = "INSERT INTO storedata (firstname, lastname, birthyear, gender, password, tel, email)
            VALUES ('$firstname', '$lastname', '$birthyear', '$gender', '$password', '$phonenumber', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT * FROM storedata WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Fetch user data
      $user = $result->fetch_assoc();

      // Store user data in the session
      $_SESSION['user'] = $user;
      echo $user;

      header("Location: welcome.php");
      exit();
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
      <h1 class="title">Create Account</h1>
      <p>Succesfully</p>
        <div class="flex flex-column">
          <img src="correct.jpeg" alt="correct">
          <!-- <a href="">More Options</a> -->
          <button><b><a href="login.php">OUT</a></b></button>
        </div>
      </form>
    </div>
  </body>
</html>