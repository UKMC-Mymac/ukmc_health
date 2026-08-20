@extends('userpanel')
@section('content')
	<style>
:root{
  --ukmc-blue:#152071; --ukmc-blue-deep:#0E1650; --ukmc-red:#D81516;
  --ukmc-red-deep:#B01113; --ukmc-light-blue:#A8DADC; --ukmc-off-white:#EDF2F4;
  --ukmc-yellow:#F8C000; --ukmc-ink:#1E1F3A; --ukmc-gray:#5C6178; --ukmc-line:#D9DEE8;
  --ukmc-radius:16px; --ukmc-radius-btn:10px;
  --ukmc-shadow:0 6px 24px rgba(21,32,113,.08);
  --ukmc-shadow-hover:0 18px 44px rgba(21,32,113,.16);
}
*{box-sizing:border-box}
body{font-family:'Roboto',sans-serif;color:var(--ukmc-ink);font-size:17px;line-height:1.7;background:#fff;overflow-x:hidden}
h1,h2,h3,h4,.btn{font-family:'Poppins',sans-serif}
h1,h2,h3,h4{color:var(--ukmc-blue);font-weight:600;line-height:1.2}
a{color:var(--ukmc-blue);text-decoration:none} a:hover{color:var(--ukmc-red-deep)}
.eyebrow{font-family:'Poppins';font-weight:600;font-size:13.5px;letter-spacing:.08em;
  text-transform:uppercase;color:var(--ukmc-red-deep);display:block;margin-bottom:10px}
.section{padding:88px 0}
.section-alt{background:var(--ukmc-off-white)}
:focus-visible{outline:3px solid var(--ukmc-yellow);outline-offset:2px}
@media (max-width:768px){.section{padding:52px 0}}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}

