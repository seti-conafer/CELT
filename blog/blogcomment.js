var sub = document.getElementById('submit-button');
var enterPrompt = document.getElementById('enterPrompt');
var respond = document.getElementById('respond');
var temp = document.getElementById('temp');
var tempName = document.getElementById('tempName');
var tempText = document.getElementById('tempText');
sub.addEventListener("click", process);

function process(){
    console.log("process");
	var name = $("#author").val();
	var email = $("#email").val();
	var comment = $("#comment").val();
	var postid = $("#postid").val();
	if(name==''){
		enterPrompt.innerHTML="Enter your Name";
		enterPrompt.style.color="#1AC2C4";
	}else if(email==''){
		enterPrompt.innerHTML="Enter your Email";
		enterPrompt.style.color="#1AC2C4";
	}else if(comment==''){
		enterPrompt.innerHTML="Enter your Comment";
		enterPrompt.style.color="#1AC2C4";
	}else{
		$.post("blogcomment.php", {
		name1: name,
		email1: email,
		comment1: comment,
		postid1: postid
		}, function(data) {
		  if (data=='Success') {	
			temp.className="show";
			respond.style.display="none";
			tempName.innerHTML=name;
			tempText.innerHTML=comment;
		}else{
			enterPrompt.innerHTML="Error! Please Try Again";
			enterPrompt.style.color="#1AC2C4";
		  }
		});
	}
    	
}
