<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Good News — News &amp; Magazine Template</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="{{config("app.theme_news")}}stylesheets/bootstrap.css" >

	<!-- Theme Style -->
	<link rel="stylesheet" type="text/css" href="{{config("app.theme_news")}}stylesheets/style.css">

	<!-- Colors -->
	<link rel="stylesheet" type="text/css" href="{{config("app.theme_news")}}stylesheets/colors/color1.css" id="colors">
   
	<!-- Animation Style -->
	<link rel="stylesheet" type="text/css" href="{{config("app.theme_news")}}stylesheets/animate.css">

	<!-- Google Fonts 
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>-->

	<!-- Favicon and touch icons  -->
	<link href="{{config("app.theme_news")}}icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="{{config("app.theme_news")}}icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="{{config("app.theme_news")}}icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="{{config("app.theme_news")}}icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
	<link href="{{config("app.theme_news")}}icon/favicon.png" rel="shortcut icon">

	<!--[if lt IE 9]>
		<script src="{{config("app.theme_news")}}javascript/html5shiv.js"></script>
		<script src="{{config("app.theme_news")}}javascript/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="header" class="header">
		<div class="top-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div id="logo" class="logo">
							<a href="{{config("app.theme_news")}}./" rel="home" title="home">
								<img src="{{config("app.theme_news")}}images/logo.svg" alt="Good News" />
							</a>
						</div>
						<div class="follow-us">
							<div class="follow-title">
								Follow Us
							</div>
							<ul class="social-links">
								<li class="facebook"><a href="{{config("app.theme_news")}}#">Follow us on Facebook</a></li>
								<li class="twitter"><a href="{{config("app.theme_news")}}#">Follow us on Twitter</a></li>
								<li class="google"><a href="{{config("app.theme_news")}}#">Follow us on Google</a></li>
								<li class="linkedin"><a href="{{config("app.theme_news")}}#">Follow us on Linkedin</a></li>
								<li class="pinterest"><a href="{{config("app.theme_news")}}#">Follow us on Pinterest</a></li>
							</ul>
						</div>
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="btn-menu"></div><!-- //mobile menu button -->
						<div class="member-area">
							<span class="login-popup"><a href="{{config("app.theme_news")}}#login-modal">Login</a></span>
							<span class="signup-popup"><a href="{{config("app.theme_news")}}#signup-modal">Become a member</a></span>
						</div>
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			 </div><!-- /.container -->
		</div><!-- /.top-wrap -->
		<div class="header-wrap">
		 <div class="container">
			<div class="row">
				<div class="col-md-9">
					<nav id="mainnav" class="mainnav">
						<ul class="menu">
							<li class="has-children"><a class="active" href="{{config("app.theme_news")}}index.html">Home</a>
								<ul class="sub-menu">
									<li><a href="{{config("app.theme_news")}}index-banner.html">Home with Banner</a></li>
									<li><a href="{{config("app.theme_news")}}index-custom.html">Home Customize</a></li>
									<li class="has-children"><a href="{{config("app.theme_news")}}#">Third Level Item</a>
										<ul class="sub-menu">
											<li><a href="{{config("app.theme_news")}}#">Sublevel 1</a></li>
											<li><a href="{{config("app.theme_news")}}#">Sublevel 2</a></li>
											<li><a href="{{config("app.theme_news")}}#">Sublevel 3</a></li>
											<li><a href="{{config("app.theme_news")}}#">Sublevel 4</a></li>
											<li><a href="{{config("app.theme_news")}}#">Sublevel 5</a></li>
										</ul><!-- /.submenu -->
									</li>
								</ul><!-- /.submenu -->
							</li>
							<li class="has-children"><a href="{{config("app.theme_news")}}#">Pages</a>
								<ul class="sub-menu">
									<li><a href="{{config("app.theme_news")}}article-endless.html">Articles</a></li>
									<li><a href="{{config("app.theme_news")}}article-detail.html">Articles Detail</a></li>
									<li><a href="{{config("app.theme_news")}}category-hide-navigation.html">Category Page</a></li>
									<li><a href="{{config("app.theme_news")}}contact.html">Contact Page</a></li>
									<li><a href="{{config("app.theme_news")}}about.html">About Page</a></li>
									<li><a href="{{config("app.theme_news")}}login.html">Login Page</a></li>
									<li><a href="{{config("app.theme_news")}}404.html">404 Page</a></li>
								</ul><!-- /.submenu -->
							</li>
							<li class="gn-mega-menu"><a href="{{config("app.theme_news")}}category.html">Mega-Menu</a>
								<div class="sub-menu">
									<div class="container">
									<div class="row">
									<div class="col-md-12">
										<div class="mega-item-wrap">
											<div class="mega-item">
												<img src="{{config("app.theme_news")}}images/thumbs/11.jpg" alt="image">	
												<h5><a href="{{config("app.theme_news")}}#">Usability Testing for Mobile Is Easy</a></h5>
											</div>
											<div class="mega-item">
												<img src="{{config("app.theme_news")}}images/thumbs/11-2.jpg" alt="image">	
												<h5><a href="{{config("app.theme_news")}}#">Infinite Scrolling Is Not for Every Website</a></h5>
											</div>
											<div class="mega-item">
												<img src="{{config("app.theme_news")}}images/thumbs/11-3.jpg" alt="image">	
												<h5><a href="{{config("app.theme_news")}}#">Infinite Scrolling Is Not for Every Website</a></h5>
											</div>
											<div class="mega-item">
												<img src="{{config("app.theme_news")}}images/thumbs/11-4.jpg" alt="image">	
												<h5><a href="{{config("app.theme_news")}}#">Ecommerce UX: 3 Design Trends to Follow and 3 to Avoid</a></h5>
											</div>
											<div class="mega-item">
												<img src="{{config("app.theme_news")}}images/thumbs/11-5.jpg" alt="image">	
												<h5><a href="{{config("app.theme_news")}}#">University Websites: Top 10 Design Guidelines</a></h5>
											</div>
											<div class="mega-item">
												<img src="{{config("app.theme_news")}}images/thumbs/11-6.jpg" alt="image">	
												<h5><a href="{{config("app.theme_news")}}#">University Websites: Top 10 Design Guidelines</a></h5>
											</div>
										</div>
										<div class="nav-mega-item">
											In this category:
											<a href="{{config("app.theme_news")}}#">All</a>
											<a href="{{config("app.theme_news")}}#">Tech</a>
											<a href="{{config("app.theme_news")}}#">Apps</a>
											<a href="{{config("app.theme_news")}}#">Dev&amp;Design</a>
											<a href="{{config("app.theme_news")}}#">Dev&amp;Design</a>
											<a href="{{config("app.theme_news")}}#">Gadget</a>
											<a href="{{config("app.theme_news")}}#">Mobile</a>
										</div>
									</div>
									</div>
									</div>
								</div><!-- /.submenu -->
							</li>
							<li class="has-children"><a href="{{config("app.theme_news")}}category.html">Category</a>
								<ul class="sub-menu">
									<li><a href="{{config("app.theme_news")}}category.html">Normal</a></li>
									<li><a href="{{config("app.theme_news")}}category-hide-navigation.html">Hide Navigation</a></li>
								</ul><!-- /.submenu -->
							</li>
							<li><a href="{{config("app.theme_news")}}ui-elements.html">UI-Elements</a></li>
						</ul><!-- /.menu -->
					</nav><!-- /nav -->
				</div><!-- /.col-md-9 -->
				<div class="col-md-3">
					<div class="search-wrap">
						<div class="search-icon"></div><!-- //mobile search button -->
						<form action="#" id="searchform" class="search-form" method="get" role="search">
							<input type="text" id="s" placeholder="Search" class="search-field">
							<input type="submit" value="&#xf002;" id="searchsubmit" class="search-submit">
							<a class="search-close" href="{{config("app.theme_news")}}#"><i class="fa fa-times-circle"></i></a>
						</form>
					</div><!-- /.search-wrap -->
				</div><!-- /.col-md-3 -->
			</div><!-- /.row -->
		 </div><!-- /.container -->
		</div><!-- /.header-wrap -->
	</header>

	<!-- Main -->
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="featured-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="content-left">
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/9.jpg" alt="img"></a>
								</div>
								<div class="cat">
									<a href="{{config("app.theme_news")}}">Mustreads</a>
								</div>
								<h3><a href="{{$box_top[0]->id}}">{{$box_top[0]->article_title}}</a></h3>
								<p class="excerpt-entry">article_content</p>
								<div class="post-meta">
									<span class="author">By <a href="{{config("app.theme_news")}}#">Paul Graham</a></span>
									<div class="activity">
										<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
									</div>
								</div>
							</article><!--  /.post -->
						</div><!-- /.content-left -->
						<div class="content-right">
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/4.jpg" alt="img"></a>
								</div>
								<div class="cat">
									<a href="{{config("app.theme_news")}}">Tech</a>
								</div>
								<h3><a href="{{$box_top[1]->id}}">{{$box_top[1]->article_title}}</a></h3>
								<div class="activity">
									<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/4-2.jpg" alt="img"></a>
								</div>
								<div class="cat">
									<a href="{{config("app.theme_news")}}">Social media</a>
								</div>
								<h3><a href="{{$box_top[2]->id}}">{{$box_top[2]->article_title}}</a></h3>
								<div class="activity">
									<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
								</div>
							</article><!--  /.post -->
						</div><!-- /.content-right -->
					</div><!-- /.featured-posts -->
					<div class="highlights-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="gn-line"></div>
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Highlights</a></h4>
						</div>
						<article class="post">
							<div class="thumb">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/7.jpg" alt="img"></a>
							</div>
							<div class="cat">
								<a href="{{config("app.theme_news")}}">Social media</a>
							</div>
							<h3><a href="{{config("app.theme_news")}}#">{{$highlights[0]->article_title}}</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
							</div>
						</article><!--  /.post -->
						<article class="post last">
							<div class="thumb">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/7-3.jpg" alt="img"></a>
							</div>
							<div class="cat">
								<a href="{{config("app.theme_news")}}">Social media</a>
							</div>
							<h3><a href="{{config("app.theme_news")}}#">{{$highlights[1]->article_title}}</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
							</div>
						</article><!--  /.post -->
						<article class="post">
							<div class="thumb">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/7-2.jpg" alt="img"></a>
							</div>
							<div class="cat">
								<a href="{{config("app.theme_news")}}">Social media</a>
							</div>
							<h3><a href="{{config("app.theme_news")}}#">{{$highlights[2]->article_title}}</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
							</div>
						</article><!--  /.post -->
						<article class="post margin-b0 last">
							<div class="thumb">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/7-4.jpg" alt="img"></a>
							</div>
							<div class="cat">
								<a href="{{config("app.theme_news")}}">Social media</a>
							</div>
							<h3><a href="{{config("app.theme_news")}}#">{{$highlights[3]->article_title}}</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
							</div>
						</article><!--  /.post -->
					</div><!-- /.highlights-posts -->
					<div class="editors-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="gn-line"></div>
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Editors Picks</a></h4>
						</div>
						<div class="post-wrap">
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/3.jpg" alt="img"></a>
								</div>
								<div class="content">
									<div class="cat">
										<a href="{{config("app.theme_news")}}">Mustreads</a>
									</div>
									<h3><a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a></h3>
									<p class="excerpt-entry">Economically, you can think of a startup as a way to compress your whole working life into a few years.</p>
									<div class="post-meta">
										<span class="author">By <a href="{{config("app.theme_news")}}#">Anna Chapman</a></span>
										<span class="time"> - 16 hours ago</span>
									</div>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/3-2.jpg" alt="img"></a>
								</div>
								<div class="content">
									<div class="cat">
										<a href="{{config("app.theme_news")}}">Mustreads</a>
									</div>
									<h3><a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a></h3>
									<p class="excerpt-entry">Instead of working at a low intensity for forty years, you work as hard as you possibly can for four.</p>
									<div class="post-meta">
										<span class="author">By <a href="{{config("app.theme_news")}}#">John Doe</a></span>
										<span class="time"> - 16 hours ago</span>
									</div>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/3-3.jpg" alt="img"></a>
								</div>
								<div class="content">
									<div class="cat">
										<a href="{{config("app.theme_news")}}">Mustreads</a>
									</div>
									<h3><a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a></h3>
									<p class="excerpt-entry">I think your best bet would be to start or join a startup. </p>
									<div class="post-meta">
										<span class="author">By <a href="{{config("app.theme_news")}}#">Mike Tyson</a></span>
										<span class="time"> - 16 hours ago</span>
									</div>
								</div>
							</article><!--  /.post -->
						</div><!-- /.post-wrap -->
					</div><!-- /.editors-posts -->
					<div class="popular-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="gn-line"></div>
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Popular Posts</a></h4>
						</div>	
						<div class="content-left">
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/8.jpg" alt="img"></a>
								</div>
								<div class="cat">
									<a href="{{config("app.theme_news")}}">Mustreads</a>
								</div>
								<h3><a href="{{config("app.theme_news")}}#">If you wanted to get rich</a></h3>
								<p class="excerpt-entry">I think your best bet would be to start or join a startup. That's been a reliable way to get rich for hundreds of years.The word "startup" dates from the 1960s, but what happens in one is very similar.</p>
								<div class="post-meta">
									<span class="author">By <a href="{{config("app.theme_news")}}#">John Doe</a></span>
									<div class="activity">
										<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
									</div>
								</div>
							</article><!--  /.post -->
						</div><!-- /.content-left -->
						<div class="content-right">
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/2.jpg" alt="img"></a>
								</div>
								<div class="content">
									<h3><a href="{{config("app.theme_news")}}#">Lots of people get rich knowing nothing more than that.</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/2-2.jpg" alt="img"></a>
								</div>
								<div class="content">
									<h3><a href="{{config("app.theme_news")}}#">Lots of people get rich knowing nothing more than that.</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/2-3.jpg" alt="img"></a>
								</div>
								<div class="content">
									<h3><a href="{{config("app.theme_news")}}#">Lots of people get rich knowing nothing more than that.</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/2-4.jpg" alt="img"></a>
								</div>
								<div class="content">
									<h3><a href="{{config("app.theme_news")}}#">Lots of people get rich knowing nothing more than that.</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/2-5.jpg" alt="img"></a>
								</div>
								<div class="content">
									<h3><a href="{{config("app.theme_news")}}#">Lots of people get rich knowing nothing more than that.</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/2-6.jpg" alt="img"></a>
								</div>
								<div class="content">
									<h3><a href="{{config("app.theme_news")}}#">Lots of people get rich knowing nothing more than that.</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
						</div><!-- /.content-right -->
					</div><!-- /.popular-posts -->
				</div><!-- /.col-md-8 -->
				<div class="col-md-4">
					<div class="sidebar-widget-1">
						<div class="widget widget-recent gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<h5 class="widget-title">Recent Posts</h5>
							<ul>
								<li>
									<div class="thumb">
										<a href="{{config("app.theme_news")}}"><img src="{{config("app.theme_news")}}images/thumbs/2.jpg" alt="img"></a>
									</div>
									<div class="content">
										<h3><a href="{{config("app.theme_news")}}#">{{$box_right_top[0]->article_title}}</a></h3>
										<div class="date">7:00 am on Feb 28</div>
									</div>
								</li>
								<li>
									<div class="thumb">
										<a href="{{config("app.theme_news")}}"><img src="{{config("app.theme_news")}}images/thumbs/2-2.jpg" alt="img"></a>
									</div>
									<div class="content">
										<h3><a href="{{config("app.theme_news")}}#">{{$box_right_top[1]->article_title}}</a></h3>
										<div class="date">7:00 am on Feb 28</div>
									</div>
								</li>
								<li>
									<div class="thumb">
										<a href="{{config("app.theme_news")}}"><img src="{{config("app.theme_news")}}images/thumbs/2-3.jpg" alt="img"></a>
									</div>
									<div class="content">
										<h3><a href="{{config("app.theme_news")}}#">{{$box_right_top[2]->article_title}}</a></h3>
										<div class="date">7:00 am on Feb 28</div>
									</div>
								</li>
							</ul>
						</div><!-- /.widget-recent -->
						<div class="widget widget-ads gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/ad.jpg" alt="image"></a>
							<p class="text-ad">Advertisement</p>
						</div><!-- /.widget-ads -->
						<div class="widget widget-most-popular gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<h5 class="widget-title">5 Most Popular</h5>
							<ul>
								<li>
									<div class="order">1</div>
									<p><a href="{{config("app.theme_news")}}">{{$most_popular[0]->article_title}}</a></p>
								</li>
								<li>
									<div class="order">2</div>
									<p><a href="{{config("app.theme_news")}}">{{$most_popular[1]->article_title}}</a></p>
								</li>
								<li>
									<div class="order">3</div>
									<p><a href="{{config("app.theme_news")}}">{{$most_popular[2]->article_title}}</a></p>
								</li>
								<li>
									<div class="order">4</div>
									<p><a href="{{config("app.theme_news")}}">{{$most_popular[3]->article_title}}</a></p>
								</li>
								<li>
									<div class="order">5</div>
									<p><a href="{{config("app.theme_news")}}">{{$most_popular[4]->article_title}}</a></p>
								</li>
							</ul>
						</div><!-- /.widget-popular -->
						<div class="widget widget-tabs gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<div class="tabs">
								<ul class="menu-tab">
									<li class="active"><a href="{{config("app.theme_news")}}#">Comments</a></li>
									<li><a href="{{config("app.theme_news")}}#">Popular</a></li>
									<li><a href="{{config("app.theme_news")}}#">Tags</a></li>
								</ul><!-- /.menu-tab -->
								<div class="content-tab">
									<div class="content">
										<ul class="comments">
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>	
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
										</ul>
									</div><!-- /.comments -->
									<div class="content">
										<ul class="pop-posts">
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1-2.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1-3.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div> 
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1-4.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div> 
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1-5.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
										</ul>
									</div><!-- /.comments -->
									<div class="content">
										<div class="tags">
											<a href="{{config("app.theme_news")}}#">business</a>
											<a href="{{config("app.theme_news")}}#">themeforest</a>
											<a href="{{config("app.theme_news")}}#">good news</a>
											<a href="{{config("app.theme_news")}}#">startups</a>
											<a href="{{config("app.theme_news")}}#">red</a>
											<a href="{{config("app.theme_news")}}#">politics</a>
											<a href="{{config("app.theme_news")}}#">europe</a>
											<a href="{{config("app.theme_news")}}#">asia</a>
										</div>
									</div><!-- /.comments -->
								</div><!-- /.content-tab -->
							</div><!-- /.tabs -->
						</div><!-- /.widget-tabs -->
						<div class="widget widget-follow-us gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<h5 class="widget-title text-dark">Follow Us</h5>
							<div class="socials">
								<a class="facebook" href="{{config("app.theme_news")}}#"><i class="fa fa-facebook"></i></a>
								<a class="twitter" href="{{config("app.theme_news")}}#"><i class="fa fa-twitter"></i></a>
								<a class="google" href="{{config("app.theme_news")}}#"><i class="fa fa-google-plus"></i></a>
								<a class="youtube" href="{{config("app.theme_news")}}#"><i class="fa fa-youtube"></i></a>
								<a class="linkedin" href="{{config("app.theme_news")}}#"><i class="fa fa-linkedin"></i></a>
								<a class="tumblr" href="{{config("app.theme_news")}}#"><i class="fa fa-tumblr"></i></a>
							</div>
						</div><!-- /.widget-follow-us -->
						<div class="widget widget-categories gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<h5 class="widget-title">Archives</h5>
							<ul class="cat-list">
								<li><a href="{{config("app.theme_news")}}#">December 2013 <span>(0)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">November 2013 <span>(22)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">October 2013 <span>(17)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">June 2013 <span>(16)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">May 2013 <span>(14)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">April 2013 <span>(10)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">March 2013 <span>(1)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">December 2012 <span>(1)</span></a></li>
							</ul>
						</div><!-- /.widget-categories -->
						<div class="widget widget-subscribe gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<h5 class="widget-title">Good News Newsetter</h5>
							<p>Subscribe to our email newsletter for good news, sent out every Monday.</p>
							<form method="post" action="#" id="subscribe-form" data-mailchimp="true">
								<div id="subscribe-content">
									<div class="input">
									   <input type="text" id="subscribe-email" name="subscribe-email" placeholder="Email">
									</div>
									<div class="button">
									   <button type="button" id="subscribe-button" class="" title="Subscribe now">Subscribe</button>
									</div>
								</div>
								<div id="subscribe-msg"></div>
							</form>
						</div><!-- /.widget-subscribe -->
					</div><!-- /.sidebar -->
				</div><!-- /.col-md-4 -->
				<div class="col-md-12">
					<div class="gnSlider gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="flex-container">
							<div class="flexslider loading">
								<ul class="slides">
									<li>
										<div class="item-wrap">
											<img src="{{config("app.theme_news")}}images/slider/1.jpg" alt="image">
											<p class="item" data-bottomtext="0">Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass</p>
										</div>
									</li>
									<li>
										<div class="item-wrap">
											<img src="{{config("app.theme_news")}}images/slider/2.jpg" alt="image">
											<p class="item" data-bottomtext="0">Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass</p>
										</div>
									</li>
									<li>
										<div class="item-wrap">
											<img src="{{config("app.theme_news")}}images/slider/3.jpg" alt="image">
											<p class="item" data-bottomtext="0">Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- /.gnSlider -->
				</div><!-- /.col-md-12 -->
				<div class="col-md-12">
					<div class="trending-posts">
						<div class="gn-line"></div>
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Trending</a></h4>
						</div>
						<div class="one-fourth gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<article class="post first">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/5.jpg" alt="img"></a>
								</div>
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">This pays especially well in technology, where you earn a premium for working fast.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">Here is a brief sketch of the economic proposition.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">Startups are not magic.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">Like all back-of-the-envelope calculations, this one has a lot of wiggle room.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">Imagine the stress of working for the Post Office for fifty years.</a></h3>
							</article><!--  /.post -->
						</div>
						<div class="one-fourth gn-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
							<article class="post first">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/5-2.jpg" alt="img"></a>
								</div>
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">Lots of people get rich knowing nothing more than that.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">If you're a good hacker in your mid twenties, you can get a job paying about $80,000 per year.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">They don't change the laws of wealth creation.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">I wouldn't try to defend the actual numbers. But I stand by the structure of the calculation.</a></h3>
							</article><!--  /.post -->
						</div>
						<div class="one-fourth gn-animation" data-animation="fadeInUp" data-animation-delay="0.4s" data-animation-offset="75%">
							<article class="post first">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/5-3.jpg" alt="img"></a>
								</div>
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">You could probably work twice as many hours as a corporate employee.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">Imagine the stress of working for the Post Office for fifty years. In a startup you compress all this stress into three or four years.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">This pays especially well in technology, where you earn a premium for working fast.</a></h3>
							</article><!--  /.post -->
						</div>
						<div class="one-fourth last gn-animation" data-animation="fadeInUp" data-animation-delay="0.6s" data-animation-offset="75%">
							<article class="post first">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/5-4.jpg" alt="img"></a>
								</div>
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">That's been a reliable way to get rich for hundreds of years.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">Like all back-of-the-envelope calculations, this one has a lot of wiggle room.</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">Three million? How do I get to be a billionaire, like Bill Gates?</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="{{config("app.theme_news")}}#">If $3 million a year seems high to some people, it will seem low to others.</a></h3>
							</article><!--  /.post -->
						</div>
					</div><!-- /.trending-posts -->
					<div class="gn-line"></div>
				</div><!-- /.col-md-12 -->
				<div class="col-md-8">
					<div class="social-media-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Social Media</a></h4>
						</div>
						<article class="post">
							<div class="thumb">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/6.jpg" alt="img"></a>
							</div>
							<div class="content">
								<div class="cat">
									<a href="{{config("app.theme_news")}}#">Mustreads</a>
								</div>
								<h3><a href="{{config("app.theme_news")}}#">If you wanted to get rich.</a></h3>
								<p class="excerpt-entry">I think your best bet would be to start or join a startup. That's been a reliable way to get rich for hundreds of years.</p>
								<div class="activity">
									<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
								</div>
							</div>
						</article><!--  /.post -->
						<article class="post">
							<div class="thumb">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/6-2.jpg" alt="img"></a>
							</div>
							<div class="content">
								<div class="cat">
									<a href="{{config("app.theme_news")}}#">Mustreads</a>
								</div>
								<h3><a href="{{config("app.theme_news")}}#">Startups are not magic.</a></h3>
								<p class="excerpt-entry">That's been a reliable way to get rich for hundreds of years.The word "startup" dates from the 1960s, but what happens in one is very similar.</p>
								<div class="activity">
									<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
								</div>
							</div>
						</article><!--  /.post -->
						<article class="post">
							<div class="thumb">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/6-3.jpg" alt="img"></a>
							</div>
							<div class="content">
								<div class="cat">
									<a href="{{config("app.theme_news")}}#">Mustreads</a>
								</div>
								<h3><a href="{{config("app.theme_news")}}#">They don't change the laws of wealth creation.</a></h3>
								<p class="excerpt-entry">That's been a reliable way to get rich for hundreds of years.The word "startup" dates from the 1960s.</p>
								<div class="activity">
									<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
								</div>
							</div>
						</article><!--  /.post -->
						<article class="post">
							<div class="thumb">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/6-4.jpg" alt="img"></a>
							</div>
							<div class="content">
								<div class="cat">
									<a href="{{config("app.theme_news")}}#">Mustreads</a>
								</div>
								<h3><a href="{{config("app.theme_news")}}#">They just represent a point at the far end of the curve.</a></h3>
								<p class="excerpt-entry">That's been a reliable way to get rich for hundreds of years.The word "startup" dates from the 1960s.</p>
								<div class="activity">
									<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
								</div>
							</div>
						</article><!--  /.post -->
					</div><!-- /.social-media-posts -->
				</div><!-- /.col-md-8 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

	<!-- Footer -->
	<footer id="footer">
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-md-4 gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="widget widget-brand">
							<div class="logo logo-footer">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/logo-footer.svg" alt="Good News"></a>
							</div>
							<p>This pays especially well in technology, where you earn a premium for working fast.</p>
						</div><!-- /.widget-brand -->
						<div class="widget widget-social">
							<h5 class="widget-title">Follow Us</h5>
							<div class="social-list">
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/facebook.svg" alt="image"></a>
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/twitter.svg" alt="image"></a>
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/youtube.svg" alt="image"></a>
								<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/dribbble.svg" alt="image"></a>
							</div>
							<a class="email" href="{{config("app.theme_news")}}#">hello@youraddress.com</a>
						</div><!-- /.widget-social -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-4 gn-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
						<div class="widget widget-twitter">
							<h5 class="widget-title">Twitter</h5>
							<div class="latest-tweets" data-number="3" data-username="envato" data-modpath="./twitter/index.php"></div>
						</div><!-- /.widget-twitter -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-2 gn-animation" data-animation="fadeInUp" data-animation-delay="0.4s" data-animation-offset="75%">
						<div class="widget widget-list">
							<h5 class="widget-title">Main</h5>
							<ul class="links-list">
								<li><a href="{{config("app.theme_news")}}#">Mustreads</a></li>
								<li><a href="{{config("app.theme_news")}}#">Tech</a></li>
								<li><a href="{{config("app.theme_news")}}#">Business</a></li>
								<li><a href="{{config("app.theme_news")}}#">Entertainment</a></li>
								<li><a href="{{config("app.theme_news")}}#">Social Media</a></li>
							</ul>
						</div><!-- /.widget-list -->
					</div><!-- /.col-md-2 -->
					<div class="col-md-2 gn-animation" data-animation="fadeInUp" data-animation-delay="0.6s" data-animation-offset="75%">
						<div class="widget widget-list">
							<h5 class="widget-title">About Us</h5>
							<ul class="links-list">
								<li><a href="{{config("app.theme_news")}}#">About Us</a></li>
								<li><a href="{{config("app.theme_news")}}#">Our Team</a></li>
								<li><a href="{{config("app.theme_news")}}#">Careers </a></li>
								<li><a href="{{config("app.theme_news")}}#">Advertise</a></li>
								<li><a href="{{config("app.theme_news")}}#">Copyright</a></li>
							</ul>
						</div><!-- /.widget-list -->
					</div><!-- /.col-md-2 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.footer-widgets -->
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; 2014 Good News, Inc.
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div>
	</footer>

	<!-- Login and Signup Form -->
	<div id="login-modal" class="login popup" style="display: none;">
		<a class="close-modal" href="{{config("app.theme_news")}}#"></a>
		<div class="form-title">
			<h4>Login</h4>
			<div class="signup">
				No account yet? <a href="{{config("app.theme_news")}}#">Sign Up</a>
			</div>
		</div>
		<div class="login-by">
			<div class="log-face-w">
				<a class="log-facebook" href="{{config("app.theme_news")}}#">Login with Facebook</a>
			</div>
			<div class="log-twit-w">
				<a class="log-twitter" href="{{config("app.theme_news")}}#">Login with Twitter</a>
			</div>
		</div>
		<form id="loginform" name="loginform" method="post">
			<div class="email-wrap">
				<input type="text" size="30" value="" class="input" id="user-email" name="log" placeholder="Email">
			</div>     
			<div class="pass-wrap">
				<input type="password" size="30" value="" class="input" id="user-pass" name="password" placeholder="Password">
			</div>
			<div class="option-login">
				<div class="remember">
					<input type="checkbox" name="check3" id="check3" class="css-checkbox" checked="checked"/><label for="check3" class="css-label">Remember me</label>
				</div>
				<div class="forgot">
					<a href="{{config("app.theme_news")}}#">I forgot my password</a>
				</div>
			</div>
			<div class="submit-login">
				<input type="submit" value="Log In" class="submit" id="submit" name="submit">
			</div>
		</form>
	</div>
	<div id="signup-modal" class="popup" style="display: none;">
		<a class="close-modal" href="{{config("app.theme_news")}}#"></a>
		<div class="form-title">
			<h4>Sign Up</h4>
			<div class="signup">
				Already a member? <a href="{{config("app.theme_news")}}#">Login</a>
			</div>
		</div>
		<div class="login-by">
			<div class="log-face-w">
				<a class="log-facebook" href="{{config("app.theme_news")}}#">Login with Facebook</a>
			</div>
			<div class="log-twit-w">
				<a class="log-twitter" href="{{config("app.theme_news")}}#">Login with Twitter</a>
			</div>
		</div>
		<form id="signupform" name="signupform" method="post">
			<div class="name-wrap">
				<input type="text" size="30" value="" class="input" id="user-name" name="name" placeholder="Name">
			</div> 
			<div class="email-wrap">
				<input type="text" size="30" value="" class="input" id="user-email2" name="log" placeholder="Email">
			</div>     
			<div class="pass-wrap">
				<input type="password" size="30" value="" class="input" id="user-pass2" name="password" placeholder="Password">
			</div>

			<div class="option-login">
				<div class="remember">
					<input type="checkbox" name="check4" id="check4" class="css-checkbox" checked="checked"/><label for="check4" class="css-label">Remember me</label>
				</div>
				<div class="forgot">
					<a href="{{config("app.theme_news")}}#">I forgot my password</a>
				</div>
			</div>

			<div class="submit-login">
				<input type="submit" value="Sign Up" class="submit" id="submit2" name="submit">
			</div>
		</form>
	</div>

	<!-- Go Top -->
	<a class="go-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<!-- Javascript -->
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.easing.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/matchMedia.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery-waypoints.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.flexslider.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.transit.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.tweet.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.cookie.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/switcher.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.doubletaptogo.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/smoothscroll.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/main.js"></script>


		<style>
	/** Colors code:
	* Main: #e8280b
	* Darker: #ff0202
	* Brighter: #f5564c
	* Hover-Button: #db260a;
	*/

	/* Main Color */
	a,
	a:hover,
	a:active,
	#mainnav ul.sub-menu > li > a:hover,
	#mainnav > ul > li > ul > li.active > a,
	#mainnav ul.sub-menu > li.has-children > a:hover:after,
	#mainnav li.gn-mega-menu .mega-item-wrap .mega-item h5 a:hover,
	#mainnav li.gn-mega-menu .nav-mega-item a:hover,
	#mainnav-mobi .social-mobi a:hover,
	.member-area .options li a:hover,
	.activity span a:hover,
	.activity span.comment a:hover:before,
	.banner .banner-items h4 a:hover,
	.sidebar-widget-1 .widget-title,
	.widget-most-popular .order,
	.most-popular .order,
	.widget-categories li a:hover,
	.comments-list .comment-head a:hover,
	.go-top:hover,
	.switcher-container span a,
	.toggle .toggle-title.active:before,
	.navigation-panel .close-nav:hover,
	.navigation-panel .close-nav:hover,
	.contact-page .contact-social li:hover i,
	.about-page .about-links li a:hover {
		color: #e8280b;
	}

	button,
	input[type="button"],
	input[type="reset"],
	input[type="submit"],
	#mainnav-mobi > ul > li.menu-addon span.signup-link a,
	.top-wrap,
	.toggle-panel,
	.elements-box.red,
	.tabs .tags a:hover,
	.posts .load-comment a,
	.gn-button,
	.dropdown li:hover,
	.error-wrap #searchsubmit,
	.tabs.style2 .content-tab.scroll li:hover:before,
	.about-page .about-twitter .follow-us,
	.flex-control-nav li a.flex-active {
		background-color: #e8280b;
	}

	.floatPanel #sidebar2 {
		border-right: 14px solid #e8280b;
	}

	.gn-gallery #gn-carousel ul.slides li.flex-active-slide img {
		border: 2px solid #e8280b;
	}

	/* Darker Color */
	#mainnav > ul > li > a:hover,
	#mainnav > ul > li > a.active,
	#mainnav > ul > li.has-children > a:hover:after,
	#mainnav > ul > li.has-children > a.active:after,
	#mainnav > ul > li.gn-mega-menu > a:hover:after,
	.trending-posts .post h3 a:hover,
	.widget-recent .content a:hover,
	.tabs .comments p a:hover,
	.tabs .pop-posts .text a:hover,
	.footer-widgets .widget-social .email:hover,
	.footer-widgets .widget-twitter li a:hover,
	.footer-widgets .widget-list li a:hover,
	.widget-most-popular li a:hover,
	.most-popular li a:hover,
	.tabs.style2 .content-tab.scroll li:hover:before {
		color: #ff0202;
	}

	/* Brighter Color */
	.editors-posts .post-meta a,
	.relate-posts .post-meta a,
	.posts .meta .author a {
		color: #f5564c;
	}

	/* Hover-Button Color */
	button:hover,
	input[type="button"]:hover,
	input[type="reset"]:hover,
	input[type="submit"]:hover,
	button:focus,
	input[type="button"]:focus,
	input[type="reset"]:focus,
	input[type="submit"]:focus,
	button:active,
	input[type="button"]:active,
	input[type="reset"]:active,
	input[type="submit"]:active,
	.error-wrap #searchsubmit:hover,
	.posts .load-comment a:hover,
	.gn-button:hover,
	.gn-button:focus,
	.gn-button:active,
	.gn-button.hover,
	.gn-button.press,
	.gn-button.pause {
		background-color: #db260a;
	}
	</style>
</body>

</html>