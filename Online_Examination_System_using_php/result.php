
<?php
session_start();

$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);
$user=$_SESSION['user'];
$sql1=mysqli_query($con,"select * from login where email='$user'");
$row1=mysqli_fetch_array($sql1);
$user1=$row1['user'];

$sub=$_POST['sub'];
$i=1;
$yes=0;
$no=0;
$sql=mysqli_query($con,"select * from question where Sub='$sub'");
$num=mysqli_num_rows($sql);
while($row=mysqli_fetch_array($sql))
{
$ans=$_POST['opt'.$i];

if($row['ANS']==$ans)
{
    $yes++;
}
else{
    $no++;
}

$i++;
}

$per=($yes/$num)*100;

$sql3=mysqli_query($con,"insert into result values('','$user1','$num','$yes','$per')");
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

</head>

<body style="background-color:deepskyblue">

<ul>
  <li><a href="admin.php">Home</a></li>
  <li><a href="index1.html" style="color:red">LOG-OUT</a></li>


</ul>
<table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>Subject</th>
        <th>No of Question</th>
        <th>Right Answer</th>
        <th>Wrong Answer</th>
        <th>Total Marks</th>
        <!--<th>Optaion Marks</th>-->
        <th>Percentage</th>
    
      </tr>
    </thead>

    <tr>
<td><?php echo $row1['user'];  ?></td>
<td><?php echo $sub;  ?></td>
<td><?php echo $num;  ?></td>

<td><?php echo $yes;  ?></td>

<td><?php echo $no;  ?></td>

<td><?php echo $num;  ?></td>
<!--<td><?php echo $yes;  ?></td>-->
<td><?php echo ($yes/$num)*100;  ?>%</td>


</tr>

</body>