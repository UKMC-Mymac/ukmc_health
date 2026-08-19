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
</style>

<header class="page-hero">
  <div class="glow-blob"></div>
  <div class="container-xxl position-relative" style="z-index:2">
    <nav class="breadcrumb-ukmc mb-4 reveal in-view">
      <a href="#">Home</a><span>/</span><span style="color:#fff">Campus</span>
    </nav>
    <div class="row reveal in-view">
      <div class="col-lg-8">
        <span class="eyebrow" style="color:var(--ukmc-yellow)">Our campuses</span>
        <h1 class="mb-3" style="color:#fff;font-size:44px">Real campuses. Built and <span class="hero-highlight">ready.</span></h1>
        <p style="opacity:.9;font-size:18px;max-width:65ch">
          UKMC Health is taught at four campuses across the UK, in partnership with the University of
          Wolverhampton and Health Sciences University — each with the space and equipment you'd expect from
          somewhere serious about training the health workforce.
        </p>
      </div>
    </div>
  </div>
</header>

<!-- CAMPUS LOCATIONS -->
<section class="section">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">Where you can study</span>
        <h2>Four cities, one standard</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 reveal">
        <div class="campus-card">
          <div class="campus-img">IMAGE NEEDED — College House Campus, Manchester</div>
          <div class="campus-body">
            <h3 class="h5 mb-2">Manchester</h3>
            <div class="campus-address"><span>📍</span><span>College House Campus, Stanley St/Catherine St, Openshaw, Manchester, M11 1LE</span></div>
            <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">Home to some of the UK's largest NHS trusts and a vibrant voluntary sector, with over 180 years of social reform and public health development behind it.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal reveal-delay-1">
        <div class="campus-card">
          <div class="campus-img">IMAGE NEEDED — Derby Campus</div>
          <div class="campus-body">
            <h3 class="h5 mb-2">Derby</h3>
            <div class="campus-address"><span>📍</span><span>9–10 Corn Market, Derby, DE1 1QH</span></div>
            <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">400 years of health and social care pioneering, home to Derbyshire Healthcare NHS Foundation Trust and NHS-standard training facilities.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal reveal-delay-2">
        <div class="campus-card">
          <div class="campus-img">IMAGE NEEDED — Sunderland Campus</div>
          <div class="campus-body">
            <h3 class="h5 mb-2">Sunderland</h3>
            <div class="campus-address"><span>📍</span><span>1 Grayling Court, Doxford Intl. Business Park, Sunderland, SR3 3XE</span></div>
            <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">A city piloting new neighbourhood health programmes, with strong links to the NHS, local authorities and voluntary organisations across the North East.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="campus-card">
          <div class="campus-img">IMAGE NEEDED — Luton Campus</div>
          <div class="campus-body">
            <h3 class="h5 mb-2">Luton</h3>
            <div class="campus-address"><span>📍</span><span>Full address to be confirmed</span></div>
            <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">A purpose-fitted campus built for 2,000 students — the newest addition to the UKMC Health network.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHAT'S INSIDE -->
<section class="section section-alt">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">What's inside</span>
        <h2>Built for training the health workforce</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 reveal">
        <div class="facility-card">
          <div class="facility-icon">🩺</div>
          <h3 class="h6 mb-2">Clinical skills space</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">Rooms set up to mirror real care settings, where you practise the practical side of health work before you ever do it for real.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal reveal-delay-1">
        <div class="facility-card">
          <div class="facility-icon">🖥️</div>
          <h3 class="h6 mb-2">Modern teaching equipment</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">The tools and technology used in the settings you're training for, so what you learn transfers straight to the job.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal reveal-delay-2">
        <div class="facility-card">
          <div class="facility-icon">📶</div>
          <h3 class="h6 mb-2">High-speed internet throughout</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">Fast, reliable connectivity across the whole building for study, research and online learning.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="facility-card">
          <div class="facility-icon">☕</div>
          <h3 class="h6 mb-2">Study and social spaces</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">Room to work in groups, room to work alone, and somewhere to actually breathe between classes.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal reveal-delay-1">
        <div class="facility-card" style="border-style:dashed;border-color:var(--ukmc-yellow);background:#FFFDF5">
          <div class="facility-icon">🔬</div>
          <h3 class="h6 mb-2">Science and laboratory facilities</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">Content needed: confirm whether lab space applies to these two courses before this tile is published.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal reveal-delay-2">
        <div class="facility-card" style="border-style:dashed;border-color:var(--ukmc-yellow);background:#FFFDF5">
          <div class="facility-icon">♿</div>
          <h3 class="h6 mb-2">Accessibility</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">Content needed: genuine accessibility provision at each campus (step-free access, lifts, accessible facilities) so prospective disabled students can see themselves here.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VISIT CAMPUS CTA -->
<div class="band-blue section text-center position-relative overflow-hidden">
  <div class="container-xxl reveal">
    <span class="eyebrow" style="color:var(--ukmc-yellow)">Come and see it</span>
    <h2 class="mb-3">The best way to know if somewhere's right for you is to <span class="hero-highlight">stand in it.</span></h2>
    <p class="mb-4" style="opacity:.9;max-width:56ch;margin-inline:auto">We'll be running open days as we approach our first intake, and the people on our interest list are first to get the invitations.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap mt-1">
      <a href="{{ url('campus') }}" class="btn btn-ukmc-primary px-4">Visit Campus</a>
      <a href="{{ url('register') }}" class="btn btn-ukmc-outline px-4">Register your interest</a>
    </div>
  </div>
</div>

<!-- GALLERY -->
<section class="section">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">Gallery</span>
        <h2>A look inside</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-4 reveal">
        <div class="gallery-frame">
          <img src="{{ asset('front/assets/img/course/campus-page.jpg') }}" alt="campus">
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="gallery-frame">
          <img src="{{ asset('front/assets/img/course/BSc (Hons) Health and Social Care course.jpg') }}" alt="campus">
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="gallery-frame">
          <img src="{{ asset('front/assets/img/course/bsc-hons-psychology-with-foundation-year course.jpg') }}" alt="campus">
        </div>
      </div>
    </div>
  </div>
</section>

@endsection