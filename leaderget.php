	
<?php
session_start();
/*require_once('config.php');
if(empty($_POST['name'])){
	$msg =  "Please input all fields";
	exit();
}*/	
require_once 'mailchimp/src/Mandrill.php';

if(isset($_POST["btn"])){
					 
$conn = new mysqli("superuser.ch2xkriqx8xg.ap-southeast-1.rds.amazonaws.com", "superuser", "Celt99096812", "celtcr","3306");
if ($conn->connect_errno) {
	printf("Connect failed %s\n", $conn->connect_error);
	exit();
}
													
	$university=htmlspecialchars($_POST['university']);
	$country=htmlspecialchars($_POST['country']);
	$noofapplicant=htmlspecialchars($_POST['noofapplicant']);
	$name=htmlspecialchars($_POST['name']);
	$gender=htmlspecialchars($_POST['gender']);
	$email=htmlspecialchars($_POST['email']);
	$mobile=htmlspecialchars($_POST['mobile']);
	
	$stmt = $conn->prepare("SELECT userid from leader WHERE email = ?");
	$stmt->	bind_param('s',$email);
	$stmt->execute();
	$stmt->store_result();
	if($stmt->num_rows > 0){
		echo "Email already registered";
		echo '<script type="text/javascript">
			  setTimeout(function () {
			   window.location.href = "https://celtindia.org";
			}, 3000);
			</script>';
		exit();
	}	
	$stmt->close();
	
	if($stmt=$conn->prepare("INSERT INTO leader(university, country, noofapplicant, name, gender, email, mobile) VALUES(?, ?, ?, ?, ?, ?, ?)")){
    	$stmt->bind_param("ssissss",$university, $country, $noofapplicant, $name, $gender, $email, $mobile);
    	$stmt->execute();
    	$stmt->close();
			
		$amount = $noofapplicant * 2000;
				
		if($noofapplicant > 14){
		$amount = 0.75 * $amount;
		}else if($noofapplicant > 10){
		$amount = 0.80 * $amount;
		}else if($noofapplicant > 4){
		$amount = 0.95 * $amount;
		}
		
		$stmt = $conn->prepare("SELECT userid from leader WHERE email = ?");
		$stmt->	bind_param('s',$email);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($userid);
		$stmt->fetch();
		
		$mandrill = new Mandrill('QqiE4UQVpHfIBS08tV6bJA');
					
		$message = new stdClass();
		$message->html .= 'Greetings, 
		<br><br>
Congratulations to your team <b>(CELT ID is CELT200'.$userid.')</b>on the acceptance to the Conclave of Entrepreneurship,Leadership and Technology 2016, which will be held from August 9th - 13th, 2016 at KIIT University, India.  We are pleased to notify your contingent that after a thorough review of your applications, your contingent has been chosen to participate in our conference. Kindly find your acceptance letter in the attachment. 
<br>
<br>

Here are the steps you must complete in order to confirm and secure your spot at the conclave. Please read this email very carefully as it contains important instructions.
<br>
<br>

1) ACCOMMODATION AND FOOD
<br>
The registration fee will include expenses of food and accommodation.
 <br>
<br>
2) Please continue to check your email inbox regularly for important updates from us. We will be releasing the contingent guide closer to the dates of the conference, which will contain more detailed information about logistics such as the conference schedule.
<br>
<br>
3) Please note that CELT registration fee covers the team stay during the five days of the conclave. It also includes the costs of conclave"s logistics, coffee break, breakfast, lunches and dinner for all the five days of the conclave. However, if you are staying at a local hotel of your choice, you will be responsible for funding your own team accommodation costs. The registration fee does not include the travelling costs to and from Bhubaneswar. 
<br>
<br>
4) Payment 
<b>You have to pay the amount of Rs '.$amount.' in our account, the A/c number being 1849010220668  under the name KIIT - CELT.</b> Once you pay the amount, you are requested to send us the invoice/RTGS receipt or any other bank related document confirming your payment in the email info@celtindia.org and keep debashish@celtindia.org in cc. After completing the entire procedure you will receive a letter of confirmation from us thus completing the payment procedure and also the registration process. <br><br>


Best Regards,<br><br>

CELT Delegate Relations Committee
<br>
(+91 8339033964)
<br>
<br>
Visit us at www.celtindia.org
<br>
Follow us on Facebook Twitter Instagram LinkedIn';

		$message->text = "text body";
		$message->subject = "Confirm Email";
		$message->from_email = "info@celtindia.org";
		$message->from_name  = "CELT India 2016";
		$message->to = array(array("email" => $email));
		$message->track_opens = true;
		$response = $mandrill->messages->send($message);
			
		$_SESSION['noofapplicant'] = $noofapplicant;
		$_SESSION['leaderid'] = $userid;
		header('Location: team.php');
	 	}else
		{
	     	var_dump($conn->error);
		}
}
       

?>

