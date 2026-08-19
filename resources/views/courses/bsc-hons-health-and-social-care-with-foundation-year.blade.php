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
body{font-family:'Roboto',sans-serif;color:var(--ukmc-ink);font-size:16.5px;line-height:1.7;background:#fff;overflow-x:hidden}
h1,h2,h3,h4,h5,.btn{font-family:'Poppins',sans-serif}
h1,h2,h3,h4,h5{color:var(--ukmc-blue);font-weight:600;line-height:1.2}
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
.hero-highlight{background:linear-gradient(90deg,var(--ukmc-yellow),#fff,var(--ukmc-yellow));
  background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:shimmer 4s linear infinite}

/* Buttons */
.btn-ukmc-primary{background:var(--ukmc-red);color:#fff;font-family:'Poppins';font-weight:600;
  padding:14px 28px;border-radius:var(--ukmc-radius-btn);border:none;
  box-shadow:0 8px 24px rgba(216,21,22,.3);transition:transform .2s ease,box-shadow .2s ease}
.btn-ukmc-primary:hover{background:var(--ukmc-red-deep);color:#fff;transform:translateY(-3px);box-shadow:0 14px 34px rgba(216,21,22,.45)}
.btn-ukmc-outline{background:transparent;border:2px solid #fff;color:#fff;font-family:'Poppins';
  font-weight:600;padding:13px 26px;border-radius:var(--ukmc-radius-btn);transition:all .2s ease}
.btn-ukmc-outline:hover{background:#fff;color:var(--ukmc-blue);transform:translateY(-3px)}
.btn-ukmc-outline-blue{border:2px solid var(--ukmc-blue);color:var(--ukmc-blue);font-family:'Poppins';
  font-weight:600;padding:11px 24px;border-radius:var(--ukmc-radius-btn);background:transparent;transition:all .2s ease;width:100%}
.btn-ukmc-outline-blue:hover{background:var(--ukmc-blue);color:#fff}


/* Page hero */
.page-hero{background:radial-gradient(120% 160% at 20% 0%,#1C2A8C 0%,var(--ukmc-blue) 45%,var(--ukmc-blue-deep) 100%);
  position:relative;overflow:hidden;padding:56px 0 0;color:#fff}
.page-hero .glow-blob{width:280px;height:280px;background:var(--ukmc-light-blue);opacity:.18;bottom:-100px;left:4%}
.breadcrumb-ukmc a{color:rgba(255,255,255,.7);font-size:14px}
.breadcrumb-ukmc a:hover{color:var(--ukmc-yellow)}
.breadcrumb-ukmc span{color:rgba(255,255,255,.4);margin:0 8px}
.badge-fy{background:var(--ukmc-yellow);color:var(--ukmc-blue);border-radius:999px;font-family:'Poppins';
  font-weight:600;font-size:12.5px;padding:6px 14px;display:inline-block}
.hero-collage{position:relative;padding-bottom:60px}
.hero-img-main{border-radius:20px;min-height:340px;background:linear-gradient(150deg,var(--ukmc-light-blue),var(--ukmc-yellow) 140%);
  display:flex;align-items:center;justify-content:center;text-align:center;color:rgba(21,32,113,.55);
  font-family:'Poppins';font-weight:600;font-size:14px;padding:24px;box-shadow:0 24px 50px rgba(0,0,0,.3)}
.hero-img-sub{position:absolute;bottom:0;right:24px;width:46%;min-height:150px;border-radius:16px;
  background:linear-gradient(150deg,#fff,var(--ukmc-off-white));border:1px solid var(--ukmc-line);
  display:flex;align-items:center;justify-content:center;text-align:center;color:var(--ukmc-gray);
  font-family:'Poppins';font-weight:600;font-size:12.5px;padding:16px;box-shadow:0 20px 40px rgba(0,0,0,.25)}

/* Sidebar */
.sidebar-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:20px;box-shadow:var(--ukmc-shadow);
  padding:28px;position:sticky;top:96px}
.sidebar-fee{font-family:'Poppins';font-weight:700;color:var(--ukmc-blue);font-size:15px;margin-bottom:18px;
  background:var(--ukmc-off-white);border-radius:10px;padding:12px 14px}
.keyfacts dt{font-family:'Poppins';font-weight:600;font-size:12px;letter-spacing:.04em;text-transform:uppercase;
  color:var(--ukmc-gray);margin-bottom:2px}
.keyfacts dd{font-size:14.5px;color:var(--ukmc-ink);margin-bottom:14px;padding-bottom:14px;border-bottom:1px solid var(--ukmc-line)}
.keyfacts dd:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}

/* Accordion */
.accordion-ukmc .accordion-item{border:1px solid var(--ukmc-line);border-radius:14px!important;margin-bottom:14px;overflow:hidden}
.accordion-ukmc .accordion-button{font-family:'Poppins';font-weight:600;color:var(--ukmc-blue);
  background:var(--ukmc-off-white);padding:20px 24px;font-size:16.5px}
.accordion-ukmc .accordion-button:not(.collapsed){background:var(--ukmc-blue);color:#fff;box-shadow:none}
.accordion-ukmc .accordion-button:not(.collapsed)::after{filter:invert(1)}
.accordion-ukmc .accordion-button:focus{box-shadow:0 0 0 3px rgba(248,192,0,.4)}
.accordion-ukmc .accordion-body{padding:24px;color:var(--ukmc-gray)}
.accordion-ukmc .accordion-body h6{color:var(--ukmc-blue);font-family:'Poppins';font-weight:600;margin-top:18px;margin-bottom:8px}
.accordion-ukmc .accordion-body h6:first-child{margin-top:0}
.accordion-ukmc .accordion-body ul{padding-left:20px}
.accordion-ukmc .accordion-body li{margin-bottom:6px}

.module-chip{display:flex;justify-content:space-between;background:#fff;border:1px solid var(--ukmc-line);
  border-radius:10px;padding:10px 14px;margin-bottom:8px;font-size:14.5px}
.module-chip .credits{color:var(--ukmc-gray);font-size:13px;white-space:nowrap;margin-left:10px}

.compliance-note{background:#FFF7E0;border:1px solid var(--ukmc-yellow);border-radius:12px;padding:14px 18px;
  font-size:14px;color:var(--ukmc-ink);display:flex;gap:10px;align-items:flex-start}

/* City cards */
.city-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:16px;padding:22px;height:100%}
.city-card h6{font-family:'Poppins';font-weight:700;color:var(--ukmc-blue);margin-bottom:10px}

/* Testimonials */
.testimonial-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:16px;padding:26px;height:100%;box-shadow:var(--ukmc-shadow)}
.testimonial-card .avatar{width:44px;height:44px;border-radius:50%;background:var(--ukmc-light-blue);
  display:flex;align-items:center;justify-content:center;font-family:'Poppins';font-weight:700;color:var(--ukmc-blue)}

/* Form */
.form-ukmc label{font-family:'Poppins';font-weight:600;font-size:13.5px;color:var(--ukmc-ink);margin-bottom:6px;display:block}
.form-ukmc .form-control,.form-ukmc .form-select{border-radius:10px;border:1px solid var(--ukmc-line);
  padding:12px 14px;margin-bottom:16px;transition:box-shadow .2s ease,border-color .2s ease}
.form-ukmc .form-control:focus,.form-ukmc .form-select:focus{border-color:var(--ukmc-yellow);box-shadow:0 0 0 4px rgba(248,192,0,.22)}

/* Statement band */
.band-blue{background:radial-gradient(120% 180% at 50% 0%,#1C2A8C 0%,var(--ukmc-blue) 60%,var(--ukmc-blue-deep) 100%);color:#fff}
.band-blue h2{color:#fff}

</style>

<!-- PAGE HERO -->
<header class="page-hero">
  <div class="glow-blob"></div>
  <div class="container-xxl position-relative" style="z-index:2">
    <nav class="breadcrumb-ukmc mb-4 reveal in-view">
      <a href="#">Home</a><span>/</span><a href="#">Courses</a><span>/</span><span style="color:#fff">Health &amp; Social Care</span>
    </nav>
    <div class="row reveal in-view">
      <div class="col-lg-9">
        <span class="badge-fy mb-3">Foundation Year Route</span>
        <h1 class="mb-3" style="color:#fff;font-size:38px">BSc (Hons) Health &amp; Social Care with <span class="hero-highlight">Foundation Year</span></h1>
        <p style="opacity:.9;font-size:17px;max-width:70ch">
          Develop essential knowledge in healthcare principles and professional practice while preparing for a
          rewarding career making a real difference in people's lives — progressing from foundation study
          through to full degree study.
        </p>
      </div>
    </div>
    <div class="hero-collage mt-4 reveal in-view">
      <div class="hero-img-main">
        <img src="{{ asset('front/assets/img/course/health-and-social-care-banner.jpg') }}" alt="BSc (Hons) Health and Social Care with Foundation Year">
      </div>
      <div class="hero-img-sub">
        <img src="{{ asset('front/assets/img/course/BSc (Hons) Health and Social Care course.jpg') }}" alt="BSc (Hons) Health and Social Care with Foundation Year">
      </div>
    </div>
  </div>
</header>

<!-- MAIN CONTENT -->
<section class="section">
  <div class="container-xxl">
    <div class="row g-5">

      <!-- LEFT: CONTENT -->
      <div class="col-lg-8">

        <div class="reveal mb-5">
          <span class="eyebrow">Course overview</span>
          <h2 class="h3 mb-3">A respected degree, delivered with real support</h2>
          <p style="color:var(--ukmc-gray)">
            At UKMC, we deliver the University of Wolverhampton's BSc (Hons) Health and Social Care with
            Foundation Year in a warm, friendly and supportive environment. You'll be working towards a
            respected University of Wolverhampton degree while benefiting from UKMC's smaller class sizes,
            personalised approach and dedicated student support.
          </p>
          <p style="color:var(--ukmc-gray)">
            From the very start of your foundation year, you'll be taught by approachable lecturers who get to
            know you as an individual, not just a name on a register. You'll learn through activities, case
            studies, quizzes, group work and regular check-ins — with one-to-one support on assignments and
            assessments throughout the course. Module tutorials, workshops and "assignment unpacking" sessions
            make it clear what you need to do and how your work will be marked.
          </p>
          <p style="color:var(--ukmc-gray)">
            As a UKMC student on a University of Wolverhampton programme, you'll have access to extensive
            library resources, online learning materials, and specialist study skills and academic support —
            with additional support and reasonable adjustments available if you have a specific learning need.
            Your wellbeing matters just as much as your grades: UKMC offers one-to-one advice and guidance,
            mental health and wellbeing support, financial aid information, and self-care resources throughout
            your studies.
          </p>
        </div>

        <div class="reveal mb-5">
          <span class="eyebrow">Course details</span>
          <h2 class="h3 mb-4">Everything you need to know</h2>

          <div class="accordion accordion-ukmc" id="courseAccordion">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-curriculum">Curriculum</button>
              </h2>
              <div id="acc-curriculum" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <h6>Year 1 (Level 3) — Foundation Year</h6>
                  <div class="module-chip"><span>Empowerment in Social Care</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Interprofessional Learning</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Preparing for Undergraduate Study</span><span class="credits">40 credits</span></div>
                  <div class="module-chip"><span>Social Care Context and Delivery</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Valuing the Self and Others</span><span class="credits">20 credits</span></div>

                  <h6>Year 2 (Level 4)</h6>
                  <div class="module-chip"><span>Academic, Personal &amp; Professional Development II — Skills for Practice</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Health, Society &amp; Culture</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Introduction to Health and Wellbeing</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Introduction to Research Skills</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Introduction to Social Care and the Mixed Economy of Welfare</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Social Care Values, Equality and Diversity</span><span class="credits">20 credits</span></div>

                  <h6>Year 3 (Level 5)</h6>
                  <div class="module-chip"><span>Developing Research Skills</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Mental Health and Wellbeing</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Partnership and Collaborative Working in Health</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Social Care Interventions: Working with Adults</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Sustainable Healthy Communities</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Working with Children and Families (Part 1)</span><span class="credits">20 credits</span></div>

                  <h6>Year 4 (Level 6)</h6>
                  <div class="module-chip"><span>Appraising Health Policy and Practice</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Independent Research and Practice</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Law and Ethics in Health</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Leadership and Management in Health</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Technology and Innovation in Social Care Practice</span><span class="credits">20 credits</span></div>
                  <div class="module-chip"><span>Working with Youth and Families (Part 2)</span><span class="credits">20 credits</span></div>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-entry">Entry requirements</button>
              </h2>
              <div id="acc-entry" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <h6>Mandatory requirements</h6>
                  <ul>
                    <li>All applicants, whichever entry route, must attend the Prepare for Foundation (PFF) or Prepare for Degree (PFD) admissions assessment and successfully complete it, along with submitting full eligibility documentation, to receive a final offer.</li>
                    <li>The assessment covers a variety of activities assessing academic ability, engagement and conduct relevant to the course.</li>
                    <li>Applicants should demonstrate genuine commitment and motivation for higher education study in this subject.</li>
                  </ul>
                  <h6>Academic and advanced entry routes</h6>
                  <ul>
                    <li>Applicants with a Level 3 or equivalent qualification are categorised as "Academic Route" when they submit evidence of prior learning. More information on Level 3 and equivalent qualifications is available at <a href="http://www.ucas.com" target="_blank" rel="noopener">ucas.com</a>.</li>
                    <li>Not all UKMC courses offer advanced entry — the course title indicates whether it is a "top up" or a 4-year "foundation year" route. Admissions will assess based on the documentation provided, or applicants can contact admissions for clarification.</li>
                  </ul>
                  <h6>Non-academic and mature student route</h6>
                  <ul>
                    <li>Mature students with relevant work experience wishing to further their career through higher education are welcomed.</li>
                    <li>These applicants are processed through the PFF (Foundation Route, Level 3) or PFD (Year One, Level 4+) activity. Additional entry requirements may apply for Level 4+ or accredited courses.</li>
                  </ul>
                  <h6>Awarding partner and verification notes</h6>
                  <p>UKMC works to the awarding university's admissions entry requirements, which may be updated from time to time. Admissions may request further documentation to confirm eligibility at any stage, in line with the partner's Admissions Policy, regulatory requirements, and UKMC's own Fraud Prevention and Verification Statement.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-teaching">Teaching</button>
              </h2>
              <div id="acc-teaching" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>Teaching is carried out by qualified UKMC lecturers, supported by University of Wolverhampton faculty module leaders who provide academic oversight.</p>
                  <p>This is a blended learning course delivered through Canvas, UKMC's Virtual Learning Environment (VLE). Online materials and face-to-face sessions are integrated into a single learning experience, with content kept current and relevant to the industry and the employability skills you'll need after graduating. Each module's VLE homepage sets clear expectations and helps you navigate its online components and prepare for face-to-face sessions, following a consistent Business School layout across every module.</p>
                  <p>Learning material is contextualised by UKMC lecturers to reflect the local and regional context, with regular opportunities for formative feedback built into both classroom and online activity. Face-to-face sessions run in workshop mode — task-based activities that draw on the online content and let you explore topics critically, both individually and in small groups — with plenty of scope for peer-to-peer learning, from flipped-learning group work to student-led seminars and problem-based learning.</p>
                  <p>Modules are developed with Universal Design and accessibility standards in mind. UKMC's Student Success Tutors are qualified to degree level and support learning outside of class — academic skills, engagement, and reasonable adjustments where needed. Feedback on summative assessments follows the University of Wolverhampton's feedback policy and is returned via Canvas, in written, oral or audio-visual form as appropriate, with a marking rubric used across multi-tutor modules for consistency.</p>
                  <p>Case studies, examples and resources are drawn from a wide range of cultures and contexts, reflecting UKMC's diverse and international student community.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-assess">Assessments</button>
              </h2>
              <div id="acc-assess" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>UKMC, in partnership with the University of Wolverhampton, uses a variety of assessment modes to test your learning and progress and build capabilities valued beyond university — including written examinations (online, open and closed book, quizzes), coursework (essays, reports, portfolios, project proposals, CVs, poster presentations), and practical assessment (oral and video presentations, laboratory work, practical skills assessment).</p>
                  <p>The assessment types you receive depend on the modules you take, combined to build your ability to apply theory and best practice to real-world situations. In your final year, you're likely to complete an extended piece of work such as a dissertation or a practice-based research project.</p>
                  <p>Feedback timing and method are set out in each module's assessment brief. All feedback is returned electronically and made available in one place — Canvas.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-why">Why choose this course?</button>
              </h2>
              <div id="acc-why" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>A full career-focused pathway into the health and social care sector at UKMC, a University of Wolverhampton partner college. Students who study with us:</p>
                  <ul>
                    <li>Learn by doing — working with partner organisations, taking on real community projects, and learning from people with lived experience of care.</li>
                    <li>Build key professional skills — leadership, communication and collaboration that help drive change in health and care settings.</li>
                    <li>Study in a nurturing, supportive environment — Student Success Tutors, wellbeing support, and a pastoral care system focused on your needs.</li>
                    <li>Progress from Foundation to Honours — a solid base in key subjects, moving through core theory and practice, then leadership and independent research.</li>
                    <li>Graduate career-ready — with experience, professional contacts, and the confidence to work across statutory, voluntary and private sectors.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-career">Future career paths</button>
              </h2>
              <div id="acc-career" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>A qualification from UKMC, delivered in partnership with the University of Wolverhampton, gives you wide-ranging prospects for your future career, including roles such as:</p>
                  <ul>
                    <li>Community Development Worker</li><li>Youth Worker</li><li>Housing Officer</li>
                    <li>Health Service Manager</li><li>Mental Health Support Worker</li><li>Family Support Worker</li>
                    <li>Social Care Worker (adults or children)</li><li>Neighbourhood Development Officer</li>
                    <li>Lifestyle Coordinator</li><li>Health Promotion Specialist</li><li>Social Inclusion Worker</li><li>Care Manager</li>
                  </ul>
                  <p>The course also provides a solid basis for further study — such as an MA in Social Work, a Master of Public Health (MPH), or an MSc in Health and Social Care.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-cities">Courses taught in vibrant locations</button>
              </h2>
              <div id="acc-cities" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>Health and Social Care is taught at Manchester, Sunderland and Derby, in partnership with the University of Wolverhampton — three cities with proud histories and modern opportunities.</p>
                  <div class="row g-3 mt-2">
                    <div class="col-md-4">
                      <div class="city-card">
                        <h6>Manchester</h6>
                        <p class="mb-0" style="font-size:14.5px">Over 180 years of social reform and public health development, home to some of the UK's largest NHS trusts and a vibrant voluntary sector — with strong links to local authorities and charities across Greater Manchester for placements and projects.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="city-card">
                        <h6>Sunderland</h6>
                        <p class="mb-0" style="font-size:14.5px">A city piloting new neighbourhood health programmes and a walk-in "Health Bus" for underserved communities. Placements available with the NHS, local authorities, MIND, Age UK, schools and private providers.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="city-card">
                        <h6>Derby</h6>
                        <p class="mb-0" style="font-size:14.5px">400 years of health and social care pioneering, home to Derbyshire Healthcare NHS Foundation Trust and NHS-standard training facilities — a straightforward route into nursing, midwifery and social work.</p>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0">Wherever you join us, you'll have access to live community briefs, engagement with service users and carers, and involvement in projects that improve health and wellbeing outcomes as part of the curriculum.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- STUDENT STORIES -->
        <div class="reveal">
          <span class="eyebrow">Student stories</span>
          <h2 class="h3 mb-4">What our students say</h2>
          <div class="row g-4">
            <div class="col-md-6">
              <div class="testimonial-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="avatar">P</div>
                  <div><strong style="font-family:'Poppins'">Paula</strong></div>
                </div>
                <p class="mb-0" style="font-size:15px;color:var(--ukmc-gray)">"UKMC has been a fantastic place for me to grow both academically and personally. Being part of the Student Ambassador and Student Representatives programmes has boosted my confidence and significantly enhanced my leadership and communication skills."</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="testimonial-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="avatar">M</div>
                  <div><strong style="font-family:'Poppins'">Mitkova</strong></div>
                </div>
                <p class="mb-0" style="font-size:15px;color:var(--ukmc-gray)">"As a working mother, balancing studies, work and family life is a tremendous challenge. UKMC has given me the flexibility and a comfortable study plan that lets me manage all my responsibilities without compromise."</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT: SIDEBAR -->
      <div class="col-lg-4">
        <div class="sidebar-card reveal">
          <div class="sidebar-fee">FY £9,535 · Y1 £9,535 · Y2 £9,535 · Y3 £9,535</div>
          <dl class="keyfacts">
            <dt>Level</dt><dd>Undergraduate</dd>
            <dt>Awarding body</dt><dd>University of Wolverhampton</dd>
            <dt>Duration</dt><dd>4 years</dd>
            <dt>Mode of study</dt><dd>Full time</dd>
            <dt>Delivery</dt><dd>Weekdays, Evening</dd>
            <dt>Intakes</dt><dd>January, May and September</dd>
            <dt>Campus</dt><dd>Manchester, Derby, Sunderland</dd>
          </dl>
          <a href="https://mymac.ukmc.ac.uk/invite/ukmc" class="btn btn-ukmc-primary w-100 mb-2">Apply Now</a>
          <a href="#enquire" class="btn btn-ukmc-outline-blue">Register your interest</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- STATEMENT BAND -->
<div class="band-blue section text-center">
  <div class="container-xxl reveal">
    <h2 class="mb-3">Ready to take the <span class="hero-highlight">next step?</span></h2>
    <p class="mb-4" style="opacity:.9;max-width:56ch;margin-inline:auto">Register your interest and a member of the team will talk you through entry routes, funding and start dates.</p>
    <a href="#enquire" class="btn btn-ukmc-primary">Register your interest</a>
  </div>
</div>

<!-- ENQUIRY FORM -->
<section class="section section-alt" id="enquire">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-7">
        <span class="eyebrow">Get in touch</span>
        <h2>Reach out to us for any enquiries</h2>
        <p style="color:var(--ukmc-gray)">We'll be happy to help — a member of the admissions team will be in touch shortly.</p>
      </div>
    </div>
    <div class="row justify-content-center reveal">
      <div class="col-lg-7">
        <form class="form-ukmc bg-white p-4 p-lg-5 rounded-4" style="box-shadow:var(--ukmc-shadow)">
          <div class="row">
            <div class="col-md-6"><label for="fname">Full name *</label><input type="text" class="form-control" id="fname"></div>
            <div class="col-md-6"><label for="femail">Email address *</label><input type="email" class="form-control" id="femail"></div>
          </div>
          <div class="row">
            <div class="col-md-6"><label for="fphone">Phone *</label><input type="tel" class="form-control" id="fphone"></div>
            <div class="col-md-6">
              <label for="fintake">Preferred intake *</label>
              <select class="form-select" id="fintake"><option>January 2027</option><option>May 2027</option><option>September 2027</option></select>
            </div>
          </div>
          <label for="fcampus">Preferred campus location *</label>
          <select class="form-select mb-3" id="fcampus">
            <option>College House, Manchester</option><option>Derby Campus</option><option>Sunderland Campus</option>
          </select>
          <button type="submit" class="btn btn-ukmc-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection