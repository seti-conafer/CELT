<?php
session_start();
if(empty($_SESSION['userid'])){
	header('location: login.html');
	exit();
}
require_once('config.php');
$userid = $_SESSION['userid'];
$result=$conn->query("SELECT cpay, cdel, csch, camb, payment_image_url from registration WHERE id = $userid");
$result_profile = $conn->query("SELECT name from profile WHERE userid = $userid");
$row = $result->fetch_array();
$row_profile = $result_profile->fetch_array();
?>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style>
		.hide{
			display:none;
		}
	</style>
	<title>CELT Dashboard</title>
	
</head>

<body class="stretched side-header">
	<span class="hide" id="app"><?php echo $row['cpay']; ?></span>
	<span class="hide" id="cdel"><?php echo $row['cdel']; ?></span>
	<div id="wrapper" class="clearfix">
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div id="logo" class="fancy-title title-center" >
						<img src="images/celtindia-web2.png">
					</div>
					<nav id="primary-menu">

						 <ul>
							<li class="current"><a href="index.php"><div>Home</div>
							</li>
							<li class="current" style="border-bottom: solid #f1f1f1;"><a><div>CELT ID : <?php echo 'CELT100'.$userid;?></div>
							</li>

                            <li style="border-bottom: solid #f1f1f1;"><a href="profile.php"><div>Profile</div></a>
                            </li>
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
							<li style="border-bottom: solid #f1f1f1;"><a href="schedule.php"><div>Schedule</div></a>
							</li>
							<br>
							<li><a href="logout.php"><div>Logout</div></a>
							</li>

						</ul>

					</nav><!-- #primary-menu end -->

					<div class="clearfix visible-md visible-lg ">
						<div class="center">
						<a href="https://www.facebook.com/celtindia" class="social-icon si-small si-borderless si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="https://twitter.com/celtindia" class="social-icon si-small si-borderless si-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="http://lnked.in/CeltIndia" class="social-icon si-small si-borderless si-linkedin">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
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

		<section id="content">

			<div class="content-wrap nopadding">
				<div class="container clearfix">
				<div class="fancy-title title-dotted-border title-center">
						<h3>Application Status</h3>
					</div>

					<div id="processTabs">
						<ul class="process-steps bottommargin clearfix" id="status">
							<li class="">
								<a href="#" class="i-bordered i-circled divcenter icon-edit"></a>
								<h5>Application Submitted</h5>
							</li>
							<li class="" >
								<a href="#" class="i-circled i-bordered icon-calendar divcenter"></a>
								<h5>Application Under Review</h5>
							</li>

							<li class="">
								<a href="#" class="i-bordered i-circled divcenter icon-pencil2"></a>
								<h5>Payment Completed</h5>
							</li>
							<li class="">
								<a href="#" class="i-bordered i-circled divcenter icon-ok"></a>
								<h5>Selected</h5>
							</li>
						</ul>
					<div>

					<div class="fancy-title title-dotted-border title-center">
						<h3></h3>
					</div>

					<!-- Content for the Dashboard -->

					<!-- Content Ends -->

			</div>



			</div>


		</section><!-- #content end -->
				<section id="content">

			<div class="content-wrap nopadding">
				<div class="container clearfix center">
				<?php if ($row['cpay']) {
					?>
					<div class="title-block">
						<span>Hey <?php echo $row_profile['name']?>! Thank you for the payment :)</span>
					</div>
					<a download="Payment of CELT100<?php echo ''.$userid;?>"  href='https://googledrive.com/host/0B89guFIcUeoEb191SHIwaTlNMjA/celt100<?php echo ''.$userid;?>.jpg'  class="button button-rounded button-reveal button-large button-border tright"><i class="icon-download"></i><span>Click here to download your receipt :)</span></a>
					<center>
						
						<br>
						<img src="https://googledrive.com/host/0B89guFIcUeoEb191SHIwaTlNMjA/celt100<?php echo ''.$userid;?>.jpg" style="display:inline; width:40%; height:auto;"></center>
				<?php } else { ?>
				    <img src="bd.jpg" style="display:inline; width:40%; height:auto;">
					<img src="PaymentDetails.gif" style="display:inline; width:40%; height:auto; margin-left:50px;">

				<?php } ?>
			</div>
			</div>


		</section>




	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.calendario.js"></script>

	<script type="text/javascript"> //for application status
		var app=document.getElementById("app");
		var cdel=document.getElementById("cdel");
		var checklist=document.getElementById("status");
		var items=checklist.querySelectorAll("li");
		if(app.innerHTML==1){
			items[3].className="ui-state-default ui-corner-top ui-tabs-active ui-state-active";
		}else	if(cdel.innerHTML==1){
				items[1].className="ui-state-default ui-corner-top ui-tabs-active ui-state-active";
		}
	</script>
	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
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
