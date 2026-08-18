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

</style>

<header class="page-hero">
  <div class="glow-blob"></div>
  <div class="container-xxl position-relative" style="z-index:2">
    <nav class="breadcrumb-ukmc mb-4 reveal in-view">
      <a href="#">Home</a><span>/</span><span style="color:#fff">Why Us</span>
    </nav>
    <div class="row reveal in-view">
      <div class="col-lg-8">
        <span class="eyebrow" style="color:var(--ukmc-yellow)">Why UKMC Health</span>
        <h1 class="mb-3" style="color:#fff;font-size:44px">We're building a different kind of health <span class="hero-highlight">school.</span></h1>
        <p style="opacity:.9;font-size:18px;max-width:65ch">
          One that opens the door to people the system tends to leave outside it, and does it to a standard
          the sector can be proud of.
        </p>
      </div>
    </div>
  </div>
</header>

<section class="section">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">The problem we're here to fix</span>
        <h2>Two ends of the same gap</h2>
      </div>
    </div>

    <div class="row justify-content-center mb-5 reveal">
      <div class="col-md-5 col-lg-4">
        <div class="stat-card">
          <div class="stat-num">~100,000</div>
          <div class="stat-label">Unfilled NHS posts</div>
          <div class="stat-note">Source and date to be confirmed before publishing</div>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md-6 reveal">
        <div class="split-card">
          <div class="split-icon" style="background:#FDECEC;color:var(--ukmc-red)">⚠️</div>
          <h3 class="h5 mb-2">The shortage</h3>
          <p style="color:var(--ukmc-gray)">
            Walk into almost any hospital, care home or clinic in the country and you'll hear the same thing:
            not enough people. Social care is stretched thinner still, and children's homes can't find the
            qualified staff they're legally required to have.
          </p>
        </div>
      </div>
      <div class="col-md-6 reveal reveal-delay-1">
        <div class="split-card">
          <div class="split-icon" style="background:var(--ukmc-light-blue);color:var(--ukmc-blue)">💡</div>
          <h3 class="h5 mb-2">The overlooked talent</h3>
          <p style="color:var(--ukmc-gray)">
            There are people everywhere who could do this work, and do it brilliantly: the healthcare
            assistant who's held a ward together for years without the qualification to prove it, the parent
            retraining after raising kids, the school leaver who fell at the A-level hurdle but has exactly the
            temperament a patient needs at 3am.
          </p>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 reveal">
      <p class="pull-quote d-inline-block text-start">
        The shortage and the overlooked talent are the same problem, looked at from two ends. We exist to
        close the gap between them.
      </p>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">How it works</span>
        <h2>A university-validated degree, taught by us</h2>
        <p style="color:var(--ukmc-gray)">
          UKMC Health delivers university-level qualifications, but we don't pretend to be a university —
          we don't need to be.
        </p>
      </div>
    </div>

    <div class="row g-4 mb-5">
      <div class="col-md-4 reveal">
        <div class="step-card">
          <div class="step-num">1</div>
          <h3 class="h6 mb-2">The university sets the standard</h3>
          <p style="color:var(--ukmc-gray);font-size:15px">Degrees are designed, quality-assured and awarded by an established UK university partner.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="step-card">
          <div class="step-num">2</div>
          <h3 class="h6 mb-2">We teach and support you day to day</h3>
          <p style="color:var(--ukmc-gray);font-size:15px">UKMC Health is where those degrees are taught, and where you're supported through every stage of study.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="step-card">
          <div class="step-num">3</div>
          <h3 class="h6 mb-2">Their name goes on your certificate</h3>
          <p style="color:var(--ukmc-gray);font-size:15px">We answer to that university for doing it properly — the certificate you earn is genuinely theirs.</p>
        </div>
      </div>
    </div>

    <div class="deepdive-card reveal">
      <div class="glow-blob"></div>
      <h3 class="h4 mb-3" style="color:#fff">What most people don't realise</h3>
      <p style="opacity:.92">
        A university's name is the most valuable thing it owns, and it does not lend that out lightly. Before
        any university lets a provider teach its degrees, it puts that provider through the wringer — finances,
        governance, teaching quality, student support, leadership, track record, all examined in depth over
        many months. Plenty of providers who go looking for a partnership never make it through. The bar is
        high, deliberately, and it's the university that sets it.
      </p>
      <p style="opacity:.92">
        So when a university does put its name on a degree you earn here, that's not a formality. It's them
        saying they've looked hard and they're confident this is delivered to their standard. The certificate
        you walk away with is genuinely theirs: the same degree, held to the same bar, as if you'd studied on
        their own campus. That's the whole point of doing this properly — and why we'd rather take the long,
        scrutinised route than a shortcut.
      </p>
      <p class="mb-0" style="opacity:.92">
        It's a model used right across UK higher education. Done well, it's brilliant: it brings real degrees
        to places and people the big campuses never reach. Done badly, it's the kind of thing you've read
        about in the headlines. We know exactly which of those two we're building, and the next section is how
        you'll know too.
      </p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">What makes us different</span>
        <h2>Two things, really</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 reveal">
        <div class="feature-card">
          <div class="feature-icon">🏥</div>
          <h3 class="h5 mb-2">Healthcare in our bones, not just on our prospectus</h3>
          <p style="color:var(--ukmc-gray)">
            UKMC Health is UKMC's move into healthcare — an established higher education provider stepping
            into health alongside people who actually run clinical services. So when we talk about clinical
            settings, careers and what the work actually demands, we're not guessing. Most providers can offer
            you a classroom. We can show you the job, and often the people already doing it.
          </p>
        </div>
      </div>
      <div class="col-md-6 reveal reveal-delay-1">
        <div class="feature-card">
          <div class="feature-icon">🚪</div>
          <h3 class="h5 mb-2">Built for who we're built for</h3>
          <p style="color:var(--ukmc-gray)">
            Plenty of institutions say "widening access" and mean a leaflet. We've built the routes in:
            foundation years for people without traditional qualifications, diplomas you can earn while you
            work, and a way through that assumes capability matters more than a transcript from five years
            ago. If you've got the drive, our job is to build you the route.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-8">
        <span class="eyebrow">Built the right way</span>
        <h2>This part matters, so we'll say it plainly</h2>
        <p style="color:var(--ukmc-gray)">
          Higher education has had a rough few years with providers who grew too fast, recruited anyone with
          a pulse, and left students stranded with debt and not much else. The regulator is rightly cracking
          down. We've watched all of that, and we've built the opposite on purpose.
        </p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-4 reveal">
        <div class="commit-card">
          <div class="commit-num">01</div>
          <h3 class="h6 mb-2">Honest recruitment</h3>
          <p style="color:var(--ukmc-gray);font-size:15px">We'll tell you straight if a course isn't right for you — putting you somewhere you'll struggle helps nobody.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="commit-card">
          <div class="commit-num">02</div>
          <h3 class="h6 mb-2">Real student support</h3>
          <p style="color:var(--ukmc-gray);font-size:15px">Properly resourced — not a phone number nobody answers.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="commit-card">
          <div class="commit-num">03</div>
          <h3 class="h6 mb-2">Full transparency</h3>
          <p style="color:var(--ukmc-gray);font-size:15px">With our university partner and the people who regulate this sector — because the only version of this worth building is one that lasts.</p>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 reveal">
      <p class="pull-quote d-inline-block text-start">
        You shouldn't have to take that on trust. You should be able to see it in how we recruit you, teach
        you, and stick with you. That's the standard we're holding ourselves to.
      </p>
    </div>
  </div>
</section>

<div class="band-blue section text-center">
  <div class="container-xxl reveal">
    <h2 class="mb-3">Sound like your kind of <span class="hero-highlight">place?</span></h2>
    <p class="mb-4" style="opacity:.9;max-width:56ch;margin-inline:auto">Register your interest and you'll be first to hear when applications open.</p>
    <a href="{{ url('register') }}" class="btn btn-ukmc-primary">Register your interest</a>
  </div>
</div>

@endsection