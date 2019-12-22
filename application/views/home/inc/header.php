<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $title ?> | Foundation School</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

	<!-- favicon
		============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/img/favicon.ico") ?>">

	<!-- Google Fonts
		============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css") ?>">

	<!-- Fontawsome CSS
        ============================================ -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="<?= base_url("assets/css/gallery-grid.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/font-awesome.min.css") ?>">

	<!-- Owl Carousel CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/owl.carousel.css") ?>">

	<!-- jquery-ui CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/jquery-ui.css") ?>">

	<!-- Meanmenu CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/meanmenu.min.css") ?>">

	<!-- Animate CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/animate.css") ?>">

	<!-- Animated Headlines CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/animated-headlines.css") ?>">

	<!-- Nivo slider CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/lib/nivo-slider/css/nivo-slider.css") ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url("assets/lib/nivo-slider/css/preview.css") ?>" type="text/css" media="screen" />

	<!-- Metarial Iconic Font CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/material-design-iconic-font.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/material-design-iconic-font.min.css") ?>">

	<!-- Slick CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/slick.css") ?>">

	<!-- Video CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/jquery.mb.YTPlayer.css") ?>">

	<!-- Style CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">

	<!-- Color CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/color.css") ?>">

	<!-- Responsive CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url("assets/css/responsive.css") ?>">

	<!-- Modernizr JS
		============================================ -->
	<script src="<?= base_url("assets/js/vendor/modernizr-2.8.3.min.js") ?>"></script>

</head>

<body>

	<div class="as-mainwrapper">
		<!--Bg White Start-->
		<div class="bg-white">
			<!--Header Area Start-->
			<header>
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
								<span>Have any question? +234 703 324 0864</span>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
								<div class="header-top-right">
									<div class="content"><a href="#"><i class="zmdi zmdi-account"></i> Admin Panel</a>
										<ul class="account-dropdown">
											<li><a href="#">My Account</a></li>
											<li><a href="#">Log In</a></li>
											<li><a href="#">Register</a></li>
										</ul>
									</div>
									<div class="content"><a href="http://portal.fnpss.sch.ng/" target="_blank"><i class="zmdi zmdi-shopping-basket"></i> Portal Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-logo-menu sticker">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="logo">
									<a href="<?= base_url() ?>"><img src="<?= base_url("assets/img/logo/logo.png") ?>" id="log" alt="FOUNDATION SCHOOL"></a>
								</div>
							</div>
							<div class="col-md-9">
								<div class="mainmenu-area pull-right">
									<div class="mainmenu hidden-sm hidden-xs">
										<nav>
											<ul id="nav">
												<li class="current"><a href="<?= base_url() ?>">Home</a></li>
												<li><a href="<?= base_url("about") ?>">About</a></li>
												<li><a href="<?= base_url("teachers") ?>">Teachers</a></li>
												<li><a href="#">Gallery</a>
													<ul class="sub-menu">
														<li><a href="<?= base_url("gallery") ?>">Gallery</a></li>
													</ul>
												</li>
												<li><a href="<?= base_url("contact") ?>">Contact</a></li>
											</ul>
										</nav>
									</div>
									<ul class="header-search">
										<li class="search-menu">
											<i id="toggle-search" class="zmdi zmdi-search-for"></i>
										</li>
									</ul>
									<!--Search Form-->
									<div class="search">
										<div class="search-form">
											<form id="search-form" action="#">
												<input type="search" placeholder="Search here..." name="search" />
												<button type="submit">
													<span><i class="fa fa-search"></i></span>
												</button>
											</form>
										</div>
									</div>
									<!--End of Search Form-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Mobile Menu Area start -->
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="mobile-menu">
									<nav id="dropdown">
										<ul>
											<li><a href="<?= base_url() ?>">HOME</a></li>
											<li><a href="<?= base_url("about") ?>">About Us</a></li>
											<li><a href="<?= base_url("teachers") ?>">Teachers</a></li>
											<li><a href="#">Gallery</a>
												<ul class="sub-menu">
													<li><a href="<?= base_url("gallery") ?>">Gallery</a></li>
												</ul>
											</li>
											<li><a href="<?= base_url("contact") ?>">Contact us</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Mobile Menu Area end -->
			</header>