<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>boland-shop</title>
	<!-- Common plugins -->
	<link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="/plugins/owl-carousel/assets/owl.theme.default.css" rel="stylesheet">
	<link href="/plugins/icheck/skins/minimal/blue.css" rel="stylesheet">
	<!--master slider-->
	<link href="/plugins/masterslider/style/masterslider.css" rel="stylesheet">
	<link href="/plugins/masterslider/skins/default/style.css" rel='stylesheet'>
	<!--template css-->
	<link href="/css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!--pre-loader-->
<div id="preloader"></div>
<!--pre-loader-->
<!--back to top-->
<a href="#" class="scrollToTop"><i class="material-icons 48dp">keyboard_arrow_up</i></a>
<!--back to top end-->

@yield('content')
<!--footer-->
<footer class="footer">
	<div class="container text-center">
		<span>&copy; Copyright 2017. Created by <a href="https://github.com/MammutAlex">mammut</a> </span>
	</div>
</footer>
<!--/footer-->
<!--Common plugins-->
<script src="/plugins/jquery/dist/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/pace/pace.min.js"></script>
<script src="/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="/plugins/sticky/jquery.sticky.js"></script>
<script src="/plugins/icheck/icheck.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/boland.custom.js"></script>
<!--page template scripts-->
<script src="/plugins/masterslider/masterslider.min.js"></script>
@yield('script')
</body>
</html>