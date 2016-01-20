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
	<link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
	<link href="icon/favicon.png" rel="shortcut icon">

	<!--[if lt IE 9]>
		<script src="{{config("app.theme_news")}}javascript/html5shiv.js"></script>
		<script src="{{config("app.theme_news")}}javascript/respond.min.js"></script>
	<![endif]-->
</head>

<body class="change-panel">
   	<!-- Header -->
   	@include("articles.includes.menu_header")

	<!-- Main -->
	<section id="main" class="article-endless">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div id="sidebar2">
						<div class="tabs style2">
							<ul class="menu-tab">
								<li class="active"><a href="#">Popular</a></li>
							   	<li><a href="#">Latest</a></li>
							</ul><!-- /.menu-tab -->
							<div class="content-tab scroll">
							   	<div class="content">
									<ul class="content-list">
										@foreach ($rs as $element)
											<li><a class="link_endless" data-id="{{$element->id}}" href="/article/page/detail/{{$element->id}}">{{$element->article_title}}</a></li>
										@endforeach
									</ul>
							   	</div><!-- /.content-list -->
							   	<div class="content">
									<ul class="content-list">
										@foreach ($rs as $element)
											<li><a href="/article/page/detail/{{$element->id}}">{{$element->article_title}}</a></li>
										@endforeach
									</ul>
							   	</div><!-- /.comments -->
							</div><!-- /.content-tab -->
						</div><!-- /.tabs -->
						<div class="toggle-panel" style="display: none"></div>
					</div><!-- /#sidebar2 -->
				</div><!-- /.col-md-4 -->
				<div class="col-md-8">
					<div class="post-wrap posts posts-list">
						<article class="post"></article><!-- /.post -->
						<article class="postss hidden">
							<div class="head-post">
								<h2><a href="#">All they had to do was play hardball with licensees and copy more innovative products reasonably promptly.</a></h2>
								<p>I think your best bet would be to start or join a startup. That's been a reliable way to get rich for hundreds of years.The word "startup" dates from the 1960s, but what happens in one is very similar.</p>
								<div class="meta">
									<span class="author">By <a href="#">Paul Graham</a></span>
									<span class="time"> Published on May 07, 2004.</span>
								</div>
							</div><!-- /.head-post -->
							<div class="body-post">
								<div class="main-post">
									<div class="entry-post">
										<p>If you wanted to get rich, how would you do it? I think your best bet would be to start or join a startup. That's been a reliable way to get rich for hundreds of years. The word "startup" dates from the 1960s, but what happens in one is very similar to the venture-backed trading voyages of the Middle Ages.</p>
										<p>Startups usually involve technology, so much so that the phrase "high-tech startup" is almost redundant. A startup is a small company that takes on a hard technical problem.</p>
										<img src="{{config("app.theme_news")}}images/image-content.jpg" alt="image">
										<p>Here is a brief sketch of the economic proposition. If you're a good hacker in your mid twenties, you can get a job paying about $80,000 per year. So on average such a hacker must be able to do at least $80,000 worth of work per year for the company just to break even. You could probably work twice as many hours as a corporate employee, and if you focus you can probably get three times as much done in an hour. [1] You should get another multiple of two, at least, by eliminating the drag of the pointy-haired middle manager who would be your boss in a big company. Then there is one more multiple: how much smarter are you than your job description expects you to be? Suppose another multiple of three. Combine all these multipliers, and I'm claiming you could be 36 times more productive than you're expected to be in a random corporate job. [2] If a fairly good hacker is worth $80,000 a year at a big company, then a smart hacker working very hard without any corporate bullshit to slow him down should be able to do work worth about $3 million a year.</p>
									</div><!-- /.entry-post -->
									<div class="tags">
										<h4>In this article:</h4>
										<a href="#">Startups</a>
										<a href="#">Technology</a>
										<a href="#">Millions of dollars</a>
										<a href="#">Paul Graham</a>
									</div>
									<div class="load-comment">
										<a href="#">Load Comments (35)</a>
									</div>
								</div><!-- /.main-post -->
							</div><!-- /.body-post -->
						</article><!-- /.post -->
						<div class="loadding">
							<span class="infinite"></span>
						</div>
					</div><!-- /.post-wrap -->
				</div><!-- /.col-md-8 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

	<!-- Footer -->
	@include("articles.includes.footer")

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
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.mCustomScrollbar.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.tweet.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.cookie.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/switcher.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.doubletaptogo.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/smoothscroll.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/main.js"></script>
	<script>
	$(".link_endless").click(function(event) {
		$(".post").text("Loading ...");
		$(".post").load("/article/detail/"+$(this).data("id"),function(){

		});
		return false;
	});
	</script>
	
</body>

</html>