@keyframes floatGlow{0%,100%{transform:translate(0,0) scale(1)}50%{transform:translate(-16px,-24px) scale(1.06)}}
@keyframes shimmer{0%{background-position:0% 50%}100%{background-position:200% 50%}}
.glow-blob{position:absolute;border-radius:50%;filter:blur(60px);pointer-events:none;animation:floatGlow 9s ease-in-out infinite}
.reveal{opacity:0;transform:translateY(24px);transition:opacity .6s ease,transform .6s ease}
.reveal.in-view{opacity:1;transform:translateY(0)}
.reveal-delay-1.in-view{transition-delay:.1s}
.reveal-delay-2.in-view{transition-delay:.2s}
.hero-highlight{background:linear-gradient(90deg,var(--ukmc-yellow),#fff,var(--ukmc-yellow));
  background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:shimmer 4s linear infinite}

.btn-ukmc-primary{background:var(--ukmc-red);color:#fff;font-family:'Poppins';font-weight:600;
  padding:14px 28px;border-radius:var(--ukmc-radius-btn);border:none;
  box-shadow:0 8px 24px rgba(216,21,22,.3);transition:transform .2s ease,box-shadow .2s ease}
.btn-ukmc-primary:hover{background:var(--ukmc-red-deep);color:#fff;transform:translateY(-3px);box-shadow:0 14px 34px rgba(216,21,22,.45)}
.btn-ukmc-outline{background:transparent;border:2px solid rgba(255,255,255,.6);color:#fff;font-family:'Poppins';
  font-weight:600;padding:13px 28px;border-radius:var(--ukmc-radius-btn);transition:all .2s ease}
.btn-ukmc-outline:hover{background:#fff;color:var(--ukmc-blue);border-color:#fff;transform:translateY(-3px)}


#page_wrapper{
    background:radial-gradient(120% 160% at 20% 0%,#1C2A8C 0%,var(--ukmc-blue) 45%,var(--ukmc-blue-deep) 100%);
}
.page-hero{background:radial-gradient(120% 160% at 20% 0%,#1C2A8C 0%,var(--ukmc-blue) 45%,var(--ukmc-blue-deep) 100%);
  position:relative;overflow:hidden;padding:80px 0 96px;color:#fff}
.page-hero .glow-blob{width:300px;height:300px;background:var(--ukmc-light-blue);opacity:.18;bottom:-110px;left:6%}
.breadcrumb-ukmc a{color:rgba(255,255,255,.7);font-size:14px}
.breadcrumb-ukmc a:hover{color:var(--ukmc-yellow)}
.breadcrumb-ukmc span{color:rgba(255,255,255,.4);margin:0 8px}


.form-ukmc label{font-family:'Poppins';font-weight:600;font-size:14px;color:#fff;margin-bottom:6px;display:block}
.form-ukmc .form-control, .form-ukmc .form-select{border-radius:10px;border:1px solid var(--ukmc-line);
  padding:13px 14px;margin-bottom:18px;transition:box-shadow .2s ease,border-color .2s ease}



</style>

<div class="container-fluid" id="page_wrapper" style="background-color: var(--ukmc-light-blue)">
    <header class="page-hero">
  <div class="glow-blob"></div>
  <div class="container-xxl position-relative" style="z-index:2">
    <nav class="breadcrumb-ukmc mb-4 reveal in-view">
      <a href="#">Home</a><span>/</span><span style="color:#fff">Register your interest</span>
    </nav>
    <div class="row reveal in-view">
      <div class="col-lg-8">
        <span class="eyebrow" style="color:var(--ukmc-yellow)">Get in touch</span>
        <h1 class="mb-3" style="color:#fff;font-size:44px">Questions before you <span class="hero-highlight">apply?</span></h1>
        <p style="opacity:.9;font-size:18px;max-width:65ch">
          Whether it's about a course, a campus, or funding — reach out and a member of the admissions team
          will be in touch shortly.
        </p>
      </div>
    </div>
  </div>
  </div>
</header>
</div>


<!-- REGISTER YOUR INTEREST FORM -->
<section class="section" id="register" style="background:var(--ukmc-blue-deep)">
<div class="container-xxl">
<div class="row justify-content-center text-center mb-5 reveal">
<div class="col-lg-7 text-white">
<h2 class="text-white mb-2">Register your interest</h2>
<p class="mb-0" style="opacity:.85">Be first through the door. Register now and you'll hear before anyone else — invitations to open days, and one-to-one application support.</p>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-7 reveal reveal-delay-1">
<form action="{{ route('contact.submit') }}" method="POST" class="form-ukmc" id="inquiryForm">
@csrf
<div class="row">
<div class="col-md-6">
<label for="fname">Full name</label>
<input type="text" name="name" class="form-control" id="fname" placeholder="Enter your full name">
</div>
<div class="col-md-6">
<label for="femail">Email address</label>
<input type="email" name="email" class="form-control" id="femail" placeholder="Enter your email">
</div>
</div>
<div class="row">
<div class="col-md-6">
<label for="fsubject">Course</label>
<select name="subject_area" class="form-select" id="fsubject" >
  <option value="">--Select course--</option>
  <option value="BSc (Hons) Health & Social Care with Foundation Year">BSc (Hons) Health & Social Care with Foundation Year</option>
  <option value="BSc (Hons) Psychology with Foundation Year">BSc (Hons) Psychology with Foundation Year</option>
</select>
</div>
<div class="col-md-6">
<label for="fyear">Earliest start year</label>
<input type="text" name="earliest_start_year" class="form-control" id="fyear" placeholder="Enter earliest start year">
</div>
</div>

<div class="row">
<div class="col-md-6">
      <label for="cfintake">Preferred intake</label>
      <select name="preferred_intake" id="cfintake" class="form-select">
        <option value="">--Select Preferred intak--</option>
        <option value="January 2027">January 2027</option>
        <option value="May 2027">May 2027</option>
        <option value="September 2027">September 2027</option>
      </select>
  </div>
<div class="col-md-6">
<label for="fsituation">Current situation</label>
<select name="currentsituation" class="form-select mb-3" id="fsituation">
  <option value="">--Select current situation--</option>
  <option value="School leaver">School leaver</option>
  <option value="Career changer">Career changer</option>
  <option value="Returning to education">Returning to education</option>
  <option value="Working in a care role">Working in a care role</option>
  <option value="Other">Other</option>
</select>
</div>
</div>

<div class="form-check mb-4">
<input class="form-check-input" type="checkbox" id="fconsent">
<label class="form-check-label" for="fconsent" style="font-family:'Roboto';font-weight:400;color:#fff;opacity:.85">
    I agree to be contacted by UKMC Health about my registration, in line with the <a href="#" style="color:var(--ukmc-light-blue);text-decoration:underline">Privacy Policy</a>.
</label>
</div>
<button type="submit" class="btn btn-ukmc-primary w-100">Submit</button>
</form>
</div>
</div>
</div>
</section>


<!-- ========================= Form start ========================= -->
{{-- <section class="subscribe-section pt-100 pb-100 theme-bg" style="background: var(--ukmc-off-white);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center">
                    <h2 class="mb-15 ">Register your interest</h2>
                    <h3 class="mb-3 ">Be first through the door.</h3>
                    <p class="mb-35 ">Programmes open for application once they're validated, and the people on this list hear before anyone else: invitations to open days, and one-to-one application support.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="subscribe-wrapper">
                   <form action="{{ route('contact.submit') }}" method="POST" class="subscribe-from">
							@csrf
                        <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                        <input type="text" name="email" id="email" placeholder="Enter Your Email" required>
                        <select name="subject_area" class="form-select form-select-lg" required>
                            <option value="">--Select Course-- </option>
                            <option value="BSc (Hons) Health & Social Care with Foundation Year">BSc (Hons) Health & Social Care with Foundation Year</option>
                            <option value="BSc (Hons) Psychology with Foundation Year">BSc (Hons) Psychology with Foundation Year</option>
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

                        <div class="form-check mb-4">
                          <input class="form-check-input" type="checkbox" id="fconsent">
                          <label class="form-check-label" for="fconsent" style="font-family:'Roboto';font-weight:400;color:#000;opacity:.85">
                                        I agree to be contacted by UKMC Health about my registration, in line with the <a href="#" style="color:var(--ukmc-blue-deep);text-decoration:underline">Privacy Policy</a>.
                          </label>
                      </div>

                        <button class="btn theme-btn bg-white text-body" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ========================= Form end ========================= -->
@endsection