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
                                <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">Privacy Policy</h1>
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
							<h4>Privacy Policy</h4>
							<p>This policy explains how UKMC School of Health collects, uses and looks after your personal information when you visit our website or register your interest with us. It is written to comply with UK data protection law (UK GDPR and the Data Protection Act 2018).
</p>
							<p>Last updated: [date].</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Who we are</h4>
							<p>The data controller responsible for your personal information is:</p>
							<p class="text-danger">[PLACEHOLDER: Registered legal entity name, company number, registered office address, and a data protection contact (named Data Protection lead or a dedicated email such as dataprotection@ukmc...).]</p>

						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>What we collect</h4>
							<p>Information you give us when you register your interest or contact us: your name, email address, phone number (if provided), the programme or subject you're interested in, your earliest intended start year, how you describe yourself (for example school leaver or career changer), your location if you provide it, and the content of any message you send.</p>
							<p>Information collected automatically when you use the site: basic technical and usage data such as device type, browser, and how you move through the site, gathered through cookies and similar technologies. See our Cookie Policy.</p>
                            <p class="text-danger">[PLACEHOLDER: List the actual tools in use at launch that process personal data, e.g. website hosting, the form/CRM system, email marketing platform, analytics provider, map provider.]</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>How we use your information, and our lawful basis</h4>
							<ul>
                                <li>1. To respond to your enquiry and give you the information you've asked for - on the basis of our legitimate interest in answering you, and where relevant taking steps at your request before any agreement.</li>
                                <li>2. To keep you updated about programmes, open days and applications - on the basis of your consent, which you give by ticking the opt-in box and can withdraw at any time.</li>
                                <li>3. To understand and improve how our website performs - on the basis of our legitimate interest, using cookies in line with your cookie choices.</li>
                            </ul>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Who we share it with</h4>
							<p>We share your information only with service providers who help us run our website and communicate with you, under contracts that require them to protect it, and with authorities where we are legally required to. We do not sell your personal information, and we do not pass it to third parties for their own marketing.</p>
							<p class="text-danger">[PLACEHOLDER: Name the categories of processors used (hosting, CRM/form, email platform, analytics). If any processor stores data outside the UK, state the safeguards relied on for international transfers.]</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>How long we keep it</h4>
							<p class="text-danger">[PLACEHOLDER: State retention periods, e.g. interest-registration data kept until you unsubscribe or for a defined period after last contact; enquiry data kept for a defined period; then securely deleted.]</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Your rights</h4>
							<p>Under UK data protection law you have the right to access the personal information we hold about you, to have it corrected or deleted, to restrict or object to how we use it, to data portability, and to withdraw consent at any time. To exercise any of these, contact us using the details above. You can unsubscribe from our emails at any time using the link in each message.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Complaints</h4>
							<p>If you have a concern about how we handle your information, please tell us first so we can put it right. You also have the right to complain to the Information Commissioner's Office (ico.org.uk).</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

                <div class="col-lg-12 col-md-12">
					<div class="service-item mb-30">
						<div class="service-content">
							<h4>Changes to this policy</h4>
							<p>We may update this policy from time to time. The date at the top shows when it was last changed.</p>
							<p style="border-left: 2px solid red;"><span style="color:red; font-weight:bold;">REVIEW REQUIRED:</span> Have this reviewed by someone competent in UK data protection before publishing. The lawful bases, processors, retention periods and international-transfer position must match what the live site and tools actually do.</p>
						</div>
						<div class="service-overlay img-bg"></div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--========================= service-section end ========================= -->
@endsection