<?php
if(empty($_POST['name'])){
  echo "Input All Fields";
  exit();
}
require_once('config.php');

$name=htmlspecialchars($_POST['name']);
$about=htmlspecialchars($_POST['about']);
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
$file=$_FILES['file'];

	$stmt = $conn->prepare("SELECT id FROM registration WHERE username= ?");
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $stmt->store_result();
	$numRows = $stmt->num_rows;
	$stmt->close();
	if($numRows == 0){
		
  		$file_name = $file['name'];
  		$file_size = $file['size'];
  		$file_error = $file['error'];
  		$file_ext = explode('.', $file_name);
  		$file_ext = strtolower(end($file_ext));
  		$file_tmp = $file['tmp_name'];
  		$allowed = array('jpg','png');
  		if(in_array($file_ext, $allowed)){
  			if($file['error'] === 0){
  				$file_destination = 'images/blog/' . $name . '.' . $file_ext;
  				if($file_size < 2097152){
  					if(move_uploaded_file($file_tmp, $file_destination)){
						$image = $name . '.' . $file_ext;
						$stmt = $conn->prepare("insert into registration(name, username, password, about, image) values (?, ?, ?, ?, ?)");
						$stmt->bind_param('sssss', $name, $username, $password, $about, $image);
						$stmt->execute();
						$stmt->store_result();
						$numRows = $stmt->affected_rows;
						if($numRows)
							echo "You have Successfully Registered.....<br>";
						else
							echo "Error....!!";
				  
						$stmt->close();
  					}else{
  						echo "File couldn't be uploaded! Please Try Again";
  					}
  				}else echo "Please Upload Files Less than 2mb ";
  			}else echo "File Error ";
  		}else echo "Please Upload .jpg, .png Files Only";
	}else
		echo "Already Registered";
	
$conn->close();
?>
