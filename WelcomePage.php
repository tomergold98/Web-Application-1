<?php
session_start();

$email=$_POST["doar"];
$password=$_POST["sisma"];
$conn=new mysqli("localhost","root","","web_develop_course");
$sql="SELECT * FROM `users` WHERE email='".$email."'";
$res=$conn->query($sql);
if($res->num_rows<1){
    $_SESSION["loginErr"] = "E-mail is incorrect";
    header("Location:LoginPage.php");
    exit();
}

$row=$res->fetch_object();
$passwordDB=$row->password;
if($password!==$passwordDB){
    $_SESSION["loginErr"] = "Password is incorrect";
    header("Location:LoginPage.php");
    exit();
}


$_SESSION["loginErr"] = "";

$username=$row->name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="WelcomePage.css">
</head>
<body>
    <h1>Welcome <?php echo $username; ?> to the website</h1>
</body>
</html>