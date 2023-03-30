<?php
$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);
$sub=$_POST['subject'];
$sql=mysqli_query($con,"select * from question where Sub='$sub'");
?>
<div style="background-color:cyan;padding:50px;margin-left:50px;margin-right:50px;">
<div style="color:black">
<form method="post" action="result.php">
    <input type="hidden" name="sub" value="<?php echo $sub; ?>">
<?php
$i=1;
while($row=mysqli_fetch_array($sql))
{

?>
 <h4><?php echo $row['id'].".". $row['QUESTION']; ?></h4>
<label>A</label><input type="radio" name="opt<?php echo $i; ?>" value="A"><?php echo $row['A']; ?><br>
<label>B</label><input type="radio" name="opt<?php echo $i; ?>" value="B"><?php echo $row['B']; ?><br>
<label>C</label><input type="radio" name="opt<?php echo $i; ?>" value="C"><?php echo $row['C']; ?><br>
<label>D</label><input type="radio" name="opt<?php echo $i; ?>" value="D"><?php echo $row['D']; ?><br> <br>
 <?php
 $i++;
} 
?>
<input type="submit" value="Submit">


</form>
</div></div>