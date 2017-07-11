<?php
session_start();
if(empty($_SESSION['session'])){
  header('Location: bloglogin.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Blog - Dashboard</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="blue" role="navigation">
    <div class="nav-wrapper container blue">

     <a id="logo-container" href="#" class="brand-logo">Blog Entry</a>
     <ul class="right hide-on-med-and-down">
      <li><a href="#" class="waves-effect waves-light lighten-1">Instruction</a></li>
      <li><a href="bloglogin.php" class="waves-effect waves-light lighten-1">Logout</a></li>
    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a href="#" class="waves-effect waves-light lighten-1">Instruction</a></li>
      <li><a href="#" class="waves-effect waves-light lighten-1">Logout</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse "><i class="material-icons">menu</i></a>
  </div>
</nav>
<form enctype="multipart/form-data" action="blogpost.php" method="POST">
<div class="container">
  <div class="section card">
    <div class="row">
      <div class="col s12 left">
        <h5><i class="material-icons">format_size</i> Blog post heading</h5>
        <div class="input-field col s12">
          <textarea type="text" name="heading" class="materialize-textarea" placeholder="Enter the heading for the blog post"></textarea>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="section card">
    <div class="row">
      <div class="col s12 left">
        <h5><i class="material-icons">image</i> Header Image</h5>
        <div class="input-field col s12">
      <center>
          <input type="file" name="file" id="download-button" class="btn-large waves-effect waves-light blue lighten-1" style="width:250px !important; overflow:hidden;">
            </input>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="section card">
    <div class="row">
      <div class="col s12 left">
        <h5><i class="material-icons">format_align_left</i> Blog post Content</h5>
        <div class="input-field col s12">
          <textarea type="text" name="content" class="materialize-textarea" placeholder="Enter the heading for the blog content"></textarea>
        </div>
      </div>
    </div>
  </div>
</div>

          <center>
          <button type="submit" id="download-button" class="btn-large waves-effect waves-light blue lighten-1" value="" style="width:250px !important; overflow:hidden;">Post Blog <span><img src="send.png" style="width:20px;height:auto;"></span>
            </button>
          </center>
</form>
		  
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>