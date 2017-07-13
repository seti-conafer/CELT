<?php
$conn = new mysqli("#", "#", "#", "#");
if ($conn->connect_errno) {
	printf("Connect failed %s\n", $conn->connect_error);
	exit();
}
?>
