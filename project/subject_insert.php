<?php
$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);//we can use any name for varible declaration
$subject=$_POST['subject'];

mysqli_query($con,"insert into subject values('','$subject')");
header("location:view_subject.php");
?>

