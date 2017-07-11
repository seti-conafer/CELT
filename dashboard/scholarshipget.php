<?php
require_once('config.php');
session_start();
if(empty($_POST['technology'])){
	echo "Please input all fields";
	exit();
}	
	$userid=$_SESSION["userid"];
	$globalissue=htmlspecialchars($_POST['globalissue']);
	$technology=htmlspecialchars($_POST['technology']);

	if($stmt=$conn->prepare("INSERT INTO scholarship(userid, globalissue, technology) VALUES(?, ?, ?)")){
    		$stmt->bind_param("iss",$userid, $globalissue, $technology);
    		$stmt->execute();
    		$stmt->close();
			if($stmt=$conn->prepare("UPDATE registration SET csch = 1 WHERE id = ?")){
				$stmt->bind_param("i", $userid );
				$stmt->execute();
				$stmt->close();
				header('location: scholarship.php');
			}else{
				var_dump($conn->error);
				echo "Please Try Again";
			}
	}else{
		var_dump($conn->error);
		echo "Please Try Again";
	}
?>
