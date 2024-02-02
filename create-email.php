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
        <h1 class="title">Create Your Account</h1>
      
        <form action="password.php" method="post" id="loginform">
            <input type="hidden" name="firstname" value="<?php echo htmlspecialchars($_POST['firstname']); ?>" />
            <input type="hidden" name="lastname" value="<?php echo htmlspecialchars($_POST['lastname']); ?>" />
            <input type="hidden" name="day" value="<?php echo htmlspecialchars($_POST['day']); ?>" />
            <input type="hidden" name="month" value="<?php echo htmlspecialchars($_POST['month']); ?>" />
            <input type="hidden" name="year" value="<?php echo htmlspecialchars($_POST['year']); ?>" />
            <input type="hidden" name="gender" value="<?php echo htmlspecialchars($_POST['gender']); ?>" />
            <div class="animate-label">
                <input type="text" id="email" name="email" required />
                <label for="email">Create your email</label>
                <line></line>
            </div>
            <div class="alert">
                <h6 for="alert" class="alert">Can use character number dot</h6>
            </div>
            <div class="flex">
                <button class="onleft" id="checkEmailBtn" type="button"><b>NEXT</b></button>
            </div>
        </form>
    </div>

<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "table";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
?>
    <script>
        document.getElementById('checkEmailBtn').addEventListener('click', function() {
            var formData = new FormData(document.getElementById('loginform'));
            
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'check-email.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = xhr.responseText;
                    if (response.trim() === 'Email is already in use. Please choose a different one.') {
                        alert(response);
                    } else {
                        document.getElementById('loginform').submit();
                    }
                }
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>
