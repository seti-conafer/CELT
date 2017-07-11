 $(document).ready(function() {
  $("#login").click(function() {
    var email = $("#name").val();
    var password = $("#pass").val();
    if (email == '' || password == '') {
    alert("Please fill all fields!");
    } else {
    $.post("jlogin.php", {
    email1: email,
    password1: password
    }, function(data) {
      if (data == 'Login Successful') {
      window.location="index.php";
      //open a popup and redirect in 3 sec
    }else if (data == 'LOGIN FAILED!') {
        alert(data);
        //or open a popup with login failed text
    }else if (data == 'Please confirm registered email id') {
        alert(data);
        window.location="resendcmail.html";
        //open a popup and redirect in 3 sec
    }else{
        alert("Connection Error! Please Try Again");
      }
    });
    }
  });

  $("#register").click(function() {
    var email = $("#regmail").val();
    var password = $("#regpass").val();
    var cpassword = $("#reregpass").val();
    if (email == '' || password == '' || cpassword == '') {
    alert("Please fill all fields!");
    } else if ((password.length) < 8) {
    alert("Password should atleast 8 character in length!");
  } else if ((password!==cpassword)) {
    alert("Passwords don't match. Try again!");
    } else {
    $.post("register.php", {
    email1: email,
    password1: password,
    }, function(data) {
      if (data == 'Successfully Registered. Please confirm mail') {
          window.location="success.html";
      }
      else {
          alert(data);
      }
    });
    }
  });

});
