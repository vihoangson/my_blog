
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

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>

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
		            		<div class="member">
		            			<div class="welcome">
		            				Welcome <span class="name">Maria</span>
			            			<div class="member-options">
			            				<div class="avatar">
			            					<div class="thumb">
			            						<img src="{{config("app.theme_news")}}images/user.jpg" alt="image">
			            					</div>
			            					<span class="fullname">Maria Sharapova</span>
			            				</div>
			            				<ul class="options">
			            					<li><a href="{{config("app.theme_news")}}#">My Profile</a></li>
			            					<li><a href="{{config("app.theme_news")}}#">My Account</a></li>
			            					<li><a href="{{config("app.theme_news")}}#">My Saved Items</a></li>
			            				</ul>
			            				<div class="logout"><a href="{{config("app.theme_news")}}#">Logout</a></div>
			            			</div>
		            			</div>
		            			
		            		</div>
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
							<li class="has-children"><a href="{{config("app.theme_news")}}index.html">Home</a>
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
							<li class="has-children"><a class="active" href="{{config("app.theme_news")}}#">Pages</a>
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
	</header><!-- /header -->

	<!-- Main -->
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="post-wrap posts post-single">
						<article class="post">
							<div class="head-post">
								<h2>{{$rs->article_title}}</h2>
								<p>I think your best bet would be to start or join a startup. That's been a reliable way to get rich for hundreds of years.The word "startup" dates from the 1960s, but what happens in one is very similar.</p>
								<div class="meta">
									<span class="author">By <a href="{{config("app.theme_news")}}#">Anna Chapman</a></span>
									<span class="time"> Published on May 07, 2004.</span>
								</div>
							</div><!-- /.head-post -->
							<div class="body-post">
								<div class="share-post">
									<ul>
										<li class="count-share"><span class="numb">23</span><span>shares</span></li>
										<li class="email"><a href="{{config("app.theme_news")}}">Email</a></li>
										<li class="facebook"><a href="{{config("app.theme_news")}}">Facebook</a></li>
										<li class="twitter"><a href="{{config("app.theme_news")}}">Twitter</a></li>
										<li class="more"><a href="{{config("app.theme_news")}}">More</a></li>
									</ul>
								</div><!-- /.share-post -->
								<div class="main-post">
									<div class="entry-post">
										{!! $rs->article_content !!}
									</div><!-- /.entry-post -->
									<div class="help-post">
										<div class="helpful">
											<a class="like" href="{{config("app.theme_news")}}#">I found this helpful </a>
											<a class="dislike" href="{{config("app.theme_news")}}#">I did not find this helpful</a>
										</div>
										<div class="tags">
											<a href="{{config("app.theme_news")}}#">Startups</a>
											<a href="{{config("app.theme_news")}}#">Technology</a>
											<a href="{{config("app.theme_news")}}#">Millions of dollars</a>
											<a href="{{config("app.theme_news")}}#">Paul Graham</a>
										</div>
									</div><!-- /.help-post -->
									<div class="author-post">
										<div class="avatar-author">
											<img src="{{config("app.theme_news")}}images/author.jpg" alt="image">
										</div>
										<div class="info-author">
											<h4>Angela Snow</h4>
											<p>John is an American Graphic &amp; Web Designer, Pixel &amp; CSS lover, WordPress &amp; coffee addict. He loves UI and UX design for mobile and web apps.</p>
										</div>
									</div><!-- /.author-post -->
					               	<div class="comment-post">
					                  	<div class="comments-list">
					                     	<h4 class="title">3 Comments</h4>
											<ul>
												<li>
												   	<article class="comment">
												   		<div class="comment-order">1</div>
											         	<div class="avatar">
												            <img src="{{config("app.theme_news")}}images/user.jpg" alt="image">
												        </div>
												      	<div class="comment-text">
												      		<div class="comment-head">
												      			<span class="author">Olya</span>
												      			<span class="date">Jan 16, 2013</span>
												      			<span class="reply"><a href="{{config("app.theme_news")}}#">Reply</a></span>
												      		</div>
												        	<p class="comment-body">If you have too many tasks to do, or are scattered during your workday, breathe. It will help bring you into focus, to concentrate on the most important task you need to be focusing on right now.</p>
												      	</div>                     
												   	</article><!-- /.comment -->
												</li>
												<li>
												   	<article class="comment">
												   		<div class="comment-order">2</div>
											         	<div class="avatar">
												            <img src="{{config("app.theme_news")}}images/user.jpg" alt="image">
												        </div>
												      	<div class="comment-text">
												      		<div class="comment-head">
												      			<span class="author">Olya</span>
												      			<span class="date">Jan 16, 2013</span>
												      			<span class="reply"><a href="{{config("app.theme_news")}}#">Reply</a></span>
												      		</div>
												        	<p class="comment-body">If you have too many tasks to do, or are scattered during your workday, breathe. It will help bring you into focus, to concentrate on the most important task you need to be focusing on right now.</p>
												      	</div>                     
												   	</article><!-- /.comment -->
												</li>
												<li>
												   	<article class="comment">
												   		<div class="comment-order">3</div>
											         	<div class="avatar">
												            <img src="{{config("app.theme_news")}}images/user.jpg" alt="image">
												        </div>
												      	<div class="comment-text">
												      		<div class="comment-head">
												      			<span class="author">Olya</span>
												      			<span class="date">Jan 16, 2013</span>
												      			<span class="reply"><a href="{{config("app.theme_news")}}#">Reply</a></span>
												      		</div>
												        	<p class="comment-body"><strong>@Olya</strong> If you have too many tasks to do, or are scattered during your workday, breathe. It will help bring you into focus, to concentrate on the most important task you need to be focusing on right now.</p>
												      	</div>                     
												   	</article><!-- /.comment -->
												</li>
											</ul>
					                  	</div><!-- /.comments-list -->
										<div id="respond" class="comment-respond">
											<h4 class="title">Join the Conversation</h4>
											<form class="comment-form" id="comment-form" method="post" action="#">
												<div class="name-comment">
											   		<input type="text" size="32" value="" tabindex="1" placeholder="Name" name="name" required>
											   	</div>
											   	<div class="email-comment">
													<input class="email-comment" type="text" size="32" value="" tabindex="2" placeholder="Email" name="email" required>
													<span>Will not be published</span>
												</div>
												<div class="message-comment">
													<textarea tabindex="4" placeholder="Message" name="comment" required></textarea>
											   	</div>
											   	<div class="submit-comment">
													<input class="send-btn gn-button" type="submit" value="Send" id="submit-comment" name="submit-comment">
												</div>
											</form><!-- /.comment-form -->
										</div><!-- /#respond -->
					            	</div><!-- /.comment-post -->
					            	<div class="relate-posts">
						            	<div class="section-title">
											<h4><a href="{{config("app.theme_news")}}#">Read These Next</a></h4>
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
											</article><!-- /.post -->
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
											</article><!-- /.post -->
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
											</article><!-- /.post -->
										</div>
					            	</div><!-- /.relate-posts -->
					            	<div class="recommend-posts">
									    <div class="section-title">
											<h4><a href="{{config("app.theme_news")}}#">Recommended for You</a></h4>
										</div>
										<div class="post-wrap">
											<article class="post">
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/7.jpg" alt="img"></a>
												</div>
												<div class="cat">
													<a href="{{config("app.theme_news")}}">Social media</a>
												</div>
												<h3><a href="{{config("app.theme_news")}}#">Like all back-of-the-envelope calculations, this one has a lot of wiggle room.</a></h3>
												<div class="activity">
													<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
												</div>
											</article><!-- /.post -->
											<article class="post margin-b0 last">
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/thumbs/7.jpg" alt="img"></a>
												</div>
												<div class="cat">
													<a href="{{config("app.theme_news")}}">Social media</a>
												</div>
												<h3><a href="{{config("app.theme_news")}}#">Like all back-of-the-envelope calculations, this one has a lot of wiggle room.</a></h3>
												<div class="activity">
													<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
												</div>
											</article><!-- /.post -->
										</div>
					            	</div><!-- /.recommend-posts -->
								</div><!-- /.main-post -->
							</div><!-- /.body-post -->
						</article><!-- /.post -->
					</div><!-- /.post-wrap -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

	<!-- Footer -->
	<footer id="footer">
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
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
					<div class="col-md-4">
						<div class="widget widget-twitter">
							<h5 class="widget-title">Twitter</h5>
							<div class="latest-tweets" data-number="3" data-username="envato" data-modpath="./twitter/index.php"></div>
						</div><!-- /.widget-twitter -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-2">
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
					<div class="col-md-2">
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