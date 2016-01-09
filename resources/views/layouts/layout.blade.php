<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Multipress - Responsive Multipurpose HTML5 Template">
	<meta name="author" content="">

	<title> @yield("title","Premium Layers - Responsive HTML5 vCard Template")</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= PATH_THEME; ?>img/favicon.ico">
	<link rel="apple-touch-icon" href="<?= PATH_THEME; ?>img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= PATH_THEME; ?>img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= PATH_THEME; ?>img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= PATH_THEME; ?>img/apple-touch-icon-144x144.png">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,800,700italic,600italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Neuton:400,200,300' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
	<script src="/js/libs/respond.min.js"></script>
	<![endif]-->

	<!-- Bootstrap Core CSS -->
	<link href="<?= PATH_THEME; ?>css/bootstrap.css" rel="stylesheet">

	<!-- Theme Styles CSS-->
	<link href="<?= PATH_THEME; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/style.css" >
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/flexslider.css"/>
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/nivo-lightbox.css" />
	<link rel="stylesheet" href="<?= PATH_THEME; ?>images/themes/default/default.css" />
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/animate.css" />

	<!--[if lt IE 9]>
	<script src="/js/libs/html5.js"></script>
	<![endif]-->

	<!-- Style Switch -->
	<link rel="stylesheet" type="text/css" href="<?= PATH_THEME; ?>css/colors/yellow-black.css" title="yellow" media="screen" />

</head>
<body>

