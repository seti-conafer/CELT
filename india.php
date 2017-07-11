<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<link rel="icon" href="CELTimages\celtindia-web1.png" type="image/png" sizes="16x16">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="KIIT E-Cell" />
	<meta name="keywords" content="CLET,CELTINDIA,Conference,Leadership,Technology,Entrepreneur,Entrepreneurship,Leader,Conclave,Summit,August,CELTINDIA.ORG,KIITt,KISS,Ecell,Event,India,Startup,Celt2016">
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<!--animate.css link -->
	<!--link rel="stylesheet" type="text/css" href="animate.css"-->
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<!--wow Start-->
		<link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css"/>
<script type="text/javascript" src="WOW-master/dist/wow.min.js"></script>
<script>
              new WOW().init();
              </script>
  <!--wow end-->

	<!-- Document Title
	============================================= -->
	<title>CELT</title>
	<style type="text/css">

	.orrisaimg img{
		height:500px;
	}
	.indiaimg img{
		 height:800px;
	}
	@media screen and (min-width: 10px) and (max-width: 1199px){
		.orrisaimg img{
			height:400px;
		}
		.indiaimg img{
			 height:500px;
		}
	}
	@media screen and (min-width: 1200px) and (max-width: 1800px){
		.orrisaimg{
			margin-top:-525px;
		}
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

	button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
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
		margin-top: -100px;
		text-align: left;
		margin-left: 14px;
	}

	.papa-ki
	{
		font-size: 18px;
	}

	.Important-date
	{
		font-size: 24px;

	}

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
<?php require_once 'navbar.php'; ?>

	<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
				<!--abe sourabh url daal de bas -->
					<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/3.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<!--<h2 data-caption-animate="fadeInUp">Welcome to CELT</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own CELT.</p>-->
							</div>
						</div>
					</div>


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
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
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
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
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
				});
			</script>

			<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">
						<div class="col-lg-6">
							<div class="heading-block topmargin">
								<h1>India</h1>
							</div>
							<p class="lead"> Tourism in India has grown rapidly with a great influx of tourists from all across the globe who have been irresistibly attracted to the rich culture, heritage, and incredible natural beauty of India.
									<br>
							India with its foggy hill stations, captivating beaches, historical monuments, golden deserts, serene backwaters, pilgrimage sites, rich wildlife, and colourful fairs capture the heart of every tourist. In addition, a variety of festivals, lively markets, vibrant lifestyle, and traditional Indian hospitality, will make your experience as an india tourist truly unforgettable and fantastic.

							Travel through the lovely Indian states and discover closely the resplendent colors and rich cultural locales of this incredible land. Our India tourism guide provides you a glimpse of travel and tourism in india ,india tourism information about south india tourism, north India tourism, and all the major tourist destinations, and tourism services of India.

						</div>
						<div class="col-lg-6 indiaimg">

							<div style="position: relative;" class="ohidden">

									<img src="images/India.jpg">

								</div>
							</div>
							<div class="col-lg-6 orrisatext">
							<div class="heading-block topmargin">

									<h1><strong>Odisha</strong></h1>

								</div>
								<p class="lead"> The historical state of Odisha is situated amidst beautiful lush green mountains of the Eastern Ghats. This historical land is bounded by the states of Andhra Pradesh, Chhattisgarh, Jharkhand and West Bengal. Odisha is blessed with palm-fringed beaches, shimmering lakes, serpentine rivers, mighty waterfalls, forest-clad blue hills of Eastern Ghats, which are home to rich flora and fauna that impress and lure tourists from all over the world. Odisha is famous for its fairs festivals, stone carving, silver filigree, applique work, exquisite handicrafts, and beautiful textiles. Dotted with numerous architecturally celebrated temples, sacred shrines, and historical monuments, Odisha is considered India’s one of the most hidden splendid cultural landscapes.</p>
							</div>
							<div class="col-lg-6 orrisaimg">

								<div style="position: relative;" class="ohidden">

										<img src="images/Dhauli-Giri-Shanti-Stupa-Bhubaneswar-Orissa.jpg">

										<!--img src="images/slider/swiper/1.jpg" style="height:1000px; ">
										 <img src="images/slider/swiper/2.jpg" style="height:1000px;"-->

									<!--div id="slideshow" style=" box-shadow: 0 8px 8px rgba(0,0,0,0.19), 0 1px 2px rgba(0,0,0,0.23); margin-top: 40px;">

										<div>
											<img src="images/slider/swiper/1.jpg" style="padding:10px;width: 1830px; height: auto; background-clip: content-box;">
										</div>
										<div>
											<img src="images/slider/swiper/2.jpg" style="padding:10px;width: 530px; height: auto;">
										</div>
										<div>
											<img src="images/slider/swiper/3.jpg" style="padding:10px;width: 530px; height: auto;">
										</div-->
									</div>
								</div>

							</div>
						</div>
						<div>
							<br><br><br>
							<center>
								<div class="heading-block topmargin">
									<h1>Know Odisha Better</h1>
								</div>
							</center>
							<div class="container clearfix">

								<div id="side-navigation" class="ui-tabs ui-widget ui-widget-content ui-corner-all">

									<div class="col_one_third nobottommargin">

										<ul class="sidenav ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">

											<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="snav-content1" aria-labelledby="ui-id-1" aria-selected="false" aria-expanded="false">
												<a href="#snav-content1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="icon-map"></i>Travel in Odisha<i class="icon-chevron-right"></i></a>
											</li>
											<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="snav-content2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
												<a href="snav-content2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="icon-graph"></i>Tourist Attractions In Odisha<i class="icon-chevron-right"></i></a>
											</li>
											<li class="ui-state-default ui-corner-top" role="tab" tabindex="0" aria-controls="snav-content3" aria-labelledby="ui-id-3" aria-selected="true" aria-expanded="true">
												<a href="snav-content3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><i class="icon-food"></i>How to Reach Odisha <i class="icon-chevron-right"></i></a>
											</li>
											<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="snav-content4" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false">
												<a href="snav-content4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4"><i class="icon-gift"></i>Travel in Odisha<i class="icon-chevron-right"></i></a>
											</li>
										</ul>

									</div>

									<div class="col_two_third col_last nobottommargin">

										<div id="snav-content1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
											<div class="heading-block">
												<h3>Tourism in Odisha</h3>
												<span>We welcome you to sample it's charms and we are sure, that like most of our guests, you too will choose to come back again and again!</span>
											</div>
											<p>

