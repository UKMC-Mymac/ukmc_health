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
                                <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Contact</h1>
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

<!-- ========================= Form start ========================= -->
	<section class="subscribe-section pt-100 pb-100 theme-bg" style="background-color: #1E2355;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					
				</div>
			</div>
			<div class="row">
                <div class="col-xl-6">
                    <h4 class="text-white">Contact</h4>
                    <p class="text-white text-bold"><i class="lni lni-envelope"></i> demo@gmail.com1111 </p>
                    <p class="text-white text-bold"><i class="lni lni-phone"></i>  +XXXXXXXXXXX1111</p>

                    <div class="map-canvas mt-4">
                        <iframe class="map" id="gmap_canvas"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9499.146811051325!2d-2.163914!3d53.472272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb3d79636a91b%3A0xbb7227ab1eb34b02!2sUK%20Management%20College%2C%20College%20House%20Campus!5e0!3m2!1sen!2sbd!4v1782726459423!5m2!1sen!2sbd" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
				<div class="col-xl-6">
                    <div class="section-title text-center">
						<h2 class="mb-15 text-white">Register your interest</h2>
						<h3 class="mb-3 text-white">Be first through the door.</h3>
						<p class="mb-35 text-white">Programmes open for application once they're validated, and the people on this list hear before anyone else: invitations to open days, and one-to-one application support.</p>
					</div>
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


@endsection