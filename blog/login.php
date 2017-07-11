<?php
session_start();
if(empty($_POST['username'])){
  header('Location: bloglogin.php');
  exit();
}
require_once('config.php');
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);

	if($stmt = $conn->prepare("SELECT id, password FROM registration WHERE username= ?")){
		$stmt->bind_param('s',$username);
		$stmt->execute();
		$stmt->store_result();
		if($stmt->num_rows){
			$stmt->bind_result($id, $pass);
			$stmt->fetch();
			if($pass == $password){
				$_SESSION['session'] = $id;
				header('Location: blogentry.php');
			}else
				echo "Passwords don't match";
		}else
			echo "Not Registered";
	}else{
		echo "Error! Please Try Again!";
	}

$stmt->close();
$conn->close();
?>
