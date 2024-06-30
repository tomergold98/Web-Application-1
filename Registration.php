<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="Registration.css">
</head>

<body>
  <h1>Registration</h1>
  <?php
    if(isset($_SESSION["RegisErr"])&&($_SESSION["RegisErr"]!=="")){
      echo "<span class=exist>" . $_SESSION["RegisErr"] . "</span>";
    }
  ?>

  <form action="WelcomeRegistrationPage.php" method="post" onsubmit="return validationFunc()">
    <input type="email" name="email" id="email" placeholder="e-mail" autocomplete="on" pattern="[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]{2,40}" required>
    <br><br>
    <input type="email" name="confirm_email" id="confirm_email" placeholder="comfirm e-mail" autocomplete="on"  pattern="[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]{2,40}" required>
    <br><br>
    <input type="password" name="password" id="password" placeholder="password" pattern="^(?=.*[a-zA-Z])(?=.*[0-9]).{8,30}$" required>
    <br><br>
    <input type="password" name="confirm_password" id="confirm_password" placeholder="comfirm password" pattern="^(?=.*[a-zA-Z])(?=.*[0-9]).{8,30}$" required>
    <br><br>
    <input type="username" name="username" placeholder="name" pattern=".{1,30}" required>
    <br><br>
    <button type="submit">Create Account</button>
    <br><br>
  </form>

  <script src="Validation.js"></script>
</body>
</html>


