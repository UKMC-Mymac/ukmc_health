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

.topbar{background:var(--ukmc-blue-deep);color:#fff;font-size:14px;padding:8px 0}
.topbar a{color:#fff;opacity:.9} .topbar a:hover{opacity:1;color:var(--ukmc-light-blue)}
.topbar .social-icon{width:30px;height:30px;border-radius:50%;background:rgba(255,255,255,.12);
  display:inline-flex;align-items:center;justify-content:center;margin-left:8px}
.navbar-ukmc{background:#fff;box-shadow:0 2px 12px rgba(21,32,113,.06);position:sticky;top:0;z-index:1030;transition:box-shadow .2s ease}
.navbar-ukmc .nav-link{font-family:'Poppins';font-weight:500;color:var(--ukmc-ink);margin:0 12px}
.navbar-ukmc .nav-link.active{color:var(--ukmc-red)}
.logo-mark{width:100px;height:auto;border-radius:10px;background:var(--ukmc-blue);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.logo-mark svg{width:24px;height:24px}
.logo-wordmark{font-family:'Poppins';font-weight:700;font-size:19px;line-height:1.1;color:var(--ukmc-blue)}
.logo-wordmark span{display:block;font-family:'Poppins';font-weight:500;font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:var(--ukmc-red)}
.offcanvas-ukmc{background:var(--ukmc-blue);width:300px}
.offcanvas-ukmc .nav-link{color:#fff;font-family:'Poppins';font-weight:500;font-size:17px;padding:14px 0;border-bottom:1px solid rgba(255,255,255,.12)}
.offcanvas-ukmc .btn-close{filter:invert(1)}

.page-hero{background:radial-gradient(120% 160% at 20% 0%,#1C2A8C 0%,var(--ukmc-blue) 45%,var(--ukmc-blue-deep) 100%);
  position:relative;overflow:hidden;padding:80px 0 96px;color:#fff}
.page-hero .glow-blob{width:300px;height:300px;background:var(--ukmc-light-blue);opacity:.18;bottom:-110px;left:6%}
.breadcrumb-ukmc a{color:rgba(255,255,255,.7);font-size:14px}
.breadcrumb-ukmc a:hover{color:var(--ukmc-yellow)}
.breadcrumb-ukmc span{color:rgba(255,255,255,.4);margin:0 8px}

.stat-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  box-shadow:var(--ukmc-shadow);padding:32px;text-align:center;transition:transform .25s ease,box-shadow .25s ease}
.stat-card:hover{transform:translateY(-4px);box-shadow:0 0 0 1px rgba(248,192,0,.35),var(--ukmc-shadow-hover)}
.stat-num{font-family:'Poppins';font-weight:800;font-size:44px;color:var(--ukmc-red);line-height:1}
.stat-label{font-family:'Poppins';font-weight:600;font-size:14px;color:var(--ukmc-blue);margin-top:8px}
.stat-note{font-size:13px;color:var(--ukmc-gray);margin-top:4px}

.split-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  padding:28px;height:100%;box-shadow:var(--ukmc-shadow)}
.split-card .split-icon{width:48px;height:48px;border-radius:12px;display:flex;align-items:center;
  justify-content:center;font-size:22px;margin-bottom:14px}

.pull-quote{border-left:4px solid var(--ukmc-yellow);padding:8px 0 8px 24px;font-family:'Poppins';
  font-weight:600;font-size:20px;color:var(--ukmc-blue);margin:0}

.step-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  padding:28px;height:100%;position:relative;box-shadow:var(--ukmc-shadow)}
.step-num{width:38px;height:38px;border-radius:50%;background:var(--ukmc-blue);color:#fff;
  font-family:'Poppins';font-weight:700;display:flex;align-items:center;justify-content:center;margin-bottom:16px}

.deepdive-card{background:radial-gradient(120% 160% at 10% 0%,#1C2A8C 0%,var(--ukmc-blue) 55%,var(--ukmc-blue-deep) 100%);
  border-radius:24px;padding:44px;color:#fff;position:relative;overflow:hidden}
.deepdive-card .glow-blob{width:260px;height:260px;background:var(--ukmc-yellow);opacity:.15;top:-90px;right:-60px}
.deepdive-card p{position:relative;z-index:2}

.feature-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  padding:32px;height:100%;box-shadow:var(--ukmc-shadow);transition:transform .25s ease,box-shadow .25s ease}
.feature-card:hover{transform:translateY(-4px);box-shadow:0 0 0 1px rgba(248,192,0,.35),var(--ukmc-shadow-hover)}
.feature-icon{width:56px;height:56px;border-radius:14px;background:var(--ukmc-light-blue);display:flex;
  align-items:center;justify-content:center;font-size:26px;margin-bottom:18px}

.commit-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  padding:26px;height:100%;box-shadow:var(--ukmc-shadow)}
.commit-num{font-family:'Poppins';font-weight:800;font-size:26px;color:var(--ukmc-yellow);
  -webkit-text-stroke:1.5px var(--ukmc-blue);margin-bottom:10px}

.band-blue{background:radial-gradient(120% 180% at 50% 0%,#1C2A8C 0%,var(--ukmc-blue) 60%,var(--ukmc-blue-deep) 100%);color:#fff}
.band-blue h2{color:#fff}

/* Campus cards */
.campus-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  overflow:hidden;box-shadow:var(--ukmc-shadow);transition:transform .25s ease,box-shadow .25s ease;height:100%}
.campus-card:hover{transform:translateY(-6px);box-shadow:0 0 0 1px rgba(248,192,0,.35),var(--ukmc-shadow-hover)}
.campus-img{min-height:180px;background:linear-gradient(150deg,var(--ukmc-light-blue),var(--ukmc-yellow) 140%);
  display:flex;align-items:center;justify-content:center;text-align:center;color:rgba(21,32,113,.5);
  font-family:'Poppins';font-weight:600;font-size:13px;padding:16px}
.campus-body{padding:26px}
.campus-address{display:flex;gap:8px;align-items:flex-start;font-size:14px;color:var(--ukmc-gray);margin-bottom:14px}

/* Facility cards */
.facility-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  padding:26px;height:100%;box-shadow:var(--ukmc-shadow);transition:transform .25s ease,box-shadow .25s ease}
.facility-card:hover{transform:translateY(-4px);box-shadow:0 0 0 1px rgba(248,192,0,.35),var(--ukmc-shadow-hover)}
.facility-icon{width:52px;height:52px;border-radius:12px;background:var(--ukmc-light-blue);display:flex;
  align-items:center;justify-content:center;font-size:24px;margin-bottom:14px}

/* Gallery */
.gallery-frame{border-radius:16px;min-height:220px;background:linear-gradient(150deg,var(--ukmc-off-white),var(--ukmc-line));
  display:flex;align-items:center;justify-content:center;text-align:center;color:var(--ukmc-gray);
  font-family:'Poppins';font-weight:600;font-size:13px;padding:16px;transition:transform .25s ease}
.gallery-frame:hover{transform:scale(1.02)}

/* Roadmap */
.roadmap-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  padding:26px;height:100%;position:relative;box-shadow:var(--ukmc-shadow);transition:transform .25s ease,box-shadow .25s ease}
.roadmap-card:hover{transform:translateY(-4px);box-shadow:0 0 0 1px rgba(248,192,0,.35),var(--ukmc-shadow-hover)}
.roadmap-card.is-live{border-color:var(--ukmc-yellow)}
.roadmap-num{width:38px;height:38px;border-radius:50%;background:var(--ukmc-blue);color:#fff;
  font-family:'Poppins';font-weight:700;display:flex;align-items:center;justify-content:center;margin-bottom:14px}
.roadmap-badge{position:absolute;top:22px;right:22px;font-family:'Poppins';font-weight:600;font-size:11px;
  letter-spacing:.04em;text-transform:uppercase;padding:4px 10px;border-radius:999px}
.roadmap-badge.live{background:var(--ukmc-yellow);color:var(--ukmc-blue)}
.roadmap-badge.future{background:var(--ukmc-off-white);color:var(--ukmc-gray)}

/* Principle cards */
.principle-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  padding:30px;height:100%;box-shadow:var(--ukmc-shadow);transition:transform .25s ease,box-shadow .25s ease}
.principle-card:hover{transform:translateY(-4px);box-shadow:0 0 0 1px rgba(248,192,0,.35),var(--ukmc-shadow-hover)}
.principle-icon{width:52px;height:52px;border-radius:12px;background:var(--ukmc-light-blue);display:flex;
  align-items:center;justify-content:center;font-size:24px;margin-bottom:16px}

/* Contact page */
.contact-info-item{display:flex;gap:16px;align-items:flex-start;margin-bottom:22px}
.contact-info-icon{width:46px;height:46px;border-radius:12px;background:rgba(255,255,255,.1);
  display:flex;align-items:center;justify-content:center;font-size:19px;flex-shrink:0}
.contact-info-item h4{color:#fff;font-family:'Poppins';font-weight:600;font-size:14.5px;margin-bottom:4px}
.contact-info-item p,.contact-info-item a{color:rgba(255,255,255,.85);font-size:15px;margin-bottom:0}
.contact-info-item a:hover{color:var(--ukmc-yellow)}

.contact-form-card{background:#fff;border-radius:24px;padding:40px;box-shadow:0 30px 60px rgba(0,0,0,.25)}
.contact-form-card label{font-family:'Poppins';font-weight:600;font-size:13.5px;color:var(--ukmc-ink);margin-bottom:6px;display:block}
.contact-form-card .form-control,.contact-form-card .form-select,.contact-form-card textarea{
  border-radius:10px;border:1px solid var(--ukmc-line);padding:12px 14px;margin-bottom:18px;width:100%;
  font-family:'Roboto';font-size:15px;transition:box-shadow .2s ease,border-color .2s ease}
.contact-form-card .form-control:focus,.contact-form-card .form-select:focus,.contact-form-card textarea:focus{
  border-color:var(--ukmc-yellow);box-shadow:0 0 0 4px rgba(248,192,0,.2);outline:none}

.map-frame{border-radius:16px;min-height:220px;background:linear-gradient(150deg,rgba(255,255,255,.08),rgba(255,255,255,.02));
  border:1px solid rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;text-align:center;
  color:rgba(255,255,255,.6);font-family:'Poppins';font-weight:600;font-size:13px;padding:16px}

.office-hours-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(248,192,0,.15);
  border:1px solid rgba(248,192,0,.4);border-radius:999px;padding:8px 16px;font-family:'Poppins';
  font-weight:600;font-size:13.5px;color:var(--ukmc-yellow)}

/* Contact info cards (light) */
.contact-card-light{background:#fff;border:1px solid var(--ukmc-line);border-radius:var(--ukmc-radius);
  padding:30px;height:100%;box-shadow:var(--ukmc-shadow);transition:transform .25s ease,box-shadow .25s ease;
  text-align:center}
.contact-card-light:hover{transform:translateY(-4px);box-shadow:0 0 0 1px rgba(248,192,0,.35),var(--ukmc-shadow-hover)}
.contact-card-light .icon{width:60px;height:60px;border-radius:50%;background:var(--ukmc-light-blue);
  display:flex;align-items:center;justify-content:center;font-size:26px;margin:0 auto 18px}
.contact-card-light a{font-weight:600}

/* Spacious form */
.big-form-wrap{background:#fff;border:1px solid var(--ukmc-line);border-radius:28px;padding:56px;
  box-shadow:0 24px 60px rgba(21,32,113,.1)}
@media (max-width:768px){.big-form-wrap{padding:32px 24px}}
.big-form-wrap label{font-family:'Poppins';font-weight:600;font-size:14px;color:var(--ukmc-ink);margin-bottom:8px;display:block}
.big-form-wrap .form-control,.big-form-wrap .form-select,.big-form-wrap textarea{
  border-radius:12px;border:1.5px solid var(--ukmc-line);padding:14px 16px;margin-bottom:10px;width:100%;
  font-family:'Roboto';font-size:15.5px;transition:box-shadow .2s ease,border-color .2s ease}
.big-form-wrap .form-control:focus,.big-form-wrap .form-select:focus,.big-form-wrap textarea:focus{
  border-color:var(--ukmc-yellow);box-shadow:0 0 0 4px rgba(248,192,0,.2);outline:none}

.map-frame-light{border-radius:20px;min-height:280px;background:linear-gradient(150deg,var(--ukmc-off-white),var(--ukmc-line));
  display:flex;align-items:center;justify-content:center;text-align:center;color:var(--ukmc-gray);
  font-family:'Poppins';font-weight:600;font-size:14px;padding:16px}

/* Home hero */
.home-hero{background:radial-gradient(120% 160% at 15% 0%,#1C2A8C 0%,var(--ukmc-blue) 45%,var(--ukmc-blue-deep) 100%);
  position:relative;overflow:hidden;padding:72px 0}
.home-hero .glow-blob.g1{width:380px;height:380px;background:var(--ukmc-yellow);opacity:.18;top:-140px;right:10%}
.home-hero .glow-blob.g2{width:260px;height:260px;background:var(--ukmc-light-blue);opacity:.18;bottom:-100px;left:4%}
/* .home-hero-img-frame{border-radius:24px;height:100%;min-height:420px;overflow:hidden;position:relative;
  background:linear-gradient(150deg,var(--ukmc-light-blue),var(--ukmc-yellow) 140%);
  box-shadow:0 30px 60px rgba(0,0,0,.35),0 0 60px rgba(248,192,0,.2);
  display:flex;align-items:center;justify-content:center;text-align:center;color:rgba(21,32,113,.55);
  font-family:'Poppins';font-weight:600;font-size:14px;padding:24px} */
.trust-line{display:flex;align-items:center;gap:10px;flex-wrap:wrap;margin-top:36px;padding-top:28px;
  border-top:1px solid rgba(255,255,255,.15)}
.trust-line .label{font-family:'Poppins';font-weight:600;font-size:12.5px;letter-spacing:.05em;
  text-transform:uppercase;color:rgba(255,255,255,.6);margin-right:6px}
.trust-line .partner{font-family:'Poppins';font-weight:600;font-size:14.5px;color:#fff}
.trust-line .sep{color:rgba(255,255,255,.3)}
.hero-stat-row{display:flex;gap:28px;flex-wrap:wrap;margin-top:22px}
.hero-stat{font-family:'Poppins'}
.hero-stat .num{font-weight:800;font-size:24px;color:var(--ukmc-yellow);line-height:1}
.hero-stat .label{font-size:12.5px;color:rgba(255,255,255,.75);margin-top:4px}
</style>
<!-- HERO -->
<header class="home-hero">
  <div class="glow-blob g1"></div>
  <div class="glow-blob g2"></div>
  <div class="container-xxl position-relative" style="z-index:2">
    <div class="row align-items-stretch g-5">
      <div class="col-lg-6 text-white d-flex flex-column justify-content-center reveal in-view">
        <span class="eyebrow" style="color:var(--ukmc-yellow)">UKMC Health</span>
        <h1 class="mb-4" style="font-size:50px;color:#fff">Your route into healthcare starts <span class="hero-highlight">here.</span></h1>
        <p class="mb-4" style="font-size:18px;opacity:.92;max-width:52ch">
          UKMC Health brings university-partnered degrees in Health and Social Care and Psychology to career
          changers, healthcare assistants and returning learners — the people the traditional route often
          overlooks.
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="#register" class="btn btn-ukmc-primary">Register your interest</a>
          <a href="#courses" class="btn btn-ukmc-outline">Explore our courses</a>
        </div>

        <div class="hero-stat-row">
          <div class="hero-stat"><div class="num">2</div><div class="label">Courses available</div></div>
          <div class="hero-stat"><div class="num">2</div><div class="label">University partners</div></div>
          <div class="hero-stat"><div class="num">4</div><div class="label">UK campuses</div></div>
        </div>

        <div class="trust-line">
          <span class="label">In partnership with</span>
          <span class="partner">University of Wolverhampton</span>
          <span class="sep">•</span>
          <span class="partner">Health Sciences University</span>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <div class="home-hero-img-frame">
          <img src="{{ asset('front/assets/img/home/std.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</header>

<!-- WHY WE EXIST -->
<section class="section">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">Why we exist</span>
        <h2 class="mb-4">Healthcare is short of people. We think that's fixable.</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-4 reveal">
        <div class="principle-card">
          <p class="mb-0" style="color:var(--ukmc-gray)">Tens of thousands of nursing, care and health roles sit unfilled, with demand still climbing.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="principle-card">
          <p class="mb-0" style="color:var(--ukmc-gray)">Career changers, healthcare assistants and parents returning to work are ready for the next step — just without the traditional route in.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="principle-card">
          <p class="mb-0" style="color:var(--ukmc-gray)">A university-partnered degree can take someone from "no qualifications" to a career that genuinely means something. That's what we're building.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COURSES -->
<section class="section section-alt" id="courses">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-7">
        <span class="eyebrow">Our courses</span>
        <h2>Two routes into a healthcare career</h2>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-5 reveal">
        <div class="feature-card">
          <div class="feature-icon">🩺</div>
          <h3 class="h5">BSc (Hons) Health and Social Care with Foundation Year</h3>
          <p style="color:var(--ukmc-gray);font-size:15px">
            A practical, career-focused degree for people already working in — or heading into — health and
            social care roles, awarded by the University of Wolverhampton.
          </p>
          <a href="{{ url('/courses/bsc-hons-health-and-social-care-with-foundation-year') }}" class="fw-semibold" style="color:var(--ukmc-red)">View course details →</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 reveal reveal-delay-1">
        <div class="feature-card">
          <div class="feature-icon">🧠</div>
          <h3 class="h5">BSc (Hons) Psychology with Foundation Year</h3>
          <p style="color:var(--ukmc-gray);font-size:15px">
            Build knowledge and skills that open doors across healthcare, education, HR and beyond, awarded
            by Health Sciences University.
          </p>
          <a href="{{ url('/courses/bsc-hons-psychology-with-foundation-year') }}" class="fw-semibold" style="color:var(--ukmc-red)">View course details →</a>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 reveal">
      <a href="{{ url('/courses') }}" class="btn btn-ukmc-primary">See full course details</a>
    </div>
  </div>
</section>

<!-- ESTABLISHED PROVIDER -->
<section class="section">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">Part of an established provider</span>
        <h2>We're new. What's behind us isn't.</h2>
        <p style="color:var(--ukmc-gray)">
          UKMC Health is UKMC's move into healthcare education, delivered in partnership with the
          University of Wolverhampton and Health Sciences University.
        </p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 reveal">
        <div class="principle-card">
          <h3 class="h5">Learning close to real healthcare</h3>
          <p style="color:var(--ukmc-gray)">Healthcare can't be learned from slides alone. Students get taster days and observation in real clinical settings — a feel for the work before they commit their future to it.</p>
        </div>
      </div>
      <div class="col-md-6 reveal reveal-delay-1">
        <div class="principle-card">
          <h3 class="h5">Built around your life</h3>
          <p style="color:var(--ukmc-gray)">Weekday and evening study options, dedicated student support, and a course structure built for people balancing work, family and study — not just school leavers.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATEMENT BAND -->
<div class="band-blue section text-center">
  <div class="container-xxl reveal">
    <h2 class="mb-3">Built for the people healthcare <span class="hero-highlight">needs.</span></h2>
    <p class="mb-4" style="opacity:.9;max-width:56ch;margin-inline:auto">Register now to be first through the door — invitations to open days, and one-to-one application support.</p>
    <a href="#register" class="btn btn-ukmc-primary">Register your interest</a>
  </div>
</div>

<!-- REGISTER YOUR INTEREST FORM -->
<section class="section" style="background:var(--ukmc-blue-deep)" id="register">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-7 text-white">
        <h2 class="text-white mb-2">Register your interest</h2>
        <p class="mb-0" style="opacity:.85">Be first through the door. Register now and you'll hear before anyone else — invitations to open days, and one-to-one application support.</p>
      </div>
    </div>
    <div class="row justify-content-center reveal reveal-delay-1">
      <div class="col-lg-8">
        <div class="big-form-wrap">
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

            <div class="form-check mb-4 mt-1">
              <input class="form-check-input" type="checkbox" id="hfconsent">
              <label class="form-check-label" for="hfconsent" style="font-family:'Roboto';font-weight:400;font-size:14px;color:var(--ukmc-gray)">
                I agree to be contacted by UKMC Health about my registration, in line with the <a href="#">Privacy Policy</a>.
              </label>
            </div>
            <button type="submit" class="btn btn-ukmc-primary w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

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
                  <option>January 2027</option><option>May 2027</option><option>September 2027</option>
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

<!-- PARTNER LINE -->
<section class="section-alt py-5">
  <div class="container-xxl text-center reveal">
    <span class="eyebrow">Partner &amp; investor line</span>
    <h2 class="h4 mb-2">Universities, employers and investors — we'd welcome a conversation.</h2>
    <p><a href="mailto:partnerships@ukmcsh.co.uk" style="font-weight:600">partnerships@ukmcsh.co.uk</a></p>
  </div>
</section>
@endsection