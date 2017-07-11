<?php
session_start();

if(empty($_POST['heading'])){
  echo "Input All Fields";
  exit();
}
require_once('config.php');

$heading=htmlspecialchars($_POST['heading']);
$content=nl2br($_POST['content']);
$file=$_FILES['file'];

  		$file_name = $file['name'];
  		$file_size = $file['size'];
  		$file_error = $file['error'];
  		$file_ext = explode('.', $file_name);
  		$file_ext = strtolower(end($file_ext));
  		$file_tmp = $file['tmp_name'];
  		$allowed = array('jpg','png');
  		if(in_array($file_ext, $allowed)){
  			if($file['error'] === 0){
				$image = rand(). '.' . $file_ext;
  				$file_destination = 'images/blog/' . $image;
  				if($file_size < 2097152){
  					if(move_uploaded_file($file_tmp, $file_destination)){
						$userid = $_SESSION['session'];
						$stmt = $conn->prepare("insert into posts(userid, title, image, text) values (?, ?, ?, ?)");
						$stmt->bind_param('ssss', $userid, $heading, $image, $content);
						$stmt->execute();
						$stmt->store_result();
						$numRows = $stmt->affected_rows;
						if($numRows)
							echo "Successfully Posted.....<br>";
						else
							echo "Error....!!";
				  
						$stmt->close();
  					}else{
            
  						echo "File couldn't be uploaded! Please Try Again";
  					}
  				}else echo "Please Upload Files Less than 2mb ";
  			}else echo "File Error ";
  		}else echo "Please Upload .jpg, .png Files Only";
	
$conn->close();
?>
