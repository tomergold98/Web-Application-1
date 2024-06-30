<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="LoginPage.css">
    <style>
        .err{
            color:red;
        }
    </style>
</head>

<body>
    <h1>Login Page</h1>
    <?php
    if(isset($_SESSION["loginErr"])&&($_SESSION["loginErr"]!=="")){
        echo "<span class=err>" . $_SESSION["loginErr"] . "</span>";
    }
    ?>
    <form action="WelcomePage.php" method="post">
        Email: <input type="email" name="doar">
        <br><br>
        Password: <input type="password" name="sisma">
        <br><br>
        <button>Sign in</button>
    </form>
 
    <form action="Registration.php" method="post">
        <div style="display: flex; align-items:center;">
        <h2 style="font-size: 17px; margin-right: 10px;">Don't have an account yet?</h2>
        <button>Sign up</button>
    </form>
</body>
</html>