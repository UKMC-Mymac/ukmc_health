@extends('userpanel')
@section('content')\
<div class="slider-wrapper">
    <!-- ========================= slider-section start ========================= -->
    <section class="slider-section">
        <div class="slider-active slick-style">
            <div id="p_banner" class="single-slider img-bg" style="background-image:url('{{ asset('front/assets/img/slider/slider-3.jpg') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-10">
                            <div class="slider-content">
                                <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">About us</h1>
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
							<h4>Who we are</h4>
							<p>UKMC School of Health is UKMC's move into healthcare education.</p>
                            <p>UKMC is an established UK higher education provider, part of UniBridge Group, which backs a portfolio of education providers across the country. For years, UKMC has delivered university degrees in partnership with UK universities. Now it's bringing that same machinery - the teaching, the quality systems, the hard-won experience of getting students through - into health.</p>
                            <p>And it's doing it properly. Healthcare isn't a subject you can teach at arm's length, so UKMC is moving in alongside people who actually run healthcare services: real clinics, real patients, real careers waiting at the end of the course. The education know-how and the clinical know-how, finally under one roof.</p>
							<!-- <a href="#" class="read-more text-danger">[ Register your interest ] <i class="lni lni-arrow-right"></i></a> -->
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">

						<div class="service-content">
							<h4>A track record, not a standing start</h4>
							<p>Most new health schools start with nothing but ambition. This one starts with a parent that has done it before.</p>
							<p>UKMC has spent years building what new providers only talk about: working relationships with UK universities, programmes delivered to their standard, and students supported all the way through to graduation. And behind UKMC sits UniBridge Group, whose backing means this isn't a shoestring start-up. It's a properly resourced venture with an established provider's experience behind it and a group's stability beneath it.</p>
							<!-- <a href="#" class="read-more text-danger">[ Register your interest ] <i class="lni lni-arrow-right"></i></a> -->
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">

						<div class="service-content">
							<h4>Partnerships, and more to come</h4>
							<p>UKMC already works with established universities to deliver degrees. UKMC School of Health extends that relationship into healthcare, and we're not stopping at one. More university partnerships are already in conversation, and each one widens what we can offer and who we can offer it to.</p>
							<!-- <a href="#" class="read-more text-danger">[ Register your interest ] <i class="lni lni-arrow-right"></i></a> -->
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>


				<div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">

						<div class="service-content">
							<h4>This is just the beginning</h4>
							<p>Starting with foundation years, a degree and diplomas is exactly that - a start.</p>
							<p>The long-term plan is bigger than any single programme. UKMC School of Health is being built to educate people across the full span of healthcare: from entry-level diplomas that open the door, through foundation years that get people degree-ready, to full degrees, and in time the most advanced healthcare qualifications a serious institution can offer. We're laying the foundations now, deliberately and properly, because what we have in mind is meant to last.</p>
							<!-- <a href="#" class="read-more text-danger">[ Register your interest ] <i class="lni lni-arrow-right"></i></a> -->
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">

						<div class="service-content">
							<h4>How we work</h4>
							<p>Three things guide how we build this place. We open doors, especially to people the traditional system overlooks. We do it properly, to the standard our university partners and regulators rightly demand, never the cut corners the sector has become known for. And we keep our promises small and true rather than big and vague, because the people who trust us with their futures deserve nothing less.</p>
							<!-- <a href="#" class="read-more text-danger">[ Register your interest ] <i class="lni lni-arrow-right"></i></a> -->
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">

						<div class="service-content">
							<h4>Closing</h4>
							<p>Want to be part of the start of this? Register your interest and you'll be first to hear as it takes shape.</p>
							<a href="#" class="read-more text-danger">[ Register your interest ] <i class="lni lni-arrow-right"></i></a>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>



			</div>
		</div>
	</section>
	<!--========================= service-section end ========================= -->
@endsection