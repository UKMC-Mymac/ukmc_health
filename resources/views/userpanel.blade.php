<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ (!empty($page_title))?$page_title:'UKMC SCHOOL OF HEALTH' }}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/img/favicon.ico ') }}">
	<!-- Place favicon.ico ') }} in the root directory -->

	<!-- ========================= CSS here ========================= -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap-5.0.5-alpha.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/LineIcons.2.0.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">


</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

	<!-- ========================= preloader start ========================= -->
	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- preloader end -->

	<!-- ========================= header start ========================= -->
	<header id="home" class="header">

		<div class="header-wrapper">
				<div class="header-top theme-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="header-top-left text-center text-md-left">
									<ul>
										<li><a href="#"><i class="lni lni-phone"></i> +463281626556</a></li>
										<li><a href="#"><i class="lni lni-envelope"></i> hellomedic@gmail.com</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4">
								<div class="header-top-right d-none d-md-block">
									<ul>
										<li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
										<li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
										<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<nav class="navbar navbar-expand-lg">
									<a class="navbar-brand" href="index.html">
										<img src="{{ asset('front/assets/img/logo/logo.svg') }}" alt="Logo">
									</a>
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
										aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="toggler-icon"></span>
										<span class="toggler-icon"></span>
										<span class="toggler-icon"></span>
									</button>
				
									<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
										<ul id="nav" class="navbar-nav ml-auto">
											<li class="nav-item active">
												<a class="page-scroll active" href="index.html">Home</a>
											</li>
											<li class="nav-item">
												<a class="page-scroll" href="#programs.html">Programs</a>
											</li>
											<li class="nav-item">
												<a class="page-scroll" href="#why-us.html">Why Us</a>
											</li>
											<li class="nav-item">
												<a class="page-scroll" href="#campus.html">Campus</a>
											</li>
											<li class="nav-item">
												<a class="page-scroll" href="#about.html">About</a>
											</li>
											<!-- <li class="nav-item">
												<a class="page-scroll" href="#contact">Contact</a>
											</li> -->
										</ul>
									</div> <!-- navbar collapse -->
								</nav> <!-- navbar -->
							</div>
						</div> <!-- row -->
					</div> <!-- container -->
				</div> <!-- navbar area -->
		</div>

		<div class="slider-wrapper">
			<!-- ========================= slider-section start ========================= -->
			<section class="slider-section">
				<div class="slider-active slick-style">
					<div class="single-slider img-bg" style="background-image:url('{{ asset('front/assets/img/slider/slider-1.jpg') }}');">
						<div class="container">
							<div class="row">
								<div class="col-xl-7 col-lg-8 col-md-10">
									<div class="slider-content">
										<h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Your route into healthcare starts here.
										</h1>
										<p data-animation="fadeInLeft" data-duration="1.5s" data-delay=".7s">UKMC School of Health is bringing UK university degrees, foundation years and diplomas to a brand-new campus in Luton. Built for 2,000 students. And built for the kind of people the system usually overlooks.</p>
										<a href="#" class="btn theme-btn page-scroll" data-animation="fadeInUp" data-duration="1.5s"
											data-delay=".9s">Register your interest </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="single-slider img-bg" style="background-image:url('{{ asset('front/assets/img/slider/slider-2.jpg') }}');">
						<div class="container">
							<div class="row">
								<div class="col-xl-7 col-lg-8 col-md-8">
									<div class="slider-content">
										<h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Your route into healthcare starts here.
										</h1>
										<p data-animation="fadeInLeft" data-duration="1.5s" data-delay=".7s">UKMC School of Health is bringing UK university degrees, foundation years and diplomas to a brand-new campus in Luton. Built for 2,000 students. And built for the kind of people the system usually overlooks.</p>
										<a href="#" class="btn theme-btn page-scroll" data-animation="fadeInUp" data-duration="1.5s"
											data-delay=".9s">Register your interest</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- ========================= slider-section end ========================= -->
		</div>
	</header>
	<!-- ========================= header end ========================= -->



	<!--========================= we-do-section start========================= -->
	@yield('content')


	<!-- ========================= footer start ========================= -->
	<footer class="footer pt-100 img-bg" style="background-image:url('{{ asset('front/assets/img/bg/footer-bg.jpg') }}');">
		<div class="container">
			<div class="footer-widget-wrapper">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-6">
						<div class="footer-widget mb-30">
							<a href="index.html" class="logo"><img src="{{ asset('front/assets/img/logo/logo.svg') }}" alt=""></a>

							<p>UKMC SCHOOL OF HEALTH</p>

							<!-- <div class="footer-social-links">
								<ul>
									<li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
									<li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
									<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
									<li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-6">
						<div class="footer-widget mb-30">
							<h4>Quick Link</h4>
							<ul class="footer-links">
								<li><a href="privacy-privacy.html">Privacy Policy</a></li>
								<li><a href="cookie-policy.html">Cookie Policy</a></li>
								<li><a href="accessibility.html">Accessibility Statement </a></li>
								<li><a href="complaints-procedure.html">Complaints Procedure (pre-launch)</a></li>
								<li><a href="equality-and-diversity.html">Equality & Diversity Statement</a></li>
								<li><a href="safeguarding.html">Safeguarding Statement</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-xl-2 col-lg-3 col-md-5">
						<div class="footer-widget mb-30">
							<h4>Quick Link</h4>
							<ul class="footer-links">
								<li><a href="#">Cardiology</a></li>
								<li><a href="#">Neurology</a></li>
								<li><a href="#">Gastroenterology</a></li>
								<li><a href="#">Routine Checkup</a></li>
								<li><a href="#">Orthopedics</a></li>
								<li><a href="#">Dental Surgery</a></li>
							</ul>
						</div>
					</div> -->
					<div class="col-xl-4 col-lg-12 col-md-7">
						<div class="footer-widget mb-30">
							<h4>Medical Location</h4>
							<div class="map-canvas">
								<iframe class="map" id="gmap_canvas"
										src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9499.146811051325!2d-2.163914!3d53.472272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb3d79636a91b%3A0xbb7227ab1eb34b02!2sUK%20Management%20College%2C%20College%20House%20Campus!5e0!3m2!1sen!2sbd!4v1782726459423!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-area">
				<p class="mb-0 text-center">Designed and Developed By <a href="https://ukmc.ac.uk/" rel="nofollow">UKMC</a></p>
			</div>
		</div>
	</footer>
	<!-- ========================= footer end ========================= -->


	<!-- ========================= scroll-top ========================= -->
	<a href="#" class="scroll-top">
		<i class="lni lni-arrow-up"></i>
	</a>

	<!-- ========================= JS here ========================= -->
	<script src="{{ asset('front/assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
	<script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/tiny-slider.js') }}"></script>
	<script src="{{ asset('front/assets/js/main.js') }}"></script>
</body>

</html>