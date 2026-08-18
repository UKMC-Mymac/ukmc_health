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
</style>

<header class="page-hero">
  <div class="glow-blob"></div>
  <div class="container-xxl position-relative" style="z-index:2">
    <nav class="breadcrumb-ukmc mb-4 reveal in-view">
      <a href="#">Home</a><span>/</span><span style="color:#fff">About Us</span>
    </nav>
    <div class="row reveal in-view">
      <div class="col-lg-8">
        <span class="eyebrow" style="color:var(--ukmc-yellow)">About us</span>
        <h1 class="mb-3" style="color:#fff;font-size:44px">The education know-how and the clinical know-how, finally under <span class="hero-highlight">one roof.</span></h1>
        <p style="opacity:.9;font-size:18px;max-width:65ch">
          UKMC Health is UKMC's move into healthcare education — bringing years of experience delivering
          university degrees into a sector that badly needs the people, done properly.
        </p>
      </div>
    </div>
  </div>
</header>

<!-- WHO WE ARE -->
<section class="section">
  <div class="container-xxl">
    <div class="row g-5 align-items-start">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">Who we are</span>
        <h2 class="mb-3">Not a start-up guessing its way into health</h2>
        <p style="color:var(--ukmc-gray)">
          UKMC is an established UK higher education provider, part of UniBridge Group, which backs a
          portfolio of education providers across the country. For years, UKMC has delivered university
          degrees in partnership with UK universities. Now it's bringing that same machinery — the teaching,
          the quality systems, the hard-won experience of getting students through — into health.
        </p>
        <p style="color:var(--ukmc-gray)">
          Healthcare isn't a subject you can teach at arm's length, so UKMC is moving in alongside people who
          actually run healthcare services: real clinics, real patients, real careers waiting at the end of
          the course.
        </p>
      </div>
      <div class="col-lg-5 reveal reveal-delay-1">
        <div class="stat-card text-start">
          <p class="pull-quote mb-0">
            Most new providers can teach you the theory. We can also walk you into the settings where you'll
            use it — because the people building this already run them.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRACK RECORD -->
<section class="section section-alt">
  <div class="container-xxl">
    <div class="deepdive-card reveal">
      <div class="glow-blob"></div>
      <span class="eyebrow" style="color:var(--ukmc-yellow)">A track record, not a standing start</span>
      <h3 class="h4 mb-3" style="color:#fff">Most new health schools start with nothing but ambition</h3>
      <p style="opacity:.92">
        This one starts with a parent that has done it before. UKMC has spent years building what new
        providers only talk about: working relationships with UK universities, programmes delivered to their
        standard, and students supported all the way through to graduation.
      </p>
      <p class="mb-0" style="opacity:.92">
        Behind UKMC sits UniBridge Group, whose backing means this isn't a shoestring start-up. It's a
        properly resourced venture with an established provider's experience behind it and a group's
        stability beneath it.
      </p>
    </div>
  </div>
</section>

<!-- PARTNERSHIPS -->
<section class="section">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">Partnerships, and more to come</span>
        <h2>Two university partners today. Not stopping there.</h2>
      </div>
    </div>
    <div class="row g-4 justify-content-center mb-5">
      <div class="col-md-5 reveal">
        <div class="principle-card text-center">
          <div class="principle-icon mx-auto">🎓</div>
          <h3 class="h6 mb-0">University of Wolverhampton</h3>
        </div>
      </div>
      <div class="col-md-5 reveal reveal-delay-1">
        <div class="principle-card text-center">
          <div class="principle-icon mx-auto">🎓</div>
          <h3 class="h6 mb-0">Health Sciences University</h3>
        </div>
      </div>
    </div>
    <div class="row justify-content-center reveal">
      <div class="col-lg-8 text-center">
        <p style="color:var(--ukmc-gray)">
          UKMC already works with established universities to deliver degrees. UKMC Health extends that
          relationship into healthcare, and we're not stopping at one. More university partnerships are
          already in conversation, and each one widens what we can offer and who we can offer it to.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ROADMAP: THIS IS JUST THE BEGINNING -->
<section class="section section-alt">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">This is just the beginning</span>
        <h2>Built to educate people across the full span of healthcare</h2>
        <p style="color:var(--ukmc-gray)">
          Starting with foundation years, a degree and diplomas is exactly that — a start. We're laying the
          foundations now, deliberately and properly, because what we have in mind is meant to last.
        </p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 reveal">
        <div class="roadmap-card is-live">
          <span class="roadmap-badge live">Live</span>
          <div class="roadmap-num">1</div>
          <h3 class="h6 mb-2">Entry-level diplomas</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">Diplomas that open the door — earned while you work.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal reveal-delay-1">
        <div class="roadmap-card is-live">
          <span class="roadmap-badge live">Live</span>
          <div class="roadmap-num">2</div>
          <h3 class="h6 mb-2">Foundation years</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">Getting people degree-ready, whatever route brought them here.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal reveal-delay-2">
        <div class="roadmap-card is-live">
          <span class="roadmap-badge live">Live</span>
          <div class="roadmap-num">3</div>
          <h3 class="h6 mb-2">Full degrees</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">University-validated degrees, taught and supported by us.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="roadmap-card">
          <span class="roadmap-badge future">Future</span>
          <div class="roadmap-num" style="background:var(--ukmc-off-white);color:var(--ukmc-blue)">4</div>
          <h3 class="h6 mb-2">Advanced qualifications</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">The most advanced healthcare qualifications a serious institution can offer.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOW WE WORK -->
<section class="section">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">How we work</span>
        <h2>Three things guide how we build this place</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-4 reveal">
        <div class="principle-card">
          <div class="principle-icon">🚪</div>
          <h3 class="h6 mb-2">We open doors</h3>
          <p style="color:var(--ukmc-gray);font-size:15px;margin-bottom:0">Especially to mature students, career changers and people without a conventional academic background. If you've got the drive and the commitment, we'll help you find the route in.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="principle-card">
          <div class="principle-icon">✅</div>
          <h3 class="h6 mb-2">We do it properly</h3>
          <p style="color:var(--ukmc-gray);font-size:15px;margin-bottom:0">Honest recruitment and real entry checks, held to the standard our university partners and regulators rightly demand — never the cut corners this sector has become known for.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="principle-card">
          <div class="principle-icon">🤝</div>
          <h3 class="h6 mb-2">We keep our promises small and true</h3>
          <p style="color:var(--ukmc-gray);font-size:15px;margin-bottom:0">We'd rather tell you exactly what you're getting than sell you something bigger and vaguer. The people trusting us with their futures deserve a straight answer, not a pitch.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA -->
<div class="band-blue section text-center">
  <div class="container-xxl reveal">
    <h2 class="mb-3">Want to be part of the start of <span class="hero-highlight">this?</span></h2>
    <p class="mb-4" style="opacity:.9;max-width:56ch;margin-inline:auto">Register your interest and you'll be first to hear as it takes shape.</p>
    <a href="{{ url('register') }}" class="btn btn-ukmc-primary">Register your interest</a>
  </div>
</div>

@endsection