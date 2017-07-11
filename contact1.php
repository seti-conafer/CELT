<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<link rel="icon" href="CELTimages\celtindia-web1.png" type="image/png" sizes="16x16">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="KIIT E-Cell" />
	<meta name="keywords" content="CLET,CELTINDIA,Conference,Leadership,Technology,Entrepreneur,Entrepreneurship,Leader,Conclave,Summit,August,CELTINDIA.ORG,KIITt,KISS,Ecell,Event,India,Startup,Celt2016">
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
	<link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css"/>
	<script type="text/javascript" src="WOW-master/dist/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<title>Conclave of Entrepreneurship Leardership and Technology</title>
	<style type="text/css">

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
			margin-top: -100px;
			text-align: left;
			margin-left: 14px;
		}



	</style>

</head>

<body class="stretched">
	<div id="wrapper" class="clearfix">
		<?php require_once 'navbar.php'; ?>
		<section id="page-title">

			<div class="container clearfix">
				<h1 id="sched">Partnership Club</h1>
			</div>
		</section>
		<div class="content-wrap">
			<div class="container clearfix">
				<div class="col_one_two">
					<p>
						<div class="container clearfix">
							<div class="row clearfix">
								<div class="col-lg-6">
									<p class="lead wow fadeInLeft" data-wow-delay="1.0s">
										The CELT Partnership is an exclusive opportunity designed for those organization, committed to bring a change, globally! 
										<br />
										Limited to an exclusive group Doers worldwide, the Partnership provides the unprecedented opportunity to network with and learn from around the world, while travelling to some of the most conference locations on the earth. These clubs in local universities of different countries provide forums for ongoing discussion outside the conference and within their local settings. These organizations also foster intellectual exchange by holding their own seminars, workshops and conferences. Also, aside from the recruiting and academic components, these clubs will enjoy delegate exchange program with CELT . 
										<br />
										To apply for the Partnership Club, sign this Memorandum of Agreement and send it to <a href="mailto:patnership@celtindia.org">patnership@celtindia.org</a> along with a mission statement (500-word maximum).
									</p>
								</div>
								<div class="col-lg-6">
									<div>
										<img src="contact.png" style="width:500px; height:500px;">
									</div>
								</div>
							</div>
						</div>
					</p>
				</div>
			</div>
		</div>

		<section id="page-title">
			<div id="spon"></div>

			<div class="container clearfix">
				<h1 id="sched">Sponsors</h1>
			</div>
		</section>
		<div class="content-wrap">
			<div class="container clearfix">
				<div class="heading-block fancy-title nobottomborder title-bottom-border">
					<div class="team-image">
						<?php
						for ($i=1; $i < 45; $i++) { 
							echo '<img src="CELTimages/spon/'; echo $i; echo '.png" style="width:150px; height:auto; display:inline; margin:10px;">';
						}
						?>
					</div>
				</div>


			</div>
		</div>

		<section id="page-title">
			<div class="container clearfix">
				<h1>Reach Us</h1>
				<span>Drop a message and we will respond you shortly.</span>
			</div>
		</section>
		<section id="google-map" class="gmap slider"></section> <!-- parallax -->

		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/jquery.gmap.js"></script>

		<script type="text/javascript">

			$('#google-map').gMap({

				address: 'KIIT Univertsity,India',
				maptype: 'ROADMAP',
				zoom: 14,
				markers: [
				{
					address: "KIIT Univertsity, India",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, welcome to <span>CELT</span></h4><p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [13,39]
					}
				}
				],
				doubleclickzoom: false,
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				}

			});

		</script>
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="postcontent nobottommargin">

						<h3>Drop a Message</h3>

						<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_two_third">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="submit" value="submit">Send Message</button>
							</div>

								<?php
if(isset($_POST["submit"]))
{
	$conn = new mysqli("superuser.ch2xkriqx8xg.ap-southeast-1.rds.amazonaws.com", "superuser", "Celt99096812", "celtuser_query","3306");
if ($conn->connect_errno) {
	printf("Connect failed %s\n", $conn->connect_error);
	exit();
}
	$name=htmlspecialchars($_POST['name']);
	$email= htmlspecialchars($_POST['email']);
	$phone= htmlspecialchars($_POST['phone']);
	$subject= htmlspecialchars($_POST['subject']);
	$message= htmlspecialchars($_POST['message']);
if($stmt=$conn->prepare("INSERT INTO details(name, email, phone,subject, message) VALUES(?, ?, ?, ?, ?)")){
    		$stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
    		$stmt->execute();
    		$stmt->close();
		//	header('location: profile1.php');
    		  echo 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';
	}
	else{
		var_dump($conn->error);
	}
}
?>
						</form>

						<script type="text/javascript">

							$("#template-contactform").validate({
								submitHandler: function(form) {
									$('.form-process').fadeIn();
									$(form).ajaxSubmit({
										target: '#contact-form-result',
										success: function() {
											$('.form-process').fadeOut();
											$(form).find('.sm-form-control').val('');
											$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
											SEMICOLON.widget.notifications($('#contact-form-result'));
										}
									});
								}
							});

						</script>

					</div><!-- .postcontent end -->
					<div class="sidebar col_last nobottommargin">

						<address>
							<strong>KIIT University</strong><br>
							Patia, Bhubaneswar, Odisha<br> 
							India<br>
							<strong>Pin Code: </strong>751024<br>
						</address>
						<abbr title="Phone Number"><strong>Phone: </strong></abbr> +91-9439565279,<br>+91-7749995976<br>
						<abbr title="Email Address"><strong>Email: </strong></abbr>info@celtindia.org

						<div class="widget noborder notoppadding">

							<a href="https://www.facebook.com/celtindia" class="social-icon si-small si-dark  si-facebook" target="_blank">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="https://twitter.com/celtindia" class="social-icon si-small si-dark si-twitter" target="_blank">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<a href="https://linkedin.com/company/conclave-of-entrepreneurship-leadership-and-technology" class="social-icon si-small si-dark si-linkedin" target="_blank">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>

							<a href="http://www.ecell.org.in/" class="social-icon si-small si-dark si-google" target="_blank">
								<i class="icon-web"><img src="hover.png"></i>
								<i class="icon-web"><img src="hover.png">></i>
							</a>

							<a href="http://blog.ecell.org.in/" class="social-icon si-small si-dark si-blogger" target="_blank">
								<i class="icon-blogger"></i>
								<i class="icon-blogger"></i>
							</a>

							<a href="https://www.instagram.com/celtindia/" class="social-icon si-small si-dark si-instagram" target="_blank">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>

						</div>

					</div>

				</div>
			</div>

		</section>
		<?php require_once 'footer.php'; ?>
	</div>
	<div id="gotoTop" class="icon-angle-up"></div>
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>