var sub = document.getElementById('template-contactform-submit');
var enterPrompt = document.getElementById('response');
sub.addEventListener("click", process);

function process(){
	var name = $("#template-contactform-name").val();
	var email = $("#template-contactform-email").val();
  var subject = $("#template-contactform-subject").val();
	var comment = $("#template-contactform-message").val();
	if(name==''){
		enterPrompt.innerHTML="Enter your Name";
	}else if(email==''){
		enterPrompt.innerHTML="Enter your Email";
	}else if(subject==''){
		enterPrompt.innerHTML="Enter your Subject";
	}else if(comment==''){
		enterPrompt.innerHTML="Enter your Message";
	}else{
		sub.innerHTML="Sending Message...";
		$.post("contactcelt.php", {
		name1: name,
		email1: email,
    subject1: subject,
		text1: comment
		}, function(data) {
		if (data=='Success') {
			enterPrompt.innerHTML="Your message has been sent.";
			enterPrompt.style.color="#00D994";
			sub.innerHTML="Send Message";
		}else if (data=='Invalid Email') {
			enterPrompt.innerHTML="Invalid Email";
			sub.innerHTML="Send Message";
		}else{
			enterPrompt.innerHTML="Error! Please Try Again";
			sub.innerHTML="Send Message";
		  }
		});
	}

}
