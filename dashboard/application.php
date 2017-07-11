<?php
session_start();
if(empty($_SESSION['userid'])){
	header('location: login.html');
	exit();
}
require_once('config.php');
$userid =$_SESSION["userid"];
$prof = $conn->query("SELECT name FROM profile where userid = $userid");
$result=$conn->query("SELECT cpay, cdel, csch, camb from registration WHERE id = $userid");
$row = $result->fetch_array();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /> 
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="css/materialize.css" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>CELT Ambassador Program</title>

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
                            <li style="border-bottom: solid #f1f1f1;"><a href="profile.php"><div>Profile</div></a>
                            </li>
							<li style="border-bottom: solid #f1f1f1;"><a href="application.php"><div>Application
							<?php
							if(!$row['cdel']){
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

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">
			<?php 
			if($prof->num_rows){
			if(!$row['cdel']){ ?>
				<div class="container clearfix">
					<div class="fancy-title title-dotted-border title-center">
							<h3>CELT Scholarship : Registrations</h3>
					</div>
				<form action="applicationget.php" id="delegateForm" name="delegateForm" method="post" enctype="multipart/form-data">
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
										<h5 style="font-size: 1.3rem;">
											<span class="materialize-textarea">
												Please provide a brief overview of your background and career to date <strong>(academic achievements, community involvement and relevant hobbies)</strong>. Please explain how you think you are eligible for participation in respect of your professional activities, knowledge, experience or positions held (Not more than 600 characters).
											</span>
										</h5>
										</div>
										
										<div class="input-field col s6">
							                <textarea required name="background" id="textarea1" class="materialize-textarea" length="600"></textarea>
							              </div>						
									</div>
								</div>

								<!--div class="entry clearfix">
									<div class="entry-timeline">
										2
										<div class="timeline-divider"></div>
									</div>
									
									<div class="entry-content">
										<div class="entry-title">
										<h5 style="font-size: 1.3rem;">
											<a class="materialize-textarea">
												Given by the adoption by the <strong>United Nation Development Program (UNDP)</strong> of the <strong>Sustainable Development Goals (SDGs)</strong> by the end of 2030, what would be your opinion regarding the fulfilling of the Development Goals in the fields of <i>poverty control, fighting inequality</i> and <i>tackling climate change</i>? (Not more than 600 characters).
											</a>
										</h5>
										</div>
										
										<div class="input-field col s6">
							                <textarea required name="SDGS" id="textarea2" class="materialize-textarea" length="600"></textarea>
							              </div>						
									</div>
								</div-->

								<div class="entry clearfix">
									<div class="entry-timeline">
										2
										<div class="timeline-divider"></div>
									</div>
									
									
									
									<div class="entry-content">
										<div class="input-field col s6">
							                <textarea required name="leadership" id="textarea3" class="materialize-textarea" length="600"></textarea>
	                                  		<label for="textarea3">What is the meaning of <strong>leadership</strong> to you and how is it related for <strong>Entrepreneurship</strong> and <strong>Technology</strong>? (not more than 600 characters)
	                                  		</label>
							              </div>
																
									</div>
								</div>

								<div class="entry clearfix">
									<div class="entry-timeline">
										3
										<div class="timeline-divider"></div>
									</div>
									
									
									
									<div class="entry-content">
										<div class="input-field col s6">
							                <textarea required name="expectation" id="textarea4" class="materialize-textarea" length="600"></textarea>
			                                  <label for="textarea4">What do you expect from <strong>CELT</strong>? What would you like to have in the conference? 
			                                    (Not More than 600 characters)
			                                  </label>
							              </div>
																
									</div>
								</div>

							
						</div><!-- #posts end -->

					</div><!-- .postcontent end -->		
					<div class="row">
				      				<button class="col s12 btn waves-effect waves-light" type="submit" name="action">Submit Now<i class="material-icons right"></i></button>
				      				
				    </div>
				    
			</div>
		</div>
		</form>

				<?php }else{
				?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<i class="icon-gift">
							</i>
							<strong>Congratulations!</strong>
							<?php echo "Application Completed Successfully";}?>

						</div>
				
				<?php }else{
					?>
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					        <i class="icon-gift"></i>
					        <strong><?php echo "Please Complte Profile.";}?></strong>
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

	<!-- Portfolio Script
	============================================= -->

</body>
</html>