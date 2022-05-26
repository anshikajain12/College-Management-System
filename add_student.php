<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:logins.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="collegeproject";
$data=mysqli_connect($host,$user,$password,$db);



if(isset($POST['add_Student'])){
    $username=$_POST['name'];
    $user_email=$_POST['email']; 
    $user_phone=$_POST['phone']; 
    $user_password=$_POST['password']; 
    $usertype="student";

    $check="SELECT * FROM user WHERE username='$username' ";
    $check_user= mysqli_query($data,$check);
    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'>
        alert('Username Already Exist. Try Another One');
        </script>";
    }
    else{
    


    $sql="INSERT INTO user(username,email,phone,usertype,password) VALUES ('$username','$user_email',
    '$user_phone','$usertype','$user_password')";


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
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="add_student.css">
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
        <a href="" class="dash">Admin Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>

        </div>
    </header>
    <aside>
        <ul>
            <li><a href="admission.php">Admission</a></li>
            <li><a href="add_student.php">Add Students</a></li>
            <li><a href="view_student.php">View Student</a></li>
            <li><a href="">Add Teachers</a></li>
            <li><a href="">View Teachers</a></li>
            <li><a href="">Add Courses</a></li>
            <li><a href="">View courses</a></li>
        </ul>
    </aside>
    <div class="content">
        <h1>Add Students</h1>
        <div class="c1">

            <form action="#" method="POST">
                <div>
                    <label>username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password">
                </div>
                <div>

                    <input type="submit" class="input btn btn-primary" name="add_Student" value="Add Student">
                </div>
            </form>
        </div>
    </div>
</body>

</html>