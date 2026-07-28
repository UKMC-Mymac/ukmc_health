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
                            <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Programs</h1>
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
                <div class="col-xl-12 col-lg-12 my-5">
					<div class="about-content ">
						<div class="section-title mb-30">
							<h1 class="mb-15 wow fadeInUp" data-wow-delay=".4s">Programmes</h1>
                            <p>We're building four routes into health careers at our Luton campus, aiming to welcome our first students in September 2027. Our degree and foundation year programmes are being developed for validation with a UK university partner, which means details below are indicative until validation is complete. Register your interest and you'll be first to know when applications open.</p>
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
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".2s">
						<div class="blog-img">
							<a href="{{ url('/register') }}"><img src="{{ asset('front/assets/img/blog/blog-1.png') }}" alt=""></a>
						</div>
						<div class="blog-content">
							<h4><a href="{{ url('/register') }}">Medical Sciences BSc (Hons), with Foundation Year route</a></h4>
                            <p><i>For people who want to understand how the body works, and build a career on it.</i></p>
							<p>Medical science underpins everything in healthcare: diagnostics, research, pharmaceuticals, public health. This degree is being designed for people fascinated by the science of health, whether you're heading for the lab, further clinical training, or roles across the health sector.</p>
                            <p>Two routes in: direct entry to the three-year degree, or our four-year route with an integrated foundation year, designed for those without traditional science qualifications. The foundation year builds your scientific grounding, study skills and confidence before degree-level work begins.</p>
                            <p>Indicative areas of study: human anatomy and physiology, biochemistry, microbiology, pharmacology, research methods. Final curriculum subject to validation.</p>
                            <p><i>Typical entry profile: foundation year route - no formal science qualifications required; we look for capability and commitment, assessed at interview. Direct entry - relevant Level 3 qualifications. Confirmed entry requirements published at validation.</i></p>
							<a class="read-more" href="{{ url('/register') }}">Register your interest <i class="lni lni-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".4s">
						<div class="blog-img">
							<a href="{{ url('/register') }}"><img src="{{ asset('front/assets/img/blog/blog-2.png') }}" alt=""></a>
						</div>
						<div class="blog-content">
							<h4><a href="{{ url('/register') }}">Health Foundation Year: Nursing pathway</a></h4>
							<p><i>The first step toward becoming a nurse, built for people the traditional route left out.</i></p>
							<p>You don't need A-levels to have what nursing takes. This one-year programme is being designed to prepare you for entry to a nursing degree: the science, the academic skills, and the realities of the profession.
The NHS currently has around 100,000 unfilled posts, including tens of thousands of nursing vacancies. The need for new nurses is real, and so is the need for new routes in.
An honest note: nursing degrees are approved by the Nursing and Midwifery Council and delivered under our university partner's arrangements. We'll publish the full progression route when validation is complete.
</p>
							<a class="read-more" href="{{ url('/register') }}">Register your interest <i class="lni lni-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".6s">
						<div class="blog-img">
							<a href="{{ url('/register') }}"><img src="{{ asset('front/assets/img/blog/blog-3.png') }}" alt=""></a>
						</div>
						<div class="blog-content">
							<h4><a href="{{ url('/register') }}">Health Foundation Year: Allied Health pathway</a></h4>
							<p><i>Physiotherapy, paramedicine, radiography, occupational therapy. Healthcare is far bigger than doctors and nurses.</i></p>
							<p>Allied health professionals are the third largest clinical workforce in the NHS, spanning fourteen professions, and demand for them keeps growing. This foundation year shares its core with our nursing pathway - human sciences, academic skills, professional values - with pathway-specific preparation for allied health degree study.</p>
							<p>An honest note: most allied health degrees are approved by the Health and Care Professions Council and delivered under our university partner's arrangements. Full progression routes published at validation.</p>
							<a class="read-more" href="{{ url('/register') }}">Register your interest <i class="lni lni-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".6s">
						<div class="blog-img">
							<a href="{{ url('/register') }}"><img src="{{ asset('front/assets/img/blog/clearing 1.jpg') }}" alt=""></a>
						</div>
						<div class="blog-content">
							<h4><a href="{{ url('/register') }}">Health & Social Care Diplomas, including Residential Childcare</a></h4>
							<p><i>Qualifications for some of the most needed careers in the country, including one almost nobody talks about.</i></p>
							<p>Around 82,000 children in England are looked after by local authorities, and the homes they live in need qualified, committed staff. By law, everyone caring for children in a residential home must hold the Level 3 Diploma for Residential Childcare, with a Level 5 Diploma for registered managers. We're developing pathways to both.</p>
							<p>These are earn-while-you-qualify programmes: the diplomas are completed in a real residential childcare setting, and through our affiliated care group we're building routes that combine paid employment with study, taking you from your first day in the sector through to management.</p>
							<a class="read-more" href="{{ url('/register') }}">Register your interest <i class="lni lni-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".6s">
						<div class="blog-img">
							<a href="{{ url('/register') }}"><img src="{{ asset('front/assets/img/blog/31-Health-&-Social-care.jpg') }}" alt=""></a>
						</div>
						<div class="blog-content">
							<h4><a href="{{ url('/register') }}">BSc (Hons) Health & Social Care with Foundation Year</a></h4>
							<h6 class="mb-2">Awarding body: University of Wolverhampton</h6>
							<p><i>BSc (Hons) Health & Social Care with Foundation Year program offers a solid foundation in health and social care, supporting you in building essential academic skills and sector knowledge, preparing you for further study and a rewarding career in health and social care.</i></p>
							<p>BSc (Hons) Health & Social Care with Foundation Year develops essential knowledge in healthcare principles and professional practice while preparing for a rewarding career making a real difference in people's lives, and progresses through foundation study through to degree study.</p>
							<h5>Course Overview</h5>
							<p>At UKMC, we deliver the University of Wolverhampton’s BSc (Hons) Health and Social Care with Foundation Year in a warm, friendly and supportive environment. You’ll be working towards a respected University of Wolverhampton degree while benefiting from UKMC’s smaller class sizes, personalised approach and dedicated student support. Our teaching methods include activities, exercises, quizzes, and formative assessments to help you stay on track with learning outcomes and assessment expectations.

