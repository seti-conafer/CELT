<?php
session_start();
	if(isset($_POST["submit"]))
	{
	$conn = new mysqli("superuser.ch2xkriqx8xg.ap-southeast-1.rds.amazonaws.com", "superuser", "Celt99096812", "celtcr","3306");
if ($conn->connect_errno) {
	printf("Connect failed %s\n", $conn->connect_error);
	exit();
}

	$name=htmlspecialchars($_POST['name']);
	$gender=htmlspecialchars($_POST['gender']);
	$email=htmlspecialchars($_POST['email']);
	$mobile=htmlspecialchars($_POST['mobile']);
	$leaderid = htmlspecialchars($_POST['leaderid']);
	$_SESSION["leaderid"] = $leaderid;
	$noofapplicant = htmlspecialchars($_POST['noofapplicant']);
	$noofapplicant -= 1;
	$_SESSION["noofapplicant"] = $noofapplicant;
	//$leaderid=$_SESSION["userid"];
	//$applicationno=$_SESSION["noofapplicant"];
	if($noofapplicant<2)
	{
		unset($_SESSION["leaderid"]);
		unset($_SESSION["noofapplicant"]);
		if($stmt=$conn->prepare("INSERT INTO teammember(name, gender, email, mobile, leaderid) VALUES(?, ?, ?, ?, ?)"))
	{
    		$stmt->bind_param("sssss",$name, $gender, $email, $mobile, $leaderid);
    		$stmt->execute();
    		$stmt->close();
    	}
		header('Location: leadersuccess.html');
		exit();
	}
	else{		

	if($stmt=$conn->prepare("INSERT INTO teammember(name, gender, email, mobile, leaderid) VALUES(?, ?, ?, ?, ?)"))
	{
    		$stmt->bind_param("sssss",$name, $gender, $email, $mobile, $leaderid);
    		$stmt->execute();
    		$stmt->close();
    		//header("Refresh:;url=team.php");
    		header('Location: team.php');
    }
    else
    		{
				var_dump($conn->error);
			}
	}
}
?>