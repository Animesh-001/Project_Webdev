<?php
$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);
$id=$_GET['id'];
mysqli_query($con,"delete from subject where id='$id'");
header("location:view_subject.php");
?>