From the very start of your foundation year, you’ll be taught by approachable lecturers who get to know you as an individual, not just a name on a register. Wherever possible, larger groups are taught in smaller classes, so you have more direct contact with your tutors and plenty of chances to ask questions and join in discussions. You won’t just be sitting and listening – you’ll learn through activities, case studies, quizzes, group work and regular check-ins to help you stay on track with your learning goals and assessments.

You’ll receive one-to-one support with your assignments and assessments throughout the course. Module tutorials, workshops and “assignment unpacking” sessions make it clear what you need to do and how your work will be marked. Study skills classes, peer study groups and a mix of assessment types (such as essays, presentations and reflective tasks) recognise that everyone learns differently and help you build the academic skills you need for higher-level study.

As a UKMC student on a University of Wolverhampton programme, you’ll have access to extensive library resources and a wide range of online learning materials, along with specialist study skills and academic support. If you have a specific learning need, we can help arrange additional support and reasonable adjustments so you can take part fully and confidently in your studies.

Your wellbeing is just as important as your grades. UKMC offers a range of student support services, including one-to-one advice and guidance, mental health and wellbeing support, information about financial aid, and self-care resources to help you balance your studies with your personal life.

Above all, UKMC is a welcoming place to learn. We are guided by values of respect, inclusion and collaboration in everything we do. You’ll be encouraged to share your ideas, take part in debate and reflect on real-world health and social care practice in a safe, supportive environment where your voice and lived experience are genuinely valued.</p>

							<a class="read-more" href="{{ url('/register') }}">Register your interest <i class="lni lni-arrow-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".6s">
						<div class="blog-img">
							<a href="{{ url('/register') }}"><img src="{{ asset('front/assets/img/blog/course1.svg') }}" alt=""></a>
						</div>
						<div class="blog-content">
							<h4><a href="{{ url('/register') }}">BSc (Hons) Psychology with Foundation Year</a></h4>
							<h6 class="mb-2">Awarding body: HSU University</h6>
							<p><i>The BSc (Hons) Psychology with Foundation Year provides a comprehensive introduction to psychological theory, research, and application. The foundation year develops essential academic, scientific, and professional skills, preparing students for degree-level study. The course covers core areas of psychology including cognitive, biological, developmental, and social psychology, alongside research methods and applied skills. </i></p>
							<p>The BSc (Hons) Psychology with Foundation Year provides a comprehensive introduction to psychological theory, research, and application. The foundation year develops essential academic, scientific, and professional skills, preparing students for degree-level study. The course covers core areas of psychology including cognitive, biological, developmental, and social psychology, alongside research methods and applied skills. Students gain knowledge of human behaviour, mental processes, and real-world applications of psychology. The programme supports progression into careers or further study in psychology and related fields, equipping graduates with analytical, research, and communication skills valued across multiple professional sectors. The degree is awarded by Health Sciences University. This course is not yet approved by the British Psychological Society (BPS).</p>
							<p>The BSc (Hons) Psychology with Foundation Year is designed to provide students with a strong academic and practical understanding of psychology, beginning with a foundation year that builds essential study skills and subject knowledge. The course develops knowledge across key psychological domains, including biological, cognitive, social, and developmental psychology, alongside research methods and applied practice.

Students will explore how psychological theory can be applied to real-world contexts such as health, education, and organisational settings. The course also focuses on developing critical thinking, research, and communication skills, preparing students for a range of career opportunities.

Graduates may progress into careers in areas such as mental health support, human resources, education, research, and social services, or continue to postgraduate study in specialised areas of psychology.</p>
							<a class="read-more" href="{{ url('/register') }}">Register your interest <i class="lni lni-arrow-right"></i></a>
						</div>
					</div>
				</div>

				{{-- <div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".6s">
						<div class="blog-img">
							<a href="{{ url('/register') }}"><img src="{{ asset('front/assets/img/blog/blog-3.png') }}" alt=""></a>
						</div>
						<div class="blog-content">
							<h4><a href="{{ url('/register') }}"></a></h4>
							<p><i></i></p>
							<p></p>
							<p></p>
							<a class="read-more" href="{{ url('/register') }}">Register your interest <i class="lni lni-arrow-right"></i></a>
						</div>
					</div>
				</div> --}}

			</div>
		</div>
	</section>
	<!-- ========================= Course-section end ========================= -->



@endsection