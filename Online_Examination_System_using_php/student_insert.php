<?php
$host="localhost";
$user="root";
$pass="";
$db="exam_question";
$con=mysqli_connect($host,$user,$pass,$db);//we can use any name for varible declaration
$sql=mysqli_query($con,"select * from subject");



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<body>

<div class="container">

<ul>
  <li><a href="admin.php">Home</a></li>



</ul>




  <h2>Add Question</h2>
  <form class="form-horizontal" method="post" action="Add_student.php">

  <div class="form-group">
  <label class="control-label col-sm-2" for="Question">Subject:</label>
    <div class="col-sm-10">
  <select class="form-control" id="sel1" name="subject">
    <?php
 
    while($row=mysqli_fetch_array($sql))
    {
    ?>
    <option value="<?php echo $row['subject']; ?>"><?php echo $row['subject']; ?></option>
<?php

    }
?>
  </select>
</div>
</div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="Question">Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Question" name="id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Question">User:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Question" name="user">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Question">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Question" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Question">pass:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Question" name="pass">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
