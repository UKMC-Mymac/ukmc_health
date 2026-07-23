@extends('userpanel')
@section('content')
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

<section class="we-do-section pt-150">
		<div class="shape shape-1">
			<img src="{{ asset('front/assets/img/shapes/shape-1.svg') }}" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="section-title text-center mb-55">
						<!-- <span class="wow fadeInDown" data-wow-delay=".2s">What We Do</span> -->
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">The why</h2>
						<p class="wow fadeInUp" data-wow-delay=".6s">
							Healthcare in this country is short of people. Tens of thousands of unfilled nursing, care and health roles, and demand still climbing.
And yet all around us are people who'd be brilliant at the work. Career changers. Healthcare assistants ready for the next step. Parents heading back to work. School leavers who never got the grades because life got in the way first.
We think that's a fixable problem. A foundation year or a diploma can take someone from "no qualifications" to a degree and a career that genuinely means something. That's what we're here to build.

						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="graph mb-60">
						<img src="{{ asset('front/assets/img/we-do/graph-img.svg') }}" alt="">
					</div>
				</div>

				<div class="col-md-12">
					<div class="section-title text-center mb-55 mt-3">
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">What we're building</h2>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="we-do-item mb-30">
						<div class="we-do-icon mb-25">
							<svg xmlns="http://www.w3.org/2000/svg" width="40.839" height="48.598" viewBox="0 0 40.839 48.598">
								<g id="we-do-1" transform="translate(-12.184 -5)">
									<path id="Path_48" data-name="Path 48"
										d="M33.271,74.379H31.932c-.177,0-17.733-.153-19.26-5.609-1.226-4.92-.732-11.553,8.551-15.352.684-.279,1.908-.753,1.908-.753a4.824,4.824,0,0,0,1.368-.906l.038-.037,1.18-1.079a1.556,1.556,0,0,1,1.09-.468,1.443,1.443,0,0,1,1.379,1.168L32.6,63.714l4.364-12.367a1.426,1.426,0,0,1,1.362-1.164,1.551,1.551,0,0,1,1.092.481l1.148,1.014a.608.608,0,0,1,.051.048,4.775,4.775,0,0,0,1.369.9s1.308.506,2,.788c9.284,3.8,9.778,10.431,8.558,15.327C51,74.227,33.448,74.379,33.271,74.379ZM25.782,53.046a6.544,6.544,0,0,1-2,1.314s-1.2.466-1.875.74c-6.487,2.655-9.005,7.1-7.483,13.206.83,2.963,11.994,4.257,17.5,4.257h1.339c5.51,0,16.674-1.293,17.511-4.283,1.517-6.082-1-10.526-7.49-13.18-.677-.278-1.962-.775-1.962-.775a6.519,6.519,0,0,1-1.991-1.307l-.794-.7L33.751,65.9A1.205,1.205,0,0,1,32.6,66.92c-.255,0-.881-.1-1.165-1.06L26.6,52.3Z"
										transform="translate(0 -20.782)" fill="#1E2355" />
									<g id="Group_129" data-name="Group 129" transform="translate(38.284 37.747)">
										<g id="Group_128" data-name="Group 128">
											<path id="Path_49" data-name="Path 49"
												d="M65.947,73.917H63.366a.649.649,0,0,1-.649-.649V71.72H61.169a.649.649,0,0,1-.649-.649V68.49a.649.649,0,0,1,.649-.65h1.548V66.294a.648.648,0,0,1,.649-.649h2.582a.649.649,0,0,1,.649.649v1.547h1.548a.649.649,0,0,1,.649.65v2.581a.648.648,0,0,1-.649.649H66.6v1.549A.65.65,0,0,1,65.947,73.917Zm-1.933-1.3H65.3V71.1a.7.7,0,0,1,.676-.676H67.5V69.139H65.975a.7.7,0,0,1-.676-.676v-1.52H64.014v1.52a.7.7,0,0,1-.676.676H61.818v1.284h1.521a.7.7,0,0,1,.676.676Z"
												transform="translate(-60.52 -65.645)" fill="#1E2355" />
										</g>
									</g>
									<path id="Path_50" data-name="Path 50"
										d="M41.3,36.019c-4.59,0-7.379-4.555-7.948-6.633-.121-.44-.231-.937-.327-1.483A3.362,3.362,0,0,1,31.8,26.385a14.03,14.03,0,0,1-.576-2.959,4.754,4.754,0,0,1,.4-2.563,6.141,6.141,0,0,1,.449-2.3.909.909,0,0,1,1.751.485,4.972,4.972,0,0,0-.385,2.058.9.9,0,0,1-.175.536,3.005,3.005,0,0,0-.228,1.632,12.493,12.493,0,0,0,.45,2.429,1.517,1.517,0,0,0,.758.807.908.908,0,0,1,.506.678,16.577,16.577,0,0,0,.357,1.715c.387,1.416,2.574,5.3,6.2,5.3,3.655,0,5.919-3.937,6.289-5.294a16.116,16.116,0,0,0,.358-1.716.908.908,0,0,1,.506-.68,1.521,1.521,0,0,0,.762-.814,12.3,12.3,0,0,0,.445-2.406,2.962,2.962,0,0,0-.231-1.656.907.907,0,0,1-.171-.531,6.382,6.382,0,0,0-.294-2.138.908.908,0,0,1,1.774-.39,7.336,7.336,0,0,1,.336,2.287,4.887,4.887,0,0,1,.4,2.589h0a13.945,13.945,0,0,1-.571,2.924,3.38,3.38,0,0,1-1.23,1.525c-.077.436-.186.965-.328,1.485C48.713,31.7,45.708,36.019,41.3,36.019Z"
										transform="translate(-8.746 -5.917)" fill="#1E2355" />
									<path id="Path_51" data-name="Path 51"
										d="M50.512,14.093H32.943a.922.922,0,0,1-.922-.921C32.021,8.207,35.831,5,41.728,5s9.707,3.207,9.707,8.171A.922.922,0,0,1,50.512,14.093Zm-16.59-1.843H49.533c-.5-3.964-4.266-5.406-7.806-5.406S34.424,8.285,33.922,12.249Z"
										transform="translate(-9.125)" fill="#1E2355" />
								</g>
							</svg>
						</div>
						<h5 class="mb-3">Medical Sciences</h5>
						 <p>A full degree, with a foundation year route for those without traditional science qualifications.</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="we-do-item mb-30">
						<div class="we-do-icon mb-25">
							<svg xmlns="http://www.w3.org/2000/svg" width="53.947" height="42.07" viewBox="0 0 53.947 42.07">
								<g id="we-do-2" transform="translate(12.41 -88.75)">
									<g id="Group_133" data-name="Group 133" transform="translate(-12.41 88.75)">
										<path id="Path_52" data-name="Path 52"
											d="M38.24,45.246h2.3v2.391a1.151,1.151,0,1,0,2.3,0V45.246h2.391a1.151,1.151,0,1,0,0-2.3H42.846V40.551A1.172,1.172,0,0,0,41.694,39.4a1.253,1.253,0,0,0-1.151,1.24v2.391H38.151a1.111,1.111,0,1,0,.089,2.214Z"
											transform="translate(-5.638 -11.855)" fill="#1E2355" />
										<path id="Path_53" data-name="Path 53"
											d="M28.566,52.182H51.328a2.665,2.665,0,0,0,2.657-2.657V37.3h2.746a1.151,1.151,0,0,0,0-2.3H23.251a1.151,1.151,0,1,0,0,2.3H26V49.525A2.537,2.537,0,0,0,28.566,52.182Zm23.205-2.657a.418.418,0,0,1-.443.443H28.566a.418.418,0,0,1-.443-.443V37.3H51.771Z"
											transform="translate(-3.935 -11.352)" fill="#1E2355" />
										<path id="Path_54" data-name="Path 54"
											d="M37.542,24.5a4.9,4.9,0,0,0-1.683,1.86,3.935,3.935,0,0,0-.266,2.214v2.037a1.1,1.1,0,0,0,1.151,1.063h0a1.1,1.1,0,0,0,1.063-1.151V28.393a5.067,5.067,0,0,1,.089-1.24,4.009,4.009,0,0,1,1.063-1.063l.8-.531L41,24.85a2.22,2.22,0,0,0,.62-.354.087.087,0,0,0,.089-.089l.8.8c.62.531,1.151,1.063,1.771,1.594l1.329,1.24.709-.709c.886-.8,1.683-1.506,2.48-2.3a4.091,4.091,0,0,0,.62-.62l.089.089c.177.089.443.177.62.266l.266.089c.266.089.443.266.531.266l.709.443c.177.089.354.266.531.354a2.862,2.862,0,0,1,1.063.974,5.067,5.067,0,0,1,.089,1.24v2.037a1.16,1.16,0,0,0,1.063,1.151h0a1.231,1.231,0,0,0,1.151-1.063V28.3a4.914,4.914,0,0,0-.266-2.214,6.075,6.075,0,0,0-2.391-2.3l-.8-.443c-.177-.089-.443-.266-.62-.354l-.266-.089c-.266-.089-.443-.266-.709-.354l-.089-.089a1.758,1.758,0,0,0-2.214.177l-.177.177-.709.709c-.531.531-1.151,1.063-1.683,1.594-.531-.443-1.063-.974-1.594-1.506a5.73,5.73,0,0,0-.8-.709l-.266-.266a1.442,1.442,0,0,0-1.683-.354c-.177.089-.443.177-.62.266-.266.089-.443.266-.709.354l-1.417.886C38.162,24.053,37.9,24.23,37.542,24.5Z"
											transform="translate(-5.472 -9.882)" fill="#1E2355" />
										<path id="Path_55" data-name="Path 55"
											d="M49,16.714l-.089.443a1.161,1.161,0,0,0,.709,1.417c.089,0,.177.089.354.089a1.241,1.241,0,0,0,1.063-.8l.177-.443c.089-.354.266-.709.354-1.151a9.59,9.59,0,0,0,.266-3.1A5.087,5.087,0,0,0,47.052,8.3h-.531a6.208,6.208,0,0,0-4.34,1.329A5.828,5.828,0,0,0,40.5,13.437a10.689,10.689,0,0,0,.8,4.428,1.177,1.177,0,0,0,.886.709,1.1,1.1,0,0,0,1.24-.974,1.313,1.313,0,0,0-.089-.62,7.714,7.714,0,0,1-.62-3.454,3.683,3.683,0,0,1,.974-2.3,3.927,3.927,0,0,1,2.746-.709h.443a3.062,3.062,0,0,1,2.834,2.923,5.437,5.437,0,0,1-.266,2.3A10.39,10.39,0,0,0,49,16.714Z"
											transform="translate(-6.036 -8.3)" fill="#1E2355" />
										<path id="Path_56" data-name="Path 56"
											d="M7.228,20.257a4.441,4.441,0,0,0,4.428-4.428A4.5,4.5,0,0,0,7.228,11.4a4.428,4.428,0,1,0,0,8.857Zm0-6.731A2.214,2.214,0,1,1,5.014,15.74,2.193,2.193,0,0,1,7.228,13.526Z"
											transform="translate(-1.729 -8.654)" fill="#1E2355" />
										<path id="Path_57" data-name="Path 57"
											d="M18.978,45.761c-.531,2.214-1.151,4.428-1.683,6.731a1.049,1.049,0,0,0,.8,1.329h.266a1.063,1.063,0,0,0,1.063-.8c.531-2.214,1.151-4.428,1.683-6.731l.177-.531c.443-1.594.974-3.543-.089-5.226a2.921,2.921,0,0,0-2.569-1.329c-.354,0-4.163-.354-5.58-.531-.531-.089-.974-.089-1.506-.177a1.115,1.115,0,1,0-.266,2.214c.443.089.974.089,1.417.177,1.506.177,5.314.531,5.757.531.62,0,.8.177.8.177.531.974.177,2.3-.177,3.631C19.067,45.318,18.978,45.584,18.978,45.761Z"
											transform="translate(-2.585 -11.751)" fill="#1E2355" />
										<path id="Path_58" data-name="Path 58"
											d="M1.6,28.616a23.136,23.136,0,0,0,1.24,7.528c.266.974.531,2.037.8,3.1.709,2.391,1.949,3.986,3.72,4.606a10.569,10.569,0,0,0,3.277.531c.974,0,1.949-.089,2.923-.177L13.29,41.99a12.826,12.826,0,0,1-5.226-.177C7,41.37,6.2,40.4,5.673,38.624c-.266-.974-.531-2.037-.8-3.011A26.232,26.232,0,0,1,3.725,28.7c0-1.417.266-1.949.886-2.3a2.051,2.051,0,0,1,2.126.354,2.6,2.6,0,0,1,.886,1.063c.089.177.089.266.177.443.089.354.266.709.354,1.063a.8.8,0,0,0,.089.443c.089.974.177,2.391,1.506,3.1h.089c.62.354,5.226,2.746,5.226,2.746a1.11,1.11,0,0,0,1.063-1.949c-3.9-2.037-4.96-2.657-5.314-2.746h0c-.266-.089-.354-.886-.354-1.329a1.729,1.729,0,0,0-.089-.62,7.481,7.481,0,0,0-.443-1.506,4.318,4.318,0,0,1-.266-.62,6.368,6.368,0,0,0-1.594-1.86,4.32,4.32,0,0,0-4.34-.531C1.6,25.428,1.6,27.465,1.6,28.616Z"
											transform="translate(-1.59 -10.105)" fill="#1E2355" />
									</g>
								</g>
							</svg>
						</div>
						<h5>Nursing Foundation Year </h5>
						<p>A supported first step toward a nursing degree, built for people the standard route left out.</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="we-do-item mb-30">
						<div class="we-do-icon mb-25">
							<svg xmlns="http://www.w3.org/2000/svg" width="48.152" height="48.154" viewBox="0 0 48.152 48.154">
								<g id="we-do-3" transform="translate(-1.846 -1.846)">
									<path id="Path_59" data-name="Path 59"
										d="M46,18.78A3.994,3.994,0,0,0,42.432,21L32.309,17.386a6.492,6.492,0,0,0,.08-1.008,6.36,6.36,0,0,0-1.262-3.8l5.65-3.767a4.037,4.037,0,1,0-.887-1.333L30.006,11.4a6.367,6.367,0,0,0-7.877-.124L19.685,8.223a4.064,4.064,0,1,0-1.158,1.115l2.45,3.061a6.374,6.374,0,0,0-1.34,3.179H9.894a4,4,0,1,0,0,1.6h9.738a6.335,6.335,0,0,0,.64,2.105L8.221,29.08a4.063,4.063,0,1,0,1.114,1.156l12.136-9.86a.8.8,0,0,0,.571-1.254,4.8,4.8,0,1,1,7.885,0l1.313.915a6.319,6.319,0,0,0,.607-1.117l10.171,3.633c0,.08-.023.15-.023.228a4,4,0,1,0,4-4Zm-6.4-15.21a2.4,2.4,0,1,1-2.4,2.4,2.4,2.4,0,0,1,2.4-2.4Zm-23.215,4.8a2.4,2.4,0,1,1,2.4-2.4A2.4,2.4,0,0,1,16.379,8.373ZM5.972,18.78a2.4,2.4,0,1,1,2.4-2.4,2.4,2.4,0,0,1-2.4,2.4Zm0,16.01a2.4,2.4,0,1,1,2.4-2.4,2.4,2.4,0,0,1-2.4,2.4ZM46,25.184a2.4,2.4,0,1,1,2.4-2.4A2.4,2.4,0,0,1,46,25.184Z"
										transform="translate(0 0)" fill="#1E2355" />
									<path id="Path_60" data-name="Path 60"
										d="M44.414,30.808a3.194,3.194,0,0,0-2.4,1.086,3.2,3.2,0,0,0-4.8,0,3.2,3.2,0,0,0-4-.656V21.2a3.2,3.2,0,0,0-6.4,0V34.09a5.588,5.588,0,0,0-4-1.681.8.8,0,0,0-.8.8V47.619a.8.8,0,0,0,.234.566l5.038,5.038h2.264L23.6,47.287V34.09a4.009,4.009,0,0,1,3.2,3.923v5.6a.8.8,0,0,0,1.6,0V21.2a1.6,1.6,0,1,1,3.2,0V35.611a.8.8,0,0,0,1.6,0v-1.6a1.6,1.6,0,0,1,3.2,0v1.6a.8.8,0,1,0,1.6,0v-1.6a1.6,1.6,0,0,1,3.2,0v1.6a.8.8,0,0,0,1.6,0v-1.6a1.6,1.6,0,0,1,3.2,0V53.222h1.6V34.01A3.2,3.2,0,0,0,44.414,30.808Z"
										transform="translate(-4.02 -3.223)" fill="#1E2355" />
								</g>
							</svg>
						</div>
						<h5>Allied Health Foundation Year</h5>
						<p>The way into physiotherapy, paramedicine, radiography and the rest of the NHS's third largest workforce.</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="we-do-item mb-30">
						<div class="we-do-icon mb-25">
							<svg xmlns="http://www.w3.org/2000/svg" width="46.239" height="51.043" viewBox="0 0 46.239 51.043">
								<g id="we-do-4" transform="translate(-1273.5 -1752.346)">
									<g id="Icon_feather-home" data-name="Icon feather-home" transform="translate(1275 1753.846)">
										<path id="Path_108" data-name="Path 108"
											d="M4.5,19.815,26.119,3,47.739,19.815V46.239a4.8,4.8,0,0,1-4.8,4.8H9.3a4.8,4.8,0,0,1-4.8-4.8Z"
											transform="translate(-4.5 -3)" fill="none" stroke="#1E2355" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="3" />
									</g>
									<path id="Union_1" data-name="Union 1" d="M7.658,6.87h0v0h0v0Z"
										transform="translate(1288.853 1775.014)" fill="none" stroke="#1E2355" stroke-linecap="round"
										stroke-linejoin="round" stroke-width="3" />
								</g>
							</svg>
						</div>
						<h5>Health & Social Care Diplomas </h5>
						<p>Including specialist residential childcare. Earn while you qualify, in real care settings.</p>
					</div>
				</div>
				<div class="col-md-12 text-center ">
					<a href="#" class="btn theme-btn mt-4 wow fadeInUp" data-wow-delay=".8s">See all programmes </a>
				</div>
			</div>
		</div>
	</section>
	<!--========================= we-do-section start========================= -->

	<!-- ========================= about-section start ========================= -->
	<section id="about" class="about-section pt-120">
		<div class="shape shape-2">
			<img src="{{ asset('front/assets/img/shapes/shape-2.svg') }}" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-11 mx-auto">
					<div class="about-content text-center mb-55">
						<div class="section-title mb-30">
							<h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">Part of an established provider</h2>
							<span class="wow fadeInDown" data-wow-delay=".2s">We're new. What's behind us isn't</span>
						</div>
						<p class="mb-35 wow fadeInUp" data-wow-delay=".6s">
							UKMC School of Health is UKMC's move into healthcare. UKMC is an established UK higher education provider, part of UniBridge Group, with years of delivering university degrees behind it. And we're doing this properly: moving in alongside people who actually run healthcare services.
						</p>

						<p class="text-danger">[<b>PLACEHOLDER:</b> Confirm the UKMC track-record line (years operating / university partnerships / students or graduates), how UniBridge Group should be described publicly, and the healthcare-side naming decision (name the clinical group explicitly, e.g. "a CQC-regulated healthcare group", or keep the general wording above).]</p>
						<p>Education infrastructure on one hand, working clinics and real patients on the other, brought together on purpose. Most new providers can offer you a classroom. We can show you the job.</p>
						<!-- <a href="#" class="btn theme-btn wow fadeInUp" data-wow-delay=".8s"></a> -->
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="about-img text-center">
			<img src="{{ asset('front/assets/img/about/about-img.png ') }}" alt="">
		</div> -->
	</section>
	<!-- ========================= about-section end ========================= -->

	<!--========================= service-section start ========================= -->
	<section id="services" class="service-section pt-50">
		<div class="shape shape-3">
			<img src="{{ asset('front/assets/img/shapes/shape-3.svg') }}" alt="">
		</div>
		<div class="container">
			<!-- <div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="section-title text-center mb-55">
						<span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">Our Healthcare Services</h2>
						<p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
							dinonumy
							<br class="d-none d-lg-block"> eirmod tempor invidunt ut labore et dolore magn.</p>
					</div>
				</div>
			</div> -->
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="service-item mb-30">

						<div class="service-content">
							<h4>Learning close to real healthcare</h4>
							<p>Healthcare can't be learned from slides alone. Through our affiliated healthcare group, our students will have opportunities to step inside real clinical settings: taster days, observation, a feel for the work before they commit their future to it.</p>
							<!-- <a href="#" class="read-more">Read More <i class="lni lni-arrow-right"></i></a> -->
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>The campus</h4>
							<p>A brand-new, purpose-fitted campus in Luton, <span class="text-danger">[<b>PLACEHOLDER:</b> minutes from X station]</span>, built for 2,000 students.</p>
							<!-- <a href="#" class="read-more">Read More <i class="lni lni-arrow-right"></i></a> -->
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--========================= service-section end ========================= -->

	<!-- ========================= Form start ========================= -->
	<section class="subscribe-section pt-100 pb-100 theme-bg" style="background-color: #1E2355;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title text-center">
						<h2 class="mb-15 text-white">Register your interest</h2>
						<h3 class="mb-3 text-white">Be first through the door.</h3>
						<p class="mb-35 text-white">Programmes open for application once they're validated, and the people on this list hear before anyone else: invitations to open days, and one-to-one application support.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="subscribe-wrapper">
						<form action="#" class="subscribe-from">
							<input type="text" name="name" id="name" placeholder="Enter Your Name">
							<input type="text" name="email" id="email" placeholder="Enter Your Email">
							<select name="subject-area" class="form-select form-select-lg" required>
								<option value="">--Select Subject Area-- </option>
								<option value="#"></option>
								<option value="#"></option>
								<option value="#"></option>
							</select>
							<input type="text" name="earliest_start_year" id="earliest_start_year" placeholder="Enter Earliest Start Year">
							<select name="subject-area" class="form-select form-select-lg" required>
								<option value="">--Select Current Situation -- </option>
								<option value="#">School leaver </option>
								<option value="#">Working in health or care </option>
								<option value="#">Career changer </option>
								<option value="#">Returning to study </option>
								<option value="#">other</option>
							</select>
							<button class="btn theme-btn bg-white text-body" type="submit">Submit</button>
						</form>
						<!-- <div class="support d-flex">
							<div class="support-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="57.473" height="56.533" viewBox="0 0 57.473 56.533">
									<g id="noun_customer_service_2786300" data-name="noun_customer service_2786300"
										transform="translate(-11.49 -12.11)">
										<path id="Path_94" data-name="Path 94"
											d="M65.1,36.746a3.769,3.769,0,0,0-.485.052v-.209a3.858,3.858,0,0,0-2.746-3.664,21.6,21.6,0,0,0-43.166-.037,3.858,3.858,0,0,0-2.873,3.732v.209a3.769,3.769,0,0,0-.485-.052,3.866,3.866,0,0,0-3.858,3.858v7.515a3.866,3.866,0,0,0,3.858,3.858,3.732,3.732,0,0,0,.485-.052v.209a3.858,3.858,0,1,0,7.709,0V36.589a3.732,3.732,0,0,0-.037-.4V33.671a16.792,16.792,0,0,1,33.584,0v1.851a3.784,3.784,0,0,0-.164,1.037V52.172a3.829,3.829,0,0,0,.082.784c-1.1,2.463-4.254,8.426-9.56,10.075a4.023,4.023,0,1,0,.246,2.4c5.15-1.4,8.821-6.1,10.836-10.127a3.821,3.821,0,0,0,2.239.746,3.866,3.866,0,0,0,3.858-3.858v-.231a3.73,3.73,0,0,0,.485.052,3.866,3.866,0,0,0,3.851-3.858V40.6A3.866,3.866,0,0,0,65.1,36.746Z"
											fill="#00adb5" />
										<path id="Path_95" data-name="Path 95"
											d="M35.595,41.324a5.97,5.97,0,0,1,1.59-4.478,4.858,4.858,0,0,1,3.6-1.358,4.627,4.627,0,0,1,3.485,1.53A5.052,5.052,0,0,1,45.715,40.6a9.866,9.866,0,0,1-.94,4.321,29.853,29.853,0,0,1-2.4,3.732q-.507.746-1.493,2.239l-.6.873q-.545.828-.813,1.306a1.1,1.1,0,0,0-.134.284h6.127v3.06H35.55V53.564a6.716,6.716,0,0,1,.694-1.134q.306-.485.7-1.067l.806-1.179q.746-.978,2.239-3.12a20.9,20.9,0,0,0,2.142-3.642,6.859,6.859,0,0,0,.582-2.746,2.463,2.463,0,0,0-.53-1.6,1.843,1.843,0,0,0-1.493-.694,1.918,1.918,0,0,0-1.843,1.493,3.4,3.4,0,0,0-.179,1.216v.746H35.595Z"
											transform="translate(-6.104 -5.93)" fill="#00adb5" />
										<path id="Path_96" data-name="Path 96"
											d="M49.37,48.893l5.5-13.083h3.12V48.893h2v3.142h-2v4.478H54.87V52.035h-5.5Zm5.5,0V42.46L52.3,48.893Z"
											transform="translate(-9.61 -6.012)" fill="#00adb5" />
									</g>
								</svg>
							</div>
						</div> -->

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========================= Form end ========================= -->

	<!-- ========================= Partner start ========================= -->
	<section id="testimonial" class="team-section pt-150 pb-150">
		<div class="shape shape-5">
			<img src="{{ asset('front/assets/img/shapes/shape-2.svg') }}" alt="">
		</div>
		<div class="shape shape-6">
			<img src="{{ asset('front/assets/img/shapes/shape-5.svg') }}" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="section-title text-center mb-55">
						
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">Partner & investor line</h2>
						<span class="wow fadeInDown" data-wow-delay=".4s">Universities, employers and investors: we'd welcome a conversation. [ partnerships@ukmc... ]</span>
						<!-- <a href="" rel="nofollow" class="btn theme-btn"></a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========================= Partner end ========================= -->
    @endsection