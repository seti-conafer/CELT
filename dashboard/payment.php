<?php
session_start();
if(empty($_SESSION['userid'])){
	header('location: login.html');
	exit();
}
require_once('config.php');
$userid = $_SESSION['userid'];
$result=$conn->query("SELECT cpay, cdel, csch, camb from registration WHERE id = $userid");
$application=$conn->query("SELECT conf, SubmittedOn from application WHERE userid = $userid");
$payment=$conn->query("SELECT college, country from profile WHERE userid = $userid");
$row = $result->fetch_array();
$approw = $application->fetch_array();
$pay = $payment->fetch_array();
$early_bird_date ='2016-06-30 23:59:59';
$country = $pay['country'];
$university = $pay['college'];
$date = $approw['SubmittedOn'];

if ($country!='IN' && $country!='India' && $country!='india')
{
	if ($country =='Afghanistan' || $country =='Bangladesh' || $country =='Bhutan' || $country =='Maldives' || $country =='Nepal' || $country =='Pakistan' || $country =='Sri Lanka')
	{
		$link = 'https://in.explara.com/beta/conclave-of-entrepreneurship-leadership-and-technology-SAARC/checkout';
	}
	else if ($date <= $early_bird_date)
	{  
		$link = 'https://in.explara.com/beta/conclave-of-entrepreneurship-leadership-and-technology-international-early-bird/checkout';
	}
	else
	{
		$link='https://in.explara.com/e/conclave-of-entrepreneurship-leadership-and-technology-international-regular';	
	}
}
else
{
	if(
	$university!='KIIT' || 
	$university!='K.I.I.T' || 
	$university!='k.i.i.t' || 
	$university!='KIIT University' ||
	$university!='kiit university' || 
	$university!='kalinga institute industrial technology' || 
	$university!='Kalinga Institute Industrial Technology' || 
	$university!='kiit' || 
	$university!='KiiT' || 
	$university!='KIIT UNIVERSITY')
	{
		if ($country=='India' || $country=='IN' || $country=='india') {
			if ($date <= $early_bird_date) 
			{
				$link= 'https://in.explara.com/beta/conclave-of-entrepreneurship-leadership-and-technology-indian-early-bird/checkout';	
			}
			
		else
		{
			$link='https://in.explara.com/e/conclave-of-entrepreneurship-leadership-and-technology-indian-regular';
		}
	}
}
if	(
	$university=='KIIT' || 
	$university=='K.I.I.T' ||
	$university=='KIIT university' || 
	$university=='k.i.i.t' || 
	$university=='KIIT University' ||  
	$university=='kiit university' || 
	$university=='kalinga institute industrial technology' || 
	$university=='Kalinga Institute Industrial Technology' || 
	$university=='kiit' || 
	$university=='KiiT' || 
	$university=='KIIT UNIVERSITY' && $country=='India' || $country=='IN')
	{
		$link='https://in.explara.com/e/conclave-of-entrepreneurship-leadership-and-technology-kiit-students/checkout';
	}
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /> 
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<!--Import Google Icon Font-->
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.css" type="text/css" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>CELT Payment</title>

</head>

<body class="stretched side-header">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" class="fancy-title title-center" >
						<img src="images/celtindia-web2.png">
					</div>

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"style="border-bottom: solid #f1f1f1;"><a href="index.php"><div>Home</div>
							</li>
							<li class="current" style="border-bottom: solid #f1f1f1;"><a><div>CELT ID : <?php echo 'CELT100'.$userid;?></div></a></li>
							<li style="border-bottom: solid #f1f1f1;"><a href="profile.php"><div>Profile</div></a>
							</li>
							<!--li style="border-bottom: solid #f1f1f1;"><a href="application.php"><div>Application
							<?php
							if(!$row['cdel']){
								?>	
									<!--span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
									<?php
								}
								?>
							</div></a>
						</li-->

							<!--li style="border-bottom: solid #f1f1f1;"><a href="scholarship.php"><div>Scholarship
							<?php
							if(!$row['csch']){
								?>	
							<!--span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
							<?php
						}
						?>
					</div></a>
				</li-->
				<li style="border-bottom: solid #f1f1f1;"><a href="payment.php"><div>Payment
					<?php
					if(!$row['cpay']){
						?>  
						<span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
						<?php
					}
					?>
				</div></a>
			</li>
			<li style="border-bottom: solid #f1f1f1;"><a href="ambassador.php"><div>Ambassador
				<?php
				if(!$row['camb']){
					?>  
					<span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
					<?php
				}
				?>
			</div></a>
		</li>

		<li style="border-bottom: solid #f1f1f1;"><a href="schedule.php"><div>Schedule</div></a>
		</li>
		<br>
		<li><a href="logout.php"><div>Logout</div></a>
		</li>

	</ul>

</nav><!-- #primary-menu end -->

<div class="clearfix visible-md visible-lg ">
	<div class="center">
		<a href="#" class="social-icon si-small si-borderless si-facebook">
			<i class="icon-facebook"></i>
			<i class="icon-facebook"></i>
		</a>

		<a href="#" class="social-icon si-small si-borderless si-twitter">
			<i class="icon-twitter"></i>
			<i class="icon-twitter"></i>
		</a>

		<a href="#" class="social-icon si-small si-borderless si-gplus">
			<i class="icon-gplus"></i>
			<i class="icon-gplus"></i>
		</a>

	</div>
	<div class="center"><br><br>
		Copyrights &copy; 2016<br> All Rights Reserved by CELT.<br>
		<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
	</div>
</div>




</div>

</div>

</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">
				<?php 
				if($row['cdel']){
					if($approw['conf']){
						if(!$row['cpay']){
							?>
							<div class="container clearfix">
								<div class="fancy-title title-dotted-border title-center">
									<h3>CELT Application : Payment</h3>
								</div>

				<!-- Post Content
				============================================= -->
				<div class="postcontent nobottommargin  clearfix">

						<!-- Posts
						============================================= -->
						<div id="posts" class="post-timeline clearfix">

							<div class="timeline-border"></div>

							<div class="entry clearfix">
								<div class="entry-timeline">
									1
									<div class="timeline-divider"></div>
								</div>

								<div class="entry-content">
									<div class="entry-title">
										<h5 style="font-size: 1.3rem; color:black !important; text-decoration:none; ">
											<span class="materialize-textarea">
												Your application has been selected. Kindly proceed for the payment by clicking on the given link.<br ><br><b><a href="<?php echo $link ?>">Payment Link</b></a>.

												<br>
												<hr/>
												<p>Please note that CELT registration fee <b>covers</b> your <b>stay during the five days</b> of the conclave. It also includes the costs of <b>conclave's logistics</b>, <b>coffee break</b>, <b>breakfast</b>, <b>lunches and dinner for all the five days</b> of the conclave. However, if you are staying at a local hotel of your own choice, you will be responsible for funding your own accommodation costs. The registration fee does not include the travelling costs to and from Bhubaneswar.</p>
											</span>
										</h5>
									</div>				
								</div>
							</div>
							
							<div class="entry clearfix">
								<div class="entry-timeline" style="border-color:#26a69a;">
									2
									<div class="timeline-divider"></div>
								</div>
								<form method="POST" action = "paymentget.php">
									<div class="entry-content">
										<div class="entry-title">
											<h5 style="font-size: 1.3rem; color:black !important; text-decoration:none; ">
												<span class="materialize-textarea">
													After successful payment kindly refer to the ticket <b>mailed</b> to you for Order No. and enter the same in the given input box.
												</span>
												<br /><br />

												<div class="input-field col s6">
													<input name="ticket" id="ticket" class="materialize-textarea" placeholder="eg. E6RGDEJCYYY577152FAQD225"></input>
												</h5>
											</div>				
										</div>
									</div>
									
									<div class="row">
										<center>
										<button class="col s3 btn waves-effect waves-light" id="submit">Submit Now <i class="material-icons right">send</i></button>
										</center>
									</div>
								</div><!-- #posts end -->

							</div><!-- .postcontent end -->		
						</div>
					</form>
					<?php }else{
						?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<i class="icon-gift">
							</i>
							<strong>Congratulations!</strong>
							<p class="done"> <?php echo "Payment Completed Successfully";
							}?> </p>
						</div>
						<?php
					}else{
						?><div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<i class="icon-gift"></i>
						<strong><?php echo "Application under review. Please try again after some time.";}?></strong>
					</div>
					<?php
				}else{
					?><div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="icon-gift"></i>
					<strong><?php echo "Please Complete application.";}?></strong>
				</div>

			</div>

		</section><!-- #content end -->




	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.calendario.js"></script>
	
	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
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
	<!-- Portfolio Script
	============================================= -->

</body>
</html>