(document).ready(function(){
	
	$('.has-sub-one').hover(showSubOne,hideSubOne);
	function showSubOne(){
		$('.sub-menu-one').removeClass('sub-menu-invisible');
		$('.sub-menu-one').addClass('sub-menu-visible');
	}
	function hideSubOne(){
		$('.sub-menu-one').removeClass('sub-menu-visible');
		$('.sub-menu-one').addClass('sub-menu-invisible');
	}
