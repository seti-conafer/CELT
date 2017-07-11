<?php
require_once('config.php');
require_once 'mailchimp/src/Mandrill.php';
if(empty($_POST['email1'])){
	echo "Fields missing";
	exit();

}
$pass=htmlspecialchars($_POST['pass1']);
$email=htmlspecialchars($_POST['email1']);
	$stmt = $conn->prepare("SELECT password from registration WHERE email = ?");
	$stmt->bind_param('s',$email);
    $stmt->execute();
    $stmt->store_result();
	$stmt->bind_result($token);
    if(($stmt->num_rows)==0){
		echo "Email not registered";
	}else{
		$stmt->fetch();
		echo "Password reset link has been sent to Registered email id.";
		$token='http://celtindia.org/dashboard/resetpassword.php?email='.$email.'&token='.$token.'&pass='.$pass;
		//send confirmation mail with link $token
		$mandrill = new Mandrill('QqiE4UQVpHfIBS08tV6bJA');
 
$message = new stdClass();
$message->html = "Dear Delegate <br><br>";
$message->html .= 'Please <a href='.$token.' >click here</a> to activate your celtindia.org account.<br>  ';
$message->html .= "<br>Thank You and see you at the conference! <br><br>Regards <br>Team CELT";

$message->text = "text body";
$message->subject = "Confirm Email";
$message->from_email = "info@celtindia.org";
$message->from_name  = "CELT India 2016";
$message->to = array(array("email" => $email));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
	}
$conn->close();
?>
