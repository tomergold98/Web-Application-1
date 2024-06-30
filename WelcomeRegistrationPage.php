<?php
session_start();

$mail=$_POST["email"];
$pass=$_POST["password"];
$name=$_POST["username"];
$conn=new mysqli("localhost","root","","web_develop_course");

$sql = "SELECT `email`, `password`, `name` FROM `users` WHERE email='".$mail."'";
$res=$conn->query($sql);
if($res->num_rows>0){
    $_SESSION["RegisErr"]="Email address already exists";
    header("Location:Registration.php");
    exit();
}

$_SESSION["RegisErr"]="";

if($res->num_rows<1){
    $sql="INSERT INTO `users`(`email`, `password`, `name`) VALUES ('$mail','$pass','$name')";
    $conn->query($sql);
}



$sql = "SELECT `email`, `password`, `name` FROM `users` WHERE email='".$mail."'";
$res=$conn->query($sql);
if($res->num_rows > 0){
    $row = $res->fetch_object();
    $username = $row->name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the website</title>
    <link rel="stylesheet" href="WelcomeRegistrationPage.css">
</head>
<body>
    <h1>Welcome <?php echo $username; ?> to the website</h1>
    <h2>The registration was made successfully! 
        <br><br>
        User has been added to the DataBase </h2>

</body>
</html>
