<?php
$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);//we can use any name for varible declaration
$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
mysqli_query($con,"insert into login values('','$user','$email','$pass')");
header("location:index1.html");
?>

