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
      <p>Enter Your PhoneNumber</p>
      <form action="storedata.php" method="post" id="loginform">
        <input type="hidden" name="firstname" value="<?php echo htmlspecialchars($_POST['firstname']); ?>" />
        <input type="hidden" name="lastname" value="<?php echo htmlspecialchars($_POST['lastname']); ?>" />
        <input type="hidden" name="day" value="<?php echo htmlspecialchars($_POST['day']); ?>" />
        <input type="hidden" name="month" value="<?php echo htmlspecialchars($_POST['month']); ?>" />
        <input type="hidden" name="year" value="<?php echo htmlspecialchars($_POST['year']); ?>" />
        <input type="hidden" name="gender" value="<?php echo htmlspecialchars($_POST['gender']); ?>" />
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>" />
        <input type="hidden" name="password" value="<?php echo htmlspecialchars($_POST['password']); ?>" />
        <input type="hidden" name="birthyear" value="<?php echo htmlspecialchars($_POST['day'] . '/' . $_POST['month'] . '/' . $_POST['year']); ?>" />
        <div class="animate-label">
          <input type="tel" id="Phonenumber" name = "phonenumber" required />
          <label for="Phonenumber">Phonenumber</label>
          <line></line>
        </div>
        <div class="flex">
          <button class="onleft"><b>NEXT</b></button>
        </div>
      </form>
    </div>
  </body>
</html>
