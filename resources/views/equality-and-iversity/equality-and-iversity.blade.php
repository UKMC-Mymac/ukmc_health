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
                                <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Equality & Diversity</h1>
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
							<h4>Equality & Diversity Statement</h4>
							<p>UKMC School of Health exists to open doors, especially for people the traditional education system tends to leave outside it. Treating people fairly isn't a side policy for us. It's the reason we're here.</p>
							<p>Last reviewed: [date].</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Our commitment</h4>
							<p>We are committed to equality of opportunity and to creating an inclusive environment for everyone who studies or works with us. We comply with the Equality Act 2010 and do not tolerate discrimination, harassment or victimisation on the basis of age, disability, gender reassignment, marriage or civil partnership, pregnancy or maternity, race, religion or belief, sex, or sexual orientation.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>In how we recruit students</h4>
							<p>We assess people on their capability and potential, not just on the qualifications they happen to hold. We welcome applications from people of all backgrounds, and we make reasonable adjustments so that disabled applicants and students can take part fully.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>In how we treat our people</h4>
							<p>We're committed to fair, inclusive employment, and to building a team that reflects the communities we serve.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Holding ourselves to it</h4>
							<p>If you ever feel we've fallen short of this, please tell us through our complaints route. We'd rather know.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--========================= service-section end ========================= -->
@endsection