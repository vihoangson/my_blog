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
		@yield("detail_page")
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