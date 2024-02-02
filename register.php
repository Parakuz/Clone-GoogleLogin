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
      <p>Enter Your Name</p>
      <form action="detail.php" method="post" id="loginform">
        <div class="animate-label">
          <input type="text" name="firstname" id="firstname" required />
          <label for="firstname">FirstName</label>
          <line></line>
        </div>
        <div class="animate-label">
          <input type="text" name="lastname" id="lastname" required />
          <label for="lastname">LastName</label>
          <line></line>
        </div>
        <div class="flex">
          <button class="onleft" type="submit"><b>NEXT</b></button>
        </div>
      </form>
    </div>
  </body>
</html>
