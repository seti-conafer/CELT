$(document).ready(function(){
	$(function(){
	    $('.button-collapse').sideNav();
	    $('.parallax').parallax();

	});
	$(document).ready(function() {
	    $('select').material_select();
	});
	$('input[type="radio"]').click(function(){
		if ($('#duration5').is(':checked')) {
			$('#durationlength').removeAttr('disabled');
		}else{
			$('#durationlength').attr('disabled','disabled');
		}
	});

	 $('.datepicker').pickadate({
    selectMonths: true, 
    selectYears: 15 
  });
        

	$('#durationlength').on('keyup',function(){
		$('#duration5').attr('value',$('#durationlength')[0].value);
	});
	$('#studentForm').on('submit',check);
	function check (e) {
		e.preventDefault();
		var name=document.studentForm.name.value;
		var college=document.studentForm.college.value;
		var study=document.studentForm.study.value;
		var branch=document.studentForm.branch.value;
		var year=document.studentForm.year.value;
		var phone=document.studentForm.phone.value;
		var field=[];
		var i=0;
		$(':checkbox:checked').each(function() {
			field[i++]=$(this).val();
		});
		var mail=document.studentForm.mail.value;
		var location=document.studentForm.location.value;
		var duration=document.studentForm.duration.value;
	 	var stip=document.studentForm.stip.value;
		var info=document.studentForm.info.value;
		if (name=="") {
			alert("Enter name");
		}else if(college==""){
			alert("Enter college");
		}else if(study==""){
			alert("Enter course of study");
		}else if(branch==""){
			alert("Enter branch of study");
		}else if(year==""){
			alert("Enter year of study");
		}else if(phone=="" || phone.length!=10){
			alert("Enter a valid phone number");
		}else if(mail==""){
			alert("Enter email address");
		}else if($.isEmptyObject(field)){
			alert("Enter field of internship");
		}else if(location==""){
			alert("Enter prefered location");
		}else if(duration==""){
			alert("Enter prefered duration");
		}else if(stip==""){
			alert("Enter preferred stipend");
		}else if(info==""){
			alert("Enter information");
		}else{
			document.studentForm.submit();
		}
	}
});