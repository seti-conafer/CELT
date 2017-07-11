<?php
require_once('config.php');
$result = $conn->query("SELECT userid FROM profile WHERE profile.userid not in (select userid from application)");
while($res = $result->fetch_assoc()){
	$var = $res['userid'];
	$new = $conn->query("INSERT INTO application (userid, conf) VALUES ('$var', '1')");
}
?>
