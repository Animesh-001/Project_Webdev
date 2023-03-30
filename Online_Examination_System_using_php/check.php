<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);//we can use any name for varible declaration
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql=mysqli_query($con,"select * from login where email='$email' and pass='$pass'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    $_SESSION['user']=$email;
    if($email=='admin@gmail.com')
    {
        header("location:admin.php");
    }
    else{
        header("location:student.php");
    }
}

else{
    header("location:index1.html");
}