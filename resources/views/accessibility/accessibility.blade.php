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
                                <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Accessibility Statement</h1>
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
							<h4>Accessibility Statement</h4>
							<p>We want UKMC School of Health's website to be usable by as many people as possible, whatever their abilities or the technology they use.</p>
							<p>Last reviewed: [date].</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Our commitment</h4>
							<p>We are building this site to meet the Web Content Accessibility Guidelines (WCAG) version 2.2 at level AA. In practice that means clear structure, text that works with screen readers, navigation that works with a keyboard, good colour contrast, descriptive alternatives for images, and forms that are properly labelled.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Known limitations</h4>
							<p>As a new website we're still improving. If we're aware of parts of the site that don't yet meet the standard, we'll list them here honestly.</p>
							<p class="text-danger"><span class="text-bold">[PLACEHOLDER:</span> List any known accessibility gaps once the build is tested, or state that none are currently known.]</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Tell us if something doesn't work</h4>
							<p>If you find any part of the site difficult to use, please tell us. We'll do our best to help and to fix the problem.</p>
							<p class="text-danger"><span class="text-bold">[PLACEHOLDER:</span> Accessibility contact email.]</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>If you're not happy with our response</h4>
							<p>If you contact us with a problem and you're not satisfied with how we respond, the Equality Advisory and Support Service (EASS) can advise you.</p>
							<p style="border-left: 2px solid red; padding-left-5px;"><span class="text-bold text-danger">REVIEW REQUIRED:</span> This statement must reflect the accessibility level the site genuinely achieves. Confirm with your developer that WCAG 2.2 AA is the build target and is met before claiming it. Adjust the wording if the achieved level differs.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--========================= service-section end ========================= -->
@endsection