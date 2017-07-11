<?php
session_start();
require_once('config.php');
if(empty($_SESSION['userSession']))
{

    header("Location:adminlogin.php");
    exit();
}
else
{
$res=mysqli_query($conn ,"SELECT registration.* , profile.* FROM registration LEFT OUTER JOIN profile ON registration.id = profile.userid");
$res1=mysqli_query($conn ,"SELECT ambassador.* , profile.* FROM ambassador LEFT OUTER JOIN profile ON ambassador.userid = profile.userid");
$res2 = mysqli_query($conn ,"SELECT scholarship.* , profile.* FROM scholarship LEFT OUTER JOIN profile ON scholarship.userid = profile.userid");
}
$res3=mysqli_query($conn ,"SELECT registration.* , application.* FROM registration LEFT OUTER JOIN application ON registration.id = application.userid");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Admin Page</title>
<style>
table,td,th
{
 padding:10px;
 border-collapse:collapse;
 font-family:Georgia, "Times New Roman", Times, serif;
 border:solid #ddd 2px;
}
</style>

</head>
<body>
	<div class="container">
  <h2><a href="adminlogout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Campus Ambassador</a></li>
    <li><a data-toggle="tab" href="#menu2">Scholarship</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
<table align="center" border="1" width="100%" class="table table-hover">
<thead>
<tr>
<th>User id</th>
<th>Email</th>
<th>Name</th>
<th>Gender</th>
<th>B'day</th>
<th>College</th>
<th>Study</th>
<th>Cdel</th>
<th>Address</th>
<th>Phone</th>
</tr>
</thead>
<?php while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr><td>'.$row['id'].'</td><td>'.$row['email'].'</td><td>'.$row['name'].'</td><td>'.$row['gender'].'</td><td>'.$row['bday'].'</td><td>'.$row['college'].'</td><td>'.$row['study'].'</td><td>'.$row['cdel'].'</td><td>'.$row['address'].'</td><td>'.$row['phone'].'</td><td>';
            
          }
          ?>
</table>
<div id="menu1" class="tab-pane fade">
<h2><a href="adminlogout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></h2>
<h2>Campus Ambassador</h2>
      <table align="center" border="1" width="100%" class="table table-hover">
<thead>
<tr>
<th>User id</th>
<th>Name</th>
<th>Gender</th>
<th>B'day</th>
<th>College</th>
<th>Study</th>

<th>Question 1</th>
<th>Question 2</th>
</tr>
</thead>
<?php while ($row = $res1->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr><td>'.$row['userid'].'</td><td>'.$row['name'].'</td><td>'.$row['gender'].'</td><td>'.$row['bday'].'</td><td>'.$row['college'].'</td><td>'.$row['study'].'</td><td>'.$row['reason'].'</td><td>'.$row['marketing'].'</td></tr>';
            
          }
          ?>
</table>
    </div>
    <div id="menu2" class="tab-pane fade">
     <h2><a href="adminlogout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></h2>
<h2>Scholarship</h2>
      <table align="center" border="1" width="100%" class="table table-hover">
<thead>
<tr>
<th>User id</th>
<th>Name</th>
<th>Gender</th>
<th>B'day</th>
<th>College</th>
<th>Study</th>

<th>Question 1</th>
<th>Question 2</th>
</tr>
</thead>
<?php while ($row = $res2->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr><td>'.$row['userid'].'</td><td>'.$row['name'].'</td><td>'.$row['gender'].'</td><td>'.$row['bday'].'</td><td>'.$row['college'].'</td><td>'.$row['study'].'</td><td>'.$row['globalissue'].'</td><td>'.$row['technology'].'</td></tr>';
            
          }
          ?>
</table> 
    </div>
    <div id="menu3" class="tab-pane fade">
     <h2><a href="adminlogout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></h2>
<h2>Scholarship</h2>
      <table align="center" border="1" width="100%" class="table table-hover">
<thead>
<tr>
<th>User id</th>
<th>Email</th>
<th>conf</th>
</tr>
</thead>
<?php while ($row = $res3->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr><td>'.$row['id'].'</td><td>'.$row['email'].'</td><td>'.$row['conf'].'</td></tr>';
            
          }
          ?>
</table> 
    </div>
  </div>
</div>
</body>
</html>