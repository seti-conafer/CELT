<?php
$conn = new mysqli("localhost", "root", "", "celtblog");
if ($conn->connect_errno) {
	printf("Connect failed %s\n", $conn->connect_error);
	exit();
}
?>