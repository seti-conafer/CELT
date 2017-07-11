<?php
$conn = new mysqli("superuser.ch2xkriqx8xg.ap-southeast-1.rds.amazonaws.com", "superuser", "Celt99096812", "celtblog","3306");
if ($conn->connect_errno) {
	printf("Connect failed %s\n", $conn->connect_error);
	exit();
}
?>