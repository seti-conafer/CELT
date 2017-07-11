<?php
session_start();
$email = $_SESSION['email'];
echo $email;
$conn = new mysqli("superuser.ch2xkriqx8xg.ap-southeast-1.rds.amazonaws.com", "superuser", "Celt99096812", "celtcr","3306");
if ($conn->connect_errno) {
	printf("Connect failed %s\n", $conn->connect_error);
	exit();
}
$result = $conn->query("SELECT userid, noofapplicant FROM leader WHERE email = '$email'");
if($result->num_rows > 0){
	echo "<br/> rows found";
}
?>



