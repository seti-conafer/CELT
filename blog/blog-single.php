<?php
	require_once('config.php');
	$postid = htmlspecialchars($_GET['post']);
	
	if($stmt = $conn->prepare("SELECT userid, title, image, text, time FROM posts WHERE id = ?")){
     $stmt->bind_param('i',$postid);
     $stmt->execute();
     $stmt->store_result();
	 
	 if($stmt->num_rows){
		$stmt->bind_result($userid, $title, $image, $text, $time);
		$stmt->fetch();
		$stmt->close();
		$stmt = $conn->prepare("SELECT name, about, image FROM registration WHERE id= ?");
		$stmt->bind_param('s',$userid);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($username, $userabout, $userimage);
		$stmt->fetch();
		$stmt->close();
	 }else{
		 echo "404! Not Found";
		 exit();
	 }
	}else{
		echo "Error";
		exit();
	}
	$url=$_SERVER['REQUEST_URI'];
	
?>

<!DOCTYPE html>

<html dir="ltr" lang="en-US">
<head>

	<link rel="icon" href="https://celtindia.org/CELTimages/celtindia-web1.png" type="image/png" sizes="16x16">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="CELT" />
	<meta name="keywords" content="CLET,CELTINDIA,Conference,Leadership,Technology,Entrepreneur,Entrepreneurship,Leader,Conclave,Summit,August,CELTINDIA.ORG,KIITt,KISS,Ecell,Event,India,Startup,Celt2016">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://celtindia.org/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="https://celtindia.org/style.css" type="text/css" />
	<link rel="stylesheet" href="https://celtindia.org/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="https://celtindia.org/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="https://celtindia.org/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="https://celtindia.org/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="https://celtindia.org/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript" src="https://celtindia.org/js/jquery.js"></script>
	<script type="text/javascript" src="https://celtindia.org/js/plugins.js"></script>
	<!--wow Start-->
	<link rel="stylesheet" type="text/css" href="https://celtindia.org/WOW-master/css/libs/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/inlineimage.css">
	<script type="text/javascript" src="https://celtindia.org/WOW-master/dist/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<title>Blog - Conclave of Entrepreneurship, Leadership and Technology</title>

</head>

<body class="stretched">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		
		<link rel="stylesheet" href="https://celtindia.org/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="https://celtindia.org/css/style.css" type="text/css" />
<header id="header" class="transparent-header" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<div id="logo">
						<a href="index.php" class="standard-logo"><img src="logo.png" alt="CELT Logo"></a>
					</div>					
					<nav id="primary-menu" class="dark">
						<ul>
						<li><a class="wow zoomIn" data-wow-delay=".2s" href="index.php"><div>Home</div></a></li>
						<li><a class="wow zoomIn" data-wow-delay=".2s" href="kiitecell.php"><div >KIIT E-Cell</div></a>
							<ul>	
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="http://celtindia.org/kiitecell.php#ecell"><div>E-Cell</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="http://ecell.org.in/mentors.php"><div>Advisors</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="kiitecell.php#prog"><div>Our Initiatives</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="http://ecell.org.in"><div>Website</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="http://blog.ecell.org.in/"><div>Blog</div></a>
					    </ul>
						</li>
						<li><a class="wow zoomIn" data-wow-delay=".2s" href="about.php"><div >About Us</div></a>
							<ul>
							<li><a class="wow zoomIn" data-wow-delay=".2s"   href="about.php#celt"><div>CELT</div></a>	
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="about.php#kiss"><div>KISS</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="about.php#kiit"><div>KIIT</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="about.php#tbi"><div>KIIT TBI </div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="about.php#ksom"><div>KSOM</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="about.php#boa"><div>Board Of Advisors</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="about.php#boa"><div>Organising Committee</div></a>
					    </ul>
						</li>
						<li><a class="wow zoomIn" data-wow-delay=".2s" href="india.php"><div>India</div></a>
						<ul>
							<li><a class="wow zoomIn" data-wow-delay=".2s" href="india.php"><div>Pre Conference Tour</div></a></li>
							<li><a class="wow zoomIn" data-wow-delay=".2s" href="india.php"><div>Post Conference Tour</div></a></li>
						</ul>


						</li>
					    <li><a class="wow zoomIn" data-wow-delay=".2s" href="conference.php"><div>Conference itinerary</div></a>	
					    <ul>	
					    	<li><a class="wow zoomIn" data-wow-delay=".2s" href="conference.php#sched"><div>Conference Schedule</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s" href="conference.php#prog"><div>Conference Programming</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s" href="conference.php#cap"><div>Conference Ambassador Program </div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s" href="conference.php#events"><div>Conference Events</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s" href="conference.php#key"><div>Keynote Person</div></a>
					    </ul>
					    </li>
					    <li><a class="wow zoomIn" data-wow-delay=".2s" href="http://celtindia.org/dashboard/login.html"><div>Apply</div></a></li>
						
						<li><a class="wow zoomIn" data-wow-delay=".2s" href="contact.php"><div>Contact Us</div></a>
							<ul>	
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="http://celtindia.org/contact.php#pclub"><div>Partnership Club</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="http://celtindia.org/contact.php#spon"><div>Sponsors</div></a>
					    	
					    	<li><a class="wow zoomIn" data-wow-delay=".2s" 	 href="DelegateRelations.php"><div>Delegate Relations</div></a>
					    	<li><a class="wow zoomIn" data-wow-delay=".2s"   href="DelegateRelations.php#visa"><div>Visa Help</div></a>
					    </ul>
						</li>

						<li><a class="wow zoomIn" data-wow-delay=".2s"  href="faq.php"><div>FAQs</div></a></li>
						<li><a class="wow zoomIn" data-wow-delay=".2s"  href="https://celtindia.org/blog/" target="_blank"><div>Blog</div></a></li>
						</ul>
					</nav>
				</div>
			</div>
