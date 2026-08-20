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
  border-radius:12px;border:1.5px solid var(--ukmc-line);padding:14px 16px;margin-bottom:24px;width:100%;
  font-family:'Roboto';font-size:15.5px;transition:box-shadow .2s ease,border-color .2s ease}
.big-form-wrap .form-control:focus,.big-form-wrap .form-select:focus,.big-form-wrap textarea:focus{
  border-color:var(--ukmc-yellow);box-shadow:0 0 0 4px rgba(248,192,0,.2);outline:none}

.map-frame-light{border-radius:20px;min-height:280px;background:linear-gradient(150deg,var(--ukmc-off-white),var(--ukmc-line));
  display:flex;align-items:center;justify-content:center;text-align:center;color:var(--ukmc-gray);
  font-family:'Poppins';font-weight:600;font-size:14px;padding:16px}
</style>

<header class="page-hero">
  <div class="glow-blob"></div>
  <div class="container-xxl position-relative" style="z-index:2">
    <nav class="breadcrumb-ukmc mb-4 reveal in-view">
      <a href="#">Home</a><span>/</span><span style="color:#fff">Contact</span>
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
</header>

<!-- QUICK CONTACT STRIP -->
<section class="section pb-0">
  <div class="container-xxl">
    <div class="row g-4">
      <div class="col-md-4 reveal">
        <div class="contact-card-light">
          <div class="icon">✉️</div>
          <h3 class="h6 mb-1">Email us</h3>
          <a href="mailto:recruitment@ukmc.ac.uk">recruitment@ukmc.ac.uk</a>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="contact-card-light">
          <div class="icon">📞</div>
          <h3 class="h6 mb-1">Call us</h3>
          <a href="tel:+441614780015">+44 (0)161 478 0015</a>
          <p style="color:var(--ukmc-gray);font-size:13px;margin-top:6px;margin-bottom:0">Mon–Fri, 9:00–18:00</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="contact-card-light">
          <div class="icon">📍</div>
          <h3 class="h6 mb-1">Visit us</h3>
          <p style="color:var(--ukmc-gray);font-size:14.5px;margin-bottom:0">College House Campus, Stanley St/Catherine St, Openshaw, Manchester, M11 1LE</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- REGISTER YOUR INTEREST FORM -->
<section class="section" id="form">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-7">
        <span class="eyebrow">Register your interest</span>
        <h2 class="mb-2">Be first through the door</h2>
        <p style="color:var(--ukmc-gray)">
          Programmes open for application once they're validated, and the people on this list hear before
          anyone else — invitations to open days, and one-to-one application support.
        </p>
      </div>
    </div>

    <div class="row justify-content-center reveal reveal-delay-1">
      <div class="col-lg-9">
        <div class="big-form-wrap">
          <form action="{{ route('submit-contact') }}" method="POST" class="subscribe-from">
			@csrf
            <div class="row">
              <div class="col-md-6">
                <label for="cfname">Full name *</label>
                <input type="text" name="name" id="cfname" placeholder="Enter your name" class="form-control">
				@error('name')<div style="color:red; font-size:12px;">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label for="cfemail">Email address *</label>
                <input type="email" name="email" id="cfemail" placeholder="Enter your email"  class="form-control">
				@error('email')<div style="color:red; font-size:12px;">{{ $message }}</div>@enderror
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="cfphone">Phone *</label>
                <input name="phone" type="tel" id="cfphone" placeholder="Enter you phone"  class="form-control">
              </div>
              <div class="col-md-6">
                <label for="cfcourse">Which course are you interested in? *</label>
                <select name="subject_area" id="cfcourse" class="form-select">
                  <option value="">--Select course--</option>
                  <option value="BSc (Hons) Health &amp; Social Care with Foundation Year">BSc (Hons) Health &amp; Social Care with Foundation Year</option>
                  <option value="BSc (Hons) Psychology with Foundation Year">BSc (Hons) Psychology with Foundation Year</option>
                  <option value="Not sure yet">Not sure yet</option>
                </select>
				@error('subject_area')<div style="color:red; font-size:12px;">{{ $message }}</div>@enderror
							
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
                <label for="cfcampus">Preferred campus</label>
                <select name="preferred_campus" id="cfcampus" class="form-select">
                  <option value="">--Select Preferred campus--</option>
                  <option value="Manchester">Manchester</option>
                  <option value="Derby">Derby</option>
                  <option value="Sunderland">Sunderland</option>
                  <option value="Luton">Luton</option>
                </select>
              </div>
            </div>
            <label for="cfmessage">Your message</label>
            <textarea name="message" id="cfmessage" rows="5" placeholder="Tell us a bit about what you'd like to know" class="form-control"></textarea>
            <div class="form-check mb-4 mt-1">
              <input class="form-check-input" type="checkbox" id="cfconsent">
              <label class="form-check-label" for="cfconsent" style="font-family:'Roboto';font-weight:400;font-size:14px;color:var(--ukmc-gray)">
                I agree to be contacted by UKMC Health about my enquiry, in line with the <a href="#">Privacy Policy</a>.
              </label>
            </div>
            <button type="submit" class="btn btn-ukmc-primary w-100">Submit enquiry</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAP + SOCIAL -->
