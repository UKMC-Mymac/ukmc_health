@extends('userpanel')
@section('content')
<div class="slider-wrapper">
    <!-- ========================= slider-section start ========================= -->
    <section class="slider-section">
        <div class="slider-active slick-style">
            <div id="p_banner" class="single-slider img-bg" style="background-image:url('{{ asset('front/assets/img/slider/slider-3.jpg') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-10">
                            <div class="slider-content">
                                <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Cookie Policy</h1>
                                <p data-animation="fadeInLeft" data-duration="1.5s" data-delay=".7s"></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ========================= slider-section end ========================= -->
</div>

<!--========================= service-section start ========================= -->
	<section id="services" class="service-section pt-50">
		<div class="shape shape-3">
			<img src="assets/img/shapes/shape-3.svg" alt="">
		</div>
		<div class="container">

			<div class="row">
                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Cookie Policy</h4>
							<p>Cookies are small files stored on your device when you visit a website. They help sites work properly and help owners understand how their site is used.</p>
							<p>Last updated: [date].</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>The cookies we use</h4>
							<p>Strictly necessary cookies: these make the site work and keep it secure. They can't be switched off.</p>
							<p>Analytics and performance cookies: these help us understand how people use the site so we can improve it. We only use these with your consent.</p>
                            <p class="text-danger"><span class="text-bold">[PLACEHOLDER:</span> Replace the above with the actual cookies in use at launch: name them, say what each does, who sets it (first or third party), and how long it lasts. If marketing/advertising cookies are used, disclose them too. If only strictly necessary cookies are used at launch, say exactly that - it's the simplest and safest position.]</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Managing your cookies</h4>
							<p>When you first visit, you'll be able to accept or reject non-essential cookies through our cookie banner, and you can change your choice at any time. You can also control cookies through your browser settings, though blocking some may affect how the site works.</p>
							<p style="border-left: 2px solid red; padding-left-5px;"><span class="text-bold text-danger">REVIEW REQUIRED:</span> Confirm the real cookie inventory with your developer and align the banner so it only sets non-essential cookies after consent. The banner must default to the most privacy-preserving option.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4></h4>
							<p></p>
							<p></p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--========================= service-section end ========================= -->
@endsection