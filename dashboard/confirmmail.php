<?php
	session_start();
	require_once('config.php');
	if(empty($_GET['email']) || empty($_GET['token'])){
		echo "Fields missing";
		exit();
	}
	header('Refresh: 3; URL=http://celtindia.org/dashboard/login.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link href="lcss/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="lcss/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="lcss/icon.css">
  <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext" rel="stylesheet" />-->

  <title>Login Success | CELT</title>
<style>
  .title{
    font-size:1.5em;
  }
</style>
</head>
<body>

<?php

	$email = htmlspecialchars($_GET['email']);
	$token = htmlspecialchars($_GET['token']);

	if($stmt = $conn->prepare("SELECT password from registration WHERE email = ?")){
	$stmt->	bind_param('s',$email);
    $stmt->execute();
    $stmt->store_result();
	$stmt->bind_result($password);
    $stmt->fetch();
		 if($token === $password){
			if($stmt = $conn->prepare("UPDATE registration SET cmail = 1 WHERE email = ?")){
				$stmt->bind_param("s", $email);
				$stmt->execute();
				$stmt->close();
				?>
				<div class="materialContainer">
					   <div class="box">
						 <div class="title">email successfully verified. Please login again</div>
				   </div>
				</div>
				<?php
				exit();
			}else{
				?>
				<div class="materialContainer">
					   <div class="box">
						 <div class="title">Please Try Again</div>
				   </div>
				</div>
				<?php
			}
		}
    
   $stmt->free_result();
   $stmt->close();
	}
				?>
				<div class="materialContainer">
					   <div class="box">
						 <div class="title">Email not verified. Please try again!</div>
				   </div>
				</div>
				<?php
		$conn->close();
?>
 </body>
 </html>
