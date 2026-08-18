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

<!-- ========================= Form start ========================= -->
<section class="subscribe-section pt-100 pb-100 theme-bg" style="background: var(--ukmc-off-white);">
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