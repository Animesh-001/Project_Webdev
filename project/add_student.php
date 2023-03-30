<?php
$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);//we can use any name for varible declaration
$subject=$_POST['subject'];
$question=$_POST['question'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$op4=$_POST['op4'];
$ans=$_POST['ans'];
mysqli_query($con,"insert into question values('$subject','','$question','$op1','$op2','$op3','$op4','$ans')");
header("location:view_question.php");
?>