</header>
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Blog Single</h1>
				<!--ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li class="active">Blog Single</li>
				</ol-->
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<div class="single-post nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry clearfix">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h2><?php echo $title ?></h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo date(" j F, Y", strtotime($time)); ?></li>
									<!--li><a href="#"><i class="icon-user"></i> admin</a></li>
									<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
									<li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
									<li><a href="#"><i class="icon-camera-retro"></i></a></li-->
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<a href="#"><img src="images/blog/<?php echo $image;?>" alt="Blog Single"></a>
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<?php echo $text; ?>
									<!-- Post Single - Content End -->


									<div class="clear"></div>

									<!-- Post Single - Share
									============================================= -->
									<div class="si-share noborder clearfix">
										<span>Share this Post:</span><br>
											
										<div style="float:left; width:100%;">
											<a class="twitter-share-button"
												  href="https://twitter.com/share"
												  data-size="large"
												  data-url="<?php $url?>"
												  data-via="celtindia"
												  data-related="twitterapi,twitter"
												  data-hashtags="celt2016,india,entreprenureship,august,bbsr"
												  data-text="For the entrepreneurs celindia.org">
													Tweet
											</a>
											<div class="fb-share-button" data-href="<?php $url?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fceltindia.org%2Fblog&amp;src=sdkpreparse">Share</a></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- facbook end-->

<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="<?php $url?>" ></script>

										</div>
									</div><!-- Post Single - Share End -->

								</div>
							</div><!-- .entry end -->
							<div class="line"></div>

							<!-- Post Author Info
							============================================= -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Posted by <span><a href="#"><?php echo $username; ?></a></span></h3>
								</div>
								<div class="panel-body">
									<div class="author-image">
										<img src="images/blog/<?php echo $userimage;?>" alt="" class="img-circle">
									</div>
									<?php echo $userabout; ?>
								</div>
							</div><!-- Post Single - Author End -->

							<div class="line"></div>


							<!-- Comments
							============================================= -->
							<div id="comments" class="clearfix">

								<h3 id="comments-title"> Comments</h3>

								<!-- Comments List
								============================================= -->
								<ol class="commentlist clearfix">
								<?php
										$result = $conn->query("SELECT name, comment, time FROM comments WHERE postid = $postid");
										if($result->num_rows){
										while($res = $result->fetch_assoc()){
								?>
									<li class="comment even thread-even depth-1" id="li-comment-1">

										<div id="comment-1" class="comment-wrap clearfix">

											<div class="comment-meta">

												<div class="comment-author vcard">

													<span class="comment-avatar clearfix">
													<img alt='' src='avatar.png' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

												</div>

											</div>

											<div class="comment-content clearfix">

												<div class="comment-author"><?php echo $res['name']; ?><span><a href="#" title="Permalink to this comment"><?php echo date(" j F, Y", strtotime($time)); ?></a></span></div>

												<p><?php echo $res['comment']; ?></p>

												<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

											</div>

											<div class="clear"></div>

										</div>


										

									</li>

								<?php
										}
									}
								?>	
								<div id="temp" class="hidden">
									<li class="comment even thread-even depth-1" id="li-comment-1">

										<div id="comment-1" class="comment-wrap clearfix">

											<div class="comment-meta">

												<div class="comment-author vcard">

													<span class="comment-avatar clearfix">
													<img alt='' src='avatar.png' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

												</div>

											</div>

											<div class="comment-content clearfix">

												<div class="comment-author" id="tempName"></div>

												<p id="tempText"></p>

												<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

											</div>

											<div class="clear"></div>

										</div>


										

									</li>
								</div>

								</ol><!-- .commentlist end -->

								<div class="clear"></div>

								<!-- Comment Form
								============================================= -->
								<div id="respond" class="clearfix">

									<h3 id="enterPrompt">Leave a <span id="enterSome">Comment</span></h3>

									<div class="clearfix" id="commentform">

										<div class="col_one_third">
											<label for="author">Name</label>
											<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
										</div>

										<div class="col_one_third">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
										</div>

										<input type="hidden" name="postid" value="<?php echo $postid ?>" id="postid"></input>

										<div class="clear"></div>

										<div class="col_full">
											<label for="comment">Comment</label>
											<textarea name="comment" id="comment" placeholder="Upto 400 characters" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
										</div>

										<div class="col_full nobottommargin">
											<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
										</div>

									</div>

								</div><!-- #respond end -->

							</div><!-- #comments end -->

						</div>

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget-twitter-feed clearfix">

								<h4>Twitter Feed</h4>
								<ul class="iconlist twitter-feed" data-username="envato" data-count="2">
									<li><a class="twitter-timeline" data-width="220" data-height="400" href="https://twitter.com/celtindia">Tweets by celtindia</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></li>
								</ul>

								
							</div>						
						</div>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php require_once 'footer.php'; ?>
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="blogcomment.js"></script>
	<script type="text/javascript" src="https://celtindia.org/js/functions.js"></script>

</body>
</html>