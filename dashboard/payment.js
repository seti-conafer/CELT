 $(document).ready(function() {
  $("#submit").click(function() {
    var ticketnum = $("#ticket").val();
    if (ticketnum == '') {
    alert("Please fill all fields!");
    }else {
    $.post("paymentget1.php", {
    ticket: ticketnum
    }, function(data) {
      if (data == 'Done') {
      alert('Your Order id has been submitted for confirmation');
    }else{
        alert(data);
      }
    });
    }
  });

});
