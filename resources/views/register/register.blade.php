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
                                <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Register your interest (Primary CTA)</h1>
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
                   <form action="{{ route('contact.submit') }}" method="POST" class="subscribe-from">
							@csrf
                        <input type="text" name="name" id="name" placeholder="Enter Your Name">
                        <input type="text" name="email" id="email" placeholder="Enter Your Email">
                        <select name="subject_area" class="form-select form-select-lg" required>
                            <option value="">--Select Subject Area-- </option>
                            <option value="Medical Sciences BSc (Hons), with Foundation Year route">Medical Sciences BSc (Hons), with Foundation Year route</option>
                            <option value="Health Foundation Year: Nursing pathway">Health Foundation Year: Nursing pathway</option>
                            <option value="Health Foundation Year: Allied Health pathway">Health Foundation Year: Allied Health pathway</option>
                            <option value="Health & Social Care Diplomas, including Residential Childcare">Health & Social Care Diplomas, including Residential Childcare</option>
                        </select>
                        <input type="text" name="earliest_start_year" id="earliest_start_year" placeholder="Enter Earliest Start Year">
                        <select name="currentsituation" id="currentsituation"class="form-select form-select-lg" required>
                            <option value="">--Select Current Situation -- </option>
                            <option value="School leaver">School leaver</option>
                            <option value="Working in health or care">Working in health or care</option>
                            <option value="Career changer">Career changer</option>
                            <option value="Returning to study">Returning to study</option>
                            <option value="other">other</option>
                        </select>
                        <button class="btn theme-btn bg-white text-body" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Form end ========================= -->
@endsection