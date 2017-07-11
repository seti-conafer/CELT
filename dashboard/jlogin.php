<?php
session_start();
require_once('config.php');
$mail=htmlspecialchars($_POST['email1']);
$password= htmlspecialchars($_POST['password1']);

if($stmt = $conn->prepare("SELECT id, password, cmail from registration WHERE email = ?")){
	$stmt->bind_param('s',$mail);
    $stmt->execute();
    $stmt->store_result();
	$stmt->bind_result($id, $rowpass, $cmail);
	$stmt->fetch();
		 if(password_verify($password, $rowpass)){
			 if($cmail){
					$_SESSION["userid"] = $id;
					echo"Login Successful";
					exit();
				 }else{
				 echo "Please confirm registered email id";
				 exit();
			 }
		}
   $stmt->free_result();
   $stmt->close();
	}
		echo "LOGIN FAILED!";
		$conn->close();
?>
