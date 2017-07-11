$(document).ready(function() {
     $("#submit").click(function() {
       var email = $("#name").val();
       var pass = $("#pass").val();
       if (email == '' || pass == '') {
       alert("Please enter all fields");
       } else {
       $.post("forgotpass.php", {
       email1: email,
       pass1: pass
       }, function(data) {
         if (data=='Password reset link has been sent to Registered email id.') {
              window.location="resetconfirmation.php";
         }else{
           alert(data);
          }
       });
       }
     });
  });