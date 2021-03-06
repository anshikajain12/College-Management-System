<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:studenthome.php");
}
elseif($_SESSION['usertype']=='admin'){
    header("location:login.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home Page</title>
    <link rel="stylesheet" href="student.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>
<body>
<header class="headers">
        <a href="" class="dash">Student Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>

        </div>
    </header>
    <aside>
        <ul>
            <li><a href="courses.php">My Courses</a></li>
            <li><a href="">My Result</a></li>
            
        </ul>
    </aside>
    <div class="content">
        <h1>Sidebar Accordion</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint obcaecati incidunt assumenda reprehenderit
            eaque repellendus cum quam doloribus quae reiciendis et, inventore quibusdam nam delectus, eveniet aliquam
            provident harum quasi vero doloremque. Ea libero impedit explicabo aliquid, animi id architecto tempore
            ducimus a aliquam nisi dicta itaque voluptatem, et blanditiis.</p>
    </div>
</body>
</html>