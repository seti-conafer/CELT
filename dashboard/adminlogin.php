<?php
session_start();
require_once('config.php');

if(isset($_SESSION['userSession'])!="")
{
	header("Location: https://celtindia.org/dashboard/fetch.php");
	exit;
}

if(isset($_POST['btn-login']))
{
	$email = $conn->real_escape_string(trim($_POST['user_email']));
  $upass = $conn->real_escape_string(trim($_POST['password']));
  $query = mysqli_query($conn,"SELECT user_id, user_email, user_pass FROM admin WHERE user_email='$email'");
  $row=$query->fetch_array(MYSQLI_ASSOC);

  if($upass == $row['user_pass'])
  {
    $_SESSION['userSession'] = $row['user_id'];
    header("Location: https://celtindia.org/dashboard/fetch.php");
	exit;
  }


  else
  {
    echo "<div class='alert alert-danger'>
          <span class='glyphicon glyphicon-info-sign'></span> &nbsp; email or password does not exists !
        </div>";
        
  }
	
	$conn->close();
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Admin Login</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Sign In.</h2><hr />
        
        <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
        
        <label>Sign In<sup>*</sup></label>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>
         <div class="form-group">
          
       
     	<hr />
        
        
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
            
           
            
        </div>  
        
        
      
      </form>

    </div>
    
</div>

</body>
</html>