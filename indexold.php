<?php

unset($_SESSION['leaderid']);//for leader.php
unset($_SESSION['noofapplicant']);

function isMobile() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobile()){
	header("Location: https://celtindia.org/m/index.php");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<link rel="icon" href="CELTimages\celtindia-web1.png" type="image/png" sizes="16x16">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="KIIT E-Cell" />
	<meta name="keywords" content="CELT,celt,celtindia.org,Startup Conclave,startup conclave,Conclave of Entrepreneurship,Celt,CELTINDIA,Conclave,conclave,Leadership,Entrepreneurship,Leader,Conclave,Startup Summit,August,CELTINDIA.ORG,KIIT conclave,Kiit Ecell,KIIT ECELL,KIIT Ecell, KIIT ecell,Event,India,Startup,Celt2016">

	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<!--wow Start-->
	<link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css"/>
	<script type="text/javascript" src="WOW-master/dist/wow.min.js"></script>
	<script> new WOW().init();</script>
	<title>Conclave Of Entrepreneurship Leadership & Technology</title>
	<style type="text/css">
	#logos{
		width: 70px;
		height: 50px;
	}

	#slideshow img{
		width:100%;
	}
	#slideshow {
		margin: 0 90px 90px 0px;
		position: relative;
		width: 600px;
		height: 410px;
		padding: 10px;
		box-shadow: 0 0 0.1px rgba(0,0,0,0.4);
	}

	#slideshow div {
		position: absolute;
		top: 10px;
		left: 10px;
		right: 10px;
		bottom: 10px;
	}

	.button2:hover {
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		background-color: #3e8e41;
	}	
	.button-slider-login
	{
		margin-left: 0px;
		background-color: yellow;
	}

	buttonn {
		background-color: #4CAF50; 
		border: none;
		color: white;
		padding: 10px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		-webkit-transition-duration: 0.4s;
		cursor: pointer;
	}


	.button-reg {
		background-color: rgba(255, 255, 255, .4);
		color: black;
		opacity: 0.6;
		border:  rgba(255, 255, 255, .4);
		border-radius: 14PX;
	}

	
	.button-reg:hover {
		background-color: #555555;
		color: white;
	}

	#lol
	{
		width:290px;
		height: 100px;
		background-color: rgba(255, 255, 255, .4);
		margin-top: -180px;
		font-size: 17px;
		text-align: center;
		text-orientation: initial;
	}

	#papa
	{
		font-style: bold;
		font-weight: bold;
		margin-top: -130px;
		text-align: left;
	}

	
	.Important-date
	{
		font-size: 24px;

	}

	</style>

</head>

<body class="stretched">
	<div id="wrapper" class="clearfix">
		<?php require_once 'navbar.php'; ?>

		

		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('cover1.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center" >
									
									<div  style=" margin-left:-200px; margin-top: 100px; float:left; position:relative!important;">
										<p id="papa">		
												
											<font size="7"> INDIA </font>  
											<br>
											<font size="5">	ज्ञानं परमं बलम् </font> 
											<br>
											<font size="4">	Knowledge is the Ultimate Power.</font>
											<br>
										<img src="kiit.png" id="logos"><img src="kiss.png" id="logos">
										</p>
										<p style="width:500px;">

										<a href="dashboard/login.html" class="wow bounceInRight button button-reg" data-wow-delay=".5s" style="float:left; opacity:1;">Register as Delegate</a>

										<a href="leader.php" class="wow bounceInRight button button-reg" data-wow-delay=".5s" style="float: left; opacity:1;">Register as Contingent</a>
										</p>
									</div>

								</div>
							</div>
						</div>

						
						<div class="swiper-slide dark" style="background-image: url('cover10.jpg');">
						
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center" >
								<!--h2 data-caption-animate="fadeInUp">Welcome to CELT</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own CELT.</p-->
									<div  style=" margin-left:-200px; margin-top: 100px; float:left; position:relative!important;">
										<br/><br/>
										<p style="width:500px;">

										<a href="dashboard/login.html" class="wow bounceInRight button button-reg" data-wow-delay=".5s" style="float:left; opacity:1;">Register as Delegate</a>

										<a href="leader.php" class="wow bounceInRight button button-reg" data-wow-delay=".5s" style="float: left; opacity:1;">Register as Contingent</a>
										</p>
									</div>

								</div>
							</div>
						</div>

												
					<!--div class="swiper-slide" style="background-image: url('images/slider/swiper/s12.jpg'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption">
								<! h2 data-caption-animate="fadeInUp">Great Performance</h2-->
								<!--p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p-->
							<!--/div>
						</div>
					</div-->
				</div>	
			</div>

			<script>
			jQuery(document).ready(function($){
				var swiperSlider = new Swiper('.swiper-parent',{
					paginationClickable: false,
					slidesPerView: 1,
					grabCursor: true,
					loop: true,
					onSwiperCreated: function(swiper){
						$('[data-caption-animate]').each(function(){
							var $toAnimateElement = $(this);
							var toAnimateDelay = $(this).attr('data-caption-delay');
							var toAnimateDelayTime = 0;
							if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 4550; } else { toAnimateDelayTime = 4550; }
							if( !$toAnimateElement.hasClass('animated') ) {
								$toAnimateElement.addClass('not-animated');
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								setTimeout(function() {
									$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
								}, toAnimateDelayTime);
							}
						});
						SEMICOLON.slider.swiperSliderMenu();
					},
					onSlideChangeStart: function(swiper){
						$('[data-caption-animate]').each(function(){
							var $toAnimateElement = $(this);
							var elementAnimation = $toAnimateElement.attr('data-caption-animate');
							$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
						});
						SEMICOLON.slider.swiperSliderMenu();
					},
					onSlideChangeEnd: function(swiper){
						$('#slider').find('.swiper-slide').each(function(){
							if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
							if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
						});
						$('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
							if($(this).find('video').length > 0) {
								if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
							}
							if($(this).find('.yt-bg-player').length > 0) {
								$(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
							}
						});
						if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
						if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

						$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
							var $toAnimateElement = $(this);
							var toAnimateDelay = $(this).attr('data-caption-delay');
							var toAnimateDelayTime = 0;
							if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 1500; } else { toAnimateDelayTime = 1500; }
							if( !$toAnimateElement.hasClass('animated') ) {
								$toAnimateElement.addClass('not-animated');
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								setTimeout(function() {
									$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
								}, toAnimateDelayTime);
							}
						});
					}
				});

