<?php 
session_start();
if(!isset($_SESSION["leaderid"] ))
{
	header('Location: https://celtindia.org/');
}
$i = $_SESSION["noofapplicant"];
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="KIIT E-Cell" />

	<!-- Stylesheets
	============================================= -->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	
	<link rel="stylesheet" type="text/css" href="css/mate">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>Contingent Registration | Conclave of Entrepreneurship, Leadership and Technology</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php require_once 'navbar.php'; ?>
				<!-- Page Title
				============================================= -->
				<section id="page-title" class="page-title-parallax page-title-dark page-title-right" style="padding: 250px 0; background-image: url('images/about/cONTINGENT.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.2">
				</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		

		<div class="content-wrap">

			<div class="container clearfix">

				<div class="row clearfix">

					<div class="col-md-12">
						<section id="page-title">

							<div class="container clearfix">
								<h1 style="">ABOUT</h1>
				<!--span>All your Questions answered in one place</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">FAQs</li>
				</ol-->
			</div>



		</div>

	</div>

</div>





<!-- #portfolio end -->

</div>
</div>
</section>


<div class="content-wrap">

	<div class="container clearfix">

		<div class="accordion accordion-lg divcenter nobottommargin clearfix" >

			<div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Team Member</div>
			<div class="acc_content clearfix">
				<form id="login-form" name="login-form" class="nobottommargin" action="teamget.php" method="post">


					<div class="col-md-3">
						<label for="login-form-username">Team Member name:</label>
						<input type="text" id="login-form-username" name="name"  class="form-control" />
					</div>

					<div class="col-md-3">
						<label for="login-form-username"> Gender:</label>
						<input type="text" id="login-form-username" name="gender"  class="form-control" />
					</div>


					<div class="col-md-3">
						<label for="login-form-username">Team Member Email:</label>
						<input type="text" id="login-form-username" name="email"  class="form-control" />
					</div>
					<div class="col-md-3">
						<label for="login-form-username">Team Member Phone No:</label>
						<input type="text" id="login-form-username" name="mobile"  class="form-control" />
					</div>
						<input type="hidden" name="leaderid" value="<?php echo $_SESSION['leaderid'];?>">
						<input type="hidden" name="noofapplicant" value="<?php echo $i; ?>">

					<div class="col-md-3">
						
						<button class="button button-3d button-black nomargin" id="register-form-submit" style="margin:30px !important; float:center;" name="submit">Submit</button>
					</div>
				</form>
			</div>

						
						</div>

					</div>

				</div>

			</div>



			<div class="section parallax dark bottommargin-lg" style="background-image: url('images/about/footer image.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.3">

				<div class="container clearfix">
						<div class="col_one nobottommargin center" data-animate="bounceIn" data-delay="200">
							<!--i class="i-plain i-large divcenter nobottommargin icon-code"></i>
							<div class="counter counter-lined"><span data-from="100" data-to="25841" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div-->


								<div class="promo  promo-center bottommargin">
									<h2> Contact Us </h2>
									<h3><span>Harsh khanna</span></h3>

									<h4><span>+918339033964</span> </h4>
									<h4>  <span>info@celtindia.org</span> </h4>
								</div>
								<!--a href="#" class="button button-xlarge button-rounded">Start Now</a-->
								<a href="https://www.facebook.com/harsh.khanna.3701?fref=ts" class="social-icon si-light si-rounded si-facebook" style="margin-left:550px; margin-top:-30px;" target="_blank">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
							</div>
							
						</div>

					</div>
				</div></div>
			</div>

		</div>

	</section><!-- #content end -->



		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="margin-top:-140px;">
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<div class="copyrights-menu copyright-links clearfix">
							<a href="https://celtindia.org/">Home</a><!--a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a-->
						</div>
						Copyrights &copy; 2016 All Rights Conclave of Entrepreneurship, Leadership and Technology
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<!--a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a-->

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->
		</footer>
	</div><!-- #wrapper end -->


	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>