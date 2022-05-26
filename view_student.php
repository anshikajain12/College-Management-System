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

$sql="SELECT * FROM user WHERE usertype='student' ";
$result=mysqli_query($data,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="view_student.css">
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
<?php
    include 'admission_sidebar.php';



    ?>
    <div class="content">
        <h1>Student Data</h1>
        <table border="1px">
            <tr>
                <th class="table_th">UserName</th>
                <th class="table_th">Email</th>
                <th class="table_th">Phone</th>
                <th class="table_th">Password</th>
            </tr>

            <?php
            while($info=$result->fetch_assoc()){
                ?>
            <tr>
                <td class="table_td">
                    <?php
                    echo "{$info['username']}";
                    ?>
                </td>
                <td class="table_td">
                <?php
                    echo "{$info['email']}";
                    ?>
                </td>
                <td class="table_td">
                <?php
                    echo "{$info['phone']}";
                    ?>
                </td>
                <td class="table_td">
                <?php
                    echo "{$info['password']}";
                    ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        </div>
</body>

</html>