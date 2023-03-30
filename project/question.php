<?php
$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);
$sql=mysqli_query($con,"select * from question");
?>
<div style="background-color:cyan;padding:50px;margin-left:50px;margin-right:50px;">
<div style="color:black">
<?php
while($row=mysqli_fetch_array($sql))
{
?>
 <h4><?php echo $row['id'].".". $row['QUESTION']; ?></h4>
<label>A</label><input type="radio" name="opt"><?php echo $row['A']; ?><br>
<label>B</label><input type="radio" name="opt" ><?php echo $row['B']; ?><br>
<label>C</label><input type="radio" name="opt"><?php echo $row['C']; ?><br>
<label>D</label><input type="radio" name="opt"><?php echo $row['D']; ?><br> <br>
 <?php
} 
?>
</div></div>
