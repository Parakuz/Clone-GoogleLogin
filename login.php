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
      <form action="correct.php" method="post" id="loginform">
        <div class="animate-label">
          <input type="text" id="username" name="username" required />
          <label for="username">Email / PhoneNumber</label>
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
