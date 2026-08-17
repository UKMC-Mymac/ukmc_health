@extends('userpanel')
@section('content')
<!-- ========================= Banner-section start ========================= -->
<div class="slider-wrapper">
<section class="slider-section">
    <div class="slider-active slick-style">
        <div id="p_banner" class="single-slider img-bg" style="background-image:url('{{ asset('front/assets/img/slider/slider-3.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="slider-content">
                            <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Programs Details</h1>
                            <p data-animation="fadeInLeft" data-duration="1.5s" data-delay=".7s"></p>
                            <!-- <a href="#" class="btn theme-btn page-scroll" data-animation="fadeInUp" data-duration="1.5s"
                                data-delay=".9s">Register your interest </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
</div>
<!-- ========================= Banner-section end ========================= -->
<!-- ========================= about-section start ========================= -->
	<section id="about" class="about-section pt-4">
		<div class="shape shape-2">
			<img src="assets/img/shapes/shape-2.svg" alt="">
		</div>
		<div class="container">
			<div class="row">
                <div class="col-xl-10 col-lg-11 my-5">
					<div class="about-content ">
						<div class="section-title mb-30">
							<h1 class="mb-15 wow fadeInUp text-center" data-wow-delay=".4s">Comming Soon!</h1>
                            
							<!-- <span class="wow fadeInDown" data-wow-delay=".2s"></span> -->
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- ========================= about-section end ========================= -->
<!-- ========================= Course-section start ========================= -->
	<section id="blog" class="blog-section pt-4">
		<div class="shape shape-7">
			<img src="{{ asset('front/assets/img/shapes/shape-6.svg') }}" alt="">
		</div>
		<div class="container">
			{{-- <div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="section-title text-center mb-55">
						<span class="wow fadeInDown" data-wow-delay=".2s"></span>
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s"></h2>
						<p class="wow fadeInUp" data-wow-delay=".4s"></p>
					</div>
				</div>
			</div> --}}

		</div>
	</section>
	<!-- ========================= Course-section end ========================= -->



@endsection