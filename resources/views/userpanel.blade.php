<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ (!empty($page_title))?$page_title:'UKMC SCHOOL OF HEALTH' }}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/img/ukmc-favicon.png') }}">
	<!-- Place favicon.ico ') }} in the root directory -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap%22 rel="stylesheet">

	<!-- ========================= CSS here ========================= -->
	{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
	{{-- <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap-5.0.5-alpha.min.css') }}"> --}}
	<link rel="stylesheet" href="{{ asset('front/assets/css/LineIcons.2.0.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/course.css') }}">
	<link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">


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
	<!-- TOP UTILITY BAR -->
	<div class="topbar">
	<div class="container-xxl d-flex justify-content-between align-items-center flex-wrap gap-2">
	<div>
	<a href="tel:+441614780015">📞 +44 (0)161 478 0015</a>
	<span class="mx-2">|</span>
	<a href="mailto:recruitment@ukmc.ac.uk">✉️ recruitment@ukmc.ac.uk</a>
	</div>
	<div>
	<a class="social-icon" href="#" aria-label="Facebook">f</a>
	<a class="social-icon" href="#" aria-label="Twitter / X">𝕏</a>
	<a class="social-icon" href="#" aria-label="LinkedIn">in</a>
	</div>
	</div>
	</div>

	<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-ukmc py-3" id="mainNav">
<div class="container-xxl">
<a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
<span class="logo-mark">
	<img src="{{ asset('front/assets/img/logo/ukmc.png') }}" alt="UKMC School of Health">
</span>
{{-- <span class="logo-wordmark">UKMC Health<span>School of Health</span></span> --}}
</a>
<button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMobile" aria-controls="navMobile" aria-label="Open menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse d-none d-lg-flex">
<ul class="navbar-nav mx-auto">
<li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
<li class="nav-item"><a class="nav-link {{ request()->is('courses') ? 'active' : '' }}" href="{{ url('/courses') }}">Courses</a></li>
<li class="nav-item"><a class="nav-link {{ request()->is('why-us') ? 'active' : '' }}" href="{{ url('/why-us') }}">Why UKMC Health</a></li>
<li class="nav-item"><a class="nav-link {{ request()->is('campus') ? 'active' : '' }}" href="{{ url('/campus') }}">Campus</a></li>
<li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
</ul>
<a href="{{ url('register') }}" class="btn btn-ukmc-primary">Register your interest</a>
</div>
</div>
</nav>
<div class="offcanvas offcanvas-end offcanvas-ukmc d-lg-none" tabindex="-1" id="navMobile" aria-labelledby="navMobileLabel">
<div class="offcanvas-header">
<span class="logo-wordmark" style="color:#fff" id="navMobileLabel">
	<img src="{{ asset('front/assets/img/logo/ukmcsh.png') }}" alt="UKMC School of Health" width="120">
</span>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body d-flex flex-column">
<ul class="navbar-nav flex-grow-1">
<li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
<li class="nav-item"><a class="nav-link {{ request()->is('courses') ? 'active' : '' }}" href="{{ url('/courses') }}">Courses</a></li>
<li class="nav-item"><a class="nav-link {{ request()->is('why-us') ? 'active' : '' }}" href="{{ url('/why-us') }}">Why UKMC Health</a></li>
<li class="nav-item"><a class="nav-link {{ request()->is('campus') ? 'active' : '' }}" href="{{ url('/campus') }}">Campus</a></li>
<li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
</ul>
<a href="{{ url('register') }}" class="btn btn-ukmc-primary w-100 mt-4">Register your interest</a>
</div>
</div>
	{{-- =============== --}}
	{{-- <header id="home" class="header">

		<div class="header-wrapper">
				<div class="header-top theme-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="header-top-left text-md-left">
									<ul>
										<li><a href="#"><i class="lni lni-phone"></i> +XXXXXXXXXXX1111</a></li>
										<li><a href="#"><i class="lni lni-envelope"></i> demo@gmail.com1111</a></li>
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
							<div class="col-lg-9">

								<nav class="navbar navbar-expand-lg">
									<a class="navbar-brand" href="{{ url('/') }}">
										<img src="{{ asset('front/assets/img/logo/ukmc.png') }}" alt="Logo">
									</a>
									<button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="toggler-icon"></span>
										<span class="toggler-icon"></span>
										<span class="toggler-icon"></span>
									</button>
				
									<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
										<ul id="nav" class="navbar-nav ml-auto">
											<li class="nav-item ">
												<a class="  py-2  {{ request()->is('/') ? 'active' : '' }}  " href={{ url('/') }}>Home</a>
											</li>
											 <li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="{{ url('/programs') }}" role="button" data-bs-toggle="dropdown">Programs</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Medical Sciences</a></li>
													<li><a class="dropdown-item" href="#">Nursing Foundation Year</a></li>
													<li><a class="dropdown-item" href="#">Allied Health Foundation Year</a></li>
													<li><a class="dropdown-item" href="#">Health & Social Care Diplomas</a></li>
												</ul>
											</li> 
											<li class="nav-item">
												<a class=" py-2 {{ request()->is('program') ? 'active' : '' }}  " href="{{ url('/program') }}">Program</a>
											</li>
											<li class="nav-item">
												<a class=" py-2 {{ request()->is('why-us') ? 'active' : '' }}  " href="{{ url('/why-us') }}">Why Us</a>
											</li>
											<li class="nav-item">
												<a class=" py-2 {{ request()->is('campus') ? 'active' : '' }}  " href="{{ url('/campus') }}">Campus</a>
											</li>
											<li class="nav-item">
												<a class=" py-2 {{ request()->is('about') ? 'active' : '' }}  " href="{{ url('/about') }}">About</a>
											</li>
											<li class="nav-item">
												<a class=" py-2 {{ request()->is('contact') ? 'active' : '' }}  " href="{{ url('/contact') }}">Contact</a>
											</li> 

											
										</ul>
									</div> <!-- navbar collapse -->
								</nav> <!-- navbar -->
							</div>
							<div class="col-lg-3">
								<div class="d-flex justify-content-end">
									<a class="px-2 btn cta_btn text-white mt-3 {{ request()->is('register') ? 'active' : '' }}   " href="{{ url('/register') }}">Register your interest</a>
								</div>
							</div>
						</div> <!-- row -->
					</div> <!-- container -->
				</div> <!-- navbar area -->
		</div>

	</header> --}}
	<!-- ========================= header end ========================= -->



	<!--========================= we-do-section start========================= -->
	@yield('content')


	<!-- ========================= footer start ========================= -->
	{{-- <footer class="footer pt-100 img-bg">
		<div class="container">
			<div class="footer-widget-wrapper">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-6">
						<div class="footer-widget mb-30">
							<a href="{{ url('/') }}" class="logo"><img src="{{ asset('front/assets/img/logo/ukmc.png') }}" alt=""></a>

							<h5>UKMC SCHOOL OF HEALTH</5>
							<p>Why "subject to validation"? UK degrees can only be awarded by recognised universities. Our degree and foundation year programmes are being developed for validation with an established UK university partner: a rigorous process that exists to protect students, and one we wouldn't want any other way. Our diploma programmes follow a separate route through regulated awarding organisations. Register your interest and we'll tell you the moment applications open.</p>

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
							<h4 class="text-white mb-2">Quick Link</h4>
							<ul class="footer-links">
								<li><a href="{{ url('/safeguarding') }}">Safeguarding</a></li>
								<li><a href="{{ url('/complaints') }}">Complaints</a></li>
								<li><a href="{{ url('/privacy') }}">Privacy</a></li>
								<li><a href="{{ url('/cookie-policy') }}">Cookie Policy</a></li>
								<li><a href="{{ url('/accessibility') }}">Accessibility </a></li>
								<li><a href="{{ url('/equality-and-diversity') }}">Equality & Diversity</a></li>
								<li><a href="{{ url('/contact') }}">Contact</a></li>
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
							<h4 class="text-white mb-3">Location</h4>
							<div class="map-canvas">
								<iframe class="map" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9499.146811051325!2d-2.163914!3d53.472272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb3d79636a91b%3A0xbb7227ab1eb34b02!2sUK%20Management%20College%2C%20College%20House%20Campus!5e0!3m2!1sen!2sbd!4v1782726459423!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
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
	</a> --}}

	<!-- FOOTER -->
<footer>
<div class="accreditation-strip">
<div class="container-xxl d-flex flex-wrap align-items-center justify-content-center gap-4">
<span class="eyebrow mb-0" style="color:var(--ukmc-yellow)">In partnership with</span>
<span style="opacity:.9;font-family:'Poppins';font-weight:600;font-size:15px">University of Wolverhampton</span>
<span style="opacity:.4">•</span>
<span style="opacity:.9;font-family:'Poppins';font-weight:600;font-size:15px">Health Sciences University</span>
</div>
</div>
 
  <div class="container-xxl section pb-4">
	<div class="row">
		<div class="col-lg-4 col-md-6 ">
		<div class="footer-logo ms-3">
			<img src="{{ asset('front/assets/img/logo/ukmcsh.png') }}" alt="UKMC School of Health" width="120">
		{{-- <span class="logo-mark" aria-hidden="true">
		<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M12 2L3 6v6c0 5.25 3.75 9.5 9 10.5 5.25-1 9-5.25 9-10.5V6l-9-4z" fill="var(--ukmc-blue)"/>
		<path d="M11 8h2v3.5H16.5v2H13V17h-2v-3.5H7.5v-2H11V8z" fill="#D81516"/>
		</svg>
		</span> --}}
		{{-- <span class="logo-wordmark">
		</span> --}}
		</div>
		<p style="opacity:.85;font-size:15px" class="ms-3">
				UKMC Health delivers university-partnered degrees in Health and Social Care and Psychology.
				Register your interest and we'll tell you the moment applications open.
		</p>
		<div class="mt-3 ms-3">
		<a class="footer-social" href="#" aria-label="Facebook">f</a>
		<a class="footer-social" href="#" aria-label="Twitter / X">𝕏</a>
		<a class="footer-social" href="#" aria-label="LinkedIn">in</a>
		</div>
		</div>
		
			<div class="col-lg-2 col-md-6">
				<h4>Courses</h4>
				<ul class="list-unstyled">
				<li><a href="https://ukmc.ac.uk/course-details/bsc-hons-health-social-care-with-foundation-year">Health and Social Care</a></li>
				<li><a href="https://ukmc.ac.uk/course-details/bsc-hons-psychology-with-foundation-year">Psychology</a></li>
				</ul>
			</div>
		
			<div class="col-lg-3 col-md-6">
				<h4>Quick links</h4>
				<ul class="list-unstyled">
					<li><a href="{{ url('/safeguarding') }}">Safeguarding</a></li>
					<li><a href="{{ url('/complaints') }}">Complaints</a></li>
					<li><a href="{{ url('/accessibility') }}">Accessibility</a></li>
					<li><a href="{{ url('/equality-and-diversity') }}">Equality & Diversity</a></li>
					<li><a href="{{ url('/contact') }}">Contact us</a></li>
				</ul>
			</div>
		
			<div class="col-lg-3 col-md-6">
				<h4>Get in touch</h4>
				<div class="footer-contact-item">
				<span aria-hidden="true">📍</span>
				<span>College House Campus, Stanley St/Catherine St, Openshaw, Manchester, M11 1LE</span>
			</div>

			<div class="footer-contact-item">
				<span aria-hidden="true">📞</span>
				<a href="tel:+441614780015">+44 (0)161 478 0015</a>
			</div>

			<div class="footer-contact-item">
				<span aria-hidden="true">✉️</span>
				<a href="mailto:recruitment@ukmc.ac.uk">recruitment@ukmc.ac.uk</a>
			</div>
		</div>
	</div>
</div>
 
  <hr style="border-color:rgba(255,255,255,.15);margin:0">
<div class="footer-bottom">
<div class="container-xxl d-flex flex-wrap justify-content-between align-items-center gap-2">
<span>© 2026 UKMC Health. All rights reserved.</span>
<div>
<a href="{{ url('/privacy') }}">Privacy</a>
<a href="{{ url('/cookie-policy') }}">Cookie Policy</a>
<a href="#">Terms</a>
</div>
</div>
</div>
</footer>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script>
	// Main nav
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => {
    nav.style.boxShadow = window.scrollY > 8 ? '0 4px 20px rgba(21,32,113,.12)' : 'none';
  });
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) { entry.target.classList.add('in-view'); observer.unobserve(entry.target); }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>

	<!-- ========================= JS here ========================= -->
	{{-- <script src="{{ asset('front/assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script> --}}
	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
	<script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/tiny-slider.js') }}"></script>
	<script src="{{ asset('front/assets/js/main.js') }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
	<script>
    @if(session('success'))
        iziToast.success({
            title: 'Success',
            message: "{{ session('success') }}",
            position: 'topRight'
        });
    @endif

    @if(session('error'))
        iziToast.error({
            title: 'Error',
            message: "{{ session('error') }}",
            position: 'topRight'
        });
    @endif

</script>

<script>
	// Register your interest form validation
  document.getElementById('inquiryForm').addEventListener('submit', function (e) {
  e.preventDefault();

  let isValid = true;
  const errors = {};

  // Clear old error messages
  document.querySelectorAll('.error-message').forEach(el => el.remove());
  document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));

  // Helper to show an error under a field
  function showError(fieldId, message) {
    const field = document.getElementById(fieldId);
    field.classList.add('error');
    const errorEl = document.createElement('span');
    errorEl.className = 'error-message';
    errorEl.style.color = 'red';
    errorEl.style.fontSize = '0.85em';
    errorEl.style.display = 'block';
    errorEl.textContent = message;
    field.insertAdjacentElement('afterend', errorEl);
    isValid = false;
  }

  // Name
  const name = document.getElementById('fname').value.trim();
  if (!name) {
    showError('fname', 'Name is required.');
  }

  // Email
  const email = document.getElementById('femail').value.trim();
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email) {
    showError('femail', 'Email is required.');
  } else if (!emailPattern.test(email)) {
    showError('femail', 'Please enter a valid email address.');
  }

  // Subject area
  const subjectArea = document.getElementById('fsubject').value.trim();
  if (!subjectArea) {
    showError('fsubject', 'Subject area is required.');
  }

  // Earliest start year
  const startYear = document.getElementById('fyear').value.trim();
  const currentYear = new Date().getFullYear();
  if (!startYear) {
    showError('fyear', 'Earliest start year is required.');
  } else if (isNaN(startYear) || parseInt(startYear) < currentYear) {
    showError('fyear', `Please enter a valid year (${currentYear} or later).`);
  }

  // Current situation
  const currentSituation = document.getElementById('fsituation').value.trim();
  if (!currentSituation) {
    showError('fsituation', 'Current situation is required.');
  }

  // Consent checkbox
  const consent = document.getElementById('fconsent').checked;
  if (!consent) {
    const checkbox = document.getElementById('fconsent');
    checkbox.classList.add('error');
    const errorEl = document.createElement('span');
    errorEl.className = 'error-message';
    errorEl.style.color = 'red';
    errorEl.style.fontSize = '0.85em';
    errorEl.style.display = 'block';
    errorEl.textContent = 'You must consent to the terms before submitting.';
    checkbox.parentElement.appendChild(errorEl);
    isValid = false;
  }

  if (isValid) {
    // Passed validation — submit or handle as needed
    console.log('Form is valid, submitting...');
    this.submit(); // uncomment if you want a real form submission
  }
});
</script>
</body>

</html>