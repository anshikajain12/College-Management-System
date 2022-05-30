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