<?php
session_start();
if(empty($_SESSION['userid'])){
	header('location: login.html');
	exit();
}
require_once('config.php');
$userid = $_SESSION['userid'];
$result=$conn->query("SELECT cpay, cdel, csch, camb from registration WHERE id = $userid");
$row = $result->fetch_array();
?>

<!DOCTYPE html>
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
	<title>CELT Schedule</title>

</head>

<body class="stretched side-header">

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
							<li class="current"style="border-bottom: solid #f1f1f1;"><a href="index.php"><div>Home</div>
							</li>
							<li class="current" style="border-bottom: solid #f1f1f1;"><a><div>CELT ID : <?php echo 'CELT100'.$userid;?></div></a></li>
                            <li style="border-bottom: solid #f1f1f1;"><a href="profile.php"><div>Profile</div></a>
                            </li>
							<!--li style="border-bottom: solid #f1f1f1;"><a href="application.php"><div>Application
							<?php
							if(!$row['cdel']){
							?>	
							<span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
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

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">
				<div class="container clearfix">
				
					<div class="fancy-title title-dotted-border title-center">
						<h1>Conference Itinerary<span></span></h1>
					</div>
					<!-- Content for the Dashboard -->
					<div class="col_full nobottommargin" >

								<div class="fancy-title title-bottom-border" style="margin-bottom:2px;">
								<h3>August 9th  <span>DAY 1</span></h3>
								</div>

								<div class="table-responsive" style="font-size:16px;">
									<table class="table table-responsive">
										<thead>
											<tr>
												<th>Timings</th>
												<th>Events</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span class="label label-danger">8:00 - 14:00</span></td>
												<td>Registration, Check in and Pre-Conference Tour</td>
											</tr>
											<tr>
												<td><span class="label label-danger">15:00 - 17:00</span></td>
												<td>Know your mentor session</td>
											</tr>
											<tr>
												<td><span class="label label-danger">17:00 - 18:00</span></td>
												<td>Coffee Break</td>
											</tr>
											<tr>
												<td><span class="label label-danger">18:00 - 20:00</span></td>
												<td>Opening Ceremony and Keynote-1</td>
											</tr>
											<tr>
												<td><span class="label label-danger">21:00 - 22:00</span></td>
												<td>Reception</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="fancy-title title-bottom-border" style="margin-bottom:2px;">
								<h3>August 10th <span>DAY 2</span></h3>
								</div>

								<div class="table-responsive" style="font-size:16px;">
									<table class="table table-responsive">
										<thead>
											<tr>
												<th>Timings</th>
												<th>Events</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span class="label label-danger">8:00 - 10:00</span></td>
												<td>Breakfast</td>
											</tr>
											<tr>
												<td><span class="label label-danger">10:00 - 12:00</span></td>
												<td>Session 1</td>
											</tr>
											<tr>
												<td><span class="label label-danger">12:00 - 13:00</span></td>
												<td>Session 2</td>
											</tr>
											<tr>
												<td><span class="label label-danger">13:00 - 14:00</span></td>
												<td>Lunch</td>
											</tr>
											<tr>
												<td><span class="label label-danger">14:00 - 15:00</span></td>
												<td>Session 3</td>
											</tr>
											<tr>
												<td><span class="label label-danger">15:00 - 16:00</span></td>
												<td>Session 4 and Session 5</td>
											</tr>
											<tr>
												<td><span class="label label-danger">16:00 - 17:00</span></td>
												<td>Session 6</td>
											</tr>
											<tr>
												<td><span class="label label-danger">17:00 - 18:00</span></td>
												<td>Coffee Break</td>
											</tr>
											<tr>
												<td><span class="label label-danger">18:00 - 19:00</span></td>
												<td>Session 7</td>
											</tr>
											
											<tr>
												<td><span class="label label-danger">19:00 - 22:00</span></td>
												<td>Corporate Tour and Dinner</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div class="fancy-title title-bottom-border" style="margin-bottom:2px;">
								<h3>August 11th  <span>DAY 3</span></h3>
								</div>

								<div class="table-responsive" style="font-size:16px;">
									<table class="table table-responsive">
										<thead>
											<tr>
												<th>Timings</th>
												<th>Events</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span class="label label-danger">8:00 - 10:00</span></td>
												<td>Breakfast</td>
											</tr>
											<tr>
												<td><span class="label label-danger">10:00 - 12:00</span></td>
												<td>Session 8</td>
											</tr>
											<tr>
												<td><span class="label label-danger">12:00 - 13:00</span></td>
												<td>Session 9</td>
											</tr>
											<tr>
												<td><span class="label label-danger">13:00 - 14:00</span></td>
												<td>Lunch</td>
											</tr>
											<tr>
												<td><span class="label label-danger">14:00 - 15:00</span></td>
												<td>Session 10</td>
											</tr>
											<tr>
												<td><span class="label label-danger">15:00 - 16:00</span></td>
												<td>Session 11</td>
											</tr>
											<tr>
												<td><span class="label label-danger">16:00 - 16:15</span></td>
												<td>Coffee Break</td>
											</tr>
											<tr>
												<td><span class="label label-danger">16:15 - 18:00</span></td>
												<td>Session 12</td>
											</tr>
											
											<tr>
												<td><span class="label label-danger">18:00 - 22:00</span></td>
												<td>International Night and Dinner</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="fancy-title title-bottom-border" style="margin-bottom:2px;">
								<h3>August 12th  <span>DAY 4</span></h3>
								</div>

								<div class="table-responsive" style="font-size:16px;">
									<table class="table table-responsive">
										<thead>
											<tr>
												<th>Timings</th>
												<th>Events</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span class="label label-danger">8:00 - 10:00</span></td>
												<td>Breakfast</td>
											</tr>
											<tr>
												<td><span class="label label-danger">10:00 - 11:00</span></td>
												<td>Session 13</td>
											</tr>
											<tr>
												<td><span class="label label-danger">11:00 - 12:30</span></td>
												<td>Session 14</td>
											</tr>
											<tr>
												<td><span class="label label-danger">12:30 - 14:00</span></td>
												<td>Lunch</td>
											</tr>
											<tr>
												<td><span class="label label-danger">14:00 - 14:45</span></td>
												<td>Session 15 and Session 16</td>
											</tr>
											<tr>
												<td><span class="label label-danger">14:45 - 15:45</span></td>
												<td>Session 17</td>
											</tr>
											<tr>
												<td><span class="label label-danger">15:45 - 16:00</span></td>
												<td>Coffee Break</td>
											</tr>
											<tr>
												<td><span class="label label-danger">16:00 - 17:00</span></td>
												<td>Session 18</td>
											</tr>
											<tr>
												<td><span class="label label-danger">17:00 - 18:00</span></td>
												<td>Session 19</td>
											</tr>
											<tr>
												<td><span class="label label-danger">18:00 - 22:00</span></td>
												<td>Indian Night and Dinner</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="fancy-title title-bottom-border" style="margin-bottom:2px;">
								<h3>August 13th  <span>DAY 5</span></h3>
								</div>

								<div class="table-responsive" style="font-size:16px;">
									<table class="table table-responsive">
										<thead>
											<tr>
												<th>Timings</th>
												<th>Events</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span class="label label-danger">8:00 - 10:00</span></td>
												<td>Breakfast</td>
											</tr>
											<tr>
												<td><span class="label label-danger">10:00 - 11:30</span></td>
												<td>Session 20</td>
											</tr>
											<tr>
												<td><span class="label label-danger">11:30 - 13:00</span></td>
												<td>Session 21</td>
											</tr>
											<tr>
												<td><span class="label label-danger">13:00 - 14:00</span></td>
												<td>Lunch</td>
											</tr>
											<tr>
												<td><span class="label label-danger">14:00 - 14:45</span></td>
												<td>Session 22</td>
											</tr>
											<tr>
												<td><span class="label label-danger">14:45 - 15:45</span></td>
												<td>Session 23</td>
											</tr>
											<tr>
												<td><span class="label label-danger">15:45 - 16:00</span></td>
												<td>Coffee Break</td>
											</tr>
											<tr>
												<td><span class="label label-danger">16:00 - 20:00</span></td>
												<td>Closing Ceremony and Seminar</td>
											</tr>
											<tr>
												<td><span class="label label-danger">20:00 - 21:00</span></td>
												<td>Dinner</td>
											</tr>
											<tr>
												<td><span class="label label-danger">21:00 - 23:00</span></td>
												<td>Closing Party</td>
											</tr>
										</tbody>
									</table>
								</div>

							</div>
							<!-- Content Dashboard End -->
					
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