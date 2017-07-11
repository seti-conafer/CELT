<?php
require_once('config.php');
require_once 'mailchimp/src/Mandrill.php';


$email=htmlspecialchars($_POST['email1']);
$pass= htmlspecialchars($_POST['password1']);

$password= password_hash($pass, PASSWORD_BCRYPT, array('cost' => '10'));
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email";
}else{
    $stmt1 = $conn->prepare("SELECT * FROM registration WHERE email= ?");
     $stmt1->bind_param('s',$email);
     $stmt1->execute();
     $stmt1->store_result();
if(($stmt1->num_rows)==0){
$stmt = $conn->prepare("insert into registration(email, password) values (?, ?)");
$stmt->bind_param('ss', $email, $password);
$stmt->execute();
$stmt->store_result();
$numRows = $stmt->affected_rows;
if($numRows){
    echo "Successfully Registered. Please confirm mail";
    $token='http://celtindia.org/dashboard/confirmmail.php?email='.$email.'&token='.$password;
    //send confirmation mail with link $token
    $stmt2 = $conn->prepare("SELECT id from registration WHERE email = ?");
    $stmt2->bind_param('s',$email);
    $stmt2->execute();
    $stmt2->store_result();
	$stmt2->bind_result($id);
	$stmt2->fetch();

$mandrill = new Mandrill('QqiE4UQVpHfIBS08tV6bJA');
 
$message = new stdClass();
$message->html = "Dear Delegate <br><br>";
$message->html .= 'Thank You for registering for the Conclave Of Entrepreneurship, Leadership and Technology(CELT). <b>Your CELT ID is - '."CELT"."100".$id.'</b>.It is our noble approach to bridge the gap between building a strong entrepreneurial ecosystem and the spirit ot startup enthusiast and future leader. The goal of the four day event is to foster, promote and support innovators and leaders with entrepreneurial talent and to provide recognition and endorsement to building entrepreneurs. In Doing so, we wil also create a platform of dialogue between global leaders of academia and the knowledge seekeer.<br>';
$message->html .= 'Please <a href='.$token.' >click here</a> to activate your celtindia.org account.<br>  ';
$message->html .= "The event starts at 10 A.M on 9th August,2016 and will be held at:<br> KIIT University<br>Patia, Bhubaneswar<br> Odisha- 751024<br> If you have any questions, please drop us the mail at info@celtindia.org <br>Thank You and see you at the conference! <br><br>Regards <br>Team CELT";

$message->text = "text body";
$message->subject = "Confirm Email";
$message->from_email = "info@celtindia.org";
$message->from_name  = "CELT India 2016";
$message->to = array(array("email" => $email));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
}else
{
echo "Error";
}
}else{
echo "This email is already registered!";
}
}

$conn->close();
?>
