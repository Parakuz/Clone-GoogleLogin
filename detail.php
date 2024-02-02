<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gmail Login Form</title>
    <link rel="stylesheet" href="detail.css" />
  </head>
  <body>
    <div class="wrapper">
      <img src="img/logo.png" alt="" />
      <h1 class="title">Create Your Account</h1>
      <p>Enter Your Detail</p>
      <form action="create-email.php" method="post" id="loginform">
        <input type="hidden" name="firstname" value="<?php echo htmlspecialchars($_POST['firstname']); ?>" />
        <input type="hidden" name="lastname" value="<?php echo htmlspecialchars($_POST['lastname']); ?>" />
        <div class="animate-label">
          <input type="text" name = "day" id="day" required />
          <label for="day">Day</label>
          <line></line>
        </div>
        <div class="month">
          <select class="custom-select" name = "month" required>
            <option value="" disabled selected hidden>Month</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
            <line></line>
          </select>
        </div>
        <div class="animate-label">
          <input type="text" name = "year" id="year" required />
          <label for="year">Year</label>
          <line></line>
        </div>
        <select class="gender custom-select" name = "gender" required>
          <option value="" disabled selected hidden>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="not-specified">Not specified</option>
          <line></line>
        </select>
        <div class="flex">
          <button><b>NEXT</b></button>
        </div>
      </form>
    </div>
  </body>
</html>
