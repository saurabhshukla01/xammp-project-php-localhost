<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pino</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="../../assets/plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="../../assets/plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../../assets/plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="../../assets/plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../../assets/plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../../assets/plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="../../assets/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!--Favicon-->
	<link rel="icon" href="../../assets/img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="../../assets/img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

<!-- Header start -->
<header id="header" class="fixed-top header" role="banner">
	<a class="navbar-brand navbar-bg" href="index.html"><img class="img-fluid float-right" src="../../assets/images/logo.png" alt="logo"></a>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Home
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.html">Homepage 1</a>
							<a class="dropdown-item" href="index-2.html">Homepage 2</a>
							<a class="dropdown-item" href="index-3.html">Homepage 3</a>
							<a class="dropdown-item" href="index-4.html">Homepage 4</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Company
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="about.html">About Us</a>
							<a class="dropdown-item" href="service.html">Services</a>
							<a class="dropdown-item" href="career.html">Career</a>
							<a class="dropdown-item" href="testimonial.html">Testimonials</a>
							<a class="dropdown-item" href="faq.html">Faq</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Portfolio
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="portfolio-classic.html">Portfolio Classic</a>
							<a class="dropdown-item" href="portfolio-static.html">Portfolio Static</a>
							<a class="dropdown-item" href="portfolio-item.html">Portfolio Single</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Pages
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="team.html">Our Team</a>
							<a class="dropdown-item" href="about2.html">About Us - 2</a>
							<a class="dropdown-item" href="service2.html">Services - 2</a>
							<a class="dropdown-item" href="service-single.html">Services Single</a>
							<a class="dropdown-item" href="pricing.html">Pricing Table</a>
							<a class="dropdown-item" href="404.html">404 Page</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Blog
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="blog-rightside.html">Blog with Sidebar</a>
							<a class="dropdown-item" href="blog-item.html">Blog Single</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Features
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="typography.html">Typography</a>
							<a class="dropdown-item" href="elements.html">Elements</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--/ Header end -->

<!-- Slider start -->
<section id="home" class="p-0">
	<div id="main-slide" class="cd-hero">
		<ul class="cd-hero-slider">
			<li class="selected">
				<div class="overlay2">
					<img class="" src="../../assets/images/slider/bg1.jpg" alt="slider">
				</div>
				<div class="cd-full-width">
					<h2>Need To Invent The Future!</h2>
					<h3>We Making Difference To Great Things Possible</h3>
					<a href="#0" class="btn btn-primary white cd-btn">Start Now</a>
					<a href="#0" class="btn btn-primary solid cd-btn">Learn More</a>
				</div> <!-- .cd-full-width -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="../../assets/images/slider/bg2.jpg" alt="slider">
				</div>
				<div class="cd-half-width">
					<h2>How Big Can You Dream?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary solid">Take a Tour</a>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img src="../../assets/images/slider/bg-thumb1.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/bg3.jpg" alt="slider">
				</div>
				<div class="cd-half-width cd-img-container img-right">
					<img src="../../assets/images/slider/bg-thumb2.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
				<div class="cd-half-width">
					<h2>Your Challenge is Our Progress</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary white">Start</a>
					<a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
				</div> <!-- .cd-half-width -->
			</li>
			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2>WE ARE HERE TO MAKE IT HAPPEN</h2>
					<h3>We Making Difference To Great Things Possible</h3>

					<a href="#0" class="cd-btn btn btn-primary solid">Learn more</a>
				</div> <!-- .cd-full-width -->

				<div class="cd-bg-video-wrapper" data-video="videos/video">
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>
		</ul>
		<!--/ cd-hero-slider -->

		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				<ul>
					<li class="selected"><a href="#0"><i class="fa fa-bicycle"></i> Invent</a></li>
					<li><a href="#0"><i class="fa fa-hotel"></i> Dream</a></li>
					<li><a href="#0"><i class="fa fa-android"></i> Tech</a></li>
					<li class="video"><a href="#0"><i class="fa fa-video-camera"></i> Video</a></li>
				</ul>
			</nav>
		</div> <!-- .cd-slider-nav -->

	</div>
	<!--/ Main slider end -->
</section>
<!--/ Slider end -->