Odisha, the land of quintessential charm is one of the most preferred tourist destinations in India. Tourism in Odisha is a major industry that has shown phenomenal growth in the past few years. Odisha Tourism department has recognized the importance of tourism promotion in economic growth, and has accordingly, undertaken several measures. These include development of infrastructure, and preservation and restoration of historical monuments, promotion of various tourist spots, and development of entertainment leisure centers in the form of amusement Parks, theme Parks, multiplexes; water sports complexes; golf courses, bowling alleys and other sports related facilities. The new colorful logo of Odisha tourism positions Odisha as a vibrant tourist destination which is scenic, sublime and, serene. Various Fairs and festivals such as 'Ekamra Utsav' at Bhubaneswar, 'Sreekhetra Utsav' at Puri, and 'Konark Festival' at Konark are organized by Odisha tourism to exhibit tourism and cultural potential of the State.

In order to provide complete information about Odisha, Odisha Tourism has opened up tourist information centers at various important cities in India. Tourists can buy Odisha tourism publications like brochures, maps, destination folders and, Odisha tourism guide from these centers. The colorful and comprehensive website of Odisha tourism highlights a wide range of tourism products of the state and displays beautiful snapshots of temples, festivals, tourist destinations of Odisha.
										</div>

										<div id="snav-content2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
											<div class="heading-block">
												<h3>Tourist Attractions In Odisha</h3>
												<span></span>
											</div>
											<p>

Nandankanan Zoological Park <br> Odisha State Museum <br> Chilika Lake <br> Puri Beach <br> Konark Sun Temple <br> Jagannath Temple <br> Barabati Fort <br> Qadam-I-Rasool <br> Lingaraj Temple <br> Puri Rath Yatra <br> Mukteswara Temple <br> Udaigiri & Khandagiri Caves are the major tourist attractions in Odisha.<br> Bhubaneshwar <br> Konark <br> Puri <br> Ratnagiri <br> Dhavaleshwar <br> Gopalpur on Sea<br> Chilka Lake <br>are some of the popular travel destinations in Odisha.
</p>

										</div>

										<div id="snav-content3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" style="display: block;">
											<div class="heading-block">
												<h3>How to Reach Odisha</h3>
												<span>Our beliefs manifest as  "Atithi devo bhava"-the guest is equivalent to God</span>
											</div>
											<p>

Travel to Odisha by Air: There is just one airport in Odisha, which is located at the capital city, Bhubaneshwar. All major low cost carriers and full service airlines operate regular flights to and from the city. Bhubaneshwar is well connected to New Delhi, Kolkata, Bangalore, Hyderabad, Raipur, Varanasi, Mumbai and Chennai.

Travel to Odisha by Rail: Bhubaneshwar is the most convenient and important railway station in Odisha. An excellent train network connects Bhubaneshwar to Kolkata, Puri, Chennai, Delhi, Mumbai, Bangalore, Guwahati, Hyderabad, Tirupati and Trivandrum. Apart from Bhubaneshwar Railway Station, there are numerous railheads in Odisha, which link all major cities and towns to Bhubaneshwar and other important places with in and outside the state.

Travel to Odisha by Road: Odisha has a wide network of roads that connects well to the rest of the country by National highways and State highways. Bhubaneshwar the capital city is well linked to all major cities with in Odisha and its neighboring states.


											</p>
										</div>

										<div id="snav-content4" aria-labelledby="ui-id-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
											<div class="heading-block">
												<h3>Travel in Odisha</h3>
												<span>Fun and Enjoy</span>
											</div>

There is no dearth of local transportation in Odisha. Once can avail taxis, auto-rickshaws and cycle-rickshaws to move within the city. Odisha State Transport operates regular buses between Bhubaneshwar and Berhampur, Cuttack, Konark, Puri, Rourkela, Sambalpur, Paradip, Chilka, and other places. Deluxe coaches and tourist taxis can also be hired from Transport Manager, Odisha Tourism Development Corporation.



<br><br>Odia cuisine uses relatively less oil and is less spicy as compared to other regional Indian cuisines, but it is very flavourful at the same time. Rice is the staple food of this region. Mustard oil is used in several dishes as the cooking medium, but ghee is preferred in temples.In old times Food was traditionally served on disposable plates made of sal leaves.

Odia cooks, particularly from the Puri region, were much sought after due to their ability to cook food in accordance with Hindu scriptures. During the 19th century, many Odia cooks were employed in Bengal and they took several dishes with them. Yoghurt is also used in various dishes. Many sweets of the region are based on Chhena (cheese). The period saw a heavy demand for Brahmin cooks, leading many Odia cooks to fake their castes.

Fish and other sea foods are eaten mainly in coastal areas. Several curries are prepared from prawn and lobster with spices.



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
	var endtime="9/8/16";
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

	var deadline = "9/8/16";
	initializeClock('clockdiv', deadline);
</script>
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
<script>
	$(function() {
		$( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
	});
</script>

</body>
</html>
