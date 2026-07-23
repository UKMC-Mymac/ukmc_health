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
                            <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Campus</h1>
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
	<section id="about" class="about-section pt-5">
		<div class="shape shape-2">
			<img src="assets/img/shapes/shape-2.svg" alt="">
		</div>
		<div class="container">
			<div class="row">
                <div class="col-xl-10 col-lg-11 mt-4 mb-3">
					<div class="about-content  mb-55">
						<div class="section-title mb-30">
							<h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">A real campus. Built and ready.</h2>
                            <p>Plenty of new providers can show you a logo and a promise. We can show you the building. Our Luton campus is finished, fitted out, and ready for 2,000 students, with the kind of space and equipment you'd expect from somewhere serious about training the health workforce.</p>
							<!-- <span class="wow fadeInDown" data-wow-delay=".2s"></span> -->
						</div>
						
					</div>
				</div>

				<div class="col-xl-10 col-lg-11">
					<div class="about-content  mb-55">
						<div class="section-title mb-30">
							<h4 class="mb-15 wow fadeInUp" data-wow-delay=".4s">What's inside</h4>
							<!-- <span class="wow fadeInDown" data-wow-delay=".2s"></span> -->
						</div>
						<div>
							<ul class="whats_inside">
								<li><b>Clinical skills space - </b> <i>rooms set up to mirror real care settings, where you practise the practical side of health work before you ever do it for real.</i></li>
								<li><b>Modern teaching equipment - </b> <i>the tools and technology used in the settings you're training for, so what you learn on transfers straight to the job.</i></li>
								<li><b>Science and laboratory facilities - </b> <i>[if applicable - lab space for the Medical Sciences programme; remove if not present].</i></li>
								<li><b>High-speed internet throughout - </b> <i>fast, reliable connectivity across the whole building for study, research and online learning.</i></li>
								<li><b>Study and social spaces - </b> <i>room to work in groups, room to work alone, and somewhere to actually breathe between classes.</i></li>
								<li><b>Accessibility - </b> <i>[describe genuine accessibility provision - step-free access, lifts, accessible facilities - so prospective disabled students can see themselves here].</i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="about-img text-center">
			<img src="assets/img/about/about-img.png" alt="">
		</div> -->
	</section>
	<!-- ========================= about-section end ========================= -->

	<!--========================= service-section start ========================= -->
	<section id="services" class="service-section pt-50">
		<div class="shape shape-3">
			<img src="assets/img/shapes/shape-3.svg" alt="">
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
				<div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">

						<div class="service-content">
							<h4>Come and see it</h4>
							<p>The best way to know if somewhere's right for you is to stand in it. We'll be running open days as we approach our first intake, and the people on our interest list are first to get the invitations.</p>
							<a href="#" class="read-more text-danger">[ Register your interest ] <i class="lni lni-arrow-right"></i></a>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!--========================= service-section end ========================= -->

	<!-- Gallery -->
<style>
    .gallery-img{
    width:200px;
    margin:10px;
    cursor:pointer;
    border-radius:5px;
}

.modal{
    display:none;
    position:fixed;
    z-index:999;
    left:0;
    top:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.9);
}

.modal-content{
    display:block;
    margin:auto;
    margin-top:80px;
    max-width:70%;
}

.close{
    position:absolute;
    top:30px;
    right:50px;
    color:white;
    font-size:40px;
    cursor:pointer;
}
</style>
<div class="eve_gallery mt-5 mb-5">
    <div class="container">
        <!-- Gallery -->
		 <div class="row">
			<div class="col-md-12">
				<h4>Gallery</h4>
			</div>
		 </div>
        <div class="row">
            <div class="col-md-4">
                 <img src="{{ asset('front/assets/img/blog/blog-1.png') }}" alt="UKMC" class="w-100 gallery-img">
            </div>
            <div class="col-md-4">
                 <img src="{{ asset('front/assets/img/blog/blog-2.png') }}" alt="UKMC" class="w-100 gallery-img">
            </div>
            <div class="col-md-4">
                 <img src="{{ asset('front/assets/img/blog/blog-3.png') }}" alt="UKMC" class="w-100 gallery-img">
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div id="imgModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImg">
</div>

<script>
    var modal = document.getElementById("imgModal");
var modalImg = document.getElementById("modalImg");
var images = document.querySelectorAll(".gallery-img");
var closeBtn = document.querySelector(".close");

images.forEach(function(img){
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
    }
});

closeBtn.onclick = function(){
    modal.style.display = "none";
}
</script>

@endsection