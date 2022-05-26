<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:adminhome.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="collegeproject";
$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_teacher'])){
    $t_name=$_POST['name'];
    $t_description=$_POST['description'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['name'],$dst);
    $sql="INSERT INTO teacher (name,description,image) VALUES ('$t_name','$t_description','$dst_db')";
    $result=mysqli_query($data,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="add_teacher.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <?php
    include 'admission_sidebar.php';


    ?>
    
</head>

<body>

    
        <center>
            <h1>Add Teacher</h1>
            
            <div class="div_deg">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="teacher">
                        <label class="labels">Teacher Name: </label>
                        <input type="text" name="name">
                    </div>
                    <br>
                    <div class="teacher">
                        <label class="labels">Description: </label>
                       <textarea  name="description"></textarea>
                    </div>
                    <br>
                    <div class="teacher">
                        <label class="labels">Image: </label>
                        <input type="file" name="image">
                    </div>
                    <br>
                    <div class="teacher">
                        <input class="btn btn-primary" type="submit" name="add_teacher" value="Add_teacher">
                    </div>
                </form>
            </div>
        </center>
    
</body>

</html>