<section class="section section-alt">
  <div class="container-xxl">
    <div class="row g-5 align-items-center">
      <div class="col-lg-7 reveal">
        <div class="map-frame-light">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.78651445139!2d-2.166488624005362!3d53.47227536529459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb3d79636a91b%3A0xbb7227ab1eb34b02!2sUK%20Management%20College%2C%20College%20House%20Campus!5e0!3m2!1sen!2sbd!4v1787119473024!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
      </div>
      <div class="col-lg-5 reveal reveal-delay-1">
        <span class="eyebrow">Find us</span>
        <h2 class="mb-3">College House Campus, Manchester</h2>
        <p style="color:var(--ukmc-ink);font-weight:500;font-size:16px">Stanley St/Catherine St, Openshaw, Manchester, M11 1LE</p>
        <div class="office-hours-badge mb-4">🕘 Mon–Fri, 9:00–18:00</div>
        <div>
          <a class="footer-social" style="background:var(--ukmc-blue);color:#fff" href="#" aria-label="Facebook">f</a>
          <a class="footer-social" style="background:var(--ukmc-blue);color:#fff" href="#" aria-label="Twitter / X">𝕏</a>
          <a class="footer-social" style="background:var(--ukmc-blue);color:#fff" href="#" aria-label="LinkedIn">in</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script>
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => { nav.style.boxShadow = window.scrollY > 8 ? '0 4px 20px rgba(21,32,113,.12)' : 'none'; });
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('in-view'); observer.unobserve(entry.target); } });
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>



<!-- ========================= Form start ========================= -->
	{{-- <section class="subscribe-section pt-100 pb-100 theme-bg" style="background-color: #1E2355;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					
				</div>
			</div>
			<div class="row">
                <div class="col-xl-6">
                    <h3 class="text-white mb-3">Contact</h3>
                    <p class="text-white text-bold mb-3"><span aria-hidden="true">✉️</span> recruitment@ukmc.ac.uk</p>
                    <p class="text-white text-bold mb-3"><span aria-hidden="true">📞</span> +44 (0)161 478 0015</p>

                    <p class="text-white text-bold mb-3"><span aria-hidden="true">📍</span> College House Campus, Stanley St/Catherine St, Openshaw, Manchester, M11 1LE</p>
                </div>
				<div class="col-xl-6">
                    <div class="section-title text-center">
						<h2 class="mb-15 text-white">Register your interest</h2>
						<h3 class="mb-3 text-white">Be first through the door.</h3>
						<p class="mb-35 text-white">Programmes open for application once they're validated, and the people on this list hear before anyone else: invitations to open days, and one-to-one application support.</p>
					</div>
					<div class="subscribe-wrapper">
						<form action="{{ route('contact.submit') }}" method="POST" class="subscribe-from">
							@csrf
							<input type="text" name="name" id="name" placeholder="Enter Your Name" required>
							@error('name')<div style="color:red; font-size:12px;">{{ $message }}</div>@enderror
							
							<input type="email" name="email" id="email" placeholder="Enter Your Email" required>
							@error('email')<div style="color:red; font-size:12px;">{{ $message }}</div>@enderror
							
							<select name="subject_area" class="form-select form-select-lg" required>
								<option value="">--Select Subject Area-- </option>
								<option value="Medical Sciences BSc (Hons), with Foundation Year route">Medical Sciences BSc (Hons), with Foundation Year route</option>
								<option value="Health Foundation Year: Nursing pathway">Health Foundation Year: Nursing pathway</option>
								<option value="Health Foundation Year: Allied Health pathway">Health Foundation Year: Allied Health pathway</option>
								<option value="Health & Social Care Diplomas, including Residential Childcare">Health & Social Care Diplomas, including Residential Childcare</option>
							</select>
							@error('subject_area')<div style="color:red; font-size:12px;">{{ $message }}</div>@enderror
							
							<input type="text" name="earliest_start_year" id="earliest_start_year" placeholder="Enter Earliest Start Year" required>
							@error('earliest_start_year')<div style="color:red; font-size:12px;">{{ $message }}</div>@enderror
							
							<select name="currentsituation" id="currentsituation" class="form-select form-select-lg" required>
								<option value="">--Select Current Situation -- </option>
								<option value="School leaver">School leaver</option>
								<option value="Working in health or care">Working in health or care</option>
								<option value="Career changer">Career changer</option>
								<option value="Returning to study">Returning to study</option>
								<option value="other">other</option>
							</select>
							@error('currentsituation')<div style="color:red; font-size:12px;">{{ $message }}</div>@enderror
							
							<button class="btn theme-btn bg-white text-body" type="submit">Submit</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- ========================= Form end ========================= -->


@endsection