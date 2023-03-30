<?php
include('auth.php');

?>
<!DOCTYPE html>
<html>
<head>
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
<body>

<ul>
  <li><a href="admin.php" style="color:blue">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Subject Master</a>
    <div class="dropdown-content">
      <a href="insert_subject.php">Add Subject</a>
      <a href="view_subject.php">View Subject</a>
 
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Question Master</a>
    <div class="dropdown-content">
      <a href="insert_question.php">Add Question</a>
      <a href="view_question.php">View Question</a>
 
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Student Master</a>
    <div class="dropdown-content">
    
      <a href="view_student.php">View Student</a>
 
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Result Master</a>
    <div class="dropdown-content">

      <a href="view_result1.php">View Result</a>

 
    </div>
  </li>
  <li><a href="logout.php" style="color:red">LOG-OUT</a></li>
</ul>

<img src="img/exam.jpg" >
</body>
</html>


