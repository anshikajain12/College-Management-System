<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message']){
    $message= $_SESSION['message'];
    echo "<script type='text/javascript'>
         alert('$message');
    </script>";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Management System</title>
    <link rel="stylesheet" href="index.css">
    <!-- Latest compiled and minified CSS -->
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
    <nav>
        <label class="logo">X College</label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="admission.php">Admission</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <img src="./Assests/istockphoto-1142918319-612x612.jpg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <img src="./Assests/school2.jpg" alt="">
            </div>
            <div class="col-md-8">
                <h1>Welcome to X College</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora harum vero laudantium eum quae aut
                    esse ad ipsa cumque, eligendi blanditiis recusandae molestiae adipisci velit? Sed, cum molestiae aut
                    suscipit modi minima voluptates sequi nam corporis eveniet harum eos id. Voluptates corporis
                    distinctio beatae quasi ad magnam a culpa dolores exercitationem adipisci hic autem, laboriosam
                    ipsam. Dolorem quia vitae consectetur porro fugiat molestiae nisi voluptatum maiores magnam nihil
                    fugit, quibusdam eos nam tenetur neque delectus quod blanditiis quae beatae aliquam illo veniam
                    libero laboriosam autem? Velit at pariatur facilis inventore provident neque illo, voluptates
                    dolorum tempora, dolores, necessitatibus ipsam. Magnam.</p>
            </div>
        </div>

    </div>
    <div class="Center">
        <h1>Our Teachers</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="./Assests/teacher1.jpg" alt="">
                <p>in a variant, academically challenging and encouraging environment where manifold viewpoints are
                    prized and celebrated</p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="./Assests/teacher2.jpg" alt="">
                <p>in a variant, academically challenging and encouraging environment where manifold viewpoints are
                    prized and celebrated</p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="./Assests/teacher3.jpg" alt="">
                <p>in a variant, academically challenging and encouraging environment where manifold viewpoints are
                    prized and celebrated</p>
            </div>
        </div>
    </div>
    <div class="Center">
        <h1>Our Courses</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="./Assests/graphic.jpg" alt="">
                <h3>Graphic Design</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="./Assests/marketing.png" alt="">
                <h3>Marketing</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="./Assests/web.jpg" alt="">
                <h3>Web Development</h3>
            </div>
        </div>
    </div>
    <div class="Center">
        <h1>Admission Form</h1>
    </div>
    <div class="admission">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_type" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_type" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_type" type="number" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_text" name="message"></textarea>
            </div>
            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="submit" name="apply"  value="apply">
            </div>
        </form>
    </div>
    <footer>
        <h3>All @copyright reserved by web tech knowledge</h3>
    </footer>
</body>

</html>