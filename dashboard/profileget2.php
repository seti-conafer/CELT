<?php
require_once('config.php');
session_start();
if(empty($_POST['name']) || empty($_POST['bday'])){
	$msg =  "Please input all fields";
	exit();
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link href="lcss/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="lcss/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="lcss/icon.css">
  <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext" rel="stylesheet" />-->

  <title>Login Success | CELT</title>
<style>
  .title{
    font-size:1.5em;
  }
</style>
</head>
<body>

<?php

	$userid=$_SESSION["userid"];
	$name=htmlspecialchars($_POST['name']);
	$file=$_FILES['file'];
	$gender=htmlspecialchars($_POST['gender']);
	$bday= htmlspecialchars($_POST['bday']);
	$college= htmlspecialchars($_POST['college']);
	$study= htmlspecialchars($_POST['study']);
	$gpa= htmlspecialchars($_POST['gpa']);
	$address= htmlspecialchars($_POST['address']);
	$country= htmlspecialchars($_POST['country']);
	$phone= htmlspecialchars($_POST['phone']);
	$passport= htmlspecialchars($_POST['passport']);
	$passexpdt= htmlspecialchars($_POST['passexpdt']);
	$airport= htmlspecialchars($_POST['airport']);
	$visa= htmlspecialchars($_POST['visa']);
	$scholarship= htmlspecialchars($_POST['scholarship']);
	$resume=$_FILES['file1'];
	
		$file_name = $file['name'];
		$file_size = $file['size'];
		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));
		$file_tmp = $file['tmp_name'];
		$allowed = array('jpg','png');
		if(in_array($file_ext, $allowed)){
			if($file['error'] === 0){
				$file_destination = 'photos/' . $name . '(' . $userid . ')' . '.' . $file_ext;
				if($file_size < 2097152){
					if(move_uploaded_file($file_tmp, $file_destination)){	
		
					}else{
						?>
						<div class="materialContainer">
							   <div class="box">
								 <div class="title">photo couldn't be uploaded! Please try again</div>
						   </div>
						</div>
						<?php
						exit();
					}
				}else{
					?>
						<div class="materialContainer">
						   <div class="box">
								 <div class="title">Please Upload Photo Less than 2mb</div>
						   </div>
						</div>
					<?php
					exit();
				}
			}else{
				?>
				<div class="materialContainer">
				   <div class="box">
					 <div class="title">File Error</div>
				   </div>
				</div>
				<?php		
				exit();
			}
		}else{
			?>
			<div class="materialContainer">
			   <div class="box">
					 <div class="title">Please Upload only .jpg, .png Files for photo</div>
			   </div>
			</div>
			<?php
			exit();
		}
		
		$file_name = $resume['name'];
		$file_size = $resume['size'];
		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));
		$file_tmp = $resume['tmp_name'];
		$allowed = array('pdf','jpg','png','docx');
		if(in_array($file_ext, $allowed)){
			if($resume['error'] === 0){
				$file_destination = 'resume/' . $name . '(' . $userid . ')' . '.' . $file_ext;
				if($file_size < 2097152){
					if(move_uploaded_file($file_tmp, $file_destination)){	
		
					}else{
						?>
						<div class="materialContainer">
							   <div class="box">
								 <div class="title">resume couldn't be uploaded! Please try again</div>
						   </div>
						</div>
						<?php
						exit();
					}
				}else{
					?>
					<div class="materialContainer">
						   <div class="box">
							 <div class="title">Please Upload resume file Less than 2mb</div>
					   </div>
					</div>
					<?php
					exit();
				}
			}else{
				?>
				<div class="materialContainer">
					   <div class="box">
						 <div class="title">resume File Error</div>
				   </div>
				</div>
				<?php
				exit();
			}
		}else{
			?>
				<div class="materialContainer">
					   <div class="box">
						 <div class="title">Please Upload only .jpg, .png, .pdf, .docx Files for resume</div>
				   </div>
				</div>
				<?php
			exit();
		}
		

	if($stmt=$conn->prepare("INSERT INTO profile(userid, name, gender, bday, college, study, gpa, address,country,phone, passport, passexpdt, airport, visa, scholarship) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")){
    		$stmt->bind_param("sssssssssssssss",$userid, $name, $gender, $bday, $college, $study, $gpa, $address,$country,$phone, $passport, $passexpdt, $airport, $visa, $scholarship);
    		$stmt->execute();
    		$stmt->close();
			header('location: profile.php');
	}else{
		var_dump($conn->error);
		?>
		<div class="materialContainer">
		   <div class="box">
				 <div class="title">Please Try Again</div>
		   </div>
		</div>
		<?php
	}
?>
</body>
 </html>