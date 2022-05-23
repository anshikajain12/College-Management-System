<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:adminhome.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
</head>
<body>
    <h1>admin</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
