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
                                <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Safeguarding</h1>
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
							<h4>Safeguarding Statement</h4>
							<p>The safety and wellbeing of the people who study with us, including any who are under 18 or who are adults at risk, is something we take seriously. This statement sets out our commitment and how to raise a concern. A fuller safeguarding policy sits behind it and governs how we act in detail.</p>
							<p>Last reviewed: [date].</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Who this applies to</h4>
							<p>It applies to everyone connected with UKMC School of Health: our staff, our students, and anyone visiting or working with us.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Our Designated Safeguarding Lead</h4>
							<p>Responsibility for safeguarding sits with our Designated Safeguarding Lead, who is the first point of contact for any concern.</p>
							<p class="text-danger">[PLACEHOLDER: Designated Safeguarding Lead name, role and contact details. Until appointed (see leadership planning), this is a required gap to close before publication.]</p>
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