<!-- LOADING MASK -->
<div id="mask">   
    <div class="loader">
        <img src="<?= PATH_THEME; ?>images/loading.gif" alt='loading'>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container no-padding">
		<div class="row">
			<div class="col-md-3 l-content">
				<div class="profile-pic">
					<div class="pic-bg"><img src="<?= PATH_THEME; ?>images/profile-avatar.png" class="img-responsive" alt=""/></div>
				</div>
				<nav>
				<ul class="navigation">
					<li><a href="#">Profile <i class="fa fa-user"></i></a></li>
					<li><a href="#">Work <i class="fa fa-briefcase"></i></a></li>
					<li><a href="#">Resume <i class="fa fa-file-text"></i></a></li>
					<li><a href="#">Blog <i class="fa fa-comment"></i></a></li>
					<li><a href="#">Contact <i class="fa fa-envelope"></i></a></li>
				</ul>
				</nav>
			</div>

			<div class="col-md-9 r-content">
				<div class="flexslider">
					<div class="slides">
						@yield("detail_page")
						<!-- SECTION 1 - HOMEPAGE -->
						<section class="no-display">
							<div class="profile" id="1">
								<h2>Hello, I am <span>Vi Hoàng Sơn</span><br>PHP Developer</h2>
								<div class="sep1"></div>
								<p>Tôi có kinh nghiệm trên 5 năm với vị trí lập trình viên website PHP. Niềm đam mê của tôi là được tìm tòi những điều mới mẻ và tạo ra những sản phẩm tốt nhất. Thông qua những dự án đã làm tôi có nhiều kỹ năng với các nền tảng frameword PHP như Laravel, Sympony, Codeigniter ... </p>
								<div class="personal-info col-md-12 no-padding">
									<h4>Personal Info</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<div class="p-info"><em>name</em><span>Vi Hoàng Sơn</span></div>
										</li>
										<li>
											<div class="p-info"><em>date of birth</em><span>October 06, 1986</span></div>
										</li>
										<li>
											<div class="p-info"><em>e-mail</em><span>vihoangson@gmail.com</span></div>
										</li>
										<li>
											<div class="p-info"><em>address</em><span>178/7p Hậu Giang Tp.HCM</span></div>
										</li>
										<li>
											<div class="p-info"><em>phone</em><span>0121-885-1144</span></div>
										</li>
										<li>
											<div class="p-info"><em>website</em><span><a href='http://www.vihoangson.com'>www.vihoangson.com</a></span></div>
										</li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</section>
						<!-- SECTION 1 - HOMEPAGE -->

						<!-- SECTION 2 - WORKS / PROJECTS / PORTFOLIO -->
						<section class="no-display">
							<div class="works" id="2">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3>Portfolio</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>Go to next/previous page</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="portfolio-wrap">
									<div class="row">
										<ul id="filter-list" class="clearfix">
											<li class="filter" data-filter="all"><i class="fa fa-th"></i> All</li>
											<li class="filter" data-filter="webdesign">Web Design</li>
											<li class="filter" data-filter="appicon">App Icons</li>
											<li class="filter" data-filter="iosappui">iOS App UI</li>
											<li class="filter" data-filter="illustration">Illustration</li>
										</ul>
										<ul id="portfolio">
											<li class="item col-md-4 webdesign">
												<a title="Example 1" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/1.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 illustration">
												<a title="Sample 2" href="https://www.youtube.com/watch?v=L9szn1QQfas" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/2.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 appicon">
												<a title="i'm Number 3" href="http://vimeo.com/71071717" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/3.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 iosappui">
												<a title="Example 4" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/4.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 iosappui">
												<a title="Sample 5" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/5.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 illustration">
												<a title="Lorem ipsum 6" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/6.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 webdesign">
												<a title="Example 7" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/7.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 iosappui">
												<a title="Sample 8" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/8.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 webdesign">
												<a title="Project 9" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/9.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 illustration">
												<a title="Example 10" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/10.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 appicon">
												<a title="Item 11" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/11.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 iosappui">
												<a title="Sample 12" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/12.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 2 - WORKS / PROJECTS / PORTFOLIO -->

						<!-- SECTION 3 - CV / RESUME -->
						<section class="no-display">
							<div class="item resume" id="3">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3>Resume</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>Go to next/previous page</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="resume-info">
									<h4>Education</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<h5>Academy of Art University</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2001 - 2004</span>
											<p>Academy of Art University's School of Web Design & New Media is the intersection between traditional design and new technologies.</p>
										</li>
										<li>
											<h5>IT Technical Institute</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2005 - 2008</span>
											<p>Information technology (IT) workers can be found in many types of organizations. According to the U.S. Department of Labor, "In the modern workplace, it is imperative that Information Technology (IT) works both effectively and reliably</p>
										</li>
										<li>
											<h5>Web Design School</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2009 - 2012</span>
											<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
										</li>
									</ul>
								</div>
								<div class="skills-info">
									<h4>Skills</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<p>Wordpress Development <span>71%</span></p>
											<div class="skills-bg"><span class="skill1"></span></div>
										</li>
										<li>
											<p>Photoshop <span>85%</span></p>
											<div class="skills-bg"><span class="skill2"></span></div>
										</li>
										<li>
											<p>HTML5/CSS3 <span>76%</span></p>
											<div class="skills-bg"><span class="skill3"></span></div>
										</li>
										<li>
											<p>Ruby on Rails <span>53%</span></p>
											<div class="skills-bg"><span class="skill4"></span></div>
										</li>
										<li>
											<p>Social Marketing <span>69%</span></p>
											<div class="skills-bg"><span class="skill5"></span></div>
										</li>
									</ul>
								</div>
								<div class="services-info">
									<h4>Services</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<i class="fa fa-cloud"></i>
											<h5>Design</h5>
										</li>
										<li>
											<i class="fa fa-smile-o"></i>
											<h5>Coding</h5>
										</li>
										<li>
											<i class="fa fa-desktop"></i>
											<h5>Responsive</h5>
										</li>
										<li>
											<i class="fa fa-text-width"></i>
											<h5>Planing</h5>
										</li>
										<li>
											<i class="fa fa-comment"></i>
											<h5>Wordpress</h5>
										</li>
										<li>
											<i class="fa fa-picture-o"></i>
											<h5>Photography</h5>
										</li>
									</ul>
								</div>
								<div class="resume-info">
									<h4>Work Experience</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<h5>Graphic River</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2001 - 2004</span>
											<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
										</li>
										<li>
											<h5>Video Hive</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2005 - 2008</span>
											<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
										</li>
										<li>
											<h5>Themeforest</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2009 - 2014</span>
											<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
										</li>
									</ul>
								</div>
							</div>
						</section>
						<!-- SECTION 3 - CV / RESUME -->

						@include("blog")

						<!-- SECTION 5 - CONTACT -->
						<section class="no-height">
							<div class="item contact" id="5">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3>Contact Us</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>Go to next/previous page</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="map">
									<div class="gmap">
										<div id="map"></div>
									</div>
								</div>
								<div class="contact-info">
									<h4>Contact info</h4>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
									<ul>
										<li><i class="fa fa-home"></i> lorem ipsum street</li>
										<li><i class="fa fa-phone"></i> +399 (500) 321 9548</li>
										<li><i class="fa fa-envelope"></i> info@domain.com</li>
									</ul>
								</div>
								<div class="contact-form">
									<h4>Send us a message</h4>
									<form id="contactForm11" action="/contact" method="post">
										<div class="row">
											<div class="col-md-4">
												<input type="text" name="senderName" id="senderName" placeholder="name">
												<input type="email" name="senderEmail" id="senderEmail" placeholder="e-mail">
												<input type="text" name="subject" id="subject" placeholder="Subject">
											</div>
											<div class="col-md-8">
												<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
												<button type="submit">Send Message</button>
											</div>
										</div>
									</form>
									<div id="successMessage" class="successmessage">
										<p><span class="success-ico"></span> Thanks for sending your message! We'll get back to you shortly.</p>
									</div>
									<div id="failureMessage" class="errormessage">
										<p><span class="error-ico"></span> There was a problem sending your message. Please try again.</p>
									</div>
									<div id="incompleteMessage" class="statusMessage">
										<p>Please complete all the fields in the form before sending.</p>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 5 - CONTACT -->
					</div>
				</div>

				<!-- FOOTER -->
				<footer>
					<div class="row">
						<div class="col-md-7">
							<p>&copy; 2014 <a href='/blogs'>Vi Hoàng Sơn</a>. All Rights Reserved</p>
						</div>
						<div class="col-md-5">
							<ul class="social">
								<li><a href="http://facebook.com/vihoangson"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://facebook.com/vihoangson"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://facebook.com/vihoangson"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="http://facebook.com/vihoangson"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<!-- MAIN CONTENT -->

<!-- JavaScript -->
<script src="<?= PATH_THEME; ?>js/jquery-1.11.3.min.js"></script>
<script src="<?= PATH_THEME; ?>js/bootstrap.js"></script>
<script src="<?= PATH_THEME; ?>js/jquery.flexslider.js"></script>
<script src="<?= PATH_THEME; ?>js/jquery.easing.js"></script>
<script src="<?= PATH_THEME; ?>js/jquery.mixitup.min.js"></script>
<script src="<?= PATH_THEME; ?>js/nivo-lightbox.min.js"></script>
<script src="<?= PATH_THEME; ?>js/jquery.appear.js"></script>
<script src="<?= PATH_THEME; ?>js/jquery.inview.js"></script>
<script src="<?= PATH_THEME; ?>js/main.js"></script>
<script src="<?= PATH_THEME; ?>js/contact.js"></script>
<script src="<?= PATH_THEME; ?>js/animations.js"></script>

@if(Config::get('myblog.map_google'))	
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?= PATH_THEME; ?>js/gmaps.js"></script>
@endif
<!-- 
 -->

@yield("script_custom")
</body>
</html>