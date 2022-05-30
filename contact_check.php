<?php
session_start();
error_reporting(0);
$host="localhost";
$user="root";
$password="";
$db="collegeproject";
$data=mysqli_connect($host,$user,$password,$db);
if(mysqli_connect_error()){
    die("Database connection Error");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];




    $check="SELECT * FROM contact";
    $check_user= mysqli_query($data,$check);
    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'>
        alert('Username Already Exist. Try Another One');
        </script>";
    }
    else{
    


    $sql="INSERT INTO contact(fname,lname,country,subject) VALUES ('$fname','$lname',
    '$country','$subject')";


    $result=mysqli_query($data,$sql);
    if($result){
        echo "<script type='text/javascript'>
        alert('Data Updated Successfully');
        </script>";
    }
    else{
        echo "Upload Failed";
    }
    }
}



   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<a class="btn btn-primary" href="index.php">Go to Home Page</a>
</body>
</html>