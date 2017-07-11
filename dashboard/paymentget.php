<?php
require_once('config.php');
session_start();
if(empty($_POST['ticket'])){
	header('Location: payment.php');
	exit();
}
$ticket=htmlspecialchars($_POST['ticket']);
$userid = $_SESSION["userid"];
if($stmt = $conn->prepare("SELECT ticketnum from tickets WHERE ticketnum = ?")){
	$stmt->bind_param('s',$ticket);
    $stmt->execute();
    $stmt->store_result();
    
	if($stmt->num_rows()){
		echo('Ticket Already Entered'); 
		echo 'setTimeout(function () {
   window.location.href = "payment.php";
}, 3000);';
	}else{
		$stmt->close();
		$stmt=$conn->prepare("INSERT INTO tickets (ticketnum, userid) VALUES(?, ?)");
		$stmt->bind_param("ss", $ticket, $userid );
		$stmt->execute();
		header('Location: payment_paid.php');
	}
	$stmt->close();
}else{
		echo("Error! Please Try Again.");
	}
	$conn->close();
?>
<?php

?>