<?php
session_start(); 
session_destroy();
session_unset();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="regstyle.css"/>
  </head>
  <body>
    <div class="drop">
			<div class= 'logo'>
					<p>CELT INDIA</p>
			</div>

		</div>
    <div class="container">
      <div class="main">
        <form method="post" action="login.php">
          <h1></h1><br>
          <label>Username :</label><br>
          <input type="text" name="username" required><br>
          <label>Password :</label><br>
          <input type="password" name="password" required><br>
          <input type="submit" name="register" id="register" value="Login"><br>
        </form>
      </div>
  </div>
  </body>
</html>
