<?php
if(empty($_POST['name1'])){
	echo "404! Not Found";
	exit();
}
require_once('config.php');
$name= htmlspecialchars($_POST['name1']);
$email= htmlspecialchars($_POST['email1']);
$comment= htmlspecialchars($_POST['comment1']);
$postid= htmlspecialchars($_POST['postid1']);

$stmt = $conn->prepare("INSERT into comments(postid, name, email, comment) values (?, ?, ?, ?)");
$stmt->bind_param('ssss', $postid, $name, $email, $comment);
$stmt->execute();
$stmt->store_result();
$numRows = $stmt->affected_rows;
if($numRows)
	echo "Success";
else
	echo "Error";



?>