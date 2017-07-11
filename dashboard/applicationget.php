<?php
require_once('config.php');
session_start();
if(empty($_POST['background'])){
	echo "Please input all fields";
	exit();
}	
	$userid=$_SESSION["userid"];
	$background=htmlspecialchars($_POST['background']);
	$SDGS=htmlspecialchars($_POST['SDGS']);
	$leadership=htmlspecialchars($_POST['leadership']);
	$expectation=htmlspecialchars($_POST['expectation']);
	
	if($stmt=$conn->prepare("INSERT INTO application(userid, background, SDGS, leadership, expectation) VALUES(?, ?, ?, ?, ?)")){
    		$stmt->bind_param("issss",$userid, $background, $SDGS, $leadership, $expectation);
    		$stmt->execute();
    		$stmt->close();
			if($stmt=$conn->prepare("UPDATE registration SET cdel = 1 WHERE id = ?")){
				$stmt->bind_param("i", $userid );
				$stmt->execute();
				$stmt->close();
				header('location: application.php');
			}else{
				var_dump($conn->error);
				echo "Please Try Again";
			}
	}else{
		var_dump($conn->error);
		echo "Please Try Again";
	}
?>
