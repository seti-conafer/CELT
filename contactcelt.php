<?php
if(empty($_POST['name1'])){
	echo "404! Not Found";
	exit();
}
require_once('config.php');
$name= htmlspecialchars($_POST['name1']);
$email= htmlspecialchars($_POST['email1']);
$subject= htmlspecialchars($_POST['subject1']);
$message= htmlspecialchars($_POST['text1']);

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "Invalid Email";
	exit();
}
$stmt = $conn->prepare("INSERT into contactus(name, email, subject, message) values (?, ?, ?, ?)");
$stmt->bind_param('ssss', $name, $email, $subject, $message);
$stmt->execute();
$stmt->store_result();
$numRows = $stmt->affected_rows;
if($numRows)
	echo "Success";
else
	echo "Error";

$stmt->close();
$conn->close();
?>