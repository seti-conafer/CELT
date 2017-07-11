<?php
require_once 'mailchimp/src/Mandrill.php';
$mandrill = new Mandrill('QqiE4UQVpHfIBS08tV6bJA');
 
$message = new stdClass();
$message->html = "Dear Delegate <br><br>";
$message->html .= 'Please click here to activate your celtindia.org account.<br>  ';
$message->html .='<br><br>Regards <br>Team CELT';
$message->text = "text body";
$message->subject = "Confirm Email";
$message->from_email = "info@celtindia.org";
$message->from_name  = "CELT India 2016";
$message->to = array(array("email" => "kanodiaanshul@gmail.com"));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
echo "string";
?>