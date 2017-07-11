	
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
				
		if($noofapplicant > 15){
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
		$message->html = "Dear Delegate <br><br>";
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

