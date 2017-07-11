<?php
require_once('config.php');
session_start();
if(empty($_POST['reason'])){
	echo "Please input all fields";
	exit();
}	
	$userid=$_SESSION["userid"];
	$reason=htmlspecialchars($_POST['reason']);
	$marketing=htmlspecialchars($_POST['marketing']);

	if($stmt=$conn->prepare("INSERT INTO ambassador(userid, reason, marketing) VALUES(?, ?, ?)")){
    		$stmt->bind_param("iss",$userid, $reason, $marketing);
    		$stmt->execute();
    		$stmt->close();
			if($stmt=$conn->prepare("UPDATE registration SET camb = 1 WHERE id = ?")){
				$stmt->bind_param("i", $userid );
				$stmt->execute();
				$stmt->close();
				header('location: ambassador.php');
			}else{
				var_dump($conn->error);
				echo "Please Try Again";
			}
	}else{
		var_dump($conn->error);
		echo "Please Try Again";
	}
?>
