<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />

	<!-- Document Title
	============================================= -->
	<title>Revolution Slider | Canvas</title>

	<style>

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
	.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}
	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		 <?php require_once 'navbar.php'; ?>

		<section id="slider" class="slider-parallax clearfix">

			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
			<div class="tp-banner-container fullscreen-container">
				<div class="tp-banner" >
						<ul>    <!-- SLIDE  -->
					<li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider/rev/main/s1-thumb.jpg"  data-saveperformance="off"  data-title="Welcome to Canvas">
						<!-- MAIN IMAGE -->
						<img src="images/videos/explore.jpg"  alt="video_typing_cover"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-fade fadeout fullscreenvideo"
							data-x="0"
							data-y="0"
							data-speed="1000"
							data-start="1100"
							data-easing="Power4.easeOut"
							data-elementdelay="0.01"
							data-endelementdelay="0.1"
							data-endspeed="1500"
							data-endeasing="Power4.easeIn"
							data-autoplay="true"
							data-autoplayonlyfirsttime="false"
							data-nextslideatend="true"
				 data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 2;"><video class="" preload="none" width="100%" height="100%"
				poster='images/videos/explore.jpg'>
				<source src='images/videos/explore.mp4' type='video/mp4' />
				<source src='images/videos/explore.webm' type='video/webm' />

				</video>

						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
						data-x="350"
						data-y="235"
						data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-speed="800"
						data-start="1000"
						data-easing="easeOutQuad"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 3;">The Best Multipurpose HTML5 Template</div>

						<div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
						data-x="116"
						data-y="260"
						data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-speed="800"
						data-start="1200"
						data-easing="easeOutQuad"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 3;">Welcome to the World of Canvas</div>

						<div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
						data-x="195"
						data-y="370"
						data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-speed="800"
						data-start="1400"
						data-easing="easeOutQuad"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 3; width: 750px; max-width: 750px; white-space: normal;">Create a website that you are gonna be proud of. Be it Business, Portfolio, Agency, Photography, e-Commerce &amp; much more..</div>

						<div class="tp-caption customin ltl tp-resizeme"
						data-x="496"
						data-y="478"
						data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-speed="800"
						data-start="1550"
						data-easing="easeOutQuad"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 3;"><a href="#" class="button button-border button-white button-light button-large button-rounded tright nomargin"><span>Start Tour</span> <i class="icon-angle-right"></i></a></div>

					</li>
					<li class="dark" data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider/rev/main/s2-thumb.jpg"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="Unlimited Homepages">
						<!-- MAIN IMAGE -->
						<img src="images/slider/swiper/s2.jpg"  alt="video_woman_cover3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->

						<!-- LAYER NR. 2 -->
						<div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-8"
						data-x="200"
						data-y="107"
						data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="2600"
						data-easing="easeOutCubic"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 3;"><img src="images/slider/rev/main/s2-1.png" alt="Image"></div>

						<div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-7"
						data-x="200"
						data-y="107"
						data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="2800"
						data-easing="easeOutCubic"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 4;"><img src="images/slider/rev/main/s2-2.png" alt="Image"></div>

						<div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-6"
						data-x="200"
						data-y="107"
						data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="3000"
						data-easing="easeOutCubic"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 5;"><img src="images/slider/rev/main/s2-3.png" alt="Image"></div>

						<div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-5"
						data-x="200"
						data-y="107"
						data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="3200"
						data-easing="easeOutCubic"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 6;"><img src="images/slider/rev/main/s2-4.png" alt="Image"></div>

						<div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-4"
						data-x="200"
						data-y="107"
						data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="3400"
						data-easing="easeOutCubic"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 7;"><img src="images/slider/rev/main/s2-5.png" alt="Image"></div>

						<div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-3"
						data-x="200"
						data-y="107"
						data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="3600"
						data-easing="easeOutCubic"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 8;"><img src="images/slider/rev/main/s2-6.png" alt="Image"></div>

						<div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-2"
						data-x="200"
						data-y="107"
						data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="3800"
						data-easing="easeOutCubic"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 9;"><img src="images/slider/rev/main/s2-7.png" alt="Image"></div>

						<div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-1"
						data-x="200"
						data-y="107"
						data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="4000"
						data-easing="easeOutCubic"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 10;"><img src="images/slider/rev/main/s2-8.png" alt="Image"></div>

						<div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text"
						data-x="0"
						data-y="120"
						data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-speed="800"
						data-start="1200"
						data-easing="easeOutQuad"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 11; ">Speaking of Customization?</div>

						<div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder uppercase"
						data-x="-3"
						data-y="140"
						data-customin="x:5;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:5;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-speed="800"
						data-start="1400"
						data-easing="easeOutQuad"
						data-splitin="chars"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 11; font-size: 56px;">25+ Homepages</div>

						<div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
						data-x="0"
						data-y="240"
						data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-speed="800"
						data-start="1600"
						data-easing="easeOutQuad"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power4.easeIn" style="z-index: 11; max-width: 550px; white-space: normal;">Amazing Homepages Custom Designed &amp; Ready to use at your Disposal. And we'll always add more..</div>

						<div class="tp-caption customin ltl tp-resizeme"
						data-x="0"
						data-y="345"
						data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-speed="800"
						data-start="1800"
						data-easing="easeOutQuad"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="1300"
						data-endeasing="Power4.easeIn" style="z-index: 11;"><a href="#" class="button button-border button-white button-light button-large button-rounded tright nomargin"><span>Check Now</span> <i class="icon-angle-right"></i></a></div>

					</li>
					<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/rev/main/s3-thumb.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Responsive &amp; Retina">
					<!-- MAIN IMAGE -->
					<img src="images/slider/swiper/s2.jpg"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="right bottom">
					<!-- LAYERS -->

					<!-- LAYER NR. 2 -->
					<div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
					data-x="0"
					data-y="150"
					data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
					data-speed="800"
					data-start="1500"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 3; color: #222;">Bootstrap 3+ Compatible</div>

					<div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
					data-x="-3"
					data-y="180"
					data-customin="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"
					data-speed="600"
					data-start="1700"
					data-easing="easeOutCubic"
					data-splitin="chars"
					data-splitout="none"
					data-elementdelay="0.1"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 3; color: #222; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;">Responsive Retina Graphics</div>

				</li>
				</ul>

				</div>
			</div>

			<script type="text/javascript">

				var tpj=jQuery;
				tpj.noConflict();

				tpj(document).ready(function() {

					var apiRevoSlider = tpj('.tp-banner').show().revolution(
					{
						dottedOverlay:"none",
						delay:9000,
						startwidth:1140,
						startheight:700,
						hideThumbs:200,

						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,

						navigationType:"none",
						navigationArrows:"solo",
						navigationStyle:"preview4",

						touchenabled:"on",
						onHoverStop:"on",

						swipe_velocity: 0.7,
						swipe_min_touches: 1,
						swipe_max_touches: 1,
						drag_block_vertical: false,


						parallax:"mouse",
						parallaxBgFreeze:"on",
						parallaxLevels:[8,7,6,5,4,3,2,1],
						parallaxDisableOnMobile:"on",


						keyboardNavigation:"on",

						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						shadow:0,
						fullWidth:"off",
						fullScreen:"on",

						spinner:"spinner0",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",


						forceFullWidth:"off",
						fullScreenAlignForce:"off",
						minFullScreenHeight:"400",

						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,

						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						fullScreenOffsetContainer: ".header",
						fullScreenOffset:"0px"
					});

					apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
						if( $(window).width() > 992 ) {
							if( $('#slider ul > li').eq(data.slideIndex-1).hasClass('dark') ){
								$('#header.transparent-header:not(.sticky-header,.semi-transparent)').addClass('dark');
								$('#header.transparent-header.sticky-header,#header.transparent-header.semi-transparent.sticky-header').removeClass('dark');
								$('#header-wrap').removeClass('not-dark');
							} else {
								if( $('body').hasClass('dark') ) {
									$('#header.transparent-header:not(.semi-transparent)').removeClass('dark');
									$('#header.transparent-header:not(.sticky-header,.semi-transparent)').find('#header-wrap').addClass('not-dark');
								} else {
									$('#header.transparent-header:not(.semi-transparent)').removeClass('dark');
									$('#header-wrap').removeClass('not-dark');
								}
							}
							SEMICOLON.header.darkLogo();
						}
					});

				}); //ready

			</script>

			<!-- END REVOLUTION SLIDER -->

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
						</div>
						<div class="clear"><span>&nbsp</span></div>
						<div class="clear"></div>
						<div class="container clearfix">

							<div class="col_one_two">
								<div class="feature-box fbox-medium fbox-plain" data-animate="fadeIn">
									<div class="fbox-icon wow zoomIn" data-wow-delay="1.0s">
										<a href="#"><i class="icon-calendar"></i></a>
									</div>
									<h6 class="Important-date">Important Dates</h6>
									<br><br>
					<!--p style="font-size : 18px;">Application Deadline : <strong>July 7 ,2016</strong></p>
					<p style="font-size : 18px;">Early bird Application Deadline : <strong>June 15, 2016</strong></p>
					<p style="font-size : 18px;">Regular Application Deadline : <strong>July 15th, 2016</strong></p>
				    <p style="font-size : 18px;">Scholarship Application Deadline : <strong>June 15th, 2016</strong></p>
				    <p style="font-size : 18px;">Conference Ambassdor Application Deadline : <strong>June 15th, 2016</strong></p>
				    <p style="font-size : 18px;">CELT India, 2016 : <strong>9th - 13th August, 2016</strong></p>
									<!--p class="wow flip" data-wow-delay="1.0s">Application Deadline : <strong>13-07-2016</strong></p>
									<p class="wow flip" data-wow-delay="1.0s">Application Deadline : <strong>13-07-2016</strong></p-->



				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div style="font-family: Goudy Old Style;" class="postcontent nobottommargin clearfix">

						<table class="table">
						  <thead>
							<tr >
							  <!--th rowspan="4">August 9<sup>th</sup> (Day 1)</th-->
							</tr>
						</thead>
						  <tbody>

						  <tr style=" border:0px;">
								<th style=" border:0px; font-size:20px;">Date</th>
								<th style=" border:0px; font-size:20px;" colspan="3">Deadline</th>
							</tr>
							<tr>
							  <td style=" border:0px; font-size:20px;">June 30 ,2016</td>
							  <td style=" border:0px; font-size:18px;" colspan="3">Early bird Application Deadline</td>
							</tr>
                            <tr>
							  <td style=" border:0px; font-size:20px;">June 30 ,2016</td>
							  <td style=" border:0px; font-size:18px;" colspan="3">Scholarship Application Deadline</td>
							</tr>
							
							<tr>
							  <td style=" border:0px; font-size:20px;">June 30 ,2016</td>
							  <td style=" border:0px; font-size:18px;" colspan="3">Conference Ambassdor Application Deadline</td>
							</tr>
							<tr>
							  <td style=" border:0px; font-size:20px;">July 10 ,2016</td>
							  <td style=" border:0px; font-size:18px;" colspan="3">Regular Application Deadline</td>
							</tr>
							
							<!--tr>
							  <td style=" border:0px; font-size:20px; font-style:bold;">  August 9-13 ,2016</td>
							  <td style=" border:0px; font-size:18px;" colspan="3">CELT India, 2016</td>
								
							</tr-->
						  </tbody>
						</table>
			</div-->
						<div class="container clearfix">

					<div class="col_one_half">

						<div class="heading-block fancy-title nobottomborder ">
						
						<br>
						<br>
							<h4><span>August 9-13 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
									 Conclave of Entrepreneurship, Leadership and Technology , INDIA
							</span></h4>
							</div>
							</div>
							</div>
							
								</div>
							</div>

							<div class="clear"></div>


							</div>

							<div class="clear"></div>

						</div>


						<div class="section nobottommargin">
							<div class="container clear-bottommargin clearfix">
									<big>
									<div class="heading-block center nomargin">
									<h3>
										<div id="clockdiv">
										<div>
											<SPAN>&nbsp&nbsp&nbsp</SPAN>

											<a class="days"></a><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>


											<a class="hours"></a><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>

											<a class="minutes"></a><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>

											<a class="seconds"></a><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<span></span>



											<p class="Smalltext">Days&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHours&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMinutes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSeconds</p>
										</div>
										</div>

									</h3>
								</div>

							</div>
						</div>
						</big>


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

						</div>

					</div>

				</section><!-- #content end -->
 			
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
</body>
</html>