$('#slider-arrow-left').on('click', function(e){
	e.preventDefault();
	swiperSlider.swipePrev();
});

$('#slider-arrow-right').on('click', function(e){
	e.preventDefault();
	swiperSlider.swipeNext();
});

setInterval(function(){ swiperSlider.swipeNext(); }, 15000);

});
</script>

<a href="#"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">

						<div class="col-lg-6">
							<div class="heading-block topmargin">
								<h1 class="wow zoomIn" data-wow-delay="0.5s">Welcome to CELT</h1>
							</div>
							<p class="lead wow fadeInLeft" data-wow-delay="1.0s">As business leaders strive for increased competitiveness, creating an entrepreneurial culture has become an important advantage. In the current business environment, the term entrepreneurial has come to mean more than just the business acumen required to turn an idea into an enterprise. Today, "entrepreneurial" describes a skill and mindset characterized by innovation, creativity, calculated risk-taking, and an empowered staff.
								<br />
								At CELT, we wish to foster entrepreneurship. We know it's difficult in the developing world but it isn't impossible.Our wish lists includes providing delegates a better access to financing, mentorship or training and methods for finding and retaining talent.</p>
								<hr>
							</div>
							<div class="col-lg-6">

								<div style="position: relative; margin-bottom: -60px;" class="ohidden">
									<br /><br /><br /><br /><br /><br /><br />
									<div id="slideshow">
										<div>
											<img src="images/slider/swiper/imagine.jpg">
										</div>
										<div>
											<img src="images/slider/swiper/innovate.jpg">
										</div>
										<div>
											<img src="images/slider/swiper/implement2.jpg">
										</div>
									</div>


								</div>

							</div>
						
						<div class="container clearfix">
							<div class="section topmargin nobottommargin nobottomborder">
								<div class="container clearfix">
									<div class="heading-block center nomargin">
										<h3>Important Dates</h3>
									</div>
								</div>
							</div>


							<div class="col_two_third bottommargin-sm col_last">

								<p><table class="table">

									<tbody>

										<tr style=" border:0px;">
											<th style=" border:0px; font-size:20px;">Date</th>
											<th style=" border:0px; font-size:20px;" colspan="3">Deadline</th>
										</tr>
										<tr>
											<td style=" border:0px; font-size:20px;">Closed</td>
											<td style=" border:0px; font-size:18px;" colspan="3">Early bird Application Deadline</td>
										</tr>
										<tr>
											<td style=" border:0px; font-size:20px;">Closed</td>
											<td style=" border:0px; font-size:18px;" colspan="3">Scholarship Application Deadline</td>
										</tr>

										<tr>
											<td style=" border:0px; font-size:20px;">July 10 ,2016</td>
											<td style=" border:0px; font-size:18px;" colspan="3">Conference Ambassador Application Deadline</td>
										</tr>
										<tr>
											<td style=" border:0px; font-size:20px; color:red;"><b>August 5 ,2016</b></td>
											<td style=" border:0px; font-size:18px;" colspan="3"><b>Regular Application Deadline Extended</b></td>
										</tr>


									</tbody>
								</table></p>
							</div>

						</div>
						<a class="button button-full button-dark center tright nobottommargin">
							<div class="container clearfix">
								<b>AUGUST 9-13</b>&nbsp&nbsp&nbsp&nbspConclave of Entrepreneurship, Leadership and Technology , INDIA
							</div>
						</a>
						<br>

						<div class="row clearfix tright nobottommargin">
							<div id="clockdiv">
								<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
									<div>

										<div class="counter counter-lined">
											<span class="days"></span>
										</div>
										<h5>Days</h5>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
									<div>

										<div class="counter counter-lined">
											<span class="hours"></span>
										</div>
										<h5>Hours</h5>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
									<div>

										<div class="counter counter-lined"><span class="minutes"></span></div>
										<h5>Minutes</h5>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
									<div>

										<div class="counter counter-lined">
											<span class="seconds"></span>
										</div>
										<h5>Seconds</h5>
									</div>
								</div>
							</div>
						</div>







					</div>



				</div>

			</section>

			<?php require_once 'footer.php'; ?>

			<script type="text/javascript">
			jQuery("#widget-subscribe-form").validate({
				submitHandler: function(form) {
					jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
					jQuery(form).ajaxSubmit({
						target: '#widget-subscribe-form-result',
						success: function() {
							jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
							jQuery('#widget-subscribe-form').find('.form-control').val('');
							jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
							SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
						}
					});
				}
			});
			</script>

		</div>



	</div>





	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	

	<script type="text/javascript">

	jQuery(window).load(function(){

		var $container = $('#portfolio');

		$container.isotope({
			transitionDuration: '0.65s',
			masonry: {
				columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
			}
		});

		$('#page-menu a').click(function(){
			$('#page-menu li').removeClass('current');
			$(this).parent('li').addClass('current');
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			return false;
		});

		$(window).resize(function() {
			$container.isotope('layout');
		});

	});

	</script>









	<script type="text/javascript">

	jQuery(document).ready(function($) {

		var ocClients = $("#oc-clients");

		ocClients.owlCarousel({
			margin: 60,
			loop: true,
			nav: false,
			autoplay: true,
			dots: false,
			autoplayHoverPause: true,
			responsive:{
				0:{ items:2 },
				480:{ items:3 },
				768:{ items:4 },
				992:{ items:5 },
				1200:{ items:6 }
			}
		});

	});

	</script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/css">

	#clockdiv{
		font-family: sans-serif;
		color: #fff;
		display: inline;
		font-weight: 100;
		text-align: center;
		font-size: 30px;
	}

	#clockdiv > div{
		padding: 10px;
		border-radius: 3px;
		background: #00BF96;
		display: inline;
	}

	#clockdiv div > span{
		padding: 15px;
		border-radius: 3px;
		background: #00816A;
		display: inline;
	}

	.smalltext{
		padding-top: 5px;
		font-size: 16px;
	}
	</script>
	<script type="text/javascript">
	$(function() {
		$("#slideshow div:gt(0)").hide();

		setInterval(function() {
			$('#slideshow div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  3000);
	});
	var endtime="09/08/2016";
	function getTimeRemaining(endtime) {
		var t = Date.parse(endtime) - Date.parse(new Date());
		var seconds = Math.floor((t / 1000) % 60);
		var minutes = Math.floor((t / 1000 / 60) % 60);
		var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
		var days = Math.floor(t / (1000 * 60 * 60 * 24));
		return {
			'total': t,
			'days': days,
			'hours': hours,
			'minutes': minutes,
			'seconds': seconds
		};
	}

	function initializeClock(id, endtime) {
		var clock = document.getElementById(id);
		var daysSpan = clock.querySelector('.days');
		var hoursSpan = clock.querySelector('.hours');
		var minutesSpan = clock.querySelector('.minutes');
		var secondsSpan = clock.querySelector('.seconds');

		function updateClock() {
			var t = getTimeRemaining(endtime);
			daysSpan.innerHTML = t.days;
			hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

			if (t.total <= 0) {
				clearInterval(timeinterval);
			}
		}

		updateClock();
		var timeinterval = setInterval(updateClock, 1000);
	}

	var deadline = "08/09/2016";
	initializeClock('clockdiv', deadline);
	</script>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 7916391;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->

</body>
</html>
