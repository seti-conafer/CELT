$(document).ready(function(){
	$(function(){
	    $('.button-collapse').sideNav();
	    $('.parallax').parallax();

	});
	$(document).ready(function() {
	    $('select').material_select();
	});
	$('input[type="radio"]').click(function(){
		if ($('#passportYes').is(':checked')) {
			$('#business1').removeAttr('disabled');
			$('#business2').removeAttr('disabled');
			$('#business3').removeAttr('disabled');
		}else{
			$('#business1').attr('disabled','disabled');
			$('#business2').attr('disabled','disabled');
			$('#business3').attr('disabled','disabled');
		}
	});
	$('#business').on('keyup',function(){
		$('#test4').attr('value',$('#durationlength')[0].value);
	});
	 $('.datepicker').pickadate({
    selectMonths: true, 
    selectYears: 70 
  });